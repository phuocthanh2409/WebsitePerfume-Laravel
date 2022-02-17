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
                                            @foreach($thuonghieu as $key => $th)
                                              <li><a href="#">{{$th->thTen}}</a></li>
                                            @endforeach
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                              </div>
                              <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                  <div class="card-body">
                                      <div class="shop__sidebar__price">
                                          <ul>
                                              <li><a href="#">< 1.000.000 VNĐ</a></li>
                                              <li><a href="#">1.000.000 VNĐ - 2.000.000 VNĐ</a></li>
                                              <li><a href="#">2.000.000 VNĐ - 5.000.000 VNĐ</a></li>
                                              <li><a href="#">5.000.000 VNĐ - 10.000.000 VNĐ</a></li>
                                              <li><a href="#">> 10.000.000 VNĐ</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">Mùa</a>
                            </div>
                            <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="shop__sidebar__brand">
                                        <ul>
                                          @foreach($muasanpham as $key => $mua)
                                            <li><a href="#">{{$mua->muaTen}}</a></li>
                                          @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-9">
              {{-- <div class="shop__product__option">
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
              </div> --}}
              <div class="row">
                @foreach($thuonghieu as $key => $th)
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                          <div class="product__item__pic set-bg" data-setbg="img/product/product-14.jpg">
                              <ul class="product__hover">
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
                @endforeach
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