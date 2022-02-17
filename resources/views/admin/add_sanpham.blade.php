@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm sản phẩm</h2>
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
        <form action="{{URL::to('/save-sanpham')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('spTen') is-invalid @enderror" id="inputText3" type="text" placeholder="Tên sản phẩm" name="spTen">
              @error('spTen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá bán sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('sanpham_gia') is-invalid @enderror" data-parsley-type="length" type="number" placeholder="Giá bán sản phẩm" name="sanpham_gia">
              @error('sanpham_gia')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá gốc sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('sanpham_giagoc') is-invalid @enderror" data-parsley-type="length" type="number" placeholder="Giá gốc sản phẩm" name="sanpham_giagoc">
              @error('sanpham_giagoc')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Dung tích</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_dungtich">
                @foreach($dungtich as $key => $dt)
                <option value="{{$dt->dtMa}}">{{$dt->dtTen}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="20" class="form-control @error('sanpham_mota') is-invalid @enderror" id="editor" placeholder="Mô tả sản phẩm" name="sanpham_mota"></textarea>
              @error('sanpham_mota')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Số lượng sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('sanpham_soluong') is-invalid @enderror" data-parsley-type="number" type="text" placeholder="Số lượng sản phẩm" name="sanpham_soluong">
              @error('sanpham_soluong')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Hình ảnh</label>
            <div class="col-12 col-sm-6">
              <input name="sanpham_hinhanh" class="inputfile  @error('sanpham_hinhanh') is-invalid @enderror" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple="">
              @error('sanpham_hinhanh')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Chọn hình ảnh</span></label>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Loại sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_loai">
                @foreach($loaisanpham as $key => $th)
                <option value="{{$th->loaiMa}}">{{$th->loaiTen}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Thương hiệu</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_thuonghieu">
                @foreach($thuonghieu as $key => $th)
                <option value="{{$th->thMa}}">{{$th->thTen}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Mùa sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_mua">
                @foreach($muasanpham as $key => $th)
                <option value="{{$th->muaMa}}">{{$th->muaTen}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Hiển thị</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="sanpham_trangthai">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
              </select>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm sản phẩm</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection