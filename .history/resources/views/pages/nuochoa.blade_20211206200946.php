@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb__text">
                  <h4>Nước hoa</h4>
                  <div class="breadcrumb__links">
                      <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                      <span>Nước hoa</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad" style="padding-top: 100px">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <div class="shop__sidebar">
                  <div class="shop__sidebar__search">
                      <form action="#">
                          <input type="text" placeholder="Tìm kiếm ...">
                          <button type="submit"><span class="icon_search"></span></button>
                      </form>
                  </div>
                  <div class="shop__sidebar__accordion">
                      <div class="accordion" id="accordionExample">
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseOne">Loại sản phẩm</a>
                              </div>
                              <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__categories">
                                          <ul class="nice-scroll">
                                            @foreach($loaisanpham as $key => $loai)
                                              <li><a href="#">{{$loai->loaiTen}}</a></li>
                                            @endforeach
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseTwo">Thương hiêu</a>
                              </div>
                              <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__brand">
                                          <ul>
                                              <li><a href="#">Louis Vuitton</a></li>
                                              <li><a href="#">Chanel</a></li>
                                              <li><a href="#">Hermes</a></li>
                                              <li><a href="#">Gucci</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                              </div>
                              <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__price">
                                          <ul>
                                              <li><a href="#">$0.00 - $50.00</a></li>
                                              <li><a href="#">$50.00 - $100.00</a></li>
                                              <li><a href="#">$100.00 - $150.00</a></li>
                                              <li><a href="#">$150.00 - $200.00</a></li>
                                              <li><a href="#">$200.00 - $250.00</a></li>
                                              <li><a href="#">250.00+</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                              </div>
                              <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__size">
                                          <label for="xs">xs
                                              <input type="radio" id="xs">
                                          </label>
                                          <label for="sm">s
                                              <input type="radio" id="sm">
                                          </label>
                                          <label for="md">m
                                              <input type="radio" id="md">
                                          </label>
                                          <label for="xl">xl
                                              <input type="radio" id="xl">
                                          </label>
                                          <label for="2xl">2xl
                                              <input type="radio" id="2xl">
                                          </label>
                                          <label for="xxl">xxl
                                              <input type="radio" id="xxl">
                                          </label>
                                          <label for="3xl">3xl
                                              <input type="radio" id="3xl">
                                          </label>
                                          <label for="4xl">4xl
                                              <input type="radio" id="4xl">
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                              </div>
                              <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__color">
                                          <label class="c-1" for="sp-1">
                                              <input type="radio" id="sp-1">
                                          </label>
                                          <label class="c-2" for="sp-2">
                                              <input type="radio" id="sp-2">
                                          </label>
                                          <label class="c-3" for="sp-3">
                                              <input type="radio" id="sp-3">
                                          </label>
                                          <label class="c-4" for="sp-4">
                                              <input type="radio" id="sp-4">
                                          </label>
                                          <label class="c-5" for="sp-5">
                                              <input type="radio" id="sp-5">
                                          </label>
                                          <label class="c-6" for="sp-6">
                                              <input type="radio" id="sp-6">
                                          </label>
                                          <label class="c-7" for="sp-7">
                                              <input type="radio" id="sp-7">
                                          </label>
                                          <label class="c-8" for="sp-8">
                                              <input type="radio" id="sp-8">
                                          </label>
                                          <label class="c-9" for="sp-9">
                                              <input type="radio" id="sp-9">
                                          </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                              </div>
                              <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__tags">
                                          <a href="#">Product</a>
                                          <a href="#">Bags</a>
                                          <a href="#">Shoes</a>
                                          <a href="#">Fashio</a>
                                          <a href="#">Clothing</a>
                                          <a href="#">Hats</a>
                                          <a href="#">Accessories</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9">
              <div class="shop__product__option">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="shop__product__option__left">
                              <p>Showing 1–12 of 126 results</p>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="shop__product__option__right">
                              <p>Sort by Price:</p>
                              <select>
                                  <option value="">Low To High</option>
                                  <option value="">$0 - $55</option>
                                  <option value="">$55 - $100</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Piqué Biker Jacket</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$67.24</h5>
                              <div class="product__color__select">
                                  <label for="pc-4">
                                      <input type="radio" id="pc-4">
                                  </label>
                                  <label class="active black" for="pc-5">
                                      <input type="radio" id="pc-5">
                                  </label>
                                  <label class="grey" for="pc-6">
                                      <input type="radio" id="pc-6">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item sale">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                              <span class="label">Sale</span>
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Multi-pocket Chest Bag</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$43.48</h5>
                              <div class="product__color__select">
                                  <label for="pc-7">
                                      <input type="radio" id="pc-7">
                                  </label>
                                  <label class="active black" for="pc-8">
                                      <input type="radio" id="pc-8">
                                  </label>
                                  <label class="grey" for="pc-9">
                                      <input type="radio" id="pc-9">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Diagonal Textured Cap</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$60.9</h5>
                              <div class="product__color__select">
                                  <label for="pc-10">
                                      <input type="radio" id="pc-10">
                                  </label>
                                  <label class="active black" for="pc-11">
                                      <input type="radio" id="pc-11">
                                  </label>
                                  <label class="grey" for="pc-12">
                                      <input type="radio" id="pc-12">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item sale">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                              <span class="label">Sale</span>
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Ankle Boots</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$98.49</h5>
                              <div class="product__color__select">
                                  <label for="pc-16">
                                      <input type="radio" id="pc-16">
                                  </label>
                                  <label class="active black" for="pc-17">
                                      <input type="radio" id="pc-17">
                                  </label>
                                  <label class="grey" for="pc-18">
                                      <input type="radio" id="pc-18">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>T-shirt Contrast Pocket</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$49.66</h5>
                              <div class="product__color__select">
                                  <label for="pc-19">
                                      <input type="radio" id="pc-19">
                                  </label>
                                  <label class="active black" for="pc-20">
                                      <input type="radio" id="pc-20">
                                  </label>
                                  <label class="grey" for="pc-21">
                                      <input type="radio" id="pc-21">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Basic Flowing Scarf</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$26.28</h5>
                              <div class="product__color__select">
                                  <label for="pc-22">
                                      <input type="radio" id="pc-22">
                                  </label>
                                  <label class="active black" for="pc-23">
                                      <input type="radio" id="pc-23">
                                  </label>
                                  <label class="grey" for="pc-24">
                                      <input type="radio" id="pc-24">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Piqué Biker Jacket</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$67.24</h5>
                              <div class="product__color__select">
                                  <label for="pc-25">
                                      <input type="radio" id="pc-25">
                                  </label>
                                  <label class="active black" for="pc-26">
                                      <input type="radio" id="pc-26">
                                  </label>
                                  <label class="grey" for="pc-27">
                                      <input type="radio" id="pc-27">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item sale">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                              <span class="label">Sale</span>
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Multi-pocket Chest Bag</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$43.48</h5>
                              <div class="product__color__select">
                                  <label for="pc-28">
                                      <input type="radio" id="pc-28">
                                  </label>
                                  <label class="active black" for="pc-29">
                                      <input type="radio" id="pc-29">
                                  </label>
                                  <label class="grey" for="pc-30">
                                      <input type="radio" id="pc-30">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Diagonal Textured Cap</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$60.9</h5>
                              <div class="product__color__select">
                                  <label for="pc-31">
                                      <input type="radio" id="pc-31">
                                  </label>
                                  <label class="active black" for="pc-32">
                                      <input type="radio" id="pc-32">
                                  </label>
                                  <label class="grey" for="pc-33">
                                      <input type="radio" id="pc-33">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item sale">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                              <span class="label">Sale</span>
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Ankle Boots</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$98.49</h5>
                              <div class="product__color__select">
                                  <label for="pc-34">
                                      <input type="radio" id="pc-34">
                                  </label>
                                  <label class="active black" for="pc-35">
                                      <input type="radio" id="pc-35">
                                  </label>
                                  <label class="grey" for="pc-36">
                                      <input type="radio" id="pc-36">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-13.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>T-shirt Contrast Pocket</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$49.66</h5>
                              <div class="product__color__select">
                                  <label for="pc-37">
                                      <input type="radio" id="pc-37">
                                  </label>
                                  <label class="active black" for="pc-38">
                                      <input type="radio" id="pc-38">
                                  </label>
                                  <label class="grey" for="pc-39">
                                      <input type="radio" id="pc-39">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-14.jpg">
                              <ul class="product__hover">
                                  <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                  <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                  </li>
                                  <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                              </ul>
                          </div>
                          <div class="product__item__text">
                              <h6>Basic Flowing Scarf</h6>
                              <a href="#" class="add-cart">+ Add To Cart</a>
                              <div class="rating">
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                                  <i class="fa fa-star-o"></i>
                              </div>
                              <h5>$26.28</h5>
                              <div class="product__color__select">
                                  <label for="pc-40">
                                      <input type="radio" id="pc-40">
                                  </label>
                                  <label class="active black" for="pc-41">
                                      <input type="radio" id="pc-41">
                                  </label>
                                  <label class="grey" for="pc-42">
                                      <input type="radio" id="pc-42">
                                  </label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <div class="product__pagination">
                          <a class="active" href="#">1</a>
                          <a href="#">2</a>
                          <a href="#">3</a>
                          <span>...</span>
                          <a href="#">21</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Shop Section End -->
@endsection