@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Thông tin khách hàng
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Tên khách hàng</th>
              <th>Email</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$khachhang->khTen}}</td>
              <td>{{$khachhang->khEmail}}</td>
              <td>{{$khachhang->khSoDienThoai}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Thông tin vận chuyển
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Tên người nhận</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
              <th>Email</th>
              <th>Ghi chú</th>
              <th>Hình thức thanh toán</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$shipping->shippingTen}}</td>
              <td>{{$shipping->shippingDiaChi}}</td>
              <td>{{$shipping->shippingSoDienThoai}}</td>
              <td>{{$shipping->shippingEmail}}</td>
              <td>{{$shipping->shippingGhiChu}}</td>
              <td>
                @if($shipping->shippingPhuongThuc == 0)
                  Thanh toán tiền mặt
                @else
                  Thanh toán chuyển khoản
                @endif
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Chi tiết đơn hàng</h2>
        <?php 
        $message = Session::get('message');
        if($message){
            echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: red;">',$message.'</div>';
            Session::put('message',null);
        }
      ?>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Thứ tự</th>
              <th>Tên sản phẩm</th>
              <th>Mã giảm giá</th>
              <th>Số lượng</th>
              <th>Giá sản phẩm</th>
              <th>Tổng tiền</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0 ; 
            $total = 0;
            ?>
            @foreach($order_details as $key => $details)
            <?php
            $i++;
            $subtotal = $details->spGia * $details->spSoLuongMua;
            $total += $subtotal;
            ?>
            <tr class="odd gradeX">
              <td>{{$i}}</td>
              <td>{{$details->spTen}}</td>
              <td>
                @if($details->spKhuyenMai!='Không')
                  {{$details->spKhuyenMai}}
                @else 
                  Không mã
                @endif  
              </td>
              <td>{{$details->spSoLuongMua}}</td>
              <td>{{number_format($details->spGia,0,',','.')}} VNĐ</td>
              <td>{{number_format($subtotal,0,',','.')}} VNĐ</td>
            </tr>
            @endforeach
            <tr>
              <td>Thanh toán: 
                <?php 
                  $total_coupon =0 ;
                ?>
                @if($coupon_condition == 0)
                <?php
                  $total_after_coupon = ($total*$coupon_number)/100;
                ?>
                @else 
                  <?php
                  $total_coupon = $total - $coupon_number; 
                  ?>
                @endif
                {{number_format($total,0,',','.')}} VNĐ
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection