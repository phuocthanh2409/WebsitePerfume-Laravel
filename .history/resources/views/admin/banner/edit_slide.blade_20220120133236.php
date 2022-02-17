@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật banner</h2>
      </div>
      <div class="card-body">
        @foreach($edit_banner as $key => $banner)
        <form action="{{URL::to('/update-banner/'.$banner->sliderMa)}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên banner</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control  @error('banner_ten') is-invalid @enderror" id="inputText3" type="text" value="{{$banner->sliderTen}}" name="banner_ten">
              @error('banner_ten')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Hình ảnh banner</label>
            <div class="col-12 col-sm-6">
              <input name="banner_hinhanh" class="inputfile @error('banner_hinhanh') is-invalid @enderror" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple="">
              @error('banner_hinhanh')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <img src="{{URL::to('public/uploads/banner/'.$banner->sliderHinhAnh)}}" height="100" width="200">
              <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Chọn hình ảnh</span></label>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả banner</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control @error('banner_mota') is-invalid @enderror" id="editor" name="banner_mota" required="">{{$banner->sliderMoTa}}</textarea>
              @error('banner_mota')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật banner</button>
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