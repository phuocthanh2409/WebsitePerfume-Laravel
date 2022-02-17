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
    public function index()
    {
        $phieunhap = DB::table('phieunhap')
            ->join('nhacungcap', 'phieunhap.nccMa', '=', 'nhacungcap.nccMa')
            ->select('phieunhap.*', 'nhacungcap.nccTen')
            ->get();

        print_r({{('phieunhap')}});
        /* $manager_phieunhap = view('admin.phieunhap')->with('index', $phieunhap);
        return view('admin_layout')->with('admin.phieunhap', $phieunhap); */
    }
}
