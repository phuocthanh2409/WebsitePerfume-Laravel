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
                'info_image.required' => 'Vui lòng hình ảnh logo cửa hàng',
                'info_contact.max' => 'Tên của bạn quá dài. Vui lòng kiểm tra lại',
                'info_map.max' => 'Email của bạn quá dài. Vui lòng kiểm tra lại',
                'info_fanpage.max' => 'Email của bạn không đúng định dạng. Vui lòng kiểm tra lại',
                'info_image.mimes' => 'Số điện thoại phải bao gồm 10 số. Vui lòng kiểm tra lại',
                'info_image.max' => 'Số điện thoại phải bao gồm 10 số. Vui lòng kiểm tra lại'
            ]
        );
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
        $request->validate(
            [
                'khTen' => 'required|max:191',
                'khEmaildk' => 'required|max:191|email:rfc,dns,strict,spoof,filter',
                'khMatKhaudk' => 'required|max:191',
                'khSoDienThoai' => 'required|size:10'
            ],
            [
                'khTen.required' =>  'Vui lòng nhập tên khách hàng để đăng kí',
                'khEmaildk.required' => 'Vui lòng nhập email khách hàng để đăng kí',
                'khMatKhaudk.required' => 'Vui lòng nhập mật khẩu khách hàng để đăng kí',
                'khSoDienThoai.required' => 'Vui lòng nhập số điện thoại khách hàng để đăng kí',
                'khTen.max' => 'Tên của bạn quá dài. Vui lòng kiểm tra lại',
                'khEmaildk.max' => 'Email của bạn quá dài. Vui lòng kiểm tra lại',
                'khEmaildk.email' => 'Email của bạn không đúng định dạng. Vui lòng kiểm tra lại',
                'khMatKhaudk.max' => 'Mật khẩu của bạn quá dài. Vui lòng kiểm tra lại',
                'khSoDienThoai.size' => 'Số điện thoại phải bao gồm 10 số. Vui lòng kiểm tra lại'
            ]
        );
        $this->AuthLogin();
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
