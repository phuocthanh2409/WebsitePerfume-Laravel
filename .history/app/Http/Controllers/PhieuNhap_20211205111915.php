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
        /* $data = DB::table('phieunhap') */
        $phieunhap = DB::table('phieunhap')->get();
        $nhacungcap = DB::table('nhacungcap')->get();
        /* $manager_phieunhap = view('admin.phieunhap')->with('index', $phieunhap); */

        return view('admin_layout')->with('phieunhap', $phieunhap)->with('nhacungcap', $nhacungcap);
    }
}
