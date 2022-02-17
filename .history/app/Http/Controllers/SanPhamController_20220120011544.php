<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Gallery;
use File;
use App\Models\BinhLuan;

session_start();

class SanPhamController extends Controller
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

    public function all_sanpham()
    {
        $this->AuthLogin();
        $all_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->orderby('sanpham.spMa', 'desc')->get();
        $manager_sanpham = view('admin.all_sanpham')->with('all_sanpham', $all_sanpham);
        return view('admin_layout')->with('admin.all_sanpham', $manager_sanpham);
    }

    public function add_sanpham()
    {
        $this->AuthLogin();
        $loaisanpham = DB::table('loaisanpham')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->orderby('muaMa', 'asc')->get();
        $dungtich = DB::table('dungtich')->orderby('dtMa', 'asc')->get();

        return view('admin.add_sanpham')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('dungtich', $dungtich);
    }

    public function save_sanpham(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'spTen' => 'required|unique:sanpham|max:191',
                'sanpham_gia' => 'required|min:1|numeric|not_in:0',
                'sanpham_giagoc' => 'required|min:1|numeric|not_in:0',
                'sanpham_mota' => 'required',
                'sanpham_soluong' => 'required|min:1|numeric|not_in:0',
                'sanpham_hinhanh' => 'required|image|mimes:jpeg,png,svg|max:2048'
            ],
            [
                'spTen.required' =>  'Vui lòng nhập tên sản phẩm',
                'spTen.max' =>  'Tên sản phẩm quá dài. Vui lòng kiểm tra lại',
                'spTen.unique' =>  'Tên sản phẩm đã bị trùng. Vui lòng kiểm tra lại',
                'sanpham_gia.required' => 'Vui lòng nhập giá sản phẩm',
                'sanpham_gia.min' => 'Vui lòng nhập giá sản phẩm lớn hơn 1',
                'sanpham_gia.numeric' => 'Vui lòng nhập giá sản phẩm là kiểu số',
                'sanpham_giagoc.required' => 'Vui lòng nhập giá gốc sản phẩm',
                'sanpham_giagoc.min' => 'Vui lòng nhập giá gốc sản phẩm lớn hơn 1',
                'sanpham_giagoc.numeric' => 'Vui lòng nhập giá gốc sản phẩm là kiểu số',
                'sanpham_mota.required' => 'Vui lòng nhập mô tả sản phẩm',
                'sanpham_soluong.required' => 'Vui lòng nhập số lượng sản phẩm',
                'sanpham_soluong.min' => 'Vui lòng nhập số lượng lớn hơn 1',
                'sanpham_soluong.numeric' => 'Vui lòng nhập số lượng là kiểu số',
                'sanpham_hinhanh.required' => 'Vui lòng chọn hình ảnh sản phẩm',
                'sanpham_hinhanh.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'sanpham_hinhanh.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
        $data = array();
        $data['spTen'] = $request->spTen;
        $data['spGia'] = $request->sanpham_gia;
        $data['spGiaGoc'] = $request->sanpham_giagoc;
        $data['spMoTa'] = $request->sanpham_mota;
        $data['spSoLuong'] = $request->sanpham_soluong;
        $data['spTrangThai'] = $request->sanpham_trangthai;
        $data['loaiMa'] = $request->sanpham_loai;
        $data['thMa'] = $request->sanpham_thuonghieu;
        $data['muaMa'] = $request->sanpham_mua;
        $data['dtMa'] = $request->sanpham_dungtich;

        if ($data['spGiaGoc'] > $data['spGia']) {
            return Redirect::to('all-sanpham')->with('error', 'Cập nhật sản phẩm thất bại. Giá gốc không được lớn hơn giá bán');
        } else {
            $get_image = $request->file('sanpham_hinhanh');

            $path = 'public/uploads/product/';
            $path_gallery = 'public/uploads/gallery/';

            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                File::copy($path . $new_image, $path_gallery . $new_image);
                $data['spHinhAnh'] = $new_image;
            }

            $pro_id = DB::table('sanpham')->insertGetId($data);
            $gallery = new Gallery();
            $gallery->galleryHinhAnh = $new_image;
            $gallery->galleryTen = $new_image;
            $gallery->spMa = $pro_id;
            $gallery->save();

            return Redirect::to('all-sanpham')->with('success', 'Thêm sản phẩm thành công');
        }
    }

    public function edit_sanpham($spMa)
    {
        $this->AuthLogin();
        $loaisanpham = DB::table('loaisanpham')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->orderby('muaMa', 'asc')->get();
        $dungtich = DB::table('dungtich')->orderby('dtMa', 'asc')->get();

        $edit_sanpham = DB::table('sanpham')->where('spMa', $spMa)->get();

        $manager_sanpham = view('admin.edit_sanpham')->with('edit_sanpham', $edit_sanpham)->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('dungtich', $dungtich);
        return view('admin_layout')->with('admin.edit_sanpham', $manager_sanpham);
    }

    public function update_sanpham(Request $request, $spMa)
    {
        $request->validate(
            [
                'spTen' => 'required|max:191',
                'sanpham_gia' => 'required|min:1|numeric|not_in:0',
                'sanpham_giagoc' => 'required|min:1|numeric|not_in:0',
                'sanpham_mota' => 'required',
                'sanpham_soluong' => 'required|min:1|numeric|not_in:0',
                'sanpham_hinhanh' => 'image|mimes:jpeg,png,svg|max:2048'
            ],
            [
                'spTen.required' =>  'Vui lòng nhập tên sản phẩm',
                'spTen.max' =>  'Tên sản phẩm quá dài. Vui lòng kiểm tra lại',
                'sanpham_gia.required' => 'Vui lòng nhập giá sản phẩm',
                'sanpham_gia.min' => 'Vui lòng nhập giá lớn hơn 1',
                'sanpham_giagoc.required' => 'Vui lòng nhập giá gốc sản phẩm',
                'sanpham_giagoc.min' => 'Vui lòng nhập giá gốc lớn hơn 1',
                'sanpham_mota.required' => 'Vui lòng nhập mô tả sản phẩm',
                'sanpham_soluong.required' => 'Vui lòng nhập số lượng sản phẩm',
                'sanpham_soluong.min' => 'Vui lòng nhập số lượng lớn hơn 1',
                'sanpham_hinhanh.mimes' => 'File không phải là hình ảnh. Vui lòng kiểm tra lại',
                'sanpham_hinhanh.max' => 'File hình ảnh quá lớn. Vui lòng chọn hình ảnh dưới 2mb'
            ]
        );
        $this->AuthLogin();
        $data = array();
        $data['spTen'] = $request->spTen;
        $data['spGia'] = $request->sanpham_gia;
        $data['spGiaGoc'] = $request->sanpham_giagoc;
        $data['spMoTa'] = $request->sanpham_mota;
        $data['spSoLuong'] = $request->sanpham_soluong;
        $data['loaiMa'] = $request->sanpham_loai;
        $data['thMa'] = $request->sanpham_thuonghieu;
        $data['muaMa'] = $request->sanpham_mua;
        $data['dtMa'] = $request->sanpham_dungtich;

        if ($data['spGiaGoc'] > $data['spGia']) {
            return Redirect::to('all-sanpham')->with('error', 'Cập nhật sản phẩm thất bại. Giá gốc không được lớn hơn giá bán');
        } else {
            $get_image = $request->file('sanpham_hinhanh');
            if ($get_image) {
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move('public/uploads/product/', $new_image);
                $data['spHinhAnh'] = $new_image;
                DB::table('sanpham')->where('spMa', $spMa)->update($data);
                return Redirect::to('all-sanpham')->with('success', 'Cập nhật sản phẩm thành công');
            }

            DB::table('sanpham')->where('spMa', $spMa)->update($data);
            return Redirect::to('all-sanpham')->with('success', 'Cập nhật sản phẩm thành công');
        }
    }

    public function delete_sanpham($spMa)
    {
        $this->AuthLogin();
        DB::table('sanpham')->where('spMa', $spMa)->delete();
        return Redirect::to('all-sanpham')->with('success', 'Xóa sản phẩm thành công');
    }

    public function unactive_sanpham($spMa)
    {
        $this->AuthLogin();
        DB::table('sanpham')->where('spMa', $spMa)->update(['spTrangThai' => 0]);
        return Redirect::to('all-sanpham')->with('success', 'Không kích hoạt sản phẩm thành công');
    }

    public function active_sanpham($spMa)
    {
        $this->AuthLogin();
        DB::table('sanpham')->where('spMa', $spMa)->update(['spTrangThai' => 1]);
        return Redirect::to('all-sanpham')->with('success', 'Kích hoạt sản phẩm thành công');
    }

    //Ket thuc admin
    public function show_gia1_home()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $gia_by_id_1 = DB::table('sanpham')
            ->where('spGia', '<', 1000000)
            ->paginate(9);

        return view('pages.giasanpham.show_giasanpham1')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('gia_by_id_1', $gia_by_id_1);
    }
    public function show_gia2_home()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $gia_by_id_2 = DB::table('sanpham')
            ->where('spGia', '>=', 1000000)
            ->where('spGia', '<', 2000000)
            ->paginate(9);
        return view('pages.giasanpham.show_giasanpham2')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('gia_by_id_2', $gia_by_id_2);
    }
    public function show_gia3_home()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $gia_by_id_3 = DB::table('sanpham')
            ->where('spGia', '>=', 2000000)
            ->where('spGia', '<', 5000000)
            ->paginate(9);

        return view('pages.giasanpham.show_giasanpham3')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('gia_by_id_3', $gia_by_id_3);
    }
    public function show_gia4_home()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $gia_by_id_4 = DB::table('sanpham')
            ->where('spGia', '>=', 5000000)
            ->where('spGia', '<', 10000000)
            ->paginate(9);

        return view('pages.giasanpham.show_giasanpham4')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('gia_by_id_4', $gia_by_id_4);
    }
    public function show_gia5_home()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $gia_by_id_5 = DB::table('sanpham')
            ->where('spGia', '>=', 10000000)
            ->paginate(9);

        return view('pages.giasanpham.show_giasanpham5')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('gia_by_id_5', $gia_by_id_5);
    }

    public function details_product($spMa)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $details_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->where('sanpham.spMa', $spMa)->get();

        foreach ($details_sanpham as $key => $dtvalue) {
            $loaiMa = $dtvalue->loaiMa;
            $product_id = $dtvalue->spMa;
        }

        //Gallery
        $gallery = Gallery::where('spMa', $product_id)->get();

        $related_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->where('loaisanpham.loaiMa', $loaiMa)->whereNotIn('sanpham.spMa', [$spMa])->limit(4)->orderby('spMa', 'desc')->get();

        return view('pages.sanpham.show_details')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('details_sanpham', $details_sanpham)->with('related_sanpham', $related_sanpham)->with('gallery', $gallery);
    }

    //Comment
    public function load_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comment = BinhLuan::where('spMa', $product_id)->where('blParent', '=', 0)->where('blTrangThai', 0)->get();
        $comment_rep = BinhLuan::with('product')->where('blParent', '>', 0)->get();
        $output = '';
        foreach ($comment as $key => $com) {
            $output .= '
            <div class="row" style="padding-bottom:20px">
            <div class="col-md-2">
                <img src="' . url('/public/frontend/img/child-1837375_1280.png') . '" class="img img-rounded img-fluid"/>
                <p class="text-secondary text-center">' . $com->blNgay . '</p>
            </div>
            <div class="col-md-10">
                <p>
                    <a class="float-left"><strong>' . $com->blTen . '</strong></a>
                </p>
                <div class="clearfix"></div>
                <p>' . $com->blNoiDung . '</p>
            </div>
            </div>
            ';
            foreach ($comment_rep as $key => $repcom) {
                if ($repcom->blParent == $com->blMa) {
                    $output .= '
                    <div class="card card-inner" style="margin-bottom:20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="' . url('/public/frontend/img/girl_avatar_child_kid-512.png') . '" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary text-center">' . $repcom->blNgay . '</p>
                                </div>
                                <div class="col-md-10">
                                    <p><a><strong>' . $repcom->blTen . '</strong></a></p>
                                    <p>' . $repcom->blNoiDung . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
        }
        echo $output;
    }
    public function send_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_content = $request->comment_content;
        $comment = new BinhLuan();
        $comment->blTen = $comment_name;
        $comment->blNoiDung = $comment_content;
        $comment->spMa = $product_id;
        $comment->blTrangThai = 1;
        $comment->blParent = 0;
        $comment->save();
    }
    public function list_comment()
    {
        $this->AuthLogin();
        $comment = BinhLuan::with('product')->where('blParent', '=', 0)->orderBy('blMa', 'DESC')->get();
        $comment_rep = BinhLuan::with('product')->where('blParent', '>', 0)->get();
        return view('admin.comment.list_comment')->with(compact('comment', 'comment_rep'));
    }

    public function allow_comment(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $comment = BinhLuan::find($data['comment_id']);
        $comment->blTrangThai = $data['comment_status'];
        $comment->save();
    }

    public function reply_comment(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $comment = new BinhLuan();
        $comment->blNoiDung = $data['comment'];
        $comment->spMa = $data['comment_product_id'];
        $comment->blParent = $data['comment_id'];
        $comment->blTrangThai = 0;
        $comment->blTen = 'Quản trị viên';
        $comment->save();
    }

    public function delete_comment($blMa)
    {
        $this->AuthLogin();
        $binhluan = BinhLuan::find($blMa);
        $binhluan->delete();
        $binhluan_parent = BinhLuan::where('blParent', $blMa);
        $binhluan_parent->delete();
        return Redirect::to('comment')->with('success', 'Xóa bình luận thành công');
    }
}
