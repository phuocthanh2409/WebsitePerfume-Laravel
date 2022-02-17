@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách loại sản phẩm</h2>
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
              <th>Tên loại sản phẩm</th>
              <th>Mô tả loại sản phẩm</th>
              <th>Hiển thị</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_loaisanpham as $key => $cate_pro)
            <tr class="odd gradeX">
              <td>{{$cate_pro->loaiTen}}</td>
              <td>{{$cate_pro->loaiMoTa}}</td>
              <td class="actions">
                <?php
                  if($cate_pro->loaiTrangThai==0){
                    echo '<a href="#" class="icon"><span class="mdi mdi-check"></span></a>';
                  } 
                  else{
                    echo '<a href="#" class="icon"><span class="mdi mdi-close"></a>';
                  }
                ?>
              </td>
              <td class="actions" ><a class="icon" href="{{URL::to('/edit-loaisanpham/'.$cate_pro->loaiMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-loaisanpham/'.$cate_pro->loaiMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection