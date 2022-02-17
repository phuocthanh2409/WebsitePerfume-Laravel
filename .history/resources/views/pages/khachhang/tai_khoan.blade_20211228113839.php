@extends('layout')
@section('content')
<div class="row" style="padding-top: 50px; padding-bottom: 100px; width: 100%; margin-right: 0; margin-left: 0;">
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-header">
                <h4>Thông tin tài khoản</h4>
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
              <form action="{{URL::to('/save-loaisanpham')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Họ và tên</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control" id="inputText3" type="text" placeholder="Tên loại sản phẩm" name="loaisanpham_ten" required="">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Số điện thoại</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <textarea rows="10" class="form-control" placeholder="Mô tả loại sản phẩm" name="loaisanpham_mota" required=""></textarea>
                  </div>
                </div>
                <div class="form-group row pt-1">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right">Hiển thị</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <select class="form-control" name="loaisanpham_trangthai">
                      <option value="0">Ẩn</option>
                      <option value="1">Hiện</option>
                    </select>
                  </div>
                </div>
                <div class="form-group now">
                  <div class="col-12 col-sm-8 col-lg-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" type="submit">Thêm loại sản phẩm</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
