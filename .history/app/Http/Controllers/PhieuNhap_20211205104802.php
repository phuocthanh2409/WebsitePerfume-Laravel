<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class PhieuNhap extends Controller
{
    function index()
    {
        $data = Country::join('phieunhap', 'phieunhap.nccMa', '=', 'nhacungcap.nccMa')
            ->get(['phieunhap.pnTen', 'nhacungcap.nccTen']);
    }
}
