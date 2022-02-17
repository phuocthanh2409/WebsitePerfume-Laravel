@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Đăng nhập và Đăng kí</h2>
      <div class="row">
        <div class="col-md-5">
          <form role="form" method="post" action="register.php">
           <fieldset>							
             <p class="text-uppercase pull-center">Đăng kí</p>
             <div class="form-group">
               <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Địa chỉ email">
             </div>
             <div class="form-group">
               <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mật khẩu">
             </div>
               <div class="form-group">
               <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
             </div>
              <div>
                    <input type="submit" class="btn btn-lg btn-primary" value="Đăng kí">
              </div>
           </fieldset>
         </form>
       </div>
       
       <div class="col-md-2">
         <!-------null------>
       </div>
       
       <div class="col-md-5">
             <form role="form">
           <fieldset>							
             <p class="text-uppercase">Đăng kí</p>	
             <div class="form-group">
              <input type="text" name="ten" class="form-control input-lg" placeholder="Họ và tên">
            </div>
             <div class="form-group">
               <input type="email" name="username" id="username" class="form-control input-lg" placeholder="Email">
             </div>
             <div class="form-group">
               <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Mật khẩu">
             </div>
             <div class="form-group">
              <input type="number" name="password" id="password" class="form-control input-lg" placeholder="Số điện thoại">
            </div>
             <div>
               <input type="submit" class="btn btn-md" value="Sign In">
             </div>
                
            </fieldset>
       </form>	
       </div>
      </div>
  </div>
</section>
@endsection