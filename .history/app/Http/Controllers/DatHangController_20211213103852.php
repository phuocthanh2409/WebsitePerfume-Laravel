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
        $order_details = ChiTietDonHang::where('dhCode', $dhCode)->get();
        $order = DonHang::where('dhCode', $dhCode)->get();
        foreach ($order as $key => $ord) {
            $khMa = $ord->khMa;
            $shippingMa = $ord->shippingMa;
        }
        $khachhang = 
        return view('admin.manage_donhang')->with(compact('order_details'));
    }
}
