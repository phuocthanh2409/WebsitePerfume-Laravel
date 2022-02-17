@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách mùa sản phẩm</h2>
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
              <th>phienhapma</th>
              <th>Mô tả mùa sản phẩm</th>
              <th>Hiển thị</th>
              <th>test</th>
              <th>test</th>
            </tr>
          </thead>
          <tbody>
            @foreach($phieunhap as $key => $mua_pro)
            <tr class="odd gradeX">
              <td>{{$mua_pro->pmMa}}</td>
              <td>{{$mua_pro->nccMa}}</td>
              <td>{{$mua_pro->nncTen}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection