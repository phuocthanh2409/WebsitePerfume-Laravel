@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Liệt kê đơn hàng</h2>
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
              <th>Thứ tự đơn hàng</th>
              <th>Mã đơn hàng</th>
              <th>Tình trạng đơn hàng</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_loaisanpham as $key => $cate_pro)
            <tr class="odd gradeX">
              <td></td>
              <td>{{$cate_pro->loaiTen}}</td>
              <td>{{$cate_pro->loaiMoTa}}</td>
              <td class="actions" ><a class="icon" href="{{URL::to('/edit-loaisanpham/'.$cate_pro->loaiMa)}}"><i class="mdi mdi-edit"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection