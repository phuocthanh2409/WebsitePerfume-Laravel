@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách mã giảm giá</h2>
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
              <td class="actions"><a class="icon" href="{{URL::to('/edit-magiamgia/'.$mgg->mggMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-magiamgia/'.$mgg->mggMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection