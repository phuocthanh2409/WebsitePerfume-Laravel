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
            ->where('chitietphieunhap.pnMa', $pnMa)
            ->select('chitietphieunhap.*', 'nhacungcap.*', 'phieunhap.*', 'sanpham.*')
            ->get();
        $manager_detailphieunhap = view('admin.detail_phieunhap')->with('detail_phieunhap', $detail_phieunhap);
        return view('admin_layout')->with('admin.detail_phieunhap', $manager_detailphieunhap);
    }

    public function add_phieunhap()
    {
        $nhacungcap = DB::table('nhacungcap')->orderby('nccMa', 'desc')->get();
        $phieunhap = DB::table('phieunhap')->orderby('pnMa', 'desc')->get();
        $sanpham = DB::table('sanpham')->orderby('spMa', 'desc')->get();

        return view('admin.add_phieunhap');
    }

    public function save_phieunhap(Request $request)
    {
        $data = array();
        $data['nccTen'] = $request->nhacungcap_ten;
        $data['nccSoDienThoai'] = $request->nhacungcap_sodienthoai;
        $data['nccDiaChi'] = $request->nhacungcap_diachi;

        DB::table('nhacungcap')->insert($data);
        Session::put('message', 'Thêm nhà cung cấp thành công');
        return Redirect::to('all-nhacungcap');
    }
}
