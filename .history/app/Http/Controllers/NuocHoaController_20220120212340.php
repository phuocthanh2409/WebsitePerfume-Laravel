<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

session_start();

class NuocHoaController extends Controller
{
    public function index()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $all_sanpham = DB::table('sanpham')
            ->join('loaisanpham', 'loaisanpham.loaiMa', '=', 'sanpham.loaiMa')
            ->join('thuonghieu', 'thuonghieu.thMa', '=', 'sanpham.thMa')
            ->join('muasanpham', 'muasanpham.muaMa', '=', 'sanpham.muaMa')
            ->join('dungtich', 'dungtich.dtMa', '=', 'sanpham.dtMa')
            ->where('spTrangThai', '1')
            ->orderby(DB::raw('RAND()'))
            ->paginate(9);

        return view('pages.nuochoa')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('sanpham', $all_sanpham);
    }
    public function search(Request $request)
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();

        $keywords = $request->keywords_submit;

        $search_product = DB::table('sanpham')->where('spTrangThai', '1')->where('spTen', 'like', '%' . $keywords . '%')->paginate(3);

        return view('pages.sanpham.search')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham)->with('search_product', $search_product);
    }
}
