@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm sản phẩm</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-sanpham')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control @error('sanpham_ten') is-invalid @enderror" id="inputText3" type="text" placeholder="Tên sản phẩm" name="sanpham_ten">
              @error('sanpham_ten')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá bán sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control price_format @error('sanpham_ten') is-invalid @enderror" data-parsley-type="length" type="text" required="" placeholder="Giá bán sản phẩm" name="sanpham_gia">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá gốc sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control price_format @error('sanpham_ten') is-invalid @enderror" data-parsley-type="length" type="text" required="" placeholder="Giá gốc sản phẩm" name="sanpham_giagoc">
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Dung tích</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control @error('sanpham_ten') is-invalid @enderror" name="sanpham_dungtich">
                @foreach($dungtich as $key => $dt)
                <option value="{{$dt->dtMa}}">{{$dt->dtTen}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="editor" placeholder="Mô tả sản phẩm" name="sanpham_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Số lượng sản phẩm</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" data-parsley-type="number" type="text" placeholder="Số lượng sản phẩm"
              name="sanpham_soluong" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Hình ảnh</label>
            <div class="col-12 col-sm-6">
              <input name="sanpham_hinhanh" class="inputfile" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple=""  required="">
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