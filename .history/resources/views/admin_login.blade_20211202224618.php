<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trang quản lý admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Trang quan ly admin" name="description">
        <meta content="Trang quan ly admin" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend/assets/images/favicon.ico')}}">

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
                                        <div class="my-3">
                                            <a href="index.html">
                                                <span><img src="assets\images\logo.png" alt="" height="28"></span>
                                            </a>
                                        </div>
                                        <h5 class="text-muted text-uppercase py-3 font-16">Đăng nhập</h5>
                                    </div>
    
                                    <form action="#" class="mt-2">
    
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="text" required="" placeholder="Enter your username">
                                        </div>
    
                                        <div class="form-group mb-3">
                                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                        </div>
    
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>
    
                                        <div class="form-group text-center">
                                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In </button>
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