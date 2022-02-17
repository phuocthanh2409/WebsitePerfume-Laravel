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
        $gallery = Gallery::where('spMa', $product_id)->get();
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
                <td><img src="' . url('public/uploads/gallery/' . $val->galleryHinhAnh) . '" class="img-thumbnail" width="120" height="120"></td>
                <td>
                    <button data-gal_id="' . $val->galleryMa . '" class="btn btn-xs btn-danger delete-gallery">Xóa</button>
                </td>
                </tr>
                ';
            }
            $output .= '
            </tbody>
            </table>
            ';
        } else {
            $output .= '
            <tr>
            <td colspan ="4" >Sản phẩm chưa có thư viện ảnh</td>
            </tr>
            </tbody>
            </table>
            ';
        }
        echo $output;
    }
    public function insert_gallery(Request $request, $spMa)
    {
        $get_image = $request->file('file');
        if ($get_image) {
            foreach ($get_image as $image) {
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move('public/uploads/gallery/', $new_image);
            }
        }
        Session::put('message', 'Thêm thư viện ảnh thành công');
        return redirect()->back();
    }
}
