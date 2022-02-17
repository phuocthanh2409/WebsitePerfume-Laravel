<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class LoaiSanPham extends Controller
{
    public function all_loaisanpham()
    {
        $all_loaisanpham = DB::table('loaisanpham')->get();
        $manager_loaisanpham = view('admin.all_loaisanpham')->with('all_loaisanpham', $all_loaisanpham);
        return view('admin_layout')->with('admin.all_loaisanpham', $manager_loaisanpham);
    }

    public function add_loaisanpham()
    {
        return view('admin.add_loaisanpham');
    }

    public function save_loaisanpham(Request $request)
    {
        $data = array();
        $data['loaiTen'] = $request->loaisanpham_ten;
        $data['loaiMoTa'] = $request->loaisanpham_mota;
        $data['loaiTrangThai'] = $request->loaisanpham_trangthai;

        DB::table('loaisanpham')->insert($data);
        Session::put('message', 'Thêm loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function edit_loaisanpham($loaiMa)
    {
        $edit_loaisanpham = DB::table('loaisanpham')->where('loaiMa', $loaiMa)->get();
        $manager_loaisanpham = view('admin.edit_loaisanpham')->with('edit_loaisanpham', $edit_loaisanpham);
        return view('admin_layout')->with('admin.edit_loaisanpham', $manager_loaisanpham);
    }

    public function update_loaisanpham(Request $request, $loaiMa)
    {
        $data = array();
        $data['loaiTen'] = $request->loaisanpham_ten;
        $data['loaiMoTa'] = $request->loaisanpham_mota;
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update($data);
        Session::put('message', 'Cập nhật loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function delete_loaisanpham($loaiMa)
    {
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->delete();
        Session::put('message', 'Xóa loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function unactive_loaisanpham($loaiMa)
    {
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function active_loaisanpham($loaiMa)
    {
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }
}
