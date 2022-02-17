@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật địa chỉ</h2>
      </div>
      <div class="card-body">
        @foreach($edit_loaisanpham as $key => $edit_value)
        <form action="{{URL::to('/update-loaisanpham/'.$edit_value->loaiMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên loại sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" name="loaisanpham_ten" value="{{$edit_value->loaiTen}}" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả loại sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3"  name="loaisanpham_mota" required="">{{$edit_value->loaiMoTa}}</textarea>
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