<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Models\Banner;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        //banner 
        $slider = Banner::orderBy('sliderMa', 'DESC')->where('sliderTrangThai', '1')->get();
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();

        $all_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->where('spTrangThai', '1')
            ->orderby(DB::raw('RAND()'))
            ->limit(8)
            ->get();


        $new_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->where('spTrangThai', '1')
            ->orderby('sanpham.spMa', 'desc')
            ->limit(1)
            ->get();

        return view('pages.home')->with('loaisanpham', $loaisanpham)->with('sanpham', $all_sanpham)->with('new_sanpham', $new_sanpham)->with('slider', $slider);
    }
}
