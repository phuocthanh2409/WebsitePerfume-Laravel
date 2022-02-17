@extends('layout')
@section('content')
<section class="contact spad" style="padding-top: 50px;">
  <div class="container">
    <h2 style="text-align: center; padding-bottom: 35px;">Đăng nhập</h2>
      <div class="row" style="justify-content: center;">
          <div class="col-lg-6 col-md-6">
              <div class="contact__form">
                  <form action="#">
                      <div class="row">
                          <div class="col-lg-12">
                              <input id="username" type="email" placeholder= "Email đăng nhập" autocomplete="off" required>
                          </div>
                          <div class="col-lg-12">
                              <input id="password" type="password" placeholder="Mật khẩu" required>
                          </div>
                          <a href="*">Đăng kí</a>
                          <div class="col-lg-12" style="text-align: center;">
                              <button type="submit" class="site-btn">Xác nhận</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection