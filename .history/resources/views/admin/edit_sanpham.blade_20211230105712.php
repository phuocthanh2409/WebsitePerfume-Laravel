@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Cập nhật sản phẩm</h2>
      </div>
      <div class="card-body">
        @foreach($edit_sanpham as $key => $pro)
        <form action="{{URL::to('/update-sanpham/'.$pro->spMa)}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('sanpham_ten') is-invalid @enderror" id="inputText3" type="text" value="{{$pro->spTen}}" name="sanpham_ten" required="">
              @error('sanpham_ten')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá bán sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control price_format @error('sanpham_gia') is-invalid @enderror" data-parsley-type="length" type="text" required="" value="{{$pro->spGia}}" name="sanpham_gia">
              @error('sanpham_gia')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá gốc sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control price_format" data-parsley-type="length" type="text" required="" value="{{$pro->spGiaGoc}}" name="sanpham_giagoc">
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Dung tích</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_dungtich">
                @foreach($dungtich as $key => $dt)
                @if($dt->dtMa==$pro->dtMa)
                <option value="{{$dt->dtMa}}" selected>{{$dt->dtTen}}</option>
                @else 
                <option value="{{$dt->dtMa}}">{{$dt->dtTen}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="editor" name="sanpham_mota" required="">{{$pro->spMoTa}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Số lượng sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" data-parsley-type="number" type="text" value="{{$pro->spSoLuong}}"
              name="sanpham_soluong" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Hình ảnh</label>
            <div class="col-12 col-sm-6">
              <input name="sanpham_hinhanh" class="inputfile" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple="" value="{{$pro->spHinhAnh}}">
              <img src="{{URL::to('public/uploads/product/'.$pro->spHinhAnh)}}" height="100" width="100">
              <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Chọn hình ảnh</span></label>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Loại sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_loai">
                @foreach($loaisanpham as $key => $th)
                @if($th->loaiMa==$pro->loaiMa)
                <option value="{{$th->loaiMa}}" selected>{{$th->loaiTen}}</option>
                @else 
                <option value="{{$th->loaiMa}}">{{$th->loaiTen}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Thương hiệu</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_thuonghieu">
                @foreach($thuonghieu as $key => $th)
                @if($th->thMa==$pro->thMa)
                <option value="{{$th->thMa}}" selected>{{$th->thTen}}</option>
                @else 
                <option value="{{$th->thMa}}">{{$th->thTen}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_mua">
                @foreach($muasanpham as $key => $th)
                @if($th->muaMa==$pro->muaMa)
                <option value="{{$th->muaMa}}" selected>{{$th->muaTen}}</option>
                @else 
                <option value="{{$th->muaMa}}">{{$th->muaTen}}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Cập nhật sản phẩm</button>
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