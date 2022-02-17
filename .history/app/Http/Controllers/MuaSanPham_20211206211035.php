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
    public function AuthLogin()
    {
        $admin_id = Session::get('qtMa');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function all_muasanpham()
    {
        $this->AuthLogin();
        $all_muasanpham = DB::table('muasanpham')->get();
        $manager_muasanpham = view('admin.all_muasanpham')->with('all_muasanpham', $all_muasanpham);
        return view('admin_layout')->with('admin.all_muasanpham', $manager_muasanpham);
    }

    public function add_muasanpham()
    {
        $this->AuthLogin();
        return view('admin.add_muasanpham');
    }

    public function save_muasanpham(Request $request)
    {
        $this->AuthLogin();
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
        $this->AuthLogin();
        $edit_muasanpham = DB::table('muasanpham')->where('muaMa', $muaMa)->get();
        $manager_muasanpham = view('admin.edit_muasanpham')->with('edit_muasanpham', $edit_muasanpham);
        return view('admin_layout')->with('admin.edit_muasanpham', $manager_muasanpham);
    }

    public function update_muasanpham(Request $request, $muaMa)
    {
        $this->AuthLogin();
        $data = array();
        $data['muaTen'] = $request->muasanpham_ten;
        $data['muaMoTa'] = $request->muasanpham_mota;
        DB::table('muasanpham')->where('muaMa', $muaMa)->update($data);
        Session::put('message', 'Cập nhật mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function delete_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->delete();
        Session::put('message', 'Xóa mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function unactive_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->update(['muaTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    public function active_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->update(['muaTrangThai' => 1]);
        Session::put('message', 'Kích hoạt mùa sản phẩm thành công');
        return Redirect::to('all-muasanpham');
    }

    //Ket thuc admin
    public function show_mua_home($muaMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $mua_by_id = DB::table('sanpham')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->where('sanpham.muaMa', $muaMa)
            ->get();
        return view('pages.muasanpham.show_muasanpham')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('mua_by_id', $loaisanpham_by_id);
    }
}
