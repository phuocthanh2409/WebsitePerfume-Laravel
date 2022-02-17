<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use App\Models\Shipping;
use App\Models\DonHang;
use App\Models\ChiTietDonHang;
use App\Models\PhiVanChuyen;
use App\Models\KhachHang;
use App\Models\MaGiamGia;
use App\Models\SanPham;
use App\Models\Statistic;
use Carbon\Carbon;

session_start();

class DatHangController extends Controller
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
    public function manage_donhang()
    {
        $this->AuthLogin();
        $order = DonHang::orderby('created_at', 'DESC')->get();
        return view('admin.manage_donhang')->with(compact('order'));
    }

    public function view_donhang($dhCode)
    {
        $this->AuthLogin();
        $order_details = ChiTietDonHang::with('product')->where('dhCode', $dhCode)->get();
        $order = DonHang::where('dhCode', $dhCode)->get();
        foreach ($order as $key => $ord) {
            $khMa = $ord->khMa;
            $shippingMa = $ord->shippingMa;
            $order_status = $ord->dhTrangThai;
        }
        $khachhang = KhachHang::where('khMa', $khMa)->first();
        $shipping = Shipping::where('shippingMa', $shippingMa)->first();

        $order_details = ChiTietDonHang::with('product')->where('dhCode', $dhCode)->get();

        foreach ($order_details as $key => $ord_d) {
            $spKhuyenMai = $ord_d->spKhuyenMai;
        }
        if ($spKhuyenMai != 'Không') {
            $coupon = MaGiamGia::where('mggCode', $spKhuyenMai)->first();
            $coupon_condition = $coupon->mggPhuongThuc;
            $coupon_number = $coupon->mggGiaTri;
        } else {
            $coupon_condition = 1;
            $coupon_number = 0;
        }

        return view('admin.view_donhang')->with(compact('order_details', 'khachhang', 'shipping', 'coupon_condition', 'coupon_number', 'order', 'order_status'));
    }

    public function update_donhang_soluong(Request $request)
    {
        $this->AuthLogin();
        //update order
        $data = $request->all();
        $order = DonHang::find($data['order_id']);
        $order->dhTrangThai = $data['order_status'];
        $order->save();

        //order date
        $order_date = $order->dhNgayDat;
        $statistic = Statistic::where('order_date', $order_date)->get();
        if ($statistic) {
            $statistic_count = $statistic->count();
        } else {
            $statistic_count = 0;
        }

        if ($order->dhTrangThai == 2) {

            $total_order = 0;
            $sales = 0;
            $profit = 0;
            $quantity = 0;

            foreach ($data['order_product_id'] as $key => $product_id) {
                $product = SanPham::find($product_id);
                $product_quantity = $product->spSoLuong;
                $product_sold = $product->spSoLuongDaBan;

                $product_price = $product->spGia;
                $product_cost = $product->spGiaGoc;
                $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

                foreach ($data['quantity'] as $key2 => $qty) {
                    if ($key == $key2) {
                        $pro_remain = $product_quantity - $qty;
                        $product->spSoLuong = $pro_remain;
                        $product->spSoLuongDaBan = $product_sold + $qty;
                        $product->save();

                        $quantity += $qty;
                        $total_order += 1;
                        $sales += $product_price * $qty;
                        $profit = $sales - ($product_cost * $qty);
                    }
                }
            }

            if ($statistic_count > 0) {
                $statistic_update = Statistic::where('order_date', $order_date)->first();
                $statistic_update->sales = $statistic_update->sales + $sales;
                $statistic_update->profit =  $statistic_update->profit + $profit;
                $statistic_update->quantity =  $statistic_update->quantity + $quantity;
                $statistic_update->total_order = $statistic_update->total_order + $total_order;
                $statistic_update->save();
            } else {
                $statistic_new = new Statistic();
                $statistic_new->order_date = $order_date;
                $statistic_new->sales = $sales;
                $statistic_new->profit =  $profit;
                $statistic_new->quantity =  $quantity;
                $statistic_new->total_order = $total_order;
                $statistic_new->save();
            }
        }
    }

    public function update_soluong(Request $request)
    {
        $data = $request->all();
        $order_details = ChiTietDonHang::where('spMa', $data['order_product_id'])->where('dhCode', $data['order_code'])->first();
        $order_details->spSoLuongMua = $data['order_qty'];
        $order_details->save();
    }
    public function history_donhang()
    {
        if (!Session::get('khMa')) {
            return redirect('login-checkout')->with('error', 'Vui lòng đăng nhập để xem lịch sử đơn hàng');
        } else {
            $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
            $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
            $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
            $order = DonHang::where('khMa', Session::get('khMa'))->orderby('created_at', 'DESC')->paginate(10);
            return view('pages.history.history')->with(compact('order', 'loaisanpham', 'thuonghieu', 'muasanpham'));
        }
    }
    public function view_history_donhang(Request $request, $dhCode)
    {
        if (!Session::get('khMa')) {
            return redirect('login-checkout')->with('error', 'Vui lòng đăng nhập để xem lịch sử đơn hàng');
        } else {
            $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
            $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
            $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

            $order_details = ChiTietDonHang::with('product')->where('dhCode', $dhCode)->get();
            $order = DonHang::where('dhCode', $dhCode)->get();
            foreach ($order as $key => $ord) {
                $khMa = $ord->khMa;
                $shippingMa = $ord->shippingMa;
                $order_status = $ord->dhTrangThai;
            }
            $khachhang = KhachHang::where('khMa', $khMa)->first();
            $shipping = Shipping::where('shippingMa', $shippingMa)->first();

            $order_details = ChiTietDonHang::with('product')->where('dhCode', $dhCode)->get();

            foreach ($order_details as $key => $ord_d) {
                $spKhuyenMai = $ord_d->spKhuyenMai;
            }
            if ($spKhuyenMai != 'Không') {
                $coupon = MaGiamGia::where('mggCode', $spKhuyenMai)->first();
                $coupon_condition = $coupon->mggPhuongThuc;
                $coupon_number = $coupon->mggGiaTri;
            } else {
                $coupon_condition = 1;
                $coupon_number = 0;
            }
            return view('pages.history.view_history_order')->with(compact('order', 'loaisanpham', 'thuonghieu', 'muasanpham', 'order_details', 'khachhang', 'shipping', 'coupon_condition', 'coupon_number', 'order', 'order_status'));
        }
    }
    public function huy_don_hang(Request $request)
    {
        $data = $request->all();
        $order = DonHang::where('dhCode', $data['id'])->first();
        $order->dhHuy = $data['lydo'];
        $order->dhTrangThai = 3;
        $order->save();
    }
    public function huy_don_hang_manage(Request $request)
    {
        //update order
        $data = $request->all();
        $order = DonHang::find($data['order_id']);
        $order->dhTrangThai = $data['order_status'];
        $order->save();

        //order date
        $order_date = $order->dhNgayDat;
        $statistic = Statistic::where('order_date', $order_date)->get();
        if ($statistic) {
            $statistic_count = $statistic->count();
        } else {
            $statistic_count = 0;
        }

        if ($order->dhTrangThai == 3) {

            $total_order = 0;
            $sales = 0;
            $profit = 0;
            $quantity = 0;

            foreach ($data['order_product_id'] as $key => $product_id) {
                $product = SanPham::find($product_id);
                $product_quantity = $product->spSoLuong;
                $product_sold = $product->spSoLuongDaBan;

                $product_price = $product->spGia;
                $product_cost = $product->spGiaGoc;
                $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

                foreach ($data['quantity'] as $key2 => $qty) {
                    if ($key == $key2) {
                        $pro_remain = $product_quantity + $qty;
                        $product->spSoLuong = $pro_remain;
                        $product->spSoLuongDaBan = $product_sold - $qty;
                        $product->save();

                        $quantity -= $qty;
                        $total_order -= 1;
                        $sales -= $product_price * $qty;
                        $profit = $sales + ($product_cost * $qty);
                    }
                }
            }

            if ($statistic_count > 0) {
                $statistic_update = Statistic::where('order_date', $order_date)->first();
                $statistic_update->sales = $statistic_update->sales + $sales;
                $statistic_update->profit =  $statistic_update->profit + $profit;
                $statistic_update->quantity =  $statistic_update->quantity + $quantity;
                $statistic_update->total_order = $statistic_update->total_order + $total_order;
                $statistic_update->save();
            } else {
                $statistic_new = new Statistic();
                $statistic_new->order_date = $order_date;
                $statistic_new->sales = $sales;
                $statistic_new->profit =  $profit;
                $statistic_new->quantity =  $quantity;
                $statistic_new->total_order = $total_order;
                $statistic_new->save();
            }
        }
    }
}
