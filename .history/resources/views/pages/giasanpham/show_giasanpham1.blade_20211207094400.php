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
                      <span>Sản phẩm dưới 1.000.000 VNĐ</span>
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
                                              <li><a href="{{URL::to('/loai-san-pham/'.$loai->loaiMa)}}">{{$loai->loaiTen}}</a></li>
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
                                              <li><a href="{{URL::to('/thuong-hieu/'.$th->thMa)}}">{{$th->thTen}}</a></li>
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
                                            <li><a href="{{URL::to('/giasanpham-1')}}">< 1.000.000 VNĐ</a></li>
                                              <li><a href="{{URL::to('/giasanpham-2')}}">1.000.000 VNĐ - 2.000.000 VNĐ</a></li>
                                              <li><a href="{{URL::to('/giasanpham-3')}}">2.000.000 VNĐ - 5.000.000 VNĐ</a></li>
                                              <li><a href="{{URL::to('/giasanpham-4')}}">5.000.000 VNĐ - 10.000.000 VNĐ</a></li>
                                              <li><a href="{{URL::to('/giasanpham-5')}}">> 10.000.000 VNĐ</a></li>
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
                                            <li><a href="{{URL::to('/mua/'.$mua->muaMa)}}">{{$mua->muaTen}}</a></li>
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
                @foreach($gia_by_id_1 as $key => $gia1)
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="product__item">
                        <a href="{{URL::to('/chi-tiet-san-pham/'.$gia1->spMa)}}">
                          <div class="product__item__pic set-bg" data-setbg="{{URL::to('public/uploads/product/'.$gia1->spHinhAnh)}}">
                          </div>
                        </a>
                          <div class="product__item__text">
                              <h6>{{$gia1->spTen}}</h6>
                              <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                              <h5>{{number_format($gia1->spGia).' VNĐ'}}</h5>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
              {{-- <div class="row">
                  <div class="col-lg-12">
                      <div class="product__pagination">
                          <a class="active" href="#">1</a>
                          <a href="#">2</a>
                          <a href="#">3</a>
                          <span>...</span>
                          <a href="#">21</a>
                      </div>
                  </div>
              </div> --}}
          </div>
      </div>
  </div>
</section>
<!-- Shop Section End -->
@endsection