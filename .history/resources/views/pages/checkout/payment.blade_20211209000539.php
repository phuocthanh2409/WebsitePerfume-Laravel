@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb__text">
                  <h4>Thanh toán giỏ hàng</h4>
                  <div class="breadcrumb__links">
                    <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    <a href="{{URL::to('/nuoc-hoa')}}">Nước hoa</a>
                      <span>Thanh toán giỏ hàng</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad" style="padding-top: 100px">
  <div class="container">
      <div class="checkout__form">
        <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
            {{csrf_field()}}
              <div class="row">
                  {{-- <div class="col-lg-8 col-md-6">
                      <h6 class="coupon__code"><span class="icon_tag_alt"></span> Đăng kí hoặc đăng nhập để thanh toán giỏ hàng </h6>
                      <h6 class="checkout__title">Thông tin gửi hàng</h6>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Họ và tên<span>*</span></p>
                                      <input type="text" name="shippingTen" required autocomplete="name">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Email<span>*</span></p>
                                      <input type="text" name="shippingEmail" required autocomplete="email">
                                  </div>
                              </div>
                          </div>
                          <div class="checkout__input">
                              <p>Địa chỉ<span>*</span></p>
                              <input type="text" name="shippingDiaChi" required autocomplete="address-level1">
                          </div>
                          <div class="checkout__input">
                              <p>Số điện thoại<span>*</span></p>
                              <input type="number" name="shippingSoDienThoai" required autocomplete="mobile">
                          </div>
                          <div class="checkout__input">
                              <p>Ghi chú đơn hàng</p>
                              <input type="text"
                              placeholder="Ghi chú đơn hàng của bạn" name="shippingGhiChu">
                          </div>
                          <button type="submit" class="site-btn">Gửi</button>
                        </div> --}}
                        <div class="col-lg-8 col-md-6>
                          <form action="{{url('/update-cart')}}" method="POST">
                              @csrf
                              @if(session()->has('message'))
                              <div class="alert alert-success">
                                  {{session()->get('message')}}
                              </div>
                              @elseif(session()->has('error'))
                              <div class="alert alert-danger">
                                  {{session()->get('error')}}
                              </div>
                              @endif
                              <div class="shopping__cart__table">
                                  <table>
                                      <thead>
                                          <tr>
                                              <th>Sản phẩm</th>
                                              <th>Số lượng</th>
                                              <th>Giá</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @php
                                           $total = 0;
                                          @endphp
                                        @foreach(Session::get('cart') as $key => $cart)
                                          @php
                                           $subtotal = $cart['product_price']*$cart['product_qty'];
                                           $total += $subtotal;
                                          @endphp
                                          <tr>
                                              <td class="product__cart__item">
                                                  <div class="product__cart__item__pic">
                                                      <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" alt="{{$cart['product_name']}}" width="100">
                                                  </div>
                                                  <div class="product__cart__item__text">
                                                      <h6>{{$cart['product_name']}}</h6>
                                                      <h5>{{number_format($cart['product_price'],0,',','.')}} VNĐ</h5>
                                                  </div>
                                              </td>
                                              <td class="quantity__item">
                                                  <div class="quantity">
                                                      <div class="pro-qty-2">
                                                          <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}">
                                                      </div>
                                                  </div>
                                              </td>
                                              <td class="cart__price">
                                                  {{number_format($subtotal,0,',','.')}} VNĐ
                                              </td>
                                              <td class="cart__close">
                                              <a href="{{url('/delete-cart/'.$cart['session_id'])}}"><i class="fa fa-close"></i></a>  
                                              </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                              <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="continue__btn">
                                          <a href="{{URL::to('/nuoc-hoa')}}">Tiếp tục mua hàng</a>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                      <div class="continue__btn update__btn">
                                          <button type="submit" name="update_qty" style="padding: 0;
                                          border: none;
                                          background: none;">
                                              <a>
                                                  <i class="fa fa-spinner">
                                                      Cập nhật giỏ hàng
                                                  </i>
                                              </a>
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                          </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Giá</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                                    <div class="checkout__input__checkbox">
                                        <label for="payment">
                                            Check Payment
                                            <input type="checkbox" id="payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="paypal">
                                            Paypal
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="site-btn">Đặt hàng</button>
                                </div>
                            </div>
                  </div>
          </form>
      </div>
  </div>
</section>
<!-- Checkout Section End -->
@endsection