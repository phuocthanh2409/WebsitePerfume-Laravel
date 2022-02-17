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
        $to_email = "";

        $data= array("name"=>"")
    }
}
