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
            </tr>
          </thead>
          <tbody>
            @foreach($magiamgia as $key => $mgg)
            <tr class="odd gradeX">
              <td>{{$brand_pro->thTen}}</td>
              <td>{{$brand_pro->thMoTa}}</td>
              <td class="actions">
                <?php
                  if($brand_pro->thTrangThai==1){
                ?>
                  <a href="{{URL::to('/unactive-thuonghieu/'.$brand_pro->thMa)}}" class="icon"><span class="mdi mdi-check" style="color:green"></span></a>
                  <?php 
                  }else{
                  ?>
                  <a href="{{URL::to('/active-thuonghieu/'.$brand_pro->thMa)}}" class="icon"><span class="mdi mdi-close" style="color:red"></a>
                  <?php
                  }
                ?>
              </td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-thuonghieu/'.$brand_pro->thMa)}}"><i class="mdi mdi-edit"></i></a></td>
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