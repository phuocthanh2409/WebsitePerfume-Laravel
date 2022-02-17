@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách thương hiệu sản phẩm</h2>
      </div>
      <div class="card-body">
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
                {{ session('error') }}
        </div>
        @endif
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên thương hiệu</th>
              <th>Mô tả thương hiệu</th>
              <th>Hiển thị</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_thuonghieu as $key => $brand_pro)
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