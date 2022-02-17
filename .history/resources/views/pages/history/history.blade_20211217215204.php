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
                                    <span style="color: green">Đơn hàng mới</span>
                                @elseif($ord->dhTrangThai==2)
                                    <span style="color: blue">Đơn hàng đã xử lý</span>
                                @else 
                                    <span style="color: red">Đơn hàng đã hủy</span>
                                @endif
                            </td>
                            <td>{{$ord->dhNgayDat}}</td>
                            <td class="actions">
                                <a class="icon" href="{{URL::to('/view-history-donhang/'.$ord->dhCode)}}">
                                    <i class="fa fa-archive"></i>
                                </a>
                            </td>
                            @if($ord->dhTrangThai == 1)
                            <td class="actions">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-default" style="color: red" data-toggle="modal"
                                    data-target="#huydon">
                                    <i class="fa fa-ban"></i>
                                </button>
                                <form>
                                    @csrf
                                <!-- Modal -->
                                <div class="modal fade" id="huydon" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Lý do hủy đơn hàng</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea style="width: 100%" class="lydohuydon" required  rows="10" placeholder="Vui lòng nhập lý do hủy đơn hàng"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="button" id="{{$ord->dhCode}}" onclick="Huydonhang(this.id)" class="btn btn-primary">Gửi lý do</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </td>
                            @endif
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
