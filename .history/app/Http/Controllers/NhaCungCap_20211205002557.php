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
        $edit_nhacungcap = DB::table('nhacungcap')->where('nccMa', $nccMa)->get();
        $manager_nhacungcap = view('admin.edit_nhacungcap')->with('edit_nhacungcap', $edit_nhacungcap);
        return view('admin_layout')->with('admin.edit_nhacungcap', $manager_nhacungcap);
    }

    public function update_nhacungcap(Request $request, $nccMa)
    {
        $data = array();
        $data['nccTen'] = $request->nhacungcap_ten;
        $data['nccSoDienThoai'] = $request->nhacungcap_sodienthoai;
        $data['nccDiaChi'] = $request->nhacungcap_diachi;
        DB::table('nhacungcap')->where('nccMa', $nccMa)->update($data);
        Session::put('message', 'Cập nhật nhà cung cấp thành công');
        return Redirect::to('all-nhacungcap');
    }

    public function delete_nhacungcap($nccMa)
    {
        DB::table('nhacungcap')->where('nccMa', $nccMa)->delete();
        Session::put('message', 'Xóa nhà cung cấp thành công');
        return Redirect::to('all-nhacungcap');
    }
}
