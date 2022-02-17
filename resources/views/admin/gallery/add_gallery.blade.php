@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm thư viện ảnh</h2>
      </div>
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
      <form action="{{url('/insert-gallery/'.$pro_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-md-3" style="align: right;">

        </div>
        <div class="col-md-6">
          <input type="file" class="form-control" id="file" name="file[]" accept="image/*" multiple>
          <span id="error_gallery"></span>
        </div>
        <div class="col-md-3">
            <input type="submit" name="upload" name="taianh" value="Tải ảnh" class="btn btn-success">
        </div>
      </div>
    </form>
      <div class="card-body">
        <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
        <form>
          @csrf
          <div id="gallery_load">

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection