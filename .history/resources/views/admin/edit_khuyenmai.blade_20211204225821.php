@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật khuyến mãi</h2>
      </div>
      <div class="card-body">
        @foreach($edit_khuyenmai as $key => $edit_value)
        <form action="{{URL::to('/update-khuyenmai/'.$edit_value->kmMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" name="khuyenmai_ten" value="{{$edit_value->kmTen}}" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3"  name="khuyenmai_mota" required="">{{$edit_value->kmMoTa}}</textarea>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá trị khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="khuyenmai_giatri">
                <option value="1" selected>10%</option>
                <option value="2">20%</option>
                <option value="3">30%</option>
                <option value="4">40%</option>
                <option value="5">50%</option>
                <option value="6">60%</option>
                <option value="7">70%</option>
                <option value="8">80%</option>
                <option value="9">90%</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày bắt đầu</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyyy">
                <input class="form-control" size="16" type="text" value="{{$edit_value->kmNgayBatDau}}" placeholder="dd-mm-yyyy" name="khuyenmai_ngaybatdau">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày kết thúc</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyyy">
                <input class="form-control" size="16" type="text" value="{{$edit_value->kmNgayKetThuc}}" placeholder="dd-mm-yyyy" name="khuyenmai_ngayketthuc" required>
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật khuyến mãi</button>
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