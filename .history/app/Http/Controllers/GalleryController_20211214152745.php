<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Gallery;

session_start();

class GalleryController extends Controller
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
    public function add_gallery($spMa)
    {
        $this->AuthLogin();

        $pro_id = $spMa;
        return view('admin.gallery.add_gallery')->with(compact('pro_id'));
    }
    public function select_gallery(Request $request)
    {
        $product_id =  $request->pro_id;
        $gallery = Gallery::where('product_id', $product_id)->get();
        $gallery_count = $gallery->count();
        $output = '
        <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Thứ tự</th>
            <th scope="col">Tên</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Quản lý</th>
          </tr>
        </thead>
        <tbody>
        ';
        if ($gallery_count > 0) {
            $i = 0;
            foreach ($gallery as $key => $val) {
                $i++;
                $output .= '
                <tr>
                <td>' . $i . '</td>
                <td>' . $val->galleryTen . '</td>
                <td>' . $val->galleryHinhAnh . '</td>
                <td>
                    <button data-gal_id="' . $val->spMa . '" class="btn btn-xs btn-danger delete-gallery">Xóa</button>
                </td>
                </tr>
                ';
            }
        } else {
            $output .= '
            <tr>
            <td colspan ="4" >Sản phẩm chưa có thư viện ảnh</td>
            </tr>
            ';
        }
    }
}
