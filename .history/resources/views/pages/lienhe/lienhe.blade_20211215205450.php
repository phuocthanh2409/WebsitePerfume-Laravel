@extends('layout')
@section('content')
@foreach($contact as $key => $cont)
<!-- Map Begin -->
<div class="map">
  {{$cont->ttMap}}
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad" style="padding-top: 50px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="contact__text">
                  <div class="section-title">
                      <span>Thông tin cửa hàng</span>
                      <h2>Liên hệ với chúng tôi</h2>
                      <p>Nếu có vấn đề gì liên quan đến cửa hàng. Bạn có thể liên hệ với chúng tôi qua các thông tin sau</p>
                  </div>
                  <ul>
                      <li>
                          {!!$cont->ttLienHe!!}
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
            {{$cont->ttFanpage}}
          </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->
@endforeach
@endsection