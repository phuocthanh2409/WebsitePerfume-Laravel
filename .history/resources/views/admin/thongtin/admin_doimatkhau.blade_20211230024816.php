@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Thông tin quản trị viên</h2>
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
              <form action="{{URL::to('/save-matkhauquantri')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Mật khẩu cũ</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control @error('quantriten') is-invalid @enderror" id="inputText3" type="text" name="quantriten" value="{{Session::get('qtTen')}}" autocomplete="name">
                    @error('quantriten')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mật khẩu mới</label>
                  <div class="col-12 col-sm-8 col-lg-6">
                    <input class="form-control @error('quantrisdt') is-invalid @enderror" id="inputText3" type="text" name="quantrisdt" value="{{Session::get('qtSoDienThoai')}}" autocomplete="mobile">
                    @error('quantrisdt')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group now" style="display: flex">
                  <div class="col-6 col-sm-6 col-lg-6">
                    <p class="text-right">
                      <button class="btn btn-space btn-primary" type="submit">Cập nhật thông tin</button>
                    </p>
                  </div>
                  <div class="col-6 col-sm-6 col-lg-6" style="text-align-last: left">
                    <p class="text-right">
                      <a class="btn btn-space btn-primary" href="{{url('/doimatkhau-quantri')}}">Đổi mật khẩu</a>
                    </p>
                  </div>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>
@endsection