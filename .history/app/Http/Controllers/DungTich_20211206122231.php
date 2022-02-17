<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class DungTich extends Controller
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
        $data = array();
        $data['dtTen'] = $request->dungtich_ten;
        $data['dtMoTa'] = $request->dungtich_mota;

        DB::table('dungtich')->insert($data);
        Session::put('message', 'Thêm dung tích sản phẩm thành công');
        return Redirect::to('all-dungtich');
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
        $data['dtTen'] = $request->dungtich_ten;
        $data['dtMoTa'] = $request->dungtich_mota;
        DB::table('dungtich')->where('dtMa', $dtMa)->update($data);
        Session::put('message', 'Cập nhật dung tích sản phẩm thành công');
        return Redirect::to('all-dungtich');
    }

    public function delete_dungtich($dtMa)
    {
        $this->AuthLogin();
        DB::table('dungtich')->where('dtMa', $dtMa)->delete();
        Session::put('message', 'Xóa dung tích sản phẩm thành công');
        return Redirect::to('all-dungtich');
    }
}
