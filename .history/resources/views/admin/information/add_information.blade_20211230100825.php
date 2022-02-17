@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật thông tin website</h2>
      </div>
      <div class="card-body">
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
                {{ session('error') }}
        </div>
        @endif
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @foreach($contact as $key => $val)
        <form action="{{URL::to('/update-info/'.$val->ttMa)}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Thông tin liên hệ</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control @error('info_contact') is-invalid @enderror" placeholder="Thông tin liên hệ" id="editor" name="info_contact">{{$val->ttLienHe}}</textarea>
              @error('info_contact')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Bản đồ</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control @error('info_map') is-invalid @enderror" placeholder="Link bản đồ Google" name="info_map">{{$val->ttMap}}</textarea>
              @error('info_map')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Fanpage Facebook</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control @error('info_fanpage') is-invalid @enderror" placeholder="Link fanpage Facebook" name="info_fanpage">{{$val->ttFanpage}}</textarea>
              @error('info_fanpage')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Hình ảnh logo</label>
            <div class="col-12 col-sm-6">
              <input name="info_image" class="inputfile @error('info_image') is-invalid @enderror" type="file">
              @error('info_image')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <img src="{{URL::to('public/uploads/contact/'.$val->ttHinhAnh)}}" height="100" width="100">
              <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Chọn hình ảnh</span></label>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" name="update_info" type="submit">Cập nhật thông tin</button>
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