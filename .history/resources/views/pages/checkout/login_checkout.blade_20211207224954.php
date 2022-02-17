@extends('layout')
@section('content')
<section class="contact spad">
  <div class="container">
      <div class="row">
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
@endsection