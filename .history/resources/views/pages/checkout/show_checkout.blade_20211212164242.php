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
        <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
            {{csrf_field()}}
              <div class="row">
                  <div class="col-lg-8 col-md-6">
                      <h6 class="coupon__code"><span class="icon_tag_alt"></span>* Vui lòng điền thông tin đầy đủ</h6>
                      <h6 class="checkout__title">Thông tin gửi hàng</h6>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Họ và tên<span> *</span></p>
                                      <input type="text" name="shippingTen" class="shippingTen" value="{{Session::get('khachhang->khTen')}}" required autocomplete="name">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="checkout__input">
                                      <p>Email<span> *</span></p>
                                      <input type="text" name="shippingEmail" class="shippingEmail" required autocomplete="email">
                                  </div>
                              </div>
                          </div>
                          <div class="checkout__input">
                              <p>Địa chỉ<span> *</span></p>
                              <input type="text" name="shippingDiaChi" class="shippingDiaChi" required autocomplete="address-level1">
                          </div>
                          <div class="checkout__input">
                              <p>Số điện thoại<span> *</span></p>
                              <input type="number" name="shippingSoDienThoai" class="shippingSoDienThoai" required autocomplete="mobile">
                          </div>
                          <div class="checkout__input">
                              <p>Ghi chú đơn hàng</p>
                              <input type="text"  placeholder="Ghi chú đơn hàng của bạn" name="shippingGhiChu" class="shippingGhiChu">
                          </div>
                          <input type="hidden" name="order_coupon" class="order_coupon">
                          <input type="hidden" name="order_phivanchuyen" class="order_phivanchuyen">
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Giá</span></div>
                                <ul class="checkout__total__products">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach(Session::get('cart') as $key => $cart)
                                    @php
                                        $subtotal = $cart['product_price']*$cart['product_qty'];
                                        $total += $subtotal;
                                    @endphp
                                    <li>{{$cart['product_qty']}} {{$cart['product_name']}} <span>{{number_format($subtotal,0,',','.')}} VNĐ</span></li>
                                    @endforeach
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Tổng tiền <span>{{number_format($total,0,',','.')}} VNĐ</span></li>
                                    @if(Session::get('coupon'))
                                        @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['mggPhuongThuc']==0)
                                            <li>Mã giảm<span>{{$cou['mggGiaTri']}} % </span></li>
                                            @php
                                                $total_coupon = ($total*$cou['mggGiaTri'])/100;
                                            @endphp
                                            <li>Tổng giảm<span> {{number_format($total_coupon,0,',','.')}} VNĐ</span></li>
                                            {{-- <li>Tổng đã giảm<span>
                                                {{number_format($total-$total_coupon,0,',','.')}} VNĐ
                                            </span></li> --}}
                                            <?php
                                                $total_after_coupon = $total-$total_coupon; 
                                            ?>
                                            @else
                                            <li>Mã giảm<span>{{number_format($cou['mggGiaTri'],0,',','.')}} VNĐ </span></li>
                                            @php
                                                $total_coupon = $total - $cou['mggGiaTri'];
                                            @endphp
                                            {{-- <li>Tổng đã giảm<span>
                                                {{number_format($total_coupon,0,',','.')}} VNĐ
                                            </span></li> --}}
                                            <?php
                                                $total_after_coupon = $total_coupon;
                                            ?>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if(Session::get('phivanchuyen'))
                                    <li>Phí vận chuyển<span>{{number_format(Session::get('phivanchuyen'),0,',','.')}} VNĐ</span></li>
                                    <?php $total_after_phivanchuyen = $total + Session::get('phivanchuyen') ?> 
                                    @endif
                                    <li>Tổng thanh toán<span>
                                    <?php
                                        if(Session::get('phivanchuyen') && !Session::get('coupon')){
                                            $total_after = $total_after_phivanchuyen;
                                            echo number_format($total_after,0,',','.'). ' VNĐ';
                                            Session::put('totalprice',$total_after);
                                        }elseif(!Session::get('phivanchuyen') && Session::get('coupon')){
                                            $total_after = $total_after_coupon;
                                            echo number_format($total_after,0,',','.'). ' VNĐ';
                                            Session::put('totalprice',$total_after);
                                        }elseif (Session::get('phivanchuyen') && Session::get('coupon')) {
                                            $total_after = $total_after_coupon;
                                            $total_after = $total_after + Session::get('phivanchuyen');
                                            echo number_format($total_after,0,',','.'). ' VNĐ';
                                            Session::put('totalprice',$total_after);
                                        }elseif (!Session::get('phivanchuyen') && !Session::get('coupon')) {
                                            $total_after = $total;
                                            echo number_format($total_after,0,',','.'). ' VNĐ';
                                            Session::put('totalprice',$total_after);
                                        }
                                    ?>
                                    </span></li>
                                </ul>
                                <p>Hình thức thanh toán</p>
                                <div class="checkout__input__checkbox" style="padding-bottom: 20px;">
                                    <select class="form-control" name="" id="" required>
                                        <option value="0">Thanh toán tiền mặt</option>
                                        <option value="1">Thanh toán chuyển khoản</option>
                                    </select>
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