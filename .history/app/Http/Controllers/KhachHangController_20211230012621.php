<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;
use App\Models\KhachHang;
use Illuminate\Support\Str;

session_start();

class KhachHangController extends Controller
{
    public function tai_khoan()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.khachhang.tai_khoan')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function save_thongtin(Request $request)
    {
        $request->validate(
            [
                'shippingTen' => 'required|max:191',
                'shippingSoDienThoai' => 'required|size:10'
            ],
            [
                'shippingTen.required' =>  'Vui lòng nhập tên người nhận hàng',
                'shippingSoDienThoai.required' => 'Vui lòng nhập số điện thoại người nhận hàng',
                'shippingTen.max' => 'Tên người nhận hàng quá dài. Vui lòng kiểm tra lại',
                'shippingSoDienThoai.size' => 'Số điện thoại bao gồm 10 số. Vui lòng kiểm tra lại'
            ]
        );
        $makhachhang = Session::get('khMa');
        if ($makhachhang) {
            $data = $request->all();
            $thongtin = KhachHang::find($makhachhang);
            $thongtin->khTen = $data['tenkhachhang'];
            $thongtin->khSoDienThoai = $data['sodienthoaikhachhang'];
            $thongtin->save();
            Session::put('khTen', $thongtin->khTen);
            Session::put('khSoDienThoai', $thongtin->khSoDienThoai);
            return Redirect::to('tai-khoan')->with('success', 'Cập nhật thông tin tài khoản thành công');
        } else {
            return Redirect::to('tai-khoan')->with('error', 'Vui lòng đăng nhập để thực hiện chức năng');
        }
    }
    public function doi_mat_khau()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.khachhang.doi_mat_khau')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function save_matkhau(Request $request)
    {
        $makhachhang = Session::get('khMa');
        if ($makhachhang) {
            $data = $request->all();
            $matkhaucu = md5($data['matkhaucu']);
            $thongtin = KhachHang::where('khMa', '=', $makhachhang)->where('khMatKhau', '=', $matkhaucu)->first();
            if ($thongtin) {
                $thongtin->khMatKhau = md5($data['matkhaumoi']);
                $thongtin->save();
                return Redirect::to('doi-mat-khau')->with('success', 'Cập nhật thông tin tài khoản thành công');
            } else {
                return Redirect::to('doi-mat-khau')->with('error', 'Mật khẩu hiện tại không đúng. Vui lòng nhập lại');
            }
        } else {
            return Redirect::to('tai-khoan')->with('error', 'Vui lòng đăng nhập để thực hiện chức năng');
        }
    }
}