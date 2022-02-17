<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trang quản lý The Perfume</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Trang quan ly The Perfume" name="description">
        <meta content="Trang quan ly The Perfume" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/frontend/img/The Perfume.png')}}">

        <!-- App css -->
        <link href="{{asset('public/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{asset('public/backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">

    </head>

    <body class="authentication-bg">

        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    
                                    <div class="text-center">
                                        <h5 class="text-muted text-uppercase py-3 font-16">Đăng nhập</h5>
                                    </div>
    
                                    <form action="#" class="mt-2">
    
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" required="" placeholder="Nhập địa chỉ email">
                                        </div>
    
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="password" required="" id="password" placeholder="Nhập mật khẩu">
                                        </div>
    
                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Đăng nhập </button>
                                        </div>

                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
    
                                    </form>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>

                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{asset('public/backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('public/backend/assets/js/app.min.js')}}"></script>
        
    </body>
</html>