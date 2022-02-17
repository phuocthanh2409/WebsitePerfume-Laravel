@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm khuyến mãi</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-khuyenmai')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" placeholder="Tên khuyến mãi" name="khuyenmai_ten" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3" placeholder="Mô tả khuyến mãi" name="loaisanpham_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3" placeholder="Mô tả khuyến mãi" name="loaisanpham_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic Select</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control">
                <option value="1" selected="">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm khuyến mãi</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection