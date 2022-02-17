<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaiSanPham extends Controller
{
    public function all_loaisanpham()
    {
        return view('admin.all_loaisanpham');
    }

    public function add_loaisanpham()
    {
        return view('admin.add_loaisanpham');
    }
}
