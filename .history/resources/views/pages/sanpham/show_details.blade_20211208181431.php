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
              <div class="col-lg-3 col-md-3">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                              <div class="product__thumb__pic set-bg" data-setbg="{{URL::to('public/uploads/product/'.$value->spHinhAnh)}}">
                              </div>
                          </a>
                      </li>
                      {{-- <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                              <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-2.png">
                              </div>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                              <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-3.png">
                              </div>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                              <div class="product__thumb__pic set-bg" data-setbg="img/shop-details/thumb-4.png">
                                  <i class="fa fa-play"></i>
                              </div>
                          </a>
                      </li> --}}
                  </ul>
              </div>
              <div class="col-lg-6 col-md-9">
                  <div class="tab-content">
                      <div class="tab-pane active" id="tabs-1" role="tabpanel">
                          <div class="product__details__pic__item">
                              <img src="{{URL::to('public/uploads/product/'.$value->spHinhAnh)}}" alt="">
                          </div>
                      </div>
                      {{-- <div class="tab-pane" id="tabs-2" role="tabpanel">
                          <div class="product__details__pic__item">
                              <img src="img/shop-details/product-big-3.png" alt="">
                          </div>
                      </div>
                      <div class="tab-pane" id="tabs-3" role="tabpanel">
                          <div class="product__details__pic__item">
                              <img src="img/shop-details/product-big.png" alt="">
                          </div>
                      </div>
                      <div class="tab-pane" id="tabs-4" role="tabpanel">
                          <div class="product__details__pic__item">
                              <img src="img/shop-details/product-big-4.png" alt="">
                              <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                          </div>
                      </div> --}}
                  </div>
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
                      <div class="product__details__option">
                          <div class="product__details__option__size">
                              <span>Dung tích sản phẩm:</span>
                              <h3>{{$value->dtTen}}
                              </h3>
                          </div>
                      </div>
                      <form action="{{URL::to('/save-cart')}}" method="POST">
                          {{csrf_field()}}
                          <input name="masanpham" type="hidden" value="{{$value->spMa}}">
                          <input name="tensanpham" type="hidden" value="{{$value->spTen}}">
                          <input name="hinhsanpham" type="hidden" value="{{$value->spHinhAnh}}">
                          <input name="giasanpham" type="hidden" value="{{$value->spGia}}">
                          <div class="product__details__cart__option">
                              <div class="quantity">
                                  <div class="pro-qty">
                                      <input type="number" min="1" name="soluongsanpham" value="1" style="input::-webkit-outer-spin-button,
                                      input::-webkit-inner-spin-button {
                                          -webkit-appearance: none;
                                          margin: 0;
                                      }">
                                    </div>
                                </div>
                                <button style="border: none" type="submit" class="primary-btn">Thêm vào giỏ hàng</button>
                            </div>
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
                                      {{$value->spMoTa}}
                                    </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-6" role="tabpanel">
                              <div class="product__details__tab__content">
                                  <div class="product__details__tab__content__item">
                                      <h5>Products Infomation</h5>
                                      <p>A Pocket PC is a handheld computer, which features many of the same
                                          capabilities as a modern PC. These handy little devices allow
                                          individuals to retrieve and store e-mail messages, create a contact
                                          file, coordinate appointments, surf the internet, exchange text messages
                                          and more. Every product that is labeled as a Pocket PC must be
                                          accompanied with specific software to operate the unit and must feature
                                      a touchscreen and touchpad.</p>
                                      <p>As is the case with any new technology product, the cost of a Pocket PC
                                          was substantial during it’s early release. For approximately $700.00,
                                          consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                          These days, customers are finding that prices have become much more
                                          reasonable now that the newness is wearing off. For approximately
                                      $350.00, a new Pocket PC can now be purchased.</p>
                                  </div>
                                  <div class="product__details__tab__content__item">
                                      <h5>Material used</h5>
                                      <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                          from synthetic materials, not natural like wool. Polyester suits become
                                          creased easily and are known for not being breathable. Polyester suits
                                          tend to have a shine to them compared to wool and cotton suits, this can
                                          make the suit look cheap. The texture of velvet is luxurious and
                                          breathable. Velvet is a great choice for dinner party jacket and can be
                                      worn all year round.</p>
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
