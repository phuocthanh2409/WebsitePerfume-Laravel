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
    public function AuthLogin()
    {
        $admin_id = Session::get('qtMa');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function all_thuonghieu()
    {
        $this->AuthLogin();
        $all_thuonghieu = DB::table('thuonghieu')->get();
        $manager_thuonghieu = view('admin.all_thuonghieu')->with('all_thuonghieu', $all_thuonghieu);
        return view('admin_layout')->with('admin.all_thuonghieu', $manager_thuonghieu);
    }

    public function add_thuonghieu()
    {
        $this->AuthLogin();
        return view('admin.add_thuonghieu');
    }

    public function save_thuonghieu(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['thTen'] = $request->thuonghieu_ten;
        $data['thMoTa'] = $request->thuonghieu_mota;
        $data['thTrangThai'] = $request->thuonghieu_trangthai;

        DB::table('thuonghieu')->insert($data);
        Session::put('message', 'Thêm thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }

    public function edit_thuonghieu($thMa)
    {
        $this->AuthLogin();
        $edit_thuonghieu = DB::table('thuonghieu')->where('thMa', $thMa)->get();
        $manager_thuonghieu = view('admin.edit_thuonghieu')->with('edit_thuonghieu', $edit_thuonghieu);
        return view('admin_layout')->with('admin.edit_thuonghieu', $manager_thuonghieu);
    }

    public function update_thuonghieu(Request $request, $thMa)
    {
        $this->AuthLogin();
        $data = array();
        $data['thTen'] = $request->thuonghieu_ten;
        $data['thMoTa'] = $request->thuonghieu_mota;
        DB::table('thuonghieu')->where('thMa', $thMa)->update($data);
        Session::put('message', 'Cập nhật thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }

    public function delete_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->delete();
        Session::put('message', 'Xóa thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }

    public function unactive_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->update(['thTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }

    public function active_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->update(['thTrangThai' => 1]);
        Session::put('message', 'Kích hoạt thương hiệu thành công');
        return Redirect::to('all-thuonghieu');
    }
}
