<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\KhachHang;

session_start();

class MailController extends Controller
{
    public function send_mail()
    {
        $details = [
            'title' => 'Mail from abc',
            'body' => 'Test mail'
        ];

        Mail::to('phuocthanh2409@gmail.com')->send(new \App\Mail\TestMail($details));

        dd("Email is send, please check your inbox");

        /* $to_name = "The Perfume";
        $to_email = "theperfume2409@gmail.com";

        $data = array("name" => "Mail từ tài khoản khách hàng", "body" => "Mail gửi về vấn đề hàng hóa");

        Mail::send('pages.sendmail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('Test gửi mail google');
            $message->from($to_email, $to_name);
        });
        return redirect('/')->with('message', ''); */
    }
    public function quen_mat_khau()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.quen_mat_khau')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function recover_pass(Request $request)
    {
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Lấy lại mật khẩu cửa hàng nước hoa The Perfume" . ' ' . $now;
        $token_random = Str::random();
        $customer = KhachHang::where('khEmail','=',$data['email_account'])
    }
}
