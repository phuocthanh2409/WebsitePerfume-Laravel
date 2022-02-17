<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;

session_start();

class MailController extends Controller
{
    public function send_mail()
    {
        $to_name = "The Perfume";
        $to_email = "theperfume2409@gmail.com";

        $data = array("name" => "Mail từ tài khoản khách hàng", "body" => "Mail gửi về vấn đề hàng hóa");

        Mail::send('admin.', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject;
        });
    }
}
