<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DungTich extends Controller
{
    public function all_dungtich()
    {
        $all_dungtich = DB::table('dungtich')->get();
        $manager_dungtich = view('admin.all_dungtich')->with('all_dungtich', $all_dungtich);
        return view('admin_layout')->with('admin.all_dungtich', $manager_dungtich);
    }

    public function add_dungtich()
    {
        return view('admin.add_dungtich');
    }

    public function save_dungtich(Request $request)
    {
        $data = array();
        $data['dtTen'] = $request->dungtich_ten;
        $data['dtMoTa'] = $request->dungtich_mota;

        DB::table('dungtich')->insert($data);
        Session::put('message', 'Thêm dung tích sản phẩm thành công');
        return Redirect::to('all-dungtich');
    }

    public function edit_dungtich($dtMa)
    {
        $edit_dungtich = DB::table('dungtich')->where('dtMa', $dtMa)->get();
        $manager_dungtich = view('admin.edit_dungtich')->with('edit_dungtich', $edit_dungtich);
        return view('admin_layout')->with('admin.edit_dungtich', $manager_dungtich);
    }

    public function update_dungtich(Request $request, $dtMa)
    {
        $data = array();
        $data['dtTen'] = $request->dungtich_ten;
        $data['dtMoTa'] = $request->dungtich_mota;
        DB::table('dungtich')->where('dtMa', $dtMa)->update($data);
        Session::put('message', 'Cập nhật dung tích sản phẩm thành công');
        return Redirect::to('all-dungtich');
    }

    public function delete_dungtich($dtMa)
    {
        DB::table('dungtich')->where('dtMa', $dtMa)->delete();
        Session::put('message', 'Xóa dung tích sản phẩm thành công');
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
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 1]);
        Session::put('message', 'Kích hoạt loại sản phẩm thành công');
        return Redirect::to('all-loaisanpham');
    }
}
