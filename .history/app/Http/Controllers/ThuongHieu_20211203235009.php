<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ThuongHieu extends Controller
{
    public function all_thuonghieu()
    {
        $all_thuonghieu = DB::table('thuonghieu')->get();
        $manager_thuonghieu = view('admin.all_thuonghieu')->with('all_thuonghieu', $all_thuonghieu);
        return view('admin_layout')->with('admin.all_thuonghieu', $manager_thuonghieu);
    }

    public function add_thuonghieu()
    {
        return view('admin.add_thuonghieu');
    }

    public function save_thuonghieu(Request $request)
    {
        $data = array();
        $data['thTen'] = $request->thuonghieu_ten;
        $data['thMoTa'] = $request->thuonghieu_mota;

        DB::table('thuonghieu')->insert($data);
        Session::put('message', 'Thêm thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }

    public function edit_thuonghieu($thMa)
    {
        $edit_thuonghieu = DB::table('thuonghieu')->where('thMa', $thMa)->get();
        $manager_thuonghieu = view('admin.edit_thuonghieu')->with('edit_thuonghieu', $edit_thuonghieu);
        return view('admin_layout')->with('admin.edit_thuonghieu', $manager_loaisanpham);
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
}
