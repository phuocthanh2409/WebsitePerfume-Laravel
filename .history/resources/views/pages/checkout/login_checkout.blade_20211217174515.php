@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Đăng nhập</h2>
      <div class="row">
        <div class="col-md-5">
          <?php 
          $message = Session::get('message');
          $error = Session::get('error');
          if($message){
              echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: green;">',$message.'</div>';
              Session::put('message',null);
          }elseif($error){
            echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: red;">',$message.'</div>';
              Session::put('message',null);
          }
        ?>
          <style type="text/css">
            .quenmatkhau:hover, .quenmatkhau:focus {
                text-decoration: none;
                outline: none;
                color: #0056b3;
            }
          </style>
          <form role="form" method="POST" action="{{URL::to('/login-customer')}}">
            {{ csrf_field() }}
           <fieldset>							
             <p class="text-uppercase pull-center">Đăng nhập</p>
             <div class="form-group">
               <input type="email" name="khEmail" class="form-control input-lg" placeholder="Địa chỉ email" required>
             </div>
             <div class="form-group">
               <input type="password" name="khMatKhau" class="form-control input-lg" placeholder="Mật khẩu" required>
             </div>
             <span >
              <a class="quenmatkhau" href="{{url('/quen-mat-khau')}}">Quên mật khẩu</a>
             </span>
             <div style="padding-top: 15px;">
                <input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
              </div>
           </fieldset>
         </form>
       </div>
       
       <div class="col-md-2">
         <!-------null------>
       </div>
       
       <div class="col-md-5">
        <form role="form" action="{{URL::to('/add-customer')}}" method="POST">
          {{ csrf_field() }}
           <fieldset>							
             <p class="text-uppercase">Đăng kí</p>	
             <div class="form-group">
              <input type="text" name="khTen" class="form-control input-lg" placeholder="Họ và tên" required>
            </div>
             <div class="form-group">
               <input type="email" name="khEmail" class="form-control input-lg" placeholder="Email" required>
             </div>
             <div class="form-group">
               <input type="password" name="khMatKhau" class="form-control input-lg" placeholder="Mật khẩu" required>
             </div>
             <div class="form-group">
              <input type="number" name="khSoDienThoai" class="form-control input-lg" placeholder="Số điện thoại" required>
            </div>
             <div>
               <input type="submit" class="btn btn-primary" value="Đăng kí">
             </div>    
            </fieldset>
       </form>	
       </div>
      </div>
  </div>
</section>
@endsection