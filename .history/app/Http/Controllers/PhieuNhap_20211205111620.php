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
        $manager_phieunhap = view('admin.phieunhap')->with('index', $phieunhap);

        return view('adminlayout')->with('admin.phieunhap', $manager_phieunhap);
    }
}
