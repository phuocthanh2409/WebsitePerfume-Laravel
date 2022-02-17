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
        $request->validate(
            [
                'info_contact' => 'required|max:1000',
                'info_map' => 'required|max:1000',
                'info_fanpage' => 'required|max:1000',
                'info_image' => 'required|image|mimes:jpeg,png,svg|max:2048'
            ],
            [
                'info_contact.required' =>  'Vui lòng nhập thông tin liên hệ',
                'info_map.required' => 'Vui lòng nhập thông tin bản đồ',
                'info_fanpage.required' => 'Vui lòng nhập thông tin fanpage Facebook',
                'info_image.required' => 'Vui lòng chọn hình ảnh logo cửa hàng',
                'info_contact.max' => 'Thông tin cửa hàng quá dài. Vui lòng kiểm tra lại',
                'info_map.max' => 'Thông tin bản đồ quá dài. Vui lòng kiểm tra lại',
                'info_fanpage.max' => 'Thông tin fanpage facebook quá dài. Vui lòng kiểm tra lại',
                'info_image.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'info_image.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
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
        $this->AuthLogin();
        $request->validate(
            [
                'info_contact' => 'required',
                'info_map' => 'required',
                'info_fanpage' => 'required',
                'info_image' => 'image|mimes:jpeg,png,svg|max:2048'
            ],
            [
                'info_contact.required' =>  'Vui lòng nhập thông tin liên hệ',
                'info_map.required' => 'Vui lòng nhập thông tin bản đồ',
                'info_fanpage.required' => 'Vui lòng nhập thông tin fanpage Facebook',
                'info_image.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'info_image.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
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
