<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Nuoc_hoa">
    <meta name="keywords" content="Nuoc_hoa html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/img/logoshop.png')}}" />
    <title>The Perfume</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}" type="text/css">
    {{-- <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css"> --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/lightslider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/lightgallery.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/prettify.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <!-- <div class="header__top__left">
                            <p>Th??? gi???i n?????c hoa</p>
                        </div> -->
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <?php 
                                $customer_id = Session::get('khMa');
                                if($customer_id!=NULL ){
                                ?>
                                    <span style="color: #ffffff;
                                    font-size: 13px;
                                    text-transform: uppercase;
                                    letter-spacing: 2px;
                                    margin-right: 28px;
                                    display: inline-block;">Xin ch??o {{Session::get('khTen')}}</span>
                                    <a href="{{url('/tai-khoan')}}">T??i kho???n</a>
                                    <a href="{{url('/history')}}">????n h??ng</a>
                                    <a href="{{URL::to('/logout-checkout')}}">????ng xu???t</a>
                                <?php
                                }else{
                                    ?>
                                    <a href="{{URL::to('/login-checkout')}}">????ng nh???p</a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo" style="padding: 0;">
                        <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/img/The Perfume.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/trang-chu')}}">Trang ch???</a></li>
                            <li><a href="{{URL::to('/nuoc-hoa')}}">N?????c hoa</a>
                                <ul class="dropdown">
                                    @foreach($loaisanpham as $key => $loaisanphamlayout)
                                    <li><a href="{{URL::to('/loai-san-pham/'.$loaisanphamlayout->loaiMa)}}">{{$loaisanphamlayout->loaiTen}}</a></li>
                                @endforeach
                                </ul>
                            </li>
                            <li><a href="{{URL::to('/show-cart')}}">Gi??? h??ng</a></li>
                            <li><a href="{{URL::to('/lien-he')}}">Li??n h???</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{asset('public/frontend/img/icon/search.png')}}" alt=""></a>
                        <span id="show-cart-quantity"></span>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/img/The Perfume.png')}}" alt=""></a>
                        </div>
                        <p>Th??? gi???i n?????c hoa d??nh cho ri??ng b???n.</p>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6">
                    <div class="footer__widget">
                        <h6>N?????c hoa</h6>
                        <ul>
                            @foreach($loaisanpham as $key => $loaisanphamlayout)
                                <li><a href="{{URL::to('/loai-san-pham/'.$loaisanphamlayout->loaiMa)}}">{{$loaisanphamlayout->loaiTen}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6">
                    <div class="footer__widget">
                        <h6>C???a h??ng</h6>
                        <ul>
                            <li><a href="{{URL::to('/lien-he')}}">Li??n h???</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form" action="{{URL::to('/tim-kiem')}}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="keywords_submit" id="search-input" placeholder="T??m ki???m t???i ????y ...">
                <div style="padding-top:50px;"><input style="border-bottom: none;" type="submit" value="T??m ki???m"></div> 
            </form>
        </div>
    </div>
    <!-- Search End -->
    
    <!-- Js Plugins -->
    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"type="text/javascript"></script>
    <script src=" {{asset('public/frontend/js/jquery-3.3.1.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"type="text/javascript"></script>
    {{-- <script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"type="text/javascript"></script> --}}
    <script src="{{asset('public/frontend/js/jquery.nicescroll.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/mixitup.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/jquery.form-validator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/prettify.js')}}"></script> 

    <script type="text/javascript">
        function Huydonhang(id){
            var id = id;
            var lydo = $('.lydohuydon').val();
            var order_status = 3;
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url: '{{url('/huy-don-hang')}}',
              method: 'POST',
              data:{id:id,lydo:lydo,order_status:order_status,_token:_token},
              success:function(data){
                alert('H???y ????n h??ng th??nh c??ng');
                location.reload();
                }
            });
        }

    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            load_comment();
            function load_comment(){
                var product_id = $('.comment_product_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
              url: '{{url('/load-comment')}}',
              method: 'POST',
              data:{product_id:product_id,_token:_token},
              success:function(data){
                $('#comment_show').html(data);
                }
                });
            }
            $('.send-comment').click(function(){
                var product_id = $('.comment_product_id').val();
                var comment_name = $('.comment-name').val();
                var comment_content = $('.comment-content').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/send-comment')}}',
                    method: 'POST',
                    data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content,_token:_token},
                    success:function(data){
                        $('#notify_comment').html('<p class="text text-success">Th??m b??nh lu???n th??nh c??ng. B??nh lu???n ??ang ???????c qu???n tr??? duy???t</p>');
                        load_comment();
                        $('#notify_comment').fadeOut(10000);
                        $('.comment-name').val('');
                        $('.comment-content').val('');
                }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
                gallery:true,
                item:1,
                loop:true,
                thumbItem:9,
                slideMargin:0,
                enableDrag: false,
                currentPagerPosition:'left',
                onSliderLoad: function(el) {
                    el.lightGallery({
                        selector: '#imageGallery .lslide'
                    });
                }   
            });  
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            show_cart_quantity();
            //show-cart-quantity
            function show_cart_quantity(){
            $.ajax({
              url: '{{url('/show-cart-quantity')}}',
              method: 'GET',
              success:function(data){
                $('#show-cart-quantity').html(data);
              }
            });
            }
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_'+id).val();
                var cart_product_name = $('.cart_product_name_'+id).val();
                var cart_product_image = $('.cart_product_image_'+id).val();
                var cart_product_quantity = $('.cart_product_quantity_'+id).val();
                var cart_product_price = $('.cart_product_price_'+id).val();
                var cart_product_qty = $('.cart_product_qty_'+id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty) > parseInt(cart_product_quantity))
                {
                    alert('S???n ph???m kh??ng ????? h??ng. L??m ??n ?????t s??? l?????ng nh??? h??n' + cart_product_quantity);
                }else{
                    $.ajax({
                        url: '{{url('/add-cart')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token, cart_product_quantity:cart_product_quantity},
                        success:function(){
                            swal({
                                    title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                    text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                    type: "success",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem ti???p",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "??i ?????n gi??? h??ng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/show-cart')}}";
                                });
                            show_cart_quantity();
                        }
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action=='thanhpho')
            {
              result = 'quanhuyen';
            }
            $.ajax({
              url: '{{url('/select-delivery-home')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                $('#'+result).html(data);
              }
            });
          });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.calculate_delivery').click(function(){
            var matp = $('.thanhpho').val();
            var maqh = $('.quanhuyen').val();
            var _token = $('input[name="_token"]').val();
            if(matp == '' && maqh == '' )
            {
                alert('Vui l??ng ch???n ????? t??nh ph?? v???n chuy???n');
            }
            else if(maqh == '--Ch???n qu???n huy???n--')
            {
                alert('Vui l??ng ch???n qu???n huy???n');
            }
            else if(matp == '--Ch???n t???nh th??nh ph???--')
            {
                alert('Vui l??ng ch???n qu???n huy???n');
            }
            $.ajax({
              url: '{{url('/calculate-phivanchuyen')}}',
              method: 'POST',
              data:{matp:matp,maqh:maqh,_token:_token},
              success:function(){
                location.reload();
              }
            });
        }); 
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                title: "X??c nh???n ????n h??ng",
                text: "B???n ???? ??i???n ?????y ????? th??ng tin v?? x??c nh???n ?????t h??ng",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "?????ng ??",
                cancelButtonText: "Kh??ng ?????ng ??",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        var shippingTen = $('.shippingTen').val();
                        var shippingEmail = $('.shippingEmail').val();
                        var shippingDiaChi = $('.shippingDiaChi').val();
                        var shippingSoDienThoai = $('.shippingSoDienThoai').val();
                        var shippingGhiChu = $('.shippingGhiChu').val();
                        var shippingPhuongThuc = $('.payment_select').val();
                        var order_phivanchuyen = $('.order_phivanchuyen').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shippingTen:shippingTen,shippingEmail:shippingEmail,shippingDiaChi:shippingDiaChi,shippingSoDienThoai:shippingSoDienThoai,shippingGhiChu:shippingGhiChu,shippingPhuongThuc:shippingPhuongThuc,order_phivanchuyen:order_phivanchuyen,order_coupon:order_coupon,_token:_token},
                            success:function(){
                                swal("????n h??ng", "????n h??ng c???a b???n ???? ?????t th??nh c??ng", "success");
                            }
                        });
                            window.setTimeout(function(){
                            window.location.href = "{{url('/history')}}"
                        },5000);
                    } else {
                        swal("????ng", "B???n vui l??ng ki???m tra ????n h??ng v?? ho??n t???t ????n h??ng", "error");
                    }
                });
                
            });
        });
    </script>
</body>

</html>