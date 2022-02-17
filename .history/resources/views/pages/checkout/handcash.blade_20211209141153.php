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
@endsection
