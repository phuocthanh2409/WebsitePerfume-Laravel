@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách mùa sản phẩm</h2>
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
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên mùa sản phẩm</th>
              <th>Mô tả mùa sản phẩm</th>
              <th>Hiển thị</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_muasanpham as $key => $mua_pro)
            <tr class="odd gradeX">
              <td>{{$mua_pro->muaTen}}</td>
              <td>{{$mua_pro->muaMoTa}}</td>
              <td class="actions">
                <?php
                  if($mua_pro->muaTrangThai==1){
                ?>
                  <a href="{{URL::to('/unactive-muasanpham/'.$mua_pro->muaMa)}}" class="icon"><span class="mdi mdi-check" style="color:green"></span></a>
                  <?php 
                  }else{
                  ?>
                  <a href="{{URL::to('/active-muasanpham/'.$mua_pro->muaMa)}}" class="icon"><span class="mdi mdi-close" style="color:red"></a>
                  <?php
                  }
                ?>
              </td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-muasanpham/'.$mua_pro->muaMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-muasanpham/'.$mua_pro->muaMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection