<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class DungTichController extends Controller
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
    public function all_dungtich()
    {
        $this->AuthLogin();
        $all_dungtich = DB::table('dungtich')->get();
        $manager_dungtich = view('admin.all_dungtich')->with('all_dungtich', $all_dungtich);
        return view('admin_layout')->with('admin.all_dungtich', $manager_dungtich);
    }

    public function add_dungtich()
    {
        $this->AuthLogin();
        return view('admin.add_dungtich');
    }

    public function save_dungtich(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'dtTen' => 'required|unique:dungtich|max:191',
                'dungtich_mota' => 'required|max:191'
            ],
            [
                'dtTen.required' =>  'Vui lòng nhập dung tích sản phẩm',
                'dtTen.max' =>  'Dung tích sản phẩm quá dài. Vui lòng kiểm tra lại',
                'dtTen.unique' =>  'Dung tích sản phẩm đã bị trùng. Vui lòng kiểm tra lại',
                'dungtich_mota.required' => 'Vui lòng nhập mô tả dung tíchh sản phẩm',
                'dungtich_mota.max' => 'Mô tả thương hiệu sản phẩm quá dài. Vui lòng kiểm tra lại'
            ]
        );
        $data = array();
        $data['dtTen'] = $request->dtTen;
        $data['dtMoTa'] = $request->dungtich_mota;

        DB::table('dungtich')->insert($data);
        return Redirect::to('all-dungtich')->with('success', 'Thêm dung tích sản phẩm thành công');
    }

    public function edit_dungtich($dtMa)
    {
        $this->AuthLogin();
        $edit_dungtich = DB::table('dungtich')->where('dtMa', $dtMa)->get();
        $manager_dungtich = view('admin.edit_dungtich')->with('edit_dungtich', $edit_dungtich);
        return view('admin_layout')->with('admin.edit_dungtich', $manager_dungtich);
    }

    public function update_dungtich(Request $request, $dtMa)
    {
        $this->AuthLogin();
        $data = array();
        $data['dtTen'] = $request->dtTen;
        $data['dtMoTa'] = $request->dungtich_mota;
        DB::table('dungtich')->where('dtMa', $dtMa)->update($data);
        return Redirect::to('all-dungtich')->with('success', 'Cập nhật dung tích sản phẩm thành công');
    }

    public function delete_dungtich($dtMa)
    {
        $this->AuthLogin();
        DB::table('dungtich')->where('dtMa', $dtMa)->delete();
        return Redirect::to('all-dungtich')->with('success', 'Xóa dung tích sản phẩm thành công');
    }
}
