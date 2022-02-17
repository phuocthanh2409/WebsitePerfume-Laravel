@extends('layout')
@section('content')
@foreach($contact as $key => $cont)
<!-- Map Begin -->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3692450667845!2d106.67066391474421!3d10.783005662020967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed6f8fd4eed%3A0x735516f96fd93979!2zMzcyIEPDoWNoIE3huqFuZyBUaMOhbmcgVMOhbSwgUGjGsOG7nW5nIDEwLCBRdeG6rW4gMywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1639570328744!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
@endforeach
<!-- Contact Section End -->
@endsection