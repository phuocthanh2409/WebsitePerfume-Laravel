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
              <th>Hình thức thanh toans</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$shipping->shippingTen}}</td>
              <td>{{$shipping->shippingDiaChi}}</td>
              <td>{{$shipping->shippingSoDienThoai}}</td>
              <td>{{$shipping->shippingEmail}}</td>
              <td>{{$shipping->shippingGhiChu}}</td>
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
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Giá</th>
              <th>Tổng tiền</th>
            </tr>
          </thead>
          <tbody>
            @foreach($order_by_id as $key => $or)
            <tr class="odd gradeX">
              <td>{{$or->spTen}}</td>
              <td>{{$or->spSoLuongMua}}</td>
              <td>{{$or->spGia}}</td>
              <td>{{$or->dhTongTien}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection