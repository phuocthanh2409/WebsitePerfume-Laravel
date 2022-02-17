@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật mùa sản phẩm</h2>
      </div>
      <div class="card-body">
        @foreach($edit_muasanpham as $key => $edit_value)
        <form action="{{URL::to('/update-muasanpham/'.$edit_value->muaMa)}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('muaTen') is-invalid @enderror" id="inputText3" type="text" name="muaTen" value="{{$edit_value->muaTen}}">
              @error('muaTen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea required="" rows="10" class="form-control"  name="muasanpham_mota">{{$edit_value->muaMoTa}}</textarea>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật mùa sản phẩm</button>
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