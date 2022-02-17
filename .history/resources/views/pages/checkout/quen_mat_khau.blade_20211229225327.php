@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Quên mật khẩu</h2>
      <div class="row">
        <div class="col-md-12" style="text-align: -webkit-center;">
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
          <form role="form" method="POST" action="{{url('/recover-pass')}}">
            {{ csrf_field() }}
           <fieldset>							
             <p class="text-uppercase pull-center">Điền email để lấy lại mật khẩu:</p>
             <div class="form-group">
               <input type="email" style="width: 30%" name="email_account" class="form-control input-lg @error('email_account') is-invalid @enderror" placeholder="Địa chỉ email" required>
             </div>
             <div>
                <input type="submit" class="btn btn-lg btn-primary" value="Gửi mail">
              </div>
           </fieldset>
         </form>
       </div>
      </div>
  </div>
</section>
@endsection