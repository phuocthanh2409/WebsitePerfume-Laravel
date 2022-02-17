<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Sesstion;
use Illuminate\Support\Facades\Redirect;

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
        $qtMatKhau = md5($request->qtMatKhau);

        $result = DB::table('quan_tri_vien')->where('qtEmail', $qtEmail)->where('qtMatKhau', $qtMatKhau)->first();
        if ($result) {
        }
    }
    public function logout()
    {
    }
}
