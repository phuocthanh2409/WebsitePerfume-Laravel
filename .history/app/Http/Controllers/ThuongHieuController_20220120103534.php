<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\ThuongHieu;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ThuongHieuController extends Controller
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
        /* $all_thuonghieu = DB::table('thuonghieu')->get(); */
        /* $all_thuonghieu = ThuongHieu::orderBy('thMa', 'DESC')->get(); */
        $all_thuonghieu = ThuongHieu::all();
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
        $request->validate(
            [
                'thTen' => 'required|unique:loaisanpham|max:191',
                'loaisanpham_mota' => 'required|max:191'
            ],
            [
                'loaiTen.required' =>  'Vui lòng nhập tên loại sản phẩm',
                'loaiTen.max' =>  'Tên loại sản phẩm quá dài. Vui lòng kiểm tra lại',
                'loaiTen.unique' =>  'Tên loại sản phẩm đã bị trùng. Vui lòng kiểm tra lại',
                'loaisanpham_mota.required' => 'Vui lòng nhập mô tả loại sản phẩm',
                'loaisanpham_mota.max' => 'Mô tả loại sản phẩm quá dài. Vui lòng kiểm tra lại'
            ]
        );
        $data = $request->all();
        $thuonghieu = new ThuongHieu();
        $thuonghieu->thTen = $data['thuonghieu_ten'];
        $thuonghieu->thMoTa = $data['thuonghieu_mota'];
        $thuonghieu->thTrangThai = $data['thuonghieu_trangthai'];
        $thuonghieu->save();

        /* $data = array();
        $data['thTen'] = $request->thuonghieu_ten;
        $data['thMoTa'] = $request->thuonghieu_mota;
        $data['thTrangThai'] = $request->thuonghieu_trangthai;
        DB::table('thuonghieu')->insert($data); */

        return Redirect::to('all-thuonghieu')->with('success', 'Thêm thương hiệu thành công');
    }

    public function edit_thuonghieu($thMa)
    {
        $this->AuthLogin();
        /* $edit_thuonghieu = DB::table('thuonghieu')->where('thMa', $thMa)->get(); */
        /* $edit_thuonghieu = ThuongHieu::find($thMa); */
        $edit_thuonghieu = ThuongHieu::where('thMa', $thMa)->get();
        $manager_thuonghieu = view('admin.edit_thuonghieu')->with('edit_thuonghieu', $edit_thuonghieu);
        return view('admin_layout')->with('admin.edit_thuonghieu', $manager_thuonghieu);
    }

    public function update_thuonghieu(Request $request, $thMa)
    {
        $this->AuthLogin();

        $data = $request->all();
        $thuonghieu = ThuongHieu::find($thMa);
        $thuonghieu->thTen = $data['thuonghieu_ten'];
        $thuonghieu->thMoTa = $data['thuonghieu_mota'];
        $thuonghieu->save();

        /* $data = array();
        $data['thTen'] = $request->thuonghieu_ten;
        $data['thMoTa'] = $request->thuonghieu_mota;
        DB::table('thuonghieu')->where('thMa', $thMa)->update($data); */

        return Redirect::to('all-thuonghieu')->with('success', 'Cập nhật thương hiệu thành công');
    }

    public function delete_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->delete();
        return Redirect::to('all-thuonghieu')->with('success', 'Xóa thương hiệu thành công');
    }

    public function unactive_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->update(['thTrangThai' => 0]);
        return Redirect::to('all-thuonghieu')->with('success', 'Không kích hoạt thương hiệu thành công');
    }

    public function active_thuonghieu($thMa)
    {
        $this->AuthLogin();
        DB::table('thuonghieu')->where('thMa', $thMa)->update(['thTrangThai' => 1]);
        return Redirect::to('all-thuonghieu')->with('success', 'Kích hoạt thương hiệu thành công');
    }

    //Ket thuc admin
    public function show_thuonghieu_home($thMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $thuonghieu_by_id = DB::table('sanpham')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->where('spTrangThai', '1')
            ->where('sanpham.thMa', $thMa)
            ->paginate(9);
        $thuonghieu_name = DB::table('thuonghieu')->where('thuonghieu.thMa', $thMa)->limit(1)->get();
        return view('pages.thuonghieu.show_thuonghieu')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('thuonghieu_by_id', $thuonghieu_by_id)->with('thuonghieu_name', $thuonghieu_name);
    }
}
