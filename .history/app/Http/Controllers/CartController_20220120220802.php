<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\MaGiamGia;
use App\Models\ThanhPho;
use App\Models\QuanHuyen;
use App\Models\PhiVanChuyen;

session_start();

class CartController extends Controller
{
    public function show_cart_quantity()
    {
        $cart = count(Session::get('cart'));
        $output = '';
        if ($cart > 0) {
            $output .= '<a href="' . url('/show-cart') . '"><img src="public/frontend/img/icon/cart.png"> <span>' . $cart . '</span></a>';
        } else {
            $output .= '<a href="' . url('/show-cart') . '"><img src="public/frontend/img/icon/cart.png"> <span>0</span></a>';
        }
        echo $output;
    }
    public function del_phivanchuyen()
    {
        Session::forget('phivanchuyen');
        return redirect()->back();
    }
    public function calculate_phivanchuyen(Request $request)
    {
        $data = $request->all();
        if ($data['matp'] != '--Chọn tỉnh thành phố--' && $data['maqh'] != '--Chọn quận huyện--' && $data['matp'] != '' && $data['maqh'] != '') {
            $phivanchuyen = PhiVanChuyen::where('matp', $data['matp'])->where('maqh', $data['maqh'])->get();
            if ($phivanchuyen) {
                $count_phivanchuyen = $phivanchuyen->count();
                if ($count_phivanchuyen > 0) {
                    foreach ($phivanchuyen as $key => $phi) {
                        Session::put('phivanchuyen', $phi->vcPhi);
                        Session::save();
                    }
                } else {
                    Session::put('phivanchuyen', 50000);
                    Session::save();
                }
            }
        }
    }
    public function select_delivery_home(Request $request)
    {
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "thanhpho") {
                $select_quanhuyen = QuanHuyen::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
                $output = '<option>--Chọn quận huyện--</option>';
                foreach ($select_quanhuyen as $key => $quanhuyen) {
                    $output .= '<option value="' . $quanhuyen->maqh . '">' . $quanhuyen->tenqh . '</option>';
                }
            }
            echo $output;
        }
    }
    public function add_cart(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');
        if ($cart == true) {
            $is_avaiable = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['cart_product_id']) {
                    $is_avaiable++;
                }
            }
            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_quantity' => $data['cart_product_quantity'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
            Session::put('cart', $cart);
        }
        Session::save();
    }
    public function show_cart(Request $request)
    {
        $url_canonical = $request->url();

        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        $city = ThanhPho::orderby('matp', 'ASC')->get();

        if ($request->session()->has('cart')) {
            return view('pages.giohang.show_giohang')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('url_canonical', $url_canonical)->with('city', $city);
        } else {
            return view('pages.giohang.show_giohang_rong')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('url_canonical', $url_canonical)->with('city', $city);
        }
    }
    public function delete_cart($session_id)
    {
        $cart = Session::get('cart');
        if ($cart == true) {
            foreach ($cart as $key => $value) {
                if ($value['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('success', 'Xóa sản phẩm thành công');
        } else {
            return redirect()->back()->with('error', 'Xóa sản phẩm thất bại');
        }
    }
    public function update_cart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        $message = '';
        $error = '';
        if ($cart == true) {
            foreach ($data['cart_qty'] as $key => $qty) {
                foreach ($cart as $session => $val) {
                    if ($val['session_id'] == $key && $qty < $cart[$session]['product_quantity']) {
                        $cart[$session]['product_qty'] = $qty;
                        $message .= 'Cập nhật số lượng: ' . $cart[$session]['product_name'] . ' thành công';
                    } elseif ($val['session_id'] == $key && $qty > $cart[$session]['product_quantity']) {
                        $error .= 'Cập nhật số lượng: ' . $cart[$session]['product_name'] . ' thất bại. Số lượng sản phẩm lớn hơn số lượng tồn trong kho';
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('success', $message)->with('error', $error);
        } else {
            return redirect()->back()->with('error', $message);
        }
    }
    public function save_cart(Request $request)
    {
        $data = array();
        $data['cart_product_name'] = $request->tensanpham;
        $data['cart_product_id'] = $request->masanpham;
        $data['cart_product_image'] = $request->hinhsanpham;
        $data['cart_product_price'] = $request->giasanpham;
        $data['cart_product_qty'] = $request->soluongsanpham;
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');

        if ($cart == true) {
            $is_avaiable = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['cart_product_id']) {
                    $is_avaiable++;
                }
            }
            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_name' => $data['cart_product_name'],
                    'product_id' => $data['cart_product_id'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );
            Session::put('cart', $cart);
        }
        Session::save();
        return Redirect::to('/show-cart');
    }

    public function check_magiamgia(Request $request)
    {
        $data = $request->all();
        $magiamgia = MaGiamGia::where('mggCode', $data['magiamgia'])->first();
        if ($magiamgia) {
            $count_magiamgia = $magiamgia->count();
            if ($magiamgia->mggSoLuong < 1) {
                return redirect()->back()->with('error', 'Mã giảm giá đã hết số lượng');
            } else if ($count_magiamgia > 0) {
                $magiamgia_session = Session::get('coupon');
                if ($magiamgia_session == true) {
                    $is_avaiable = 0;
                    if ($is_avaiable == 0) {
                        $cou[] = array(
                            'mggCode' => $magiamgia->mggCode,
                            'mggPhuongThuc' => $magiamgia->mggPhuongThuc,
                            'mggGiaTri' => $magiamgia->mggGiaTri
                        );
                        Session::put('coupon', $cou);
                    }
                } else {
                    $cou[] = array(
                        'mggCode' => $magiamgia->mggCode,
                        'mggPhuongThuc' => $magiamgia->mggPhuongThuc,
                        'mggGiaTri' => $magiamgia->mggGiaTri
                    );
                    Session::put('coupon', $cou);
                }
                Session::save();
                return redirect()->back()->with('success', 'Thêm mã giảm giá thành công');
            } else {
                return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ');
            }
        } else {
            return redirect()->back()->with('error', 'Mã giảm giá không hợp lệ');
        }
    }
    public function unset_magiamgia()
    {
        $coupon = Session::get('coupon');
        if ($coupon == true) {
            Session::forget('coupon');
            return redirect()->back()->with('success', 'Xóa mã giảm giá thành công');
        } else {
            return redirect()->back()->with('error', 'Xóa mã giảm giá thất bại');
        }
    }
}
