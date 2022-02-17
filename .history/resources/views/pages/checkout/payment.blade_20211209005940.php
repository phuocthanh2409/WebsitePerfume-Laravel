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
            <div class="row">
                <div class="col-lg-8 col-md-6">
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
                                            <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}"
                                                alt="{{$cart['product_name']}}" width="100">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$cart['product_name']}}</h6>
                                            <h5>{{number_format($cart['product_price'],0,',','.')}} VNĐ</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="">
                                                <input class="cart_quantity" type="number" min="1"
                                                    name="cart_qty[{{$cart['session_id']}}]"
                                                    value="{{$cart['product_qty']}}" readonly style="border: none">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">
                                        {{number_format($subtotal,0,',','.')}} VNĐ
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6">
                      <form action="{{URL::to('/order-place')}}" method="POST">
                        {{csrf_field()}}
                        <div class="checkout__order">
                            <h4 class="order__title" style="border-bottom: none">Đơn hàng của bạn</h4>
                            <ul class="checkout__total__all">
                                <li>Subtotal <span>{{number_format($total,0,',','.')}} VNĐ</span></li>
                                <li>Tổng tiền <span>{{number_format($total,0,',','.')}} VNĐ</span></li>
                            </ul>
                            <p>Hình thức thanh toán</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Thanh toán bằng tiền mặt
                                    <input type="checkbox" id="payment" name="payment_option" value="tiền mặt">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Thanh toán bằng thẻ ATM
                                    <input type="checkbox" id="paypal" name="payment_option" value="thẻ ATM">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn" name="send_order_place">Thanh toán</button>
                        </div>
                      </form>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
