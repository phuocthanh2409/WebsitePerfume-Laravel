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
        $data = DB::table('phieunhap')
        $phieunhap = DB::table('phieunhap')->get();
        $manager_nhacungcap = view('admin.all_nhacungcap')->with('all_nhacungcap', $all_nhacungcap);

        return view('adminlayout')->with('admin.phieunhap', $data);
    }
}
