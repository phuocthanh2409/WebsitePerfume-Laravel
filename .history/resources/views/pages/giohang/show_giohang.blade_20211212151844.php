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
            <div class="col-lg-4">
                <div class="cart__discount" style="margin-bottom: 68px;">
                    <h6>Mã giảm giá</h6>
                    <form action="{{URL::to('/check-magiamgia')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Mã giảm giá" name="magiamgia">
                        <button type="submit" name="check_magiamgia">Xác nhận</button>
                    </form>
                    @if(Session::get('coupon'))
                    <a href="{{URL::to('/unset-magiamgia')}}" class="primary-btn" style="margin-left: 45px;">Xóa mã khuyến mãi</a>
                    @endif
                </div>
                <div class="cart__discount" >
                    <h6>Phí vận chuyển</h6>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group row pt-1">
                          <label class="col-12 col-sm-5 col-form-label text-sm-right">Chọn thành phố</label>
                          <div class="col-12 col-sm-8 col-lg-7">
                            <select class="form-control choose thanhpho" name="thanhpho" id="thanhpho" required>
                              <option value="">--Chọn tỉnh thành phố--</option>
                              @foreach($city as $key => $ci)
                              <option value="{{$ci->matp}}">{{$ci->tentp}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group row pt-1">
                          <label class="col-12 col-sm-5 col-form-label text-sm-right ">Chọn quận huyện</label>
                          <div class="col-12 col-sm-8 col-lg-7">
                            <select class="form-control quanhuyen" name="quanhuyen" id="quanhuyen" required>
                              <option value="">--Chọn quận huyện--</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group now">
                          <div class="col-12 col-sm-8 col-lg-6" style="max-width: 100%">
                            <p class="text-right">
                              {{-- <button class="btn btn-space btn-primary add_vanchuyen" type="button" name="add_vanchuyen">Thêm phí vận chuyển</button> --}}
                              <input type="button" value="Tính phí vận chuyển" class="primary-btn calculate_delivery" style="color: #ffffff; ">
                            </p>
                          </div>
                        </div>
                    </form>
                    @if(Session::get('phivanchuyen'))
                    <a href="{{URL::to('/del-phivanchuyen')}}" class="primary-btn" style="margin-left: 45px;">Xóa phí vận chuyển</a>
                    @endif
                </div>
                <div class="cart__total">
                    <h6>Tổng giỏ hàng</h6>
                    <ul>
                        <li>Tổng tiền<span>{{number_format($total,0,',','.')}} VNĐ</span></li>
                        {{-- <li>Phí vận chuyển<span></span></li> --}}
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
                        <li>Tổng tiền:</li>
                        <?php
                            if(Session::get('phivanchuyen') && !Session::get('coupon')){
                                $total_after = $total_after_phivanchuyen;
                                echo number_format($total_after,0,',','.'). ' VNĐ';
                            }elseif(!Session::get('phivanchuyen') && Session::get('coupon')){
                                $total_after = $total_after_coupon;
                                echo number_format($total_after,0,',','.'). ' VNĐ';
                            }elseif (Session::get('phivanchuyen') && Session::get('coupon')) {
                                $total_after = $total_after_coupon;
                                $total_after = $total_after + Session::get('phivanchuyen');
                                echo number_format($total_after,0,',','.'). ' VNĐ';
                            }elseif (!Session::get('phivanchuyen') && !Session::get('coupon')) {
                                $total_after = $total;
                                echo number_format($total_after,0,',','.'). ' VNĐ';
                            }
                        ?>  
                    </ul>
                    <?php 
                    $customer_id = Session::get('khMa');
                    $shipping_id = Session::get('shippingMa');
                    $cart = Session::get('cart');
                    if($customer_id!=NULL & $shipping_id==NULL & $cart!=NULL ){
                        Session::put('totalprice',$total);
                    ?>
                        <a href="{{URL::to('/show-checkout')}}" class="primary-btn">Thanh toán</a>
                        <?php
                    }elseif($customer_id!=NULL & $shipping_id!=NULL & $cart!=NULL ){
                        Session::put('totalprice',$total);
                    ?>
                        <a href="{{URL::to('/payment')}}" class="primary-btn">Thanh toán</a>
                    <?php
                    }elseif($customer_id!=NULL & $shipping_id!=NULL & $cart == NULL ){
                    ?>
                        <a href="{{URL::to('/show-cart')}}" class="primary-btn">Thanh toán</a>
                    <?php
                    }elseif($customer_id!=NULL & $shipping_id==NULL & $cart == NULL ){
                        ?>
                            <a href="{{URL::to('/show-cart')}}" class="primary-btn">Thanh toán</a>
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
