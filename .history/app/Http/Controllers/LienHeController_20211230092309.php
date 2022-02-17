<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\LienHe;

session_start();


class LienHeController extends Controller
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
    public function lien_he()
    {
        $contact = LienHe::where('ttMa', 1)->get();
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        return view('pages.lienhe.lienhe')->with(compact('loaisanpham', 'contact'));
    }
    public function information()
    {
        $this->AuthLogin();
        $contact = LienHe::where('ttMa', 1)->get();
        return view('admin.information.add_information')->with(compact('contact'));
    }
    public function save_info(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $contact = new LienHe();
        $contact->ttLienHe = $data['info_contact'];
        $contact->ttMap = $data['info_map'];
        $contact->ttFanpage = $data['info_fanpage'];
        $get_image = $request->file('info_image');
        $path = 'public/uploads/contact/';
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $contact->ttHinhAnh = $new_image;
        }
        $contact->save();
        return redirect()->back()->with('success', 'Cập nhật thông tin website thành công');
    }
    public function update_info(Request $request, $ttMa)
    {
        $data = $request->all();
        $contact = LienHe::find($ttMa);
        $contact->ttLienHe = $data['info_contact'];
        $contact->ttMap = $data['info_map'];
        $contact->ttFanpage = $data['info_fanpage'];
        $get_image = $request->file('info_image');
        $path = 'public/uploads/contact/';
        if ($get_image) {
            unlink($path . $contact->ttHinhAnh);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $contact->ttHinhAnh = $new_image;
        }
        $contact->save();
        return redirect()->back()->with('success', 'Cập nhật thông tin website thành công');
    }
}
