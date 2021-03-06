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
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="contact__text">
                  <div class="section-title">
                      <span>Information</span>
                      <h2>Contact Us</h2>
                      <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                          strict attention.</p>
                  </div>
                  <ul>
                      <li>
                          <h4>America</h4>
                          <p>195 E Parker Square Dr, Parker, CO 801 <br />+43 982-314-0958</p>
                      </li>
                      <li>
                          <h4>France</h4>
                          <p>109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893</p>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
              <div class="contact__form">
                  <form action="#">
                      <div class="row">
                          <div class="col-lg-6">
                              <input type="text" placeholder="Name">
                          </div>
                          <div class="col-lg-6">
                              <input type="text" placeholder="Email">
                          </div>
                          <div class="col-lg-12">
                              <textarea placeholder="Message"></textarea>
                              <button type="submit" class="site-btn">Send Message</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Contact Section End -->
@endsection