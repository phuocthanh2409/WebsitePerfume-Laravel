@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật dung tích sản phẩm</h2>
      </div>
      <div class="card-body">
        @foreach($edit_dungtich as $key => $edit_value)
        <form action="{{URL::to('/update-dungtich/'.$edit_value->dtMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên dung tích sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('thTen') is-invalid @enderror" id="inputText3" type="text" name="dungtich_ten" value="{{$edit_value->dtTen}}" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả dung tích sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control"  name="dungtich_mota" required="">{{$edit_value->dtMoTa}}</textarea>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật dung tích sản phẩm</button>
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