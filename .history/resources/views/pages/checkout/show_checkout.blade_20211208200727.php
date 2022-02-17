@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb__text">
                  <h4>Check Out</h4>
                  <div class="breadcrumb__links">
                    <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    <a href="{{URL::to('/nuoc-hoa')}}">Nước hoa</a>
                      <span>Thanh toán</span>
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
          <form action="#">
              <div class="row">
                  <div class="col-lg-8 col-md-6">
                      <h6 class="coupon__code"><span class="icon_tag_alt"></span> Đăng kí hoặc đăng nhập để thanh toán giỏ hàng </h6>
                      <h6 class="checkout__title">Thông tin gửi hàng</h6>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="checkout__input">
                                  <p>Họ và tên<span>*</span></p>
                                  <input type="text">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="checkout__input">
                                  <p>Email<span>*</span></p>
                                  <input type="text">
                              </div>
                          </div>
                      </div>
                      <div class="checkout__input">
                          <p>Địa chỉ<span>*</span></p>
                          <input type="text">
                      </div>
                      <div class="checkout__input">
                          <p>Address<span>*</span></p>
                          <input type="text" placeholder="Street Address" class="checkout__input__add">
                          <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                      </div>
                      <div class="checkout__input">
                          <p>Số điện thoại<span>*</span></p>
                          <input type="text">
                      </div>
                      <div class="checkout__input">
                          <p>Country/State<span>*</span></p>
                          <input type="text">
                      </div>
                      <div class="checkout__input">
                          <p>Postcode / ZIP<span>*</span></p>
                          <input type="text">
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="checkout__input">
                                  <p>Phone<span>*</span></p>
                                  <input type="text">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="checkout__input">
                                  <p>Email<span>*</span></p>
                                  <input type="text">
                              </div>
                          </div>
                      </div>
                      <div class="checkout__input__checkbox">
                          <label for="diff-acc">
                              Note about your order, e.g, special noe for delivery
                              <input type="checkbox" id="diff-acc">
                              <span class="checkmark"></span>
                          </label>
                      </div>
                      <div class="checkout__input">
                          <p>Order notes<span>*</span></p>
                          <input type="text"
                          placeholder="Notes about your order, e.g. special notes for delivery.">
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="checkout__order">
                          <h4 class="order__title">Your order</h4>
                          <div class="checkout__order__products">Product <span>Total</span></div>
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
                          <div class="checkout__input__checkbox">
                              <label for="acc-or">
                                  Create an account?
                                  <input type="checkbox" id="acc-or">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
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
                          <button type="submit" class="site-btn">PLACE ORDER</button>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</section>
<!-- Checkout Section End -->
@endsection