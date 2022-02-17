<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class CheckoutController extends Controller
{
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
            return Redirect::to('/show-checkout');
        } else {
            return Redirect::to('/login-checkout');
        }
    }

    public function order_place(Request $request)
    {
        //insert payment method
        $data = array();
        $data['payment_HinhThuc'] = $request->payment_option;
        $data['payment_TinhTrang'] = "Đang chờ xử lý";
        $payment_id = DB::table('payment')->insertGetId($data);

        //insert order
        $order_data = array();
        $order_data['khMa'] = Session::get('khMa');
        $order_data['shippingMa'] = Session::get('shippingMa');
        $order_data['paymentMa'] = $payment_id;
        $order_data['dhTongTien'] = Session::get('dhTongTien');
    }
}
