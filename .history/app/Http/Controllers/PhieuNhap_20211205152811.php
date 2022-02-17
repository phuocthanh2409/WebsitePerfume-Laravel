<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;


session_start();

class PhieuNhap extends Controller
{
    public function all_phieunhap()
    {
        $all_phieunhap = DB::table('phieunhap')
            ->join('nhacungcap', 'phieunhap.nccMa', '=', 'nhacungcap.nccMa')
            ->select('phieunhap.*', 'nhacungcap.*')
            ->get();
        $manager_phieunhap = view('admin.all_phieunhap')->with('all_phieunhap', $all_phieunhap);
        return view('admin_layout')->with('admin.all_phieunhap', $manager_phieunhap);
    }

    public function detail_phieunhap($pnMa)
    {
        $detail_phieunhap = DB::table('chitietphieunhap')
            ->join('nhacungcap', 'chitietphieunhap.nccMa', '=', 'nhacungcap.nccMa')
            ->join('phieunhap', 'chitietphieunhap.pnMa', '=', 'phieunhap.pnMa')
            ->join('sanpham', 'chitietphieunhap.spMa', '=', 'sanpham.spMa')
            ->select('chitietphieunhap.*', 'nhacungcap.*', 'phieunhap.*', 'sanpham.*')
            ->where('pnMa', $pnMa)
            ->get();

        $manager_detailphieunhap = view('admin.detail_phieunhap')->with('detail_phieunhap', $detail_phieunhap);
        return view('admin_layout')->with('admin.detail_phieunhap', $manager_detailphieunhap);
    }
}
