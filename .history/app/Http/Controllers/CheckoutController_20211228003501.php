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
use Carbon\Carbon;
use App\Models\KhachHang;
use App\Models\MaGiamGia;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Đăng ký tài khoản cửa hàng nước hoa The Perfume" . ' ' . $now;

        if (KhachHang::where('khEmail', '=', $request->khEmail)->exists()) {
            return Redirect::to('/login-checkout')->with('error', 'Email này đã được đăng kí. Vui lòng nhấn vào <a href=
            "' . url('/kich-hoat-tai-khoan') . '">đây để gửi lại mail kích hoạt tài khoản </a>');
        } else {
            $data = array();
            $data['khTen'] = $request->khTen;
            $data['khEmail'] = $request->khEmail;
            $data['khMatKhau'] = md5($request->khMatKhau);
            $data['khSoDienThoai'] = $request->khSoDienThoai;
            $data['khTrangThai'] = 0;

            $token_random = Str::random();
            $data['khToken'] = $token_random;

            $customer_id = DB::table('khachhang')->insertGetId($data);

            $to_email = $data['khEmail'];
            $link_reset_pass = url('/create-account/' . $to_email . '/' . $token_random);

            $data = array("name" => $title_mail, "body" => $link_reset_pass, 'email' => $data['khEmail']);

            Mail::send('pages.checkout.create_account', ['data' => $data], function ($message) use ($title_mail, $data) {
                $message->to($data['email'])->subject($title_mail);
                $message->from($data['email'], $title_mail);
            });
            /* 
            Session::put('khMa', $customer_id);
            Session::put('khTen', $request->khTen); */
            return Redirect::to('/login-checkout')->with('success', 'Vui lòng truy cập email để kích hoạt tài khoản');
        }
    }
    public function create_account($email, $token)
    {
        $customer = KhachHang::where('khEmail', '=', $email)->where('khToken', '=', $token)->get();
        $count = $customer->count();
        if ($count > 0) {
            foreach ($customer as $key => $cus) {
                $customer_id = $cus->khMa;
            }
            $reset = KhachHang::find($customer_id);
            $reset->khTrangThai = 1;
            $reset->save();
            return redirect('login-checkout')->with('success', 'Chúc mừng tài khoản của bạn đã được kích hoạt');
        } else {
            return redirect('login-checkout')->with('error', 'Vui lòng chọn gửi lại mail kích hoạt vì link đã quá hạn');
        }
    }
    public function mail_kich_hoat()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.new_pass')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
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
        $result = DB::table('khachhang')->where('khEmail', $email)->where('khMatKhau', $password)->where('khTrangThai', 1)->first();
        $active = DB::table('khachhang')->where('khEmail', $email)->where('khMatKhau', $password)->where('khTrangThai', 0)->first();
        if ($result) {
            Session::put('khMa', $result->khMa);
            Session::put('khTen', $result->khTen);
            Session::put('khEmail', $result->khEmail);
            Session::put('khSoDienThoai', $result->khSoDienThoai);
            return Redirect::to('/show-cart');
        } else if ($active) {
            return Redirect::to('/login-checkout')->with('error', 'Tài khoản chưa được kích hoạt. Vui lòng nhấn vào <a href=
            "' . url('/kich-hoat-tai-khoan') . '">đây để gửi lại mail kích hoạt tài khoản </a>');
        } else {
            return Redirect::to('/login-checkout')->with('error', 'Tài khoản hoặc mật khẩu bị sai. Vui lòng thử lại');
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

        if ($data['order_coupon'] != 'Không') {
            $coupon = MaGiamGia::where('mggCode', $data['order_coupon'])->first();
            $coupon_mail = $coupon->mggCode;
        } else {
            $coupon_mail = 'Không sử dụng';
        }

        //get vận chuyển
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
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $order_date = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $order->created_at = $today;
        $order->dhNgayDat = $order_date;
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

        //Send mail
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');

        $title_mail = "Đơn hàng xác nhận ngày" . ' ' . $now;

        $customer = KhachHang::find(Session::get('khMa'));

        $data['email'][] = $customer->khEmail;

        if (Session::get('cart') == true) {
            foreach (Session::get('cart') as $key => $cart_mail) {
                $cart_array[] = array(
                    'product_name' => $cart_mail['product_name'],
                    'product_price' => $cart_mail['product_price'],
                    'product_qty' => $cart_mail['product_qty']
                );
            }
        }
        if (Session::get('phivanchuyen') == true) {
            $fee = Session::get('phivanchuyen') . 'VNĐ';
        } else {
            $fee = '50000 VNĐ';
        }
        $shipping_array = array(
            'fee' => $fee,
            'customer_name' => $customer->khTen,
            'shipping_name' => $data['shippingTen'],
            'shipping_email' => $data['shippingEmail'],
            'shipping_phone' => $data['shippingSoDienThoai'],
            'shipping_address' => $data['shippingDiaChi'],
            'shipping_notes' => $data['shippingGhiChu'],
            'shipping_method' => $data['shippingPhuongThuc']
        );

        $ordercode_mail = array(
            'coupon_code' => $coupon_mail,
            'order_code' => $checkout_code
        );

        Mail::send('pages.mail.mail_order', ['cart_array' => $cart_array, 'shipping_array' => $shipping_array, 'code' => $ordercode_mail], function ($message) use ($title_mail, $data) {
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'], $title_mail);
        });

        Session::forget('coupon');
        Session::forget('phivanchuyen');
        Session::forget('cart');
    }
}
