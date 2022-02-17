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
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Mật khẩu hiện tại</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="inputText3" type="password" name="tenkhachhang" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mật khẩu mới</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="inputText3" type="password" name="sodienthoaikhachhang" required="">
                  </div>
                </div>
                <div class="form-group now">
                  <div class="col-6 col-sm-6 col-lg-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" type="submit">Thay đổi mật khẩu</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
