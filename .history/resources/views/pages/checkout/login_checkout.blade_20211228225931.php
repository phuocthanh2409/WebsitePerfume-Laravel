@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Đăng nhập</h2>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
                {!! session('error') !!}
        </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {!! session('success') !!}
            </div>
        @endif
      <div class="row">
        <div class="col-md-5">
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
               <input type="email" name="khEmail" class="form-control input-lg @error('khEmail') is-invalid @enderror" placeholder="Địa chỉ email">
               @error('khEmail')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
             </div>
             <div class="form-group">
               <input type="password" name="khMatKhau" class="form-control input-lg @error('khMatKhau') is-invalid @enderror" placeholder="Mật khẩu">
               @error('khMatKhau')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
              <input type="text" name="khTen" class="form-control input-lg @error('khTen') is-invalid @enderror" placeholder="Họ và tên">
              @error('khTen')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
             <div class="form-group">
               <input type="email" name="khEmail" class="form-control input-lg @error('khEmail') is-invalid @enderror" placeholder="Email">
               @error('khEmail')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
             </div>
             <div class="form-group">
               <input type="password" name="khMatKhau" class="form-control input-lg @error('khMatKhau') is-invalid @enderror" placeholder="Mật khẩu">
               @error('khMatKhau')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
             </div>
             <div class="form-group">
              <input type="number" name="khSoDienThoai" class="form-control input-lg @error('khSoDienThoai') is-invalid @enderror" placeholder="Số điện thoại">
              @error('khSoDienThoai')
                    <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
             <div>
               <input type="submit" class="btn btn-lg btn-primary" value="Đăng kí">
             </div>    
            </fieldset>
       </form>	
       </div>
      </div>
  </div>
</section>
@endsection