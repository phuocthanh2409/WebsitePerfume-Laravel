@extends('layout')
@section('content')
<!-- Map Begin -->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3692450667845!2d106.67066391474421!3d10.783005662020967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed6f8fd4eed%3A0x735516f96fd93979!2zMzcyIEPDoWNoIE3huqFuZyBUaMOhbmcgVMOhbSwgUGjGsOG7nW5nIDEwLCBRdeG6rW4gMywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1639570328744!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad" style="padding-top: 50px">
  <div class="container">
    @foreach($contact as $key => $cont)
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="contact__text">
                  <div class="section-title">
                      {!!$cont->ttLienHe!!}
                  </div>
                  <ul>
                      <li>
                          <p>Địa chỉ: </p>
                          <p>Số điện thoại: </p>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="bJaYuEJX"></script>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="bJaYuEJX"></script>
            <div class="fb-page" data-href="https://www.facebook.com/The-Perfume-107154571822374" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/The-Perfume-107154571822374" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/The-Perfume-107154571822374">The Perfume</a></blockquote></div>
          </div>
      </div>
    @endforeach
  </div>
</section>
<!-- Contact Section End -->
@endsection