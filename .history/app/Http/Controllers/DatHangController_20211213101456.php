<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatHangController extends Controller
{
    public function manage_dathang()
    {
        return view('admin.manage_donhang');
    }
}
