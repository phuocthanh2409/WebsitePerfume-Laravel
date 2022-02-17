@extends('layout')
@section('content')
<div class="row" style="padding-top: 50px; padding-bottom: 100px; width: 100%; margin-right: 0; margin-left: 0;">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header">
                <h2>Lịch sử đơn hàng</h2>
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
                <table class="table table-striped table-hover table-fw-widget" id="table5" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Thứ tự đơn hàng</th>
                            <th>Mã đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Chi tiết đơn hàng</th>
                            <th>Hủy đơn hàng</th>
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
                                <a class="icon" href="{{URL::to('/view-history-donhang/'.$ord->dhCode)}}">
                                    <i class="fa fa-archive"></i>
                                </a>
                            </td>
                            <td class="actions">
                                <button class="btn btn-default" style="color: red">
                                    <i class="fa fa-ban"></i>
                                </button>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Launch demo modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
