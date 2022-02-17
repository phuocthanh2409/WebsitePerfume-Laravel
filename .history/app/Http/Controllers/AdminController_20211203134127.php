<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

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
            Session::put('qtTen', $result->qtTen);
            Session::put('qtMa', $result->qtMa);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Email đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại');
            return Redirect::to('/admin');
        }
    }
    public function logout()
    {
        Session::put('qtTen', null);
        Session::put('qtMa', null);
    }
}
