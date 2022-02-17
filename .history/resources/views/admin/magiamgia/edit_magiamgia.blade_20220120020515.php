@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật mã giảm giá</h2>
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
        @foreach($edit_magiamgia as $key => $edit_value)
        <form action="{{URL::to('/update-magiamgia/'.$edit_value->mggMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Tên mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" type="text" placeholder="Tên mã giảm giá" name="magiamgia_Ten" required="" value="{{$edit_value->mggTen}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" type="text" placeholder="Mã giảm giá" name="magiamgia_Code" required="" value="{{$edit_value->mggCode}}">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Số lượng mã giảm giá</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" type="number" placeholder="Số lượng mã giảm giá" name="magiamgia_SoLuong" required="" value="{{$edit_value->mggSoLuong}}" >
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" >Tính năng mã</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="magiamgia_PhuongThuc" required>
                @if($edit_value->mggPhuongThuc == 0)
                <option value="0" selected>Giảm giá theo phần trăm</option>
                <option value="1">Giảm giá theo tiền</option>
                @else 
                <option value="0" >Giảm giá theo phần trăm</option>
                <option value="1" selected>Giảm giá theo tiền</option>
                @endif
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nhập % giảm hoặc tiền giảm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" type="number" placeholder="Nhập % giảm hoặc tiền giảm" name="magiamgia_GiaTri" required="" value="{{$edit_value->mggGiaTri}}">
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật mã giảm giá</button>
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