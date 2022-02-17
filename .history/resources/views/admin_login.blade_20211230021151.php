<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('public/frontend/img/logoshop.png')}}">
    <title>The Perfume - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\perfect-scrollbar\css\perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\material-design-icons\css\material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets\css\app.css')}}" type="text/css">
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="{{asset('public/frontend/img/The Perfume.png')}}" alt="logo" width="102" height="50"></div>
              <div class="card-body">
                <h2 class="title" style="margin-top: 0; text-align: center; margin-bottom: 40px;">Đăng nhập</h2>
                @if (session('error'))
        <div class="alert alert-danger" role="alert">
                {{ session('error') }}
        </div>
        @endif
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
                <form action="{{URL::to('/admin-dashboard')}}" method="POST">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <input class="form-control @error('email_account') is-invalid @enderror" id="username" type="email" name="qtEmail" placeholder="Địa chỉ email" autocomplete="off" required="">
                    @error('email_account')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control @error('email_account') is-invalid @enderror" id="password" type="password" name="qtMatKhau" placeholder="Mật khẩu" required="">
                    @error('email_account')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group login-submit">{{-- <a class="btn btn-primary btn-xl" href="index.html" data-dismiss="modal">Đăng nhập</a> --}}
                  <input class="btn btn-primary btn-xl " type="submit" value="Đăng nhập" name="login">   
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('public/backend/assets\lib\jquery\jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\js\app.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>