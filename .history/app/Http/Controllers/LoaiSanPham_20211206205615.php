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
    public function AuthLogin()
    {
        $admin_id = Session::get('qtMa');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function all_loaisanpham()
    {
        $this->AuthLogin();
        $all_loaisanpham = DB::table('loaisanpham')->get();
        $manager_loaisanpham = view('admin.all_loaisanpham')->with('all_loaisanpham', $all_loaisanpham);
        return view('admin_layout')->with('admin.all_loaisanpham', $manager_loaisanpham);
    }

    public function add_loaisanpham()
    {
        $this->AuthLogin();
        return view('admin.add_loaisanpham');
    }

    public function save_loaisanpham(Request $request)
    {
        $this->AuthLogin();
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
        $this->AuthLogin();
        $edit_loaisanpham = DB::table('loaisanpham')->where('loaiMa', $loaiMa)->get();
        $manager_loaisanpham = view('admin.edit_loaisanpham')->with('edit_loaisanpham', $edit_loaisanpham);
        return view('admin_layout')->with('admin.edit_loaisanpham', $manager_loaisanpham);
    }

    public function update_loaisanpham(Request $request, $loaiMa)
    {
        $this->AuthLogin();
        $data = array();
        $data['loaiTen'] = $request->loaisanpham_ten;
        $data['loaiMoTa'] = $request->loaisanpham_mota;
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update($data);
        Session::put('message', 'Cập nhật loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function delete_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->delete();
        Session::put('message', 'Xóa loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function unactive_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    public function active_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 1]);
        Session::put('message', 'Kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }

    //Ket thuc admin
    public function show_loaisanpham_home($loaiMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        return view('pages.loaisanpham.show_loaisanpham')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('sanpham', $all_sanpham);
    }
}
