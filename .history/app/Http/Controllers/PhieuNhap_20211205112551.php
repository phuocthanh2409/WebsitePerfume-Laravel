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
    function index()
    {
        $phieunhap = DB::table('phieunhap')
            ->join('nhacungcap','nccMa','=','nhacungcap.nccMa')
            ->join()

        return view('admin_layout')->with('phieunhap', $phieunhap)->with('nhacungcap', $nhacungcap);
    }
}
