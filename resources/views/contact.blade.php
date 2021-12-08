@extends('layouts.main')

@section('main')

@if(session()->has('success'))
<!-- Modal Register -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
      </div>
      <div class="modal-body">
        {{ session('success') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
      </div>
    </div>
  </div>
</div>
{{-- Akhir Modal Register --}}
@endif
    
@include('partials.header')
    
    <main id="main">

    @include('partials.breadcrumbs')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0723951173345!2d110.41243661415423!3d-7.782149079371452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599155555555%3A0x536eb168b1dca148!2sUPN%20Veteran%20Yogyakarta%20Kampus%202%20Babarsari!5e0!3m2!1sid!2sid!4v1638940939436!5m2!1sid!2sid"  frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen="" frameborder="0"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <a href="https://goo.gl/maps/LLsH1ZE6Xgv7VTSCA" target="_blank">
                  <i class="icofont-google-map"></i>
                </a>
                <h4>Location:</h4>
                <p>
                  <b>Kampus II UPN Veteran Yogyakarta</b><br>
                  Jl. Babarsari Jl. Tambak Bayan No.2, Janti, Caturtunggal<br>
                  Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281<br>
                  Indonesia<br><br>
                </p>
              </div>

              <div class="email">
                <a href="https://instagram.com/_galihnugraha" target="_blank">
                  <i class="icofont-envelope"></i>
                </a>
                <h4>Instagram:</h4>
                <p>@_galihnugraha</p>
              </div>
              
              <div class="phone">
                <a href="https://wa.me/c/" target="_blank">
                  <i class="icofont-phone"></i>
                </a>
                <h4>Call / WhatsApp:</h4>
                <p>+62 822 6052 6573</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/contact" method="post" >
            @csrf
              
              @guest
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" autocomplete="off" required />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" autocomplete="off" required />
                  </div>
                </div>
              @endguest
              @auth
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" disabled />
                    <input type="hidden" name="name" value="{{ auth()->user()->name }}" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" disabled />
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}" />
                  </div>
                </div>
              @endauth
              

              <div class="form-group">  
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" autocomplete="off" required />
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="text-center"><button type="submit" class="get-started-btn" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection