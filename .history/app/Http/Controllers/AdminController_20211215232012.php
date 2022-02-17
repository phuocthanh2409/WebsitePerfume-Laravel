<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Statistic;

session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('qtMa');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function index()
    {
        return view('admin_login');
    }
    public function show_dashboard()
    {
        $this->AuthLogin();
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
        $this->AuthLogin();
        Session::put('qtTen', null);
        Session::put('qtMa', null);
        return Redirect::to('/admin');
    }
    public function filter_by_date(Request $request)
    {
        $data = $request->all();
    }
}
