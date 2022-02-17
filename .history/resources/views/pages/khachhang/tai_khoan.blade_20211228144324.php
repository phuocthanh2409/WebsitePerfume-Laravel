@extends('layout')
@section('content')
<div class="row" style="padding-top: 50px; padding-bottom: 100px; width: 100%; margin-right: 0; margin-left: 0;">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header">
                <h4>Thông tin tài khoản</h4>
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
              <form action="{{URL::to('/save-thongtin')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Họ và tên</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="inputText3" type="text" name="tenkhachhang" required="" value="{{Session::get('khTen')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Số điện thoại</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="inputText3" type="text" name="sodienthoaikhachhang" required="" value="{{Session::get('khSoDienThoai')}}">
                  </div>
                </div>
                <div class="form-group now" style="display: flex">
                  <div class="col-6 col-sm-6 col-lg-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" type="submit">Cập nhật thông tin</button>
                    </p>
                  </div>
                  <div class="col-6 col-sm-6 col-lg-6" style="text-align-last: left">
                    <p class="text-right">
                      <a class="btn btn-space btn-primary" href="{{url('/doi-mat-khau')}}">Đổi mật khẩu</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
