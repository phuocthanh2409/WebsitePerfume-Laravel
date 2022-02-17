@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Nhập hàng</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-phieunhap')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tên nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="thuonghieu_trangthai">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Số điện thoại nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" placeholder="Số điện thoại nhà cung cấp" name="nhacungcap_sodienthoai" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Địa chỉ nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3" placeholder="Địa chỉ nhà cung cấp" name="nhacungcap_diachi" required=""></textarea>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm nhà cung cấp</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection