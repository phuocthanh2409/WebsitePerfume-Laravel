@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách khuyến mãi</h2>
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
              <th>Tên khuyến mãi</th>
              <th>Mô tả khuyến mãi</th>
              <th>Giá trị khuyến mãi</th>
              <th>Ngày bắt đầu</th>
              <th>Ngày kết thúc</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_khuyenmai as $key => $km_pro)
            <tr class="odd gradeX">
              <td>{{$km_pro->kmTen}}</td>
              <td>{{$km_pro->kmMoTa}}</td>
              <td>{{$km_pro->kmGiaTri}}</td>
              <td>{{$km_pro->kmNgayBatDau}}</td>
              <td>{{$km_pro->kmNgayKetThuc}}</td>
              <td class="actions" ><a class="icon" href="{{URL::to('/edit-khuyenmai/'.$km_pro->kmMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-khuyenmai/'.$km_pro->kmMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection