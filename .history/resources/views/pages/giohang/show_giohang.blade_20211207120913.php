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
                <div class="shopping__cart__table">
                  <?php
                  $content = Cart::content(); 
                  ?>
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
                          @foreach($content as $v_content)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="" width="100">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$v_content->name}}</h6>
                                        <h5>{{number_format($v_content->price).' VNĐ'}}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="{{$v_content->qty}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">
                                  <?php
                                  $subtotal = $v_content->price * $v_content->qty;
                                  echo number_format($subtotal).' VNĐ';
                                  ?>
                                </td>
                                <td class="cart__close">
                                <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-close"></i></a>  
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
                        <li>Giá tiền<span>{{Cart::subtotal().' VNĐ'}}</span></li>
                        <li>Tổng giá tiền<span>{{Cart::subtotal().' VNĐ'}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Xác nhận thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
