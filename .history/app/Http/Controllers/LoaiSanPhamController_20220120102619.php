<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\LoaiSanPham;
use Illuminate\Support\Facades\Redirect;

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
                'spTen' => 'required|unique:sanpham|max:191',
                'sanpham_gia' => 'required|min:1|numeric|not_in:0',
                'sanpham_giagoc' => 'required|min:1|numeric|not_in:0',
                'sanpham_mota' => 'required',
                'sanpham_soluong' => 'required|min:1|numeric|not_in:0',
                'sanpham_hinhanh' => 'required|image|mimes:jpeg,png,svg|max:2048'
            ],
            [
                'spTen.required' =>  'Vui lòng nhập tên sản phẩm',
                'spTen.max' =>  'Tên sản phẩm quá dài. Vui lòng kiểm tra lại',
                'spTen.unique' =>  'Tên sản phẩm đã bị trùng. Vui lòng kiểm tra lại',
                'sanpham_gia.required' => 'Vui lòng nhập giá sản phẩm',
                'sanpham_gia.min' => 'Vui lòng nhập giá sản phẩm lớn hơn 1',
                'sanpham_gia.numeric' => 'Vui lòng nhập giá sản phẩm là kiểu số',
                'sanpham_giagoc.required' => 'Vui lòng nhập giá gốc sản phẩm',
                'sanpham_giagoc.min' => 'Vui lòng nhập giá gốc sản phẩm lớn hơn 1',
                'sanpham_giagoc.numeric' => 'Vui lòng nhập giá gốc sản phẩm là kiểu số',
                'sanpham_mota.required' => 'Vui lòng nhập mô tả sản phẩm',
                'sanpham_soluong.required' => 'Vui lòng nhập số lượng sản phẩm',
                'sanpham_soluong.min' => 'Vui lòng nhập số lượng lớn hơn 1',
                'sanpham_soluong.numeric' => 'Vui lòng nhập số lượng là kiểu số',
                'sanpham_hinhanh.required' => 'Vui lòng chọn hình ảnh sản phẩm',
                'sanpham_hinhanh.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'sanpham_hinhanh.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
        $data = $request->all();
        $loaisanpham = new LoaiSanPham();
        $loaisanpham->loaiTen = $data['loaiTen'];
        $loaisanpham->loaiMoTa = $data['loaisanpham_mota'];
        $loaisanpham->loaiTrangThai = $data['loaisanpham_trangthai'];
        $loaisanpham->save();

        /* $data = array();
        $data['loaiTen'] = $request->loaisanpham_ten;
        $data['loaiMoTa'] = $request->loaisanpham_mota;
        $data['loaiTrangThai'] = $request->loaisanpham_trangthai;
        DB::table('loaisanpham')->insert($data); */

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
        $data = $request->all();
        $loaisanpham = LoaiSanPham::find($loaiMa);
        $loaisanpham->loaiTen = $data['loaiTen'];
        $loaisanpham->loaiMoTa = $data['loaisanpham_mota'];
        $loaisanpham->save();

        /* $data = array();
        $data['loaiTen'] = $request->loaisanpham_ten;
        $data['loaiMoTa'] = $request->loaisanpham_mota;
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->update($data); */

        return Redirect::to('all-loaisanpham')->with('success', 'Cập nhật loại sản phẩm thành công');
    }

    public function delete_loaisanpham($loaiMa)
    {
        $this->AuthLogin();
        DB::table('loaisanpham')->where('loaiMa', $loaiMa)->delete();
        return Redirect::to('all-loaisanpham')->with('success', 'Xóa loại sản phẩm thành công');
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
