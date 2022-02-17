<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\LoaiSanPham;
use Illuminate\Support\Facades\Redirect;
use App\Models\SanPham;

session_start();

class LoaiSanPhamController extends Controller
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
        $all_loaisanpham = LoaiSanPham::all();
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
        $request->validate(
            [
                'loaiTen' => 'required|unique:loaisanpham|max:191',
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
        $loaisanpham = new LoaiSanPham();
        $loaisanpham->loaiTen = $data['loaiTen'];
        $loaisanpham->loaiMoTa = $data['loaisanpham_mota'];
        $loaisanpham->loaiTrangThai = $data['loaisanpham_trangthai'];
        $loaisanpham->save();

        return Redirect::to('all-loaisanpham')->with('success', 'Thêm loại sản phẩm thành công');
    }

    public function edit_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        $edit_loaisanpham = LoaiSanPham::where('loaiMa', $loaiMa)->get();
        /* $edit_loaisanpham = DB::table('loaisanpham')->where('loaiMa', $loaiMa)->get(); */
        $manager_loaisanpham = view('admin.edit_loaisanpham')->with('edit_loaisanpham', $edit_loaisanpham);
        return view('admin_layout')->with('admin.edit_loaisanpham', $manager_loaisanpham);
    }

    public function update_loaisanpham(Request $request, $loaiMa)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'loaiTen' => 'required|max:191',
                'loaisanpham_mota' => 'required|max:191'
            ],
            [
                'loaiTen.required' =>  'Vui lòng nhập tên loại sản phẩm',
                'loaiTen.max' =>  'Tên loại sản phẩm quá dài. Vui lòng kiểm tra lại',
                'loaisanpham_mota.required' => 'Vui lòng nhập mô tả loại sản phẩm',
                'loaisanpham_mota.max' => 'Mô tả loại sản phẩm quá dài. Vui lòng kiểm tra lại'
            ]
        );
        $data = $request->all();
        $loaisanpham = LoaiSanPham::find($loaiMa);
        $loaisanpham->loaiTen = $data['loaiTen'];
        $loaisanpham->loaiMoTa = $data['loaisanpham_mota'];
        $loaisanpham->save();

        return Redirect::to('all-loaisanpham')->with('success', 'Cập nhật loại sản phẩm thành công');
    }

    public function delete_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        $check = SanPham::where('loaiMa', $loaiMa)->first();
        if ($check == null) {
            DB::table('loaisanpham')->where('loaiMa', $loaiMa)->delete();
            return Redirect::to('all-loaisanpham')->with('success', 'Xóa loại sản phẩm thành công');
        } else {
            return Redirect::to('all-loaisanpham')->with('error', 'Xóa loại sản phẩm thất bại. Trong loại sản phẩm đã có sản phẩm');
        }
    }

    public function unactive_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 0]);
        return Redirect::to('all-loaisanpham')->with('success', 'Không kích hoạt loại sản phẩm thành công');
    }

    public function active_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update(['loaiTrangThai' => 1]);
        return Redirect::to('all-loaisanpham')->with('success', 'Kích hoạt loại sản phẩm thành công');
    }

    //Ket thuc admin
    public function show_loaisanpham_home($loaiMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $loaisanpham_by_id = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->where('spTrangThai', '1')
            ->where('sanpham.loaiMa', $loaiMa)
            ->paginate(9);
        $loaisanpham_name = DB::table('loaisanpham')->where('loaisanpham.loaiMa', $loaiMa)->limit(1)->get();
        return view('pages.loaisanpham.show_loaisanpham')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('loaisanpham_by_id', $loaisanpham_by_id)->with('loaisanpham_name', $loaisanpham_name);
    }
}
