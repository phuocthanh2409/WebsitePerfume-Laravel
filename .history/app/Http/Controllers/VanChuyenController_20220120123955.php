<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThanhPho;
use App\Models\QuanHuyen;
use App\Models\PhiVanChuyen;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class VanChuyenController extends Controller
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
    public function delivery(Request $request)
    {
        $this->AuthLogin();
        $city = ThanhPho::orderby('matp', 'ASC')->get();

        return view('admin.vanchuyen.add_vanchuyen')->with(compact('city'));
    }
    public function select_delivery(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        if ($data['action']) {
            $output = '';
            if ($data['action'] == "thanhpho") {
                $select_quanhuyen = QuanHuyen::where('matp', $data['ma_id'])->orderby('maqh', 'ASC')->get();
                $output = '<option>--Chọn quận huyện--</option>';
                foreach ($select_quanhuyen as $key => $quanhuyen) {
                    $output .= '<option value="' . $quanhuyen->maqh . '">' . $quanhuyen->tenqh . '</option>';
                }
            }
            echo $output;
        }
    }
    public function insert_delivery(Request $request)
    {
        $this->AuthLogin();
        $request->validate(
            [
                'maqh' => 'required|unique:loaisanpham|max:191',
                'phivanchuyen' => 'required|min:1|numeric|not_in:0'
            ],
            [
                'maqh.required' =>  'Vui lòng nhập tên loại sản phẩm',
                'maqh.max' =>  'Tên loại sản phẩm quá dài. Vui lòng kiểm tra lại',
                'maqh.unique' =>  'Tên loại sản phẩm đã bị trùng. Vui lòng kiểm tra lại',
                'phivanchuyen.required' => 'Vui lòng nhập phí vận chuyển',
                'phivanchuyen.min' => 'Phí vận chuyển không được dưới 1. Vui lòng kiểm tra lại',
                'phivanchuyen.numeric' => 'Phí vận chuyển phải là kiểu số. Vui lòng kiểm tra lại'
            ]
        );
        $data = $request->all();
        $phi_ship = new PhiVanChuyen();
        $phi_ship->matp = $data['thanhpho'];
        $phi_ship->maqh = $data['maqh'];
        $phi_ship->vcPhi = $data['phivanchuyen'];
        $phi_ship->save();
    }
    public function select_phivanchuyen()
    {
        $this->AuthLogin();
        $phivanchuyen = PhiVanChuyen::orderby('vcMa', 'DESC')->get();
        $output = '';
        $output .= '<div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên thành phố</th>
                        <th>Tên quận huyện</th>
                        <th>Phí ship</th>
                    </tr>
                </thead>
                <tbody>
                ';
        foreach ($phivanchuyen as $key => $phi) {

            $output .= '
                    <tr>
                        <td>' . $phi->thanhpho->tentp . '</td>
                        <td>' . $phi->quanhuyen->tenqh . '</td>
                        <td contenteditable data-vc_ma="' . $phi->vcMa . '" class="phivanchuyen_edit">' . number_format($phi->vcPhi, 0, ',', '.') . '</td>
                    </tr>
                    ';
        }
        $output .= '
                </tbody>
            </table>
        </div>
        ';

        echo $output;
    }
    public function update_phivanchuyen(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $phi_ship = PhiVanChuyen::find($data['phivanchuyen_ma']);
        $phi_value = rtrim($data['phivanchuyen_giatri'], '.');
        $phi_ship->vcPhi = $phi_value;
        $phi_ship->save();
    }
}
