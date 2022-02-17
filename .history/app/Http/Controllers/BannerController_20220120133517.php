<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redis;

session_start();

class BannerController extends Controller
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
    public function manage_banner()
    {
        $this->AuthLogin();
        $all_slide = Banner::orderBy('sliderMa', 'DESC')->get();
        return view('admin.banner.list_slide')->with(compact('all_slide'));
    }

    public function add_banner()
    {
        $this->AuthLogin();
        return view('admin.banner.add_slide');
    }
    public function insert_banner(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'slider_ten' => 'required|max:191',
                'slider_hinhanh' => 'required|image|mimes:jpeg,png,svg|max:2048',
                'slider_mota' => 'required'
            ],
            [
                'slider_ten.required' =>  'Vui lòng nhập tên banner',
                'slider_ten.max' =>  'Tên sản phẩm quá dài. Vui lòng kiểm tra lại',
                'slider_mota.required' => 'Vui lòng nhập mô tả sản phẩm',
                'slider_hinhanh.required' => 'Vui lòng chọn hình ảnh sản phẩm',
                'slider_hinhanh.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'slider_hinhanh.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
        $data = $request->all();

        $get_image = $request->file('slider_hinhanh');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/banner/', $new_image);

            $slider = new Banner();
            $slider->sliderTen = $data['slider_ten'];
            $slider->sliderHinhAnh = $new_image;
            $slider->sliderMoTa = $data['slider_mota'];
            $slider->sliderTrangThai = $data['slider_trangthai'];
            $slider->save();

            return Redirect::to('manage-banner')->with('success', 'Thêm banner thành công');
        } else {
            return Redirect::to('manage-banner')->with('error', 'Vui lòng thêm hình ảnh');
        }
    }
    public function unactive_banner($sliderMa)
    {
        $this->AuthLogin();
        DB::table('slider')->where('sliderMa', $sliderMa)->update(['sliderTrangThai' => 0]);
        return Redirect::to('manage-banner')->with('success', 'Không kích hoạt banner thành công');
    }

    public function active_banner($sliderMa)
    {
        $this->AuthLogin();
        DB::table('slider')->where('sliderMa', $sliderMa)->update(['sliderTrangThai' => 1]);
        return Redirect::to('manage-banner')->with('success', 'Kích hoạt banner thành công');
    }
    public function delete_banner($sliderMa)
    {
        $this->AuthLogin();
        DB::table('slider')->where('sliderMa', $sliderMa)->delete();
        return Redirect::to('manage-banner')->with('success', 'Xóa banner thành công');
    }
    public function edit_banner($sliderMa)
    {
        $this->AuthLogin();
        $edit_banner = Banner::where('sliderMa', $sliderMa)->get();
        $manager_banner = view('admin.banner.edit_slide')->with('edit_banner', $edit_banner);
        return view('admin_layout')->with('admin.banner.edit_slide', $manager_banner);
    }
    public function update_banner(Request $request, $sliderMa)
    {
        $this->AuthLogin();
        $data = array();
        $data['sliderTen'] = $request->banner_ten;
        $data['sliderMoTa'] = $request->banner_mota;
        $get_image = $request->file('banner_hinhanh');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/banner/', $new_image);
            $data['sliderHinhAnh'] = $new_image;
            DB::table('slider')->where('sliderMa', $sliderMa)->update($data);
            return Redirect::to('manage-banner')->with('success', 'Cập nhật banner thành công');
        }

        DB::table('slider')->where('sliderMa', $sliderMa)->update($data);
        return Redirect::to('manage-banner')->with('success', 'Cập nhật banner thành công');
    }
}
