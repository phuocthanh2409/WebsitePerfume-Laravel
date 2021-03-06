<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('public/frontend/img/The Perfume.png')}}">
    <title>Beagle</title>
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
                <form action="{{('/admin-dashboard')}}" method="POST">
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" placeholder="Địa chỉ email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" type="password" placeholder="Mật khẩu">
                  </div>
                  <div class="form-group login-submit"><a class="btn btn-primary btn-xl" href="index.html" data-dismiss="modal">Đăng nhập</a></div>
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