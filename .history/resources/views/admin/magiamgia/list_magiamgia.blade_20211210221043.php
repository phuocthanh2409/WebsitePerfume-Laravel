@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách mã giảm giá</h2>
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
              <th>Tên mã giảm giá</th>
              <th>Mã giảm giá</th>
              <th>Số lượng</th>
              <th>Phương thức</th>
              <th>Giá trị</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($magiamgia as $key => $mgg)
            <tr class="odd gradeX">
              <td>{{$mgg->mggTen}}</td>
              <td>{{$mgg->mggCode}}</td>
              <td>{{$mgg->mggSoLuong}}</td>
              <td>
                <?php
                  if($mgg->mggPhuongThuc==0){
                ?>
                  Giảm theo phần trăm
                  <?php 
                  }else{
                  ?>
                  Giảm theo giá tiền
                  <?php
                  }
                ?>
              </td>
              <td>
                <?php
                  if($mgg->mggPhuongThuc==0){
                ?>
                  Giảm {{$mgg->mggGiaTri}} %
                  <?php 
                  }else{
                  ?>
                  Giảm {{$mgg->mggGiaTri}} đồng
                  <?php
                  }
                ?>
              </td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-magiamgia/'.$brand_pro->thMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-thuonghieu/'.$brand_pro->thMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection