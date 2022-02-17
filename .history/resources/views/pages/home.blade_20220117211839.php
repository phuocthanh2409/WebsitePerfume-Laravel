@extends('layout')
@section('content')
<?php 
  function vn_to_str($str)
        {

            $unicode = array(

                'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

                'd' => 'đ',

                'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

                'i' => 'í|ì|ỉ|ĩ|ị',

                'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

                'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

                'y' => 'ý|ỳ|ỷ|ỹ|ỵ',

                'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

                'D' => 'Đ',

                'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

                'I' => 'Í|Ì|Ỉ|Ĩ|Ị',

                'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

                'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

                'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

            );

            foreach ($unicode as $nonUnicode => $uni) {

                $str = preg_replace("/($uni)/i", $nonUnicode, $str);
            }
            $str = str_replace(' ', '_', $str);

            return $str;
        }
?>
<!-- Hero Section Begin -->
<section class="hero">
  <div class="hero__slider owl-carousel">
    @foreach($slider as $key => $slide)
    <div class="hero__items set-bg" data-setbg="public/uploads/banner/{{$slide->sliderHinhAnh}}">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-7 col-md-8">
            <div class="hero__text">
              <h2>{{$slide->sliderTen}}</h2>
              <h5>{!!$slide->sliderMoTa!!}</h5>
              <a style="margin-top: 30px" href="{{url('/nuoc-hoa')}}" class="primary-btn">Xem ngay<span class="arrow_right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
  
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="filter__controls">
          <li class="active" data-filter="*">Nước hoa</li>
          @foreach($loaisanpham as $key => $loai)
          <li data-filter=".<?php print_r(vn_to_str($loai->loaiTen)); ?>" >{{$loai->loaiTen}}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row product__filter">
      @foreach($sanpham as $key => $sp)
      <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix <?php print_r(vn_to_str($sp->loaiTen)); ?> ">
        <div class="product__item">
        <a href="{{URL::to('/chi-tiet-san-pham/'.$sp->spMa)}}">
          <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/uploads/product/'.$sp->spHinhAnh)}}">
          </div>
        </a>
        <form>
          {{csrf_field()}} 
          <input type="hidden" value="{{$sp->spMa}}" class="cart_product_id_{{$sp->spMa}}">
          <input type="hidden" value="{{$sp->spTen}}" class="cart_product_name_{{$sp->spMa}}">
          <input type="hidden" value="{{$sp->spHinhAnh}}" class="cart_product_image_{{$sp->spMa}}">
          <input type="hidden" value="{{$sp->spSoLuong}}" class="cart_product_quantity_{{$sp->spMa}}">
          <input type="hidden" value="{{$sp->spGia}}" class="cart_product_price_{{$sp->spMa}}">
          <input type="hidden" value="1" class="cart_product_qty_{{$sp->spMa}}">
          <div class="product__item__text">
            <h6>{{$sp->spTen}}</h6>
            <button style="padding: 0;
            border: none;
            background: none;" type="button" class="add-to-cart" data-id_product="{{$sp->spMa}}" name="add-to-cart">
            <a class="add-cart">
                + Thêm vào giỏ hàng
              </a>
            </button>
            <h5>{{number_format($sp->spGia).' VNĐ'}}</h5>
          </div>
        </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
 
</section>
<!-- Product Section End -->

<!-- Categories Section Begin -->
<section class="categories spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="categories__text">
          <h2>Sản phẩm<br/><span>Mới</span></h2>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="categories__hot__deal">
          @foreach($new_sanpham as $key => $nsp)
          <img src="{{URL::to('public/uploads/product/'.$nsp->spHinhAnh)}}" alt="">
          @endforeach
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1">
        <div class="categories__deal__countdown">
          <span>Sản phẩm mới</span>
          @foreach($new_sanpham as $key => $nsp)
          <h5 style="color: #111111; font-weight: 700; line-height: 46px;">{{$nsp->loaiTen}}</h5>
          <h2 style="margin-bottom: 0">{{$nsp->spTen}}</h2>
          <h4 style="color: #e53637; font-weight: 700; line-height: 70px;">{{number_format($sp->spGia).' VNĐ'}}</h4>
          <a href="{{URL::to('/chi-tiet-san-pham/'.$nsp->spMa)}}" class="primary-btn">Xem ngay</a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="spad">
  
</section>
<!-- Instagram Section End -->
@endsection