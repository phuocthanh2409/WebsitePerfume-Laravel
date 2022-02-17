@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Quên mật khẩu</h2>
      <div class="row">
        <div class="col-md-12" style="text-align: -webkit-center;">
          @if(session()->has('message'))
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
            <p class="text-uppercase pull-center">Điền mật khẩu mới cho tài khoản:</p>
            @php
              $token = $_GET['token'];
              $email = $_GET['email'];   
            @endphp
          <form role="form" method="POST" action="{{url('/reset-new-pass')}}">
            {{ csrf_field() }}
           <fieldset>							
             <div class="form-group">
                <input type="hidden" name="email" value="{{$email}}">
                <input type="hidden" name="token" value="{{$token}}">
               <input type="text" style="width: 30%" name="password_account" class="form-control input-lg" placeholder="Nhập mật khẩu mới" required>
             </div>
             <div>
                <input type="submit" class="btn btn-lg btn-primary" value="Gửi">
              </div>
           </fieldset>
         </form>
       </div>
      </div>
  </div>
</section>
@endsection