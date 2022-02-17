@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách bình luận</h2>
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
              <th>Duyệt</th>
              <th>Tên người gửi</th>
              <th>Bình luận</th>
              <th>Dung tích</th>
              <th>Số lượng tồn</th>
              <th>Số lượng đã bán</th>
              <th>Hình ảnh</th>
              <th>Hiển thị</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_sanpham as $key => $sp_pro)
            <tr class="odd gradeX">
              <td>{{$sp_pro->spTen}}</td>
              <td><a href="{{url('/add-gallery/'.$sp_pro->spMa)}}">Thêm thư viện ảnh</a></td>
              <td>{{$sp_pro->spGia}}</td>
              <td>{{$sp_pro->dtTen}}</td>
              <td>{{$sp_pro->spSoLuong}}</td>
              <td>{{$sp_pro->spSoLuongDaBan}}</td>
              <td><img src="public/uploads/product/{{$sp_pro->spHinhAnh}}" height="100" width="100"></td>
              <td class="actions">
                <?php
                  if($sp_pro->spTrangThai==1){
                ?>
                  <a href="{{URL::to('/unactive-sanpham/'.$sp_pro->spMa)}}" class="icon"><span class="mdi mdi-check" style="color:green"></span></a>
                  <?php 
                  }else{
                  ?>
                  <a href="{{URL::to('/active-sanpham/'.$sp_pro->spMa)}}" class="icon"><span class="mdi mdi-close" style="color:red"></a>
                  <?php
                  }
                ?>
              </td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-sanpham/'.$sp_pro->spMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-sanpham/'.$sp_pro->spMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection