<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatHangController extends Controller
{
    public function manage_order()
    {
        return view('admin.manage_donhang');
    }
}
