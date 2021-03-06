<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Statistic;
use Carbon\Carbon;
use App\Models\TruyCap;
use App\Models\QuanTriVien;

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

    public function show_dashboard(Request $request)
    {
        $this->AuthLogin();

        //get ip address
        $user_ip_address = $request->ip();

        $early_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();

        $end_of_last_month = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();

        $early_this_month = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();

        $oneyears = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        //total last month
        $visitor_of_lastmonth = TruyCap::whereBetween('date_visitors', [$early_last_month, $end_of_last_month])->get();
        $visitor_last_month_count = $visitor_of_lastmonth->count();

        //total this month
        $visitor_of_thismonth = TruyCap::whereBetween('date_visitors', [$early_this_month, $now])->get();
        $visitor_this_month_count = $visitor_of_thismonth->count();

        //total in one year
        $visitor_of_year = TruyCap::whereBetween('date_visitors', [$oneyears, $now])->get();
        $visitor_year_count = $visitor_of_year->count();

        //total visitors
        $visitors = TruyCap::all();
        $visitors_total = $visitors->count();

        //current online
        $visitors_current = TruyCap::where('ip_address', $user_ip_address)->get();
        $visitor_count = $visitors_current->count();

        if ($visitor_count < 1) {
            $visitor = new TruyCap();
            $visitor->ip_address = $user_ip_address;
            $visitor->date_visitor = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
        }

        /* //total 
    $product = Product::all()->count();
    $post = Post::all()->count();
    $order = Order::all()->count();
    $video = Video::all()->count();
    $customer = Customer::all()->count();

    $product_views = Product::orderBy('product_views','DESC')->take(20)->get();
    $post_views = Post::orderBy('post_views','DESC')->take(20)->get(); */


        return view('admin.dashboard')->with(compact('visitors_total', 'visitor_count', 'visitor_last_month_count', 'visitor_this_month_count', 'visitor_year_count'));
    }
    public function dashboard(Request $request)
    {
        $request->validate(
            [
                'qtEmail' => 'required|max:191|email:rfc,dns,strict,spoof,filter',
                'qtMatKhau' => 'required|max:191'
            ],
            [
                'qtEmail.required' =>  'Vui l??ng nh???p email ????? ????ng nh???p',
                'qtMatKhau.required' => 'Vui l??ng nh???p m???t kh???u ????? ????ng nh???p',
                'qtEmail.max' => 'Email ????ng nh???p qu?? d??i. Vui l??ng ki???m tra l???i',
                'qtMatKhau.max' => 'M???t kh???u ????ng nh???p qu?? d??i. Vui l??ng ki???m tra l???i',
                'qtEmail.email' => 'Email ????ng nh???p kh??ng ????ng ?????nh d???ng. Vui l??ng ki???m tra l???i'
            ]
        );
        $qtEmail = $request->qtEmail;
        $qtMatKhau = md5($request->qtMatKhau);

        $result = DB::table('quan_tri_vien')->where('qtEmail', $qtEmail)->where('qtMatKhau', $qtMatKhau)->first();
        if ($result) {
            Session::put('qtTen', $result->qtTen);
            Session::put('qtSoDienThoai', $result->qtSoDienThoai);
            Session::put('qtMa', $result->qtMa);
            return Redirect::to('/dashboard');
        } else {
            return Redirect::to('/admin')->with('error', 'Email ????ng nh???p ho???c m???t kh???u kh??ng ????ng. Vui l??ng nh???p l???i');
        }
    }
    public function logout()
    {
        $this->AuthLogin();
        Session::put('qtTen', null);
        Session::put('qtMa', null);
        Session::put('qtSoDienThoai', null);
        return Redirect::to('/admin');
    }
    public function filter_by_date(Request $request)
    {
        $data = $request->all();

        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = Statistic::whereBetween('order_date', [$from_date, $to_date])->orderBy('order_date', 'ASC')->get();

        foreach ($get as $key => $val) {
            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }
        echo $data = json_encode($chart_data);
    }
    public function dashboard_filter(Request $request)
    {
        $data = $request->all();

        // $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        // $tomorrow = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->format('d-m-Y H:i:s');
        // $lastWeek = Carbon::now('Asia/Ho_Chi_Minh')->subWeek()->format('d-m-Y H:i:s');
        // $sub15days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(15)->format('d-m-Y H:i:s');
        // $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->format('d-m-Y H:i:s');

        $dauthangnay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thangtruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();



        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $sub365days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

        $dauthang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->startOfMonth()->toDateString();
        $cuoithang9 = Carbon::now('Asia/Ho_Chi_Minh')->subMonth(2)->endOfMonth()->toDateString();


        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        if ($data['dashboard_value'] == '7ngay') {

            $get = Statistic::whereBetween('order_date', [$sub7days, $now])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thangtruoc') {

            $get = Statistic::whereBetween('order_date', [$dau_thangtruoc, $cuoi_thangtruoc])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thangnay') {

            $get = Statistic::whereBetween('order_date', [$dauthangnay, $now])->orderBy('order_date', 'ASC')->get();
        } elseif ($data['dashboard_value'] == 'thang9') {

            $get = Statistic::whereBetween('order_date', [$dauthang9, $cuoithang9])->orderBy('order_date', 'ASC')->get();
        } else {
            $get = Statistic::whereBetween('order_date', [$sub365days, $now])->orderBy('order_date', 'ASC')->get();
        }


        foreach ($get as $key => $val) {

            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }

        echo $data = json_encode($chart_data);
    }
    public function days_order(Request $request)
    {
        $sub30days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();

        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        $get = Statistic::whereBetween('order_date', [$sub30days, $now])->orderBy('order_date', 'ASC')->get();


        foreach ($get as $key => $val) {

            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity
            );
        }

        echo $data = json_encode($chart_data);
    }
    public function admin_thongtin()
    {
        $this->AuthLogin();
        return view('admin.thongtin.admin_thongtin');
    }
    public function save_adminthongtin(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'quantriten' => 'required|max:191',
                'quantrisdt' => 'required|size:10'
            ],
            [
                'quantriten.required' =>  'Vui l??ng nh???p t??n qu???n tr??? vi??n',
                'quantrisdt.required' => 'Vui l??ng nh???p s??? ??i???n tho???i qu???n tr??? vi??n',
                'quantriten.max' => 'T??n qu???n tr??? vi??n qu?? d??i. Vui l??ng ki???m tra l???i',
                'quantrisdt.size' => 'S??? ??i???n tho???i qu???n tr??? bao g???m 10 s???. Vui l??ng ki???m tra l???i'
            ]
        );
        $maquantri = Session::get('qtMa');
        if ($maquantri) {
            $data = $request->all();
            $thongtin = QuanTriVien::find($maquantri);
            $thongtin->qtTen = $data['quantriten'];
            $thongtin->qtSoDienThoai = $data['quantrisdt'];
            $thongtin->save();
            Session::put('qtTen', $thongtin->qtTen);
            Session::put('qtSoDienThoai', $thongtin->qtSoDienThoai);
            return Redirect::to('admin-thongtin')->with('success', 'C???p nh???t th??ng tin t??i kho???n th??nh c??ng');
        } else {
            return Redirect::to('admin-thongtin')->with('error', 'Vui l??ng ????ng nh???p ????? th???c hi???n ch???c n??ng');
        }
    }
    public function doimatkhau_quantri()
    {
        return view('admin.thongtin.admin_doimatkhau');
    }
    public function save_matkhauquantri(Request $request)
    {
        $request->validate(
            [
                'quantrimatkhaucu' => 'required|max:191',
                'quantrimatkhaumoi' => 'required|max:191'
            ],
            [
                'quantrimatkhaucu.required' =>  'Vui l??ng nh???p m???t kh???u hi???n t???i c???a qu???n tr??? vi??n',
                'quantrimatkhaumoi.required' => 'Vui l??ng nh???p m???t kh???u qu???n tr??? vi??n mu???n ?????i',
                'quantrimatkhaucu.max' => 'M???t kh???u hi???n t???i c???a qu???n tr??? vi??n qu?? d??i. Vui l??ng ki???m tra l???i',
                'quantrimatkhaumoi.max' => 'M???t kh???u qu???n tr??? vi??n mu???n ?????i qu?? d??i. Vui l??ng ki???m tra l???i'
            ]
        );
        $maquantri = Session::get('qtMa');
        if ($maquantri) {
            $data = $request->all();
            $matkhaucu = md5($data['matkhaucu']);
            $thongtin = KhachHang::where('khMa', '=', $makhachhang)->where('khMatKhau', '=', $matkhaucu)->first();
            if ($thongtin) {
                $thongtin->khMatKhau = md5($data['matkhaumoi']);
                $thongtin->save();
                return Redirect::to('doi-mat-khau')->with('success', 'C???p nh???t th??ng tin t??i kho???n th??nh c??ng');
            } else {
                return Redirect::to('doi-mat-khau')->with('error', 'M???t kh???u hi???n t???i kh??ng ????ng. Vui l??ng nh???p l???i');
            }
        } else {
            return Redirect::to('tai-khoan')->with('error', 'Vui l??ng ????ng nh???p ????? th???c hi???n ch???c n??ng');
        }
    }
}
