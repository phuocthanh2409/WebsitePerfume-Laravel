<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class KhuyenMai extends Controller
{
    public function all_khuyenmai()
    {
        $all_khuyenmai = DB::table('khuyenmai')->get();
        $manager_khuyenmai = view('admin.all_khuyenmai')->with('all_khuyenmai', $all_khuyenmai);
        return view('admin_layout')->with('admin.all_khuyenmai', $manager_khuyenmai);
    }

    public function add_khuyenmai()
    {
        return view('admin.add_khuyenmai');
    }

    public function save_khuyenmai(Request $request)
    {
        $data = array();
        $data['kmTen'] = $request->khuyenmai_ten;
        $data['kmMoTa'] = $request->khuyenmai_mota;
        $data['kmGiaTri'] = $request->khuyenmai_giatri;
        $data['kmNgayBatDau'] = $request->khuyenmai_ngaybatdau;
        $data['kmNgayKetThuc'] = $request->khuyenmai_ngayketthuc;
        $data['kmTrangThai'] = $request->khuyenmai_trangthai;

        DB::table('khuyenmai')->insert($data);
        Session::put('message', 'Thêm khuyến mãi thành công');
        return Redirect::to('all-khuyenmai');
    }

    public function edit_khuyenmai($kmMa)
    {
        $edit_khuyenmai = DB::table('khuyenmai')->where('kmMa', $kmMa)->get();
        $manager_khuyenmai = view('admin.edit_khuyenmai')->with('edit_khuyenmai', $edit_khuyenmai);
        return view('admin_layout')->with('admin.edit_khuyenmai', $manager_khuyenmai);
    }

    public function update_khuyenmai(Request $request, $kmMa)
    {
        $data = array();
        $data['kmTen'] = $request->khuyenmai_ten;
        $data['kmMoTa'] = $request->khuyenmai_mota;
        $data['kmGiaTri'] = $request->khuyenmai_giatri;
        $data['kmNgayBatDau'] = $request->khuyenmai_ngaybatdau;
        $data['kmNgayKetThuc'] = $request->khuyenmai_ngayketthuc;
        DB::table('khuyenmai')->where('kmMa', $kmMa)->update($data);
        Session::put('message', 'Cập nhật khuyến mãi thành công');
        return Redirect::to('all-khuyenmai');
    }

    public function delete_khuyenmai($kmMa)
    {
        DB::table('khuyenmai')->where('kmMa', $kmMa)->delete();
        Session::put('message', 'Xóa khuyến mãi thành công');
        return Redirect::to('all-khuyenmai');
    }

    public function unactive_khuyenmai($kmMa)
    {
        DB::table('khuyenmai')->where('kmMa', $kmMa)->update(['kmTrangThai' => 0]);
        Session::put('message', 'Không kích hoạt khuyến mãi thành công');
        return Redirect::to('all-khuyenmai');
    }

    public function active_khuyenmai($kmMa)
    {
        DB::table('khuyenmai')->where('kmMa', $loaiMa)->update(['loaiTrangThai' => 1]);
        Session::put('message', 'Kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }
}
