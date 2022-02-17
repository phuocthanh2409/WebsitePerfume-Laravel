<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Gallery;

session_start();

class GalleryController extends Controller
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
    public function add_gallery($spMa)
    {
        $this->AuthLogin();

        $pro_id = $spMa;
        return view('admin.gallery.add_gallery')->with(compact('pro_id'));
    }
}
