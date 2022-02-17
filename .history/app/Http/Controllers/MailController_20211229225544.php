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
        $request->validate(
            [
                'email_account' => 'required|max:191|email:rfc,dns,strict,spoof,filter'
            ],
            [
                'email_account.required' => 'Vui lòng nhập email để thực hiện chức năng',
                'email_account.max' => 'Email của bạn quá dài. Vui lòng kiểm tra lại',
                'email_account.email' => 'Email của bạn không đúng định dạng. Vui lòng kiểm tra lại'
            ]
        );
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Lấy lại mật khẩu tài khoản cửa hàng nước hoa The Perfume" . ' ' . $now;
        $customer = KhachHang::where('khEmail', '=', $data['email_account'])->get();
        foreach ($customer as $key => $value) {
            $customer_id = $value->khMa;
        }
        if ($customer) {
            $count_customer = $customer->count();
            if ($count_customer == 0) {
                return redirect()->back()->with('error', 'Email chưa được đăng kí');
            } else {
                $token_random = Str::random();
                $customer = KhachHang::find($customer_id);
                $customer->khToken = $token_random;
                $customer->save();

                $to_email = $data['email_account'];
                $link_reset_pass = url('/update-new-pass?email=' . $to_email . '&token=' . $token_random);

                $data = array("name" => $title_mail, "body" => $link_reset_pass, 'email' => $data['email_account']);

                Mail::send('pages.checkout.forget_pass_notify', ['data' => $data], function ($message) use ($title_mail, $data) {
                    $message->to($data['email'])->subject($title_mail);
                    $message->from($data['email'], $title_mail);
                });
                return redirect()->back()->with('success', 'Đã gửi link khôi phục mật khẩu vào email của bạn. Vui lòng vào email để thực hiện khôi phục mật khẩu');
            }
        }
    }
    public function update_new_pass()
    {
        $loaisanpham = DB::table('loaisanpham')->where('loaiTrangThai', '1')->orderby('loaiMa', 'asc')->get();
        $thuonghieu = DB::table('thuonghieu')->where('thTrangThai', '1')->orderby('thMa', 'asc')->get();
        $muasanpham = DB::table('muasanpham')->where('muaTrangThai', '1')->orderby('muaMa', 'asc')->get();
        return view('pages.checkout.new_pass')->with('loaisanpham', $loaisanpham)->with('thuonghieu', $thuonghieu)->with('muasanpham', $muasanpham);
    }
    public function reset_new_pass(Request $request)
    {
        $data = $request->all();
        $token_random = Str::random();
        $customer = KhachHang::where('khEmail', '=', $data['email'])->where('khToken', '=', $data['token'])->get();
        $count = $customer->count();
        if ($count > 0) {
            foreach ($customer as $key => $cus) {
                $customer_id = $cus->khMa;
            }
            $reset = KhachHang::find($customer_id);
            $reset->khMatKhau = md5($data['password_account']);
            $reset->khToken = $token_random;
            $reset->save();
            return redirect('login-checkout')->with('success', 'Mật khẩu của bạn đã đươc cập nhật');
        } else {
            return redirect('quen-mat-khau')->with('error', 'Vui lòng nhập lại email vì link đã quá hạn');
        }
    }
}
