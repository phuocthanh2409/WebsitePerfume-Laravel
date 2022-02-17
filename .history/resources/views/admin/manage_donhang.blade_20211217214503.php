@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Quản lý đơn hàng</h2>
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
              <th>Thứ tự đơn hàng</th>
              <th>Mã đơn hàng</th>
              <th>Tình trạng đơn hàng</th>
              <th>Ngày đặt</th>
              <th>Chi tiết đơn hàng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0; 
            ?>
            @foreach($order as $key => $ord)
              <?php
              $i++; 
              ?>
            <tr class="odd gradeX">
              <td>{{$i}}</td>
              <td>{{$ord->dhCode}}</td>
              <td>
                @if($ord->dhTrangThai==1)
                  <span style="color: blue">Đơn hàng mới</span>
                @elseif($ord->dhTrangThai==2)
                  <span style="color: green">Đơn hàng đã xử lý</span>
               @else 
                  <span style="color: red">Đơn hàng đã hủy</span>
                @endif
              </td>
              <td>{{$ord->dhNgayDat}}</td>
              <td class="actions" ><a class="icon" href="{{URL::to('/view-donhang/'.$ord->dhCode)}}"><i class="mdi mdi-assignment"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection