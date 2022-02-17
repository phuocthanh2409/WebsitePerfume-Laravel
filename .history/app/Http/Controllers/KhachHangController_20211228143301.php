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
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $makhachhang = Session::get('khMa');
        if ($makhachhang) {
            $data = $request->all();
            $thongtin = KhachHang::find($makhachhang);
            $thongtin->khTen = $data['tenkhachhang'];
            $thongtin->khSoDienThoai = $data['sodienthoaikhachhang'];
            $thongtin->save();
            return view('pages.khachhang.tai_khoan')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('success', 'Cập nhật loại sản phẩm thành công');
        }
    }
}
