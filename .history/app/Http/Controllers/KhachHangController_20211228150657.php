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
            $thongtin = KhachHang::find($makhachhang)->where('khMatKhau', $matkhaucu);
            if ($thongtin) {
                $thongtin->khMatKhau = md5($data['matkhaumoi']);
                $thongtin->save();
            } else {
            }
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
}
