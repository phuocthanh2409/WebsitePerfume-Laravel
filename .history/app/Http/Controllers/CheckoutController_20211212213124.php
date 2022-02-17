<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use App\Models\Shipping;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;

session_start();

class CheckoutController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('qtMa');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function login_checkout()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.login_checkout')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function add_customer(Request $request)
    {
        $data = array();
        $data['khTen'] = $request->khTen;
        $data['khEmail'] = $request->khEmail;
        $data['khMatKhau'] = md5($request->khMatKhau);
        $data['khSoDienThoai'] = $request->khSoDienThoai;

        $customer_id = DB::table('khachhang')->insertGetId($data);

        Session::put('khMa', $customer_id);
        Session::put('khTen', $request->khTen);
        return Redirect::to('/show-checkout');
    }
    public function show_checkout()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.show_checkout')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $data['shippingTen'] = $request->shippingTen;
        $data['shippingSoDienThoai'] = $request->shippingSoDienThoai;
        $data['shippingEmail'] = $request->shippingEmail;
        $data['shippingDiaChi'] = $request->shippingDiaChi;
        $data['shippingGhiChu'] = $request->shippingGhiChu;

        $shipping_id = DB::table('shipping')->insertGetId($data);

        Session::put('shippingMa', $shipping_id);
        return Redirect::to('/payment');
    }
    public function payment()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.payment')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function logout_checkout()
    {
        Session::forget('khMa');
        Session::forget('khTen');
        Session::forget('khEmail');
        Session::forget('khSoDienThoai');
        Session::forget('shippingMa');
        return Redirect::to('/login-checkout');
    }
    public function login_customer(Request $request)
    {
        $email = $request->khEmail;
        $password = md5($request->khMatKhau);
        $result = DB::table('khachhang')->where('khEmail', $email)->where('khMatKhau', $password)->first();

        if ($result) {
            Session::put('khMa', $result->khMa);
            Session::put('khTen', $result->khTen);
            Session::put('khEmail', $result->khEmail);
            Session::put('khSoDienThoai', $result->khSoDienThoai);
            return Redirect::to('/show-cart');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu bị sai. Vui lòng thử lại');
            return Redirect::to('/login-checkout');
        }
    }

    public function order_place(Request $request)
    {
        /* $data = Session::get('totalprice');
        print_r($data); */
        //insert payment method
        $data = array();
        $data['paymentHinhThuc'] = $request->payment_option;
        $data['paymentTinhTrang'] = "Đang chờ xử lý";
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['khMa'] = Session::get('khMa');
        $order_data['shippingMa'] = Session::get('shippingMa');
        $order_data['paymentMa'] = $payment_id;
        $order_data['dhTongTien'] = Session::get('totalprice');
        $order_data['dhTrangThai'] = "Đang chờ xử lý";
        $order_id = DB::table('donhang')->insertGetId($order_data);

        //insert order details
        foreach (Session::get('cart') as $key => $v_content) {
            $order_d_data = array();
            $order_d_data['dhMa'] = $order_id;
            $order_d_data['spMa'] = $v_content['product_id'];
            $order_d_data['spTen'] = $v_content['product_name'];
            $order_d_data['spGia'] = $v_content['product_price'] * $v_content['product_qty'];
            $order_d_data['spSoLuongMua'] = $v_content['product_qty'];
            DB::table('chitietdonhang')->insert($order_d_data);
        }
        if ($data['paymentHinhThuc'] == 1) {
            Session::forget('cart');
            Session::forget('totalprice');
            Session::forget('coupon');

            $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
            $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
            $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

            return view('pages.checkout.handcash')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
        } else {
            echo 'Thanh toán bằng thẻ ATM';
        }
    }

    public function manage_donhang()
    {
        $this->AuthLogin();
        $all_donhang = DB::table('donhang')
            ->join('khachhang', 'khachhang.khMa', '=', 'donhang.khMa')
            ->select('donhang.*', 'khachhang.khTen')
            ->orderby('donhang.dhMa', 'desc')->get();
        $manager_order = view('admin.manage_donhang')->with('all_donhang', $all_donhang);
        return view('admin_layout')->with('admin.manage_donhang', $manager_order);
    }

    public function view_donhang($dhMa)
    {
        $this->AuthLogin();
        $order_by_id = DB::table('donhang')
            ->join('khachhang', 'khachhang.khMa', '=', 'donhang.khMa')
            ->join('shipping', 'shipping.shippingMa', '=', 'donhang.shippingMa')
            ->join('chitietdonhang', 'chitietdonhang.dhMa', '=', 'donhang.dhMa')
            ->select('donhang.*', 'khachhang.*', 'shipping.*', 'chitietdonhang.*')
            ->where('donhang.dhMa', $dhMa)
            ->get();

        /* echo '<pre>';
        print_r($order_by_id);
        echo '</pre>'; */
        $manager_order = view('admin.view_donhang')->with('order_by_id', $order_by_id);
        return view('admin_layout')->with('admin.view_donhang', $manager_order);
    }
    public function confirm_order(Request $request)
    {
        $data = $request->all();
        $shipping = new Shipping();
        $shipping->shippingTen = $data['shippingTen'];
        $shipping->shippingEmail = $data['shippingEmail'];
        $shipping->shippingDiaChi = $data['shippingDiaChi'];
        $shipping->shippingSoDienThoai = $data['shippingSoDienThoai'];
        $shipping->shippingGhiChu = $data['shippingGhiChu'];
        $shipping->shippingPhuongThuc = $data['shippingPhuongThuc'];
        $shipping->save();
        $shipping_id = $shipping->$shippingMa;

        $checkout_code = substr(md5(microtime()), rand(0, 26), 5);

        $order = new DonHang();
        $order->khMa = Session::get('khMa');
        $order->shippingMa = $shipping_id;
        $order->dhTrangThai = 1;
        $order->dhCode = $checkout_code;
    }
}
