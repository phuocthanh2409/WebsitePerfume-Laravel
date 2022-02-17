<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class NhaCungCap extends Controller
{
    public function all_nhacungcap()
    {
        $all_nhacungcap = DB::table('nhacungcap')->get();
        $manager_nhacungcap = view('admin.all_nhacungcap')->with('all_nhacungcap', $all_nhacungcap);
        return view('admin_layout')->with('admin.all_nhacungcap', $manager_nhacungcap);
    }

    public function add_nhacungcap()
    {
        return view('admin.add_nhacungcap');
    }

    public function save_nhacungcap(Request $request)
    {
        $data = array();
        $data['nccTen'] = $request->nhacungcap_ten;
        $data['nccSoDienThoai'] = $request->nhacungcap_sodienthoai;
        $data['nccDiaChi'] = $request->nhacungcap_diachi;

        DB::table('nhacungcap')->insert($data);
        Session::put('message', 'Thêm nhà cung cấp thành công');
        return Redirect::to('all-nhacungcap');
    }

    public function edit_nhacungcap($nccMa)
    {
        $edit_nhacungcap = DB::table('nhacungcap')->where('loaiMa', $loaiMa)->get();
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
}
