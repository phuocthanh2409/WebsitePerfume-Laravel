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
                            <tr>
                                <td>Giỏ hàng rỗng</td>
                            </tr>
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
                        <li>Tổng tiền<span>0 VNĐ</span></li>
                        <li>Phí vận chuyển<span></span></li>
                        <li>Tổng tiền sau giảm<span></span></li>
                    </ul>
                    <?php 
                    $customer_id = Session::get('khMa');
                    $shipping_id = Session::get('shippingMa');
                    if($customer_id!=NULL & $shipping_id==NULL ){
                    ?>
                        <a href="{{URL::to('/show-checkout')}}" class="primary-btn">Thanh toán</a>
                    <?php
                    }elseif($customer_id!=NULL & $shipping_id!=NULL ){
                    ?>
                        <a href="{{URL::to('/payment')}}" class="primary-btn">Thanh toán</a>
                    <?php
                    }else{
                    ?>
                        <a href="{{URL::to('/login-checkout')}}" class="primary-btn">Thanh toán</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection
