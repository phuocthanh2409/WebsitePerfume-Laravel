@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm mã giảm giá</h2>
      </div>
      <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
      </style>
      <div class="card-body">
        <form action="{{URL::to('/insert-magiamgia-code')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tên mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('magiamgia_Ten') is-invalid @enderror" type="text" placeholder="Tên mã giảm giá" name="magiamgia_Ten">
              @error('magiamgia_Ten')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('magiamgia_Code') is-invalid @enderror" type="text" placeholder="Mã giảm giá" name="magiamgia_Code">
              @error('magiamgia_Code')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Số lượng mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('magiamgia_SoLuong') is-invalid @enderror" type="number" placeholder="Số lượng mã giảm giá" name="magiamgia_SoLuong">
              @error('magiamgia_SoLuong')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Tính năng mã</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="magiamgia_PhuongThuc" required>
                <option value="0" selected>Giảm giá theo phần trăm</option>
                <option value="1">Giảm giá theo tiền</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nhập % giảm hoặc tiền giảm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('magiamgia_SoLuong') is-invalid @enderror" type="number" placeholder="Nhập % giảm hoặc tiền giảm" name="magiamgia_GiaTri">
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm mã giảm giá</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection