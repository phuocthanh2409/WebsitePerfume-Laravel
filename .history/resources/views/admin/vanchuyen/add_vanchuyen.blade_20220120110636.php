@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm vận chuyển</h2>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          @csrf
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Chọn thành phố</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control choose thanhpho" name="thanhpho" id="thanhpho" required>
                <option value="">--Chọn tỉnh thành phố--</option>
                @foreach($city as $key => $ci)
                <option value="{{$ci->matp}}">{{$ci->tentp}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right ">Chọn quận huyện</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control quanhuyen @error('phivanchuyen') is-invalid @enderror" name="quanhuyen" id="quanhuyen" required>
                <option value="">--Chọn quận huyện--</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Phí vận chuyển</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control phivanchuyen @error('phivanchuyen') is-invalid @enderror" id="phivanchuyen" type="text" placeholder="Phí vận chuyển" name="phivanchuyen">
              @error('phivanchuyen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary add_vanchuyen" type="button" name="add_vanchuyen">Thêm phí vận chuyển</button>
              </p>
            </div>
          </div>
        </form>
        <div id="load_delivery">
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection