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

session_start();

class DatHangController extends Controller
{
    public function manage_donhang()
    {
        $order = DonHang::orderby('created_at', 'DESC')->get();
        return view('admin.manage_donhang')->with(compact('order'));
    }

    public function view_donhang($dhCode)
    {
        $order_details = ChiTietDonHang::with('product')->where('dhCode', $dhCode)->get();
        $order = DonHang::where('dhCode', $dhCode)->get();
        foreach ($order as $key => $ord) {
            $khMa = $ord->khMa;
            $shippingMa = $ord->shippingMa;
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

        return view('admin.view_donhang')->with(compact('order_details', 'khachhang', 'shipping', 'coupon_condition', 'coupon_number', 'order'));
    }

    public function update_donhang_soluong(Request $request)
    {
        //update order
        $data = $request->all();
        $order = DonHang::find($data['order_id']);
        $order->dhTrangThai = $data['order_status'];
        $order->save();
        if ($order->dhTrangThai == 2) {
            foreach ($order_product_id as $key => $product_id) {
                $product = SanPham::find($product_id);
                $product_quantity = $product->spSoLuong;
                $product_sold = $product->spSoLuongDaBan;
                foreach ($quantity as $key2 => qty) {
                    if ($key == $key2) {
                        $pro_remain = $product_quantity = $qty;
                        $product->spSoLuong = $pro_remain;
                        $product->spSoLuongDaBan = $product_sold + $qty;
                        $product->save();
                    }
                }
            }
        }
    }
}
