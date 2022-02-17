@extends('layout')
@section('content')
<!-- Shop Details Section Begin -->
<section class="shop-details">
    @foreach($details_sanpham as $key => $value)
  <div class="product__details__pic">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="product__details__breadcrumb">
                      <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                      <a href="{{URL::to('/nuoc-hoa')}}">Nước hoa</a>
                      <span>{{$value->spTen}}</span>
                  </div>
              </div>
          </div>
          <div class="row">
              <style type="text/css">
                .lSSlideOuter .lSPager.lSGallery img {
                    display: block;
                    height: 125px;
                    max-width: 100%;
                }
                .lSSlideOuter .lSPager.lSGallery {
                    list-style: none outside none;
                    padding-left: 0;
                    margin: 0 auto;
                    overflow: hidden;
                    transform: translate3d(0px, 0px, 0px);
                    -moz-transform: translate3d(0px, 0px, 0px);
                    -ms-transform: translate3d(0px, 0px, 0px);
                    -webkit-transform: translate3d(0px, 0px, 0px);
                    -o-transform: translate3d(0px, 0px, 0px);
                    -webkit-transition-property: -webkit-transform;
                    -moz-transition-property: -moz-transform;
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -khtml-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
              </style>
              <div class="col-lg-12 col-md-12">
                <ul id="imageGallery">
                    @foreach($gallery as $key => $gal)
                    <li data-thumb="{{asset('public/uploads/gallery/'.$gal->galleryHinhAnh)}}" data-src="{{asset('public/uploads/gallery/'.$gal->galleryHinhAnh)}}">
                      <img src="{{asset('public/uploads/gallery/'.$gal->galleryHinhAnh)}}" />
                    </li>
                    @endforeach
                </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="product__details__content">
      <div class="container">
          <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                  <div class="product__details__text">
                      <h4>{{$value->spTen}}</h4>
                      <h3>{{number_format($value->spGia).' VNĐ'}}</h3>
                      <div class="product__details__option" style="margin-bottom: 0">
                          <div class="product__details__option__size">
                              <span>Dung tích sản phẩm:</span>
                              <h3>{{$value->dtTen}}
                              </h3>
                          </div>
                      </div>
                      <div class="product__details__option">
                        <div class="product__details__option__size">
                            <span>Số lượng còn:</span>
                            <h3>{{$value->spSoLuong}}
                            </h3>
                        </div>
                    </div>
                      <form method="POST">
                          {{csrf_field()}}
                            <input type="hidden" value="{{$value->spMa}}" class="cart_product_id_{{$value->spMa}}">
                            <input type="hidden" value="{{$value->spTen}}" class="cart_product_name_{{$value->spMa}}">
                            <input type="hidden" value="{{$value->spHinhAnh}}" class="cart_product_image_{{$value->spMa}}">
                            <input type="hidden" value="{{$value->spSoLuong}}" class="cart_product_quantity_{{$value->spMa}}">
                            <input type="hidden" value="{{$value->spGia}}" class="cart_product_price_{{$value->spMa}}">
                          <div class="product__details__cart__option">
                              <div class="quantity">
                                  <div class="pro-qty">
                                      <input class="cart_product_qty_{{$value->spMa}}" name="qty" type="number" min="1"  name="soluongsanpham" value="1">
                                    </div>
                                </div>
                                <input type="button" class="primary-btn add-to-cart" data-id_product="{{$value->spMa}}" name="add-to-cart" value="Thêm vào giỏ hàng">
                            </div>
                            <input name="productid_hidden" type="hidden" value="{{$value->spMa}}">
                        </form>
                      <div class="product__details__last__option">
                          <ul>
                              <li><span>Loại sản phẩm:</span> {{$value->loaiTen}}</li>
                              <li><span>Thương hiệu:</span> {{$value->thTen}}</li>
                              <li><span>Mùa:</span> {{$value->muaTen}}</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row" style="padding-bottom: 55px;">
              <div class="col-lg-12">
                  <div class="product__details__tab">
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                              role="tab">Mô tả sản phẩm</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Bình luận</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tabs-5" role="tabpanel">
                              <div class="product__details__tab__content">
                                  <div class="product__details__tab__content__item">
                                      {!!$value->spMoTa!!}
                                    </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-6" role="tabpanel">
        <div class="product__details__tab__content">
            <div class="product__details__tab__content__item">
            <div class="card">
                <div class="card-body">
                    <form>
                    @csrf
                    <input type="hidden" name="comment_product_id" class="comment_product_id" value="{{$value->spMa}}">
                    <div id="comment_show">
                        
                    </div>
                    </form>
                    {{-- <div class="card card-inner">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{url('/public/frontend/img/girl_avatar_child_kid-512.png')}}" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary text-center">15 Minutes Ago</p>
                                </div>
                                <div class="col-md-10">
                                    <p><a><strong>Tên</strong></a></p>
                                    <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <style>
                    .form-group.fl_icon .icon {
                        position: absolute;
                        top: 1px;
                        left: 16px;
                        width: 48px;
                        height: 48px;
                        background: #f6f6f7;
                        color: #b5b8c2;
                        text-align: center;
                        line-height: 50px;
                        -webkit-border-top-left-radius: 2px;
                        -webkit-border-bottom-left-radius: 2px;
                        -moz-border-radius-topleft: 2px;
                        -moz-border-radius-bottomleft: 2px;
                        border-top-left-radius: 2px;
                        border-bottom-left-radius: 2px;
                    }

                    .form-group .form-input {
                        font-size: 13px;
                        line-height: 50px;
                        font-weight: 400;
                        color: #b4b7c1;
                        width: 100%;
                        height: 50px;
                        padding-left: 20px;
                        padding-right: 20px;
                        border: 1px solid #edeff2;
                        border-radius: 3px;
                    }

                    .form-group.fl_icon .form-input {
                        padding-left: 70px;
                    }

                    .form-group textarea.form-input {
                        height: 150px;
                    }
                </style>
                <form class="form-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-user"></i></div>
                                <input class="form-input" type="text" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 fl_icon">
                            <div class="form-group fl_icon">
                                <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                <input class="form-input" type="text" placeholder="Your email">
                            </div>
                        </div>
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="Your text"></textarea>
                            </div>
                        </div>
                        <a class="btn btn-primary pull-right">submit</a>
                    </div>
                </form>
                
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  </div>
  @endforeach
</section>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h3 class="related-title">Sản phẩm liên quan</h3>
          </div>
      </div>
      <div class="row">
          @foreach($related_sanpham as $key => $rlsp)
          <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
            <div class="product__item">
                <a href="{{URL::to('/chi-tiet-san-pham/'.$rlsp->spMa)}}">
                  <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/uploads/product/'.$rlsp->spHinhAnh)}}">
                  </div>
                </a>
                  <div class="product__item__text">
                    <form>
                        {{csrf_field()}} 
                        <input type="hidden" value="{{$rlsp->spMa}}" class="cart_product_id_{{$rlsp->spMa}}">
                        <input type="hidden" value="{{$rlsp->spTen}}" class="cart_product_name_{{$rlsp->spMa}}">
                        <input type="hidden" value="{{$rlsp->spHinhAnh}}" class="cart_product_image_{{$rlsp->spMa}}">
                        <input type="hidden" value="{{$rlsp->spGia}}" class="cart_product_price_{{$rlsp->spMa}}">
                        <input type="hidden" value="{{$rlsp->spSoLuong}}" class="cart_product_quantity_{{$rlsp->spMa}}">
                        <input type="hidden" value="1" class="cart_product_qty_{{$rlsp->spMa}}">
                        <div class="product__item__text">
                          <h6>{{$rlsp->spTen}}</h6>
                          <button style="padding: 0;
                          border: none;
                          background: none;" type="button" class="add-to-cart" data-id_product="{{$rlsp->spMa}}" name="add-to-cart">
                          <a class="add-cart">
                              + Thêm vào giỏ hàng
                            </a>
                          </button>
                          <h5>{{number_format($rlsp->spGia).' VNĐ'}}</h5>
                        </div>
                      </form>
                  </div>
              </div>
          </div> 
          @endforeach      
      </div>
  </div>
</section>
<!-- Related Section End -->
@endsection
