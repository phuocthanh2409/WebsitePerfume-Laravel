<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }
    public function show_dashboard()
    {
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $qtEmail = $request->qtEmail;
        $qtMatKhau = mdm5($request->qtMatKhau);

        $result = DB::table('quan_tri_vien')->where('qtEmail', $qtEmail)->where('qtMatKhau', $qtMatKhau)->first();
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}
