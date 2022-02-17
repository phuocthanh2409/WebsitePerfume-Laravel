<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\MuaSanPham;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class MuaSanPhamController extends Controller
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
        $all_muasanpham = MuaSanPham::all();
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
        $request->validate(
            [
                'muaTen' => 'required|max:191',
                'thuonghieu_mota' => 'required|max:191'
            ],
            [
                'thTen.required' =>  'Vui lòng nhập tên thương hiệu sản phẩm',
                'thTen.max' =>  'Tên thương hiệu sản phẩm quá dài. Vui lòng kiểm tra lại',
                'thuonghieu_mota.required' => 'Vui lòng nhập mô tả thương hiệu sản phẩm',
                'thuonghieu_mota.max' => 'Mô tả thương hiệu sản phẩm quá dài. Vui lòng kiểm tra lại'
            ]
        );
        $data = $request->all();
        $muasanpham = new MuaSanPham();
        $muasanpham->muaTen = $data['muaTen'];
        $muasanpham->muaMoTa = $data['muasanpham_mota'];
        $muasanpham->muaTrangThai = $data['muasanpham_trangthai'];
        $muasanpham->save();

        return Redirect::to('all-muasanpham')->with('success', 'Thêm mùa sản phẩm thành công');
    }

    public function edit_muasanpham($muaMa)
    {
        $this->AuthLogin();
        $edit_muasanpham = MuaSanPham::where('muaMa', $muaMa)->get();
        $manager_muasanpham = view('admin.edit_muasanpham')->with('edit_muasanpham', $edit_muasanpham);
        return view('admin_layout')->with('admin.edit_muasanpham', $manager_muasanpham);
    }

    public function update_muasanpham(Request $request, $muaMa)
    {
        $this->AuthLogin();
        $data = $request->all();
        $muasanpham = MuaSanPham::find($muaMa);
        $muasanpham->muaTen = $data['muaTen'];
        $muasanpham->muaMoTa = $data['muasanpham_mota'];
        $muasanpham->save();

        /* $data = array();
        $data['muaTen'] = $request->muasanpham_ten;
        $data['muaMoTa'] = $request->muasanpham_mota;
        DB::table('muasanpham')->where('muaMa', $muaMa)->update($data); */
        return Redirect::to('all-muasanpham')->with('success', 'Cập nhật mùa sản phẩm thành công');
    }

    public function delete_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->delete();
        return Redirect::to('all-muasanpham')->with('success', 'Xóa mùa sản phẩm thành công');
    }

    public function unactive_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->update(['muaTrangThai' => 0]);
        return Redirect::to('all-muasanpham')->with('success', 'Không kích hoạt mùa sản phẩm thành công');
    }

    public function active_muasanpham($muaMa)
    {
        $this->AuthLogin();
        DB::table('muasanpham')->where('muaMa', $muaMa)->update(['muaTrangThai' => 1]);
        return Redirect::to('all-muasanpham')->with('success', 'Kích hoạt mùa sản phẩm thành công');
    }

    //Ket thuc admin
    public function show_mua_home($muaMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $mua_by_id = DB::table('sanpham')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->where('spTrangThai', '1')
            ->where('sanpham.muaMa', $muaMa)
            ->paginate(9);

        $mua_name = DB::table('muasanpham')->where('muasanpham.muaMa', $muaMa)->limit(1)->get();
        return view('pages.muasanpham.show_muasanpham')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('mua_by_id', $mua_by_id)->with('mua_name', $mua_name);
    }
}
