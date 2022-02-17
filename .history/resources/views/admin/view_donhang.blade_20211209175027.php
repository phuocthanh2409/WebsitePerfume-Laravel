@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Thông tin người mua
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Tên người mua</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penelope Thornton</td>
              <td>23/06/2018</td>
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
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penelope Thornton</td>
              <td>23/06/2018</td>
              <td>60%</td>
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
              <th>Tên người đặt hàng</th>
              <th>Tổng giá tiền</th>
              <th>Tình trạng đơn hàng</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_donhang as $key => $order)
            <tr class="odd gradeX">
              <td>{{$order->khTen}}</td>
              <td>{{$order->dhTongTien}}</td>
              <td>{{$order->dhTrangThai}}</td>
              <td class="actions" ><a class="icon" href="{{URL::to('/view-donhang/'.$order->dhMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-donhang/'.$order->dhMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection