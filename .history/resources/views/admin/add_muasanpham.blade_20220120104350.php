@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm mùa sản phẩm</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-muasanpham')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('thTen') is-invalid @enderror" id="inputText3" type="text" placeholder="Tên mùa sản phẩm" name="muasanpham_ten">
              @error('thTen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control"  placeholder="Mô tả mùa sản phẩm" name="muasanpham_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Hiển thị</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="muasanpham_trangthai">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
              </select>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm mùa sản phẩm</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection