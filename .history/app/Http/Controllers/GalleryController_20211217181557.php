<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Gallery;
use Illuminate\Support\Facades\Redis;

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
        <form>
            ' . csrf_field() . '
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
                <td contenteditable class="edit_gal_name" data-gal_id="' . $val->galleryMa . '">' . $val->galleryTen . '</td>
                <td>
                    <img src="' . url('public/uploads/gallery/' . $val->galleryHinhAnh) . '" class="img-thumbnail" width="120" height="120">
                    <input type="file" class="file_image" style="width: 40%" data-gal_id="' . $val->galleryMa . '" id="file-' . $val->galleryMa . '" name="file" accept="image/*" />
                </td>
                <td>
                    <button type="button" data-gal_id="' . $val->galleryMa . '" class="btn btn-xs btn-danger delete-gallery">Xóa</button>
                </td>
                </tr>
                
                ';
            }
        } else {
            $output .= '
            <tr>
            <td colspan ="4" >Sản phẩm chưa có thư viện ảnh</td>
            </tr>
            </tbody>
            </table>
            ';
        }
        $output .= '
            </tbody>
            </table>
            </form>
            ';
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
                $gallery = new Gallery();
                $gallery->galleryTen = $new_image;
                $gallery->galleryHinhAnh = $new_image;
                $gallery->spMa = $spMa;
                $gallery->save();
            }
        }
        Session::put('message', '');
        return redirect()->back()->with('success', 'Thêm thư viện ảnh thành công');
    }
    public function update_gallery_name(Request $request)
    {
        $gal_id = $request->gal_id;
        $gal_text = $request->gal_text;
        $gallery = Gallery::find($gal_id);
        $gallery->galleryTen = $gal_text;
        $gallery->save();
    }

    public function delete_gallery(Request $request)
    {
        $gal_id = $request->gal_id;
        $gallery = Gallery::find($gal_id);
        unlink('public/uploads/gallery/' . $gallery->galleryHinhAnh);
        $gallery->delete();
    }

    public function update_gallery(Request $request)
    {
        $get_image = $request->file('file');
        $gal_id = $request->gal_id;
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/gallery/', $new_image);
            $gallery = Gallery::find($gal_id);
            unlink('public/uploads/gallery/' . $gallery->galleryHinhAnh);
            $gallery->galleryHinhAnh = $new_image;
            $gallery->save();
        }
    }
}
