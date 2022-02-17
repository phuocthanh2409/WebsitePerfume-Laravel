@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách đơn hàng</h2>
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
            </tr>
          </thead>
          <tbody>
            @foreach($all_donhang as $key => $order)
            <tr class="odd gradeX">
              <td>{{$order->khTen}}</td>
              <td>{{$order->dhTongTien}}</td>
              <td>{{$order->dhTrangThai}}</td>
              <td class="actions">
                <?php
                  if($order->loaiTrangThai==1){
                ?>
                  <a href="{{URL::to('/unactive-loaisanpham/'.$order->loaiMa)}}" class="icon"><span class="mdi mdi-check" style="color:green"></span></a>
                  <?php 
                  }else{
                  ?>
                  <a href="{{URL::to('/active-loaisanpham/'.$order->loaiMa)}}" class="icon"><span class="mdi mdi-close" style="color:red"></a>
                  <?php
                  }
                ?>
              </td>
              <td class="actions" ><a class="icon" href="{{URL::to('/edit-loaisanpham/'.$order->loaiMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-loaisanpham/'.$order->loaiMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection