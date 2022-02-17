@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <p>Danh sách thương hiệu sản phẩm</p>
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
              <th>Tên thương hiệu</th>
              <th>Mô tả thương hiệu</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_thuonghieu as $key => $brand_pro)
            <tr class="odd gradeX">
              <td>{{$brand_pro->thTen}}</td>
              <td>{{$brand_pro->thMoTa}}</td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-thuonghieu/'.$brand_pro->thMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-thuonghieu/'.$cate_pro->loaiMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection