<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MaGiamGia;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class MaGiamGiaController extends Controller
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
    public function insert_magiamgia()
    {
        $this->AuthLogin();
        return view('admin.magiamgia.insert_magiamgia');
    }

    public function insert_magiamgia_code(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'magiamgia_Ten' => 'required|max:191',
                'mggCode' => 'required|max:191|unique:magiamgia',
                'magiamgia_SoLuong' => 'required|min:1|numeric|not_in:0',
                'magiamgia_GiaTri' => 'required|min:1|numeric|not_in:0'
            ],
            [
                'magiamgia_Ten.required' =>  'Vui lòng nhập tên mã giảm giá',
                'magiamgia_Ten.max' =>  'Tên mã giảm giá quá dài. Vui lòng kiểm tra lại',
                'mggCode.required' =>  'Vui lòng nhập code mã giảm giá',
                'mggCode.max' =>  'Code mã giảm giá quá dài. Vui lòng kiểm tra lại',
                'mggCode.unique' =>  'Code mã giảm giá đã bị trùng. Vui lòng kiểm tra lại',
                'magiamgia_SoLuong.required' => 'Vui lòng nhập số lượng mã giảm giá',
                'magiamgia_SoLuong.min' => 'Vui lòng nhập số lượng mã giảm giá lớn hơn 1',
                'magiamgia_SoLuong.numeric' => 'Vui lòng nhập số lượng mã giảm giá là kiểu số',
                'magiamgia_GiaTri.required' => 'Vui lòng nhập giá trị mã giảm giá',
                'magiamgia_GiaTri.min' => 'Vui lòng nhập giá trị mã giảm giá lớn hơn 1',
                'magiamgia_GiaTri.numeric' => 'Vui lòng nhập giá trị mã giảm giá là kiểu số'
            ]
        );
        $data = $request->all();
        $magiamgia = new MaGiamGia;
        $magiamgia->mggTen = $data['magiamgia_Ten'];
        $magiamgia->mggCode = $data['mggCode'];
        $magiamgia->mggSoLuong = $data['magiamgia_SoLuong'];
        $magiamgia->mggPhuongThuc = $data['magiamgia_PhuongThuc'];
        $magiamgia->mggGiaTri = $data['magiamgia_GiaTri'];
        $magiamgia->save();

        return Redirect::to('list-magiamgia')->with('success', 'Thêm mã giảm giá thành công');
    }
    public function list_magiamgia()
    {
        $this->AuthLogin();
        $magiamgia = MaGiamGia::orderby('mggMa', 'DESC')->get();
        return view('admin.magiamgia.list_magiamgia')->with(compact('magiamgia'));
    }
    public function edit_magiamgia($mggMa)
    {
        $this->AuthLogin();
        $edit_magiamgia = MaGiamGia::where('mggMa', $mggMa)->get();
        $manager_magiamgia = view('admin.magiamgia.edit_magiamgia')->with('edit_magiamgia', $edit_magiamgia);
        return view('admin_layout')->with('admin.magiamgia.edit_magiamgia', $manager_magiamgia);
    }
    public function update_magiamgia(Request $request, $mggMa)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'magiamgia_Ten' => 'required|max:191',
                'mggCode' => 'required|max:191',
                'magiamgia_SoLuong' => 'required|min:1|numeric|not_in:0',
                'magiamgia_GiaTri' => 'required|min:1|numeric|not_in:0'
            ],
            [
                'magiamgia_Ten.required' =>  'Vui lòng nhập tên mã giảm giá',
                'magiamgia_Ten.max' =>  'Tên mã giảm giá quá dài. Vui lòng kiểm tra lại',
                'mggCode.required' =>  'Vui lòng nhập code mã giảm giá',
                'mggCode.max' =>  'Code mã giảm giá quá dài. Vui lòng kiểm tra lại',
                'magiamgia_SoLuong.required' => 'Vui lòng nhập số lượng mã giảm giá',
                'magiamgia_SoLuong.min' => 'Vui lòng nhập số lượng mã giảm giá lớn hơn 1',
                'magiamgia_SoLuong.numeric' => 'Vui lòng nhập số lượng mã giảm giá là kiểu số',
                'magiamgia_GiaTri.required' => 'Vui lòng nhập giá trị mã giảm giá',
                'magiamgia_GiaTri.min' => 'Vui lòng nhập giá trị mã giảm giá lớn hơn 1',
                'magiamgia_GiaTri.numeric' => 'Vui lòng nhập giá trị mã giảm giá là kiểu số'
            ]
        );
        $data = $request->all();
        $magiamgia = MaGiamGia::find($mggMa);
        $magiamgia->mggTen = $data['magiamgia_Ten'];
        $magiamgia->mggCode = $data['mggCode'];
        $magiamgia->mggSoLuong = $data['magiamgia_SoLuong'];
        $magiamgia->mggPhuongThuc = $data['magiamgia_PhuongThuc'];
        $magiamgia->mggGiaTri = $data['magiamgia_GiaTri'];
        $magiamgia->save();
        return Redirect::to('list-magiamgia')->with('success', 'Cập nhật mã giảm giá thành công');
    }
    public function delete_magiamgia($mggMa)
    {
        $this->AuthLogin();
        $magiamgia = MaGiamGia::find($mggMa);
        $magiamgia->delete();
        return Redirect::to('list-magiamgia')->with('success', 'Xóa mã giảm giá thành công');
    }
}
