<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

session_start();

class MailController extends Controller
{
    public function send_mail()
    {
        $details = [
            'title' = 'Mmai from abc',
            'body' = 'Test mail'
        ];

        Mail::to('phuocthanh2409@gmail.com')->send(new \App\Mail\TestMail($details));

        dd("Email is send, please check your inbox");

        $to_name = "The Perfume";
        $to_email = "theperfume2409@gmail.com";

        $data = array("name" => "Mail từ tài khoản khách hàng", "body" => "Mail gửi về vấn đề hàng hóa");

        Mail::send('pages.sendmail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('Test gửi mail google');
            $message->from($to_email, $to_name);
        });
        return redirect('/')->with('message', '');
    }
}
