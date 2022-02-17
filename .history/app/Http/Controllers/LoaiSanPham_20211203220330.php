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
        $manager_loaisanpham = view('')
        return view('admin.all_loaisanpham');
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

        DB::table('loaisanpham')->insert($data);
        Session::put('message', 'Thêm loại sản phẩm thành công');
        return Redirect::to('add-loaisanpham');
    }
}
