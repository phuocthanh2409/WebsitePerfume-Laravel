@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật thương hiệu sản phẩm</h2>
      </div>
      <div class="card-body">
        @foreach($edit_thuonghieu as $key => $edit_value)
        <form action="{{URL::to('/update-thuonghieu/'.$edit_value->thMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên thương hiệu</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('ttTen') is-invalid @enderror" id="inputText3" type="text" name="ttTen" value="{{$edit_value->thTen}}">
              @error('ttTen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả thương hiệu</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control @error('thuonghieu_mota') is-invalid @enderror"  name="thuonghieu_mota">{{$edit_value->thMoTa}}</textarea>
              @error('thuonghieu_mota')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật thương hiệu</button>
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