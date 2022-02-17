@extends('layout')
@section('content')
<div class="row" style="padding-top: 50px; padding-bottom: 100px; width: 100%; margin-right: 0; margin-left: 0;">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header">
                <h2>Lịch sử đơn hàng</h2>
                <?php 
        $message = Session::get('message');
        if($message){
            echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: red;">',$message.'</div>';
            Session::put('message',null);
        }
      ?>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-fw-widget" id="table5" style="text-align: center">
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
                                Đơn hàng mới
                                @else
                                Đơn hàng đã xử lý
                                @endif
                            </td>
                            <td>{{$ord->dhNgayDat}}</td>
                            <td class="actions">
                                <a class="icon" href="{{URL::to('/view-donhang/'.$ord->dhCode)}}">
                                    <i class="fa fa-archive"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {!!$order->links()!!}
</div>
@endsection
