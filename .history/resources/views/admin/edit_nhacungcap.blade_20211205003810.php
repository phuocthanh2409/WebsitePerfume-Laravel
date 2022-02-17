@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật nhà cung cấp</h2>
      </div>
      <div class="card-body">
        @foreach($edit_nhacungcap as $key => $edit_value)
        <form action="{{URL::to('/update-nhacungcap/'.$edit_value->nccMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" name="nhacungcap_ten" value="{{$edit_value->nccTen}}" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Số điện thoại nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" name="nhacungcap_sodienthoai" value="{{$edit_value->nccSoDienThoai}}" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Địa chỉ nhà cung cấp</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3"  name="nhacungcap_diachi" required="">{{$edit_value->nccDiaChi}}</textarea>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật loại sản phẩm</button>
              </p>
            </div>
          </div>
        </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection