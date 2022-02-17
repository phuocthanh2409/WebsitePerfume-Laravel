@extends('layout')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb__text">
                  <h4>Giỏ hàng</h4>
                  <div class="breadcrumb__links">
                    <a href="{{URL::to('/trang-chu')}}">Trang chủ</a>
                    <a href="{{URL::to('/nuoc-hoa')}}">Nước hoa</a>
                      <span>Shopping Cart</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <form action="{{url('/update-cart')}}" method="POST">
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
                                            <input class="cart-quantity" type="text" min="1" name="cart_qty_[$cart[session_id]]" value="{{$cart['product_qty']}}">
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
                            <a href="#" name="update_qty"><i class="fa fa-spinner"></i>Cập nhật giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Mã giảm giá</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Xác nhận</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Tổng giỏ hàng</h6>
                    <ul>
                        <li>Tổng tiền<span>{{number_format($total,0,',','.')}} VNĐ</span></li>
                        <li>Phí vận chuyển<span></span></li>
                        <li>Tổng tiền sau giảm<span></span></li>
                    </ul>
                    <a href="#" class="primary-btn">Xác nhận thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
