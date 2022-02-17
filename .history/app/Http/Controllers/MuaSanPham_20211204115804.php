<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class MuaSanPham extends Controller
{
    public function all_muasanpham()
    {
        $all_muasanpham = DB::table('muasanpham')->get();
        $manager_muasanpham = view('admin.all_muasanpham')->with('all_muasanpham', $all_muasanpham);
        return view('admin_layout')->with('admin.all_muasanpham', $manager_muasanpham);
    }

    public function add_muasanpham()
    {
        return view('admin.add_muasanpham');
    }

    public function save_muasanpham(Request $request)
    {
        $data = array();
        $data['muaTen'] = $request->muasanpham_ten;
        $data['muaMoTa'] = $request->muasanpham_mota;
        $data['muaTrangThai'] = $request->muasanpham_trangthai;

        DB::table('muasanpham')->insert($data);
        Session::put('message', 'Thêm mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function edit_muasanpham($muaMa)
    {
        $edit_muasanpham = DB::table('muasanpham')->where('muaMa', $muaMa)->get();
        $manager_muasanpham = view('admin.edit_muasanpham')->with('edit_muasanpham', $edit_muasanpham);
        return view('admin_layout')->with('admin.edit_muasanpham', $manager_muasanpham);
    }

    public function update_muasanpham(Request $request, $muaMa)
    {
        $data = array();
        $data['muaTen'] = $request->muasanpham_ten;
        $data['muaMoTa'] = $request->muasanpham_mota;
        DB::table('muasanpham')->where('muaMa', $muaMa)->update($data);
        Session::put('message', 'Cập nhật mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function delete_muasanpham($muaMa)
    {
        DB::table('muasanpham')->where('muaMa', $muaMa)->delete();
        Session::put('message', 'Xóa mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function unactive_muasanpham($muaMa)
    {
        DB::table('muasanpham')->where('muaMa', $muaMa)->update(['muaTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function active_muasanpham($muaMa)
    {
        DB::table('muasanpham')->where('muaMa', $loaiMa)->update(['loaiTrangThai' => 1]);
        Session::put('message', 'Kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }
}
