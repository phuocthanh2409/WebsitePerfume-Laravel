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
        $shipping_id = $shipping->shippingMa;

        $checkout_code = substr(md5(microtime()), rand(0, 26), 5);

        $order = new DonHang();
        $order->khMa = Session::get('khMa');
        $order->shippingMa = $shipping_id;
        $order->dhTrangThai = 1;
        $order->dhCode = $checkout_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->created_at = now();
        $order->save();

        if (Session::get('cart') == true) {
            foreach (Session::get('cart') as $key => $cart) {
                $order_details = new ChiTietDonHang();
                $order_details->dhCode = $checkout_code;
                $order_details->spMa = $cart['product_id'];
                $order_details->spTen = $cart['product_name'];
                $order_details->spGia = $cart['product_price'];
                $order_details->spSoLuongMua = $cart['product_qty'];
                $order_details->spKhuyenMai = $data['order_coupon'];
                $order_details->spPhiVanChuyen = $data['order_phivanchuyen'];
                $order_details->save();
            }
        }
        Session::forget('coupon');
        Session::forget('phivanchuyen');
        Session::forget('cart');
    }
}
