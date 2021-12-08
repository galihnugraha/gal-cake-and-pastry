@php
  // jumlah roti
  $baguette = 1;
  $brioche = 1;
  $cornrye = 1;
  $croisant = 1;
  $crumpet = 1;
  $muffin = 1;
@endphp

@extends('layouts.main')

@section('main')

@if(session()->has('success'))
<!-- Modal Register -->
<div class="modal fade" id="addCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- ======= Catalog Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <!-- Tingkat 1 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/baguette.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>20.000 IDR</h4>
                </div>
                <h3>Baguette</h3>
                <br>
                
                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf
                    <input type="hidden" name="roti" value="baguette">
                    <input type="hidden" name="harga" value="20000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">

                    <div id="baguette" style="font-weight: bold" class="text-center">
                      <span id="baguette-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="baguette-ajax">
                        <span id="baguette-number">{{ $baguette }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $baguette }}">
                      </span>
                      
                      <span id="baguette-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth

                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/brioche.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>15.000 IDR</h4>
                </div>
                <h3>Brioche</h3>
                <br>

                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf
                    <input type="hidden" name="roti" value="brioche">
                    <input type="hidden" name="harga" value="15000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    
                    <div id="brioche" style="font-weight: bold" class="text-center">
                      <span id="brioche-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="brioche-ajax">
                        <span id="brioche-number">{{ $brioche }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $brioche }}">
                      </span>
                      
                      <span id="brioche-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth

                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Catalog Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/corn-rye.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>15.000 IDR</h4>
                </div>
                <h3>Corn Rye</h3>
                <br>

                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf 
                    <input type="hidden" name="roti" value="corn-rye">
                    <input type="hidden" name="harga" value="15000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    
                    <div id="corn-rye" style="font-weight: bold" class="text-center">
                      <span id="corn-rye-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="corn-rye-ajax">
                        <span id="corn-rye-number">{{ $cornrye }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $cornrye }}">
                      </span>
                      
                      <span id="corn-rye-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth
                
                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Course Item-->
        </div><!-- Akhir Tingkat 1 -->

        <br><br>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <!-- Tingkat 2 -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/crumpet.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>25.000 IDR</h4>
                </div>
                <h3>Crumpet</h3>
                <br>

                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf
                    <input type="hidden" name="roti" value="crumpet">
                    <input type="hidden" name="harga" value="25000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    
                    <div id="crumpet" style="font-weight: bold" class="text-center">
                      <span id="crumpet-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="crumpet-ajax">
                        <span id="crumpet-number">{{ $crumpet }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $crumpet }}">
                      </span>
                      
                      <span id="crumpet-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth
                
                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/muffin.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>25.000 IDR</h4>
                </div>
                <h3>Muffin</h3>
                <br>

                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf
                    <input type="hidden" name="roti" value="muffin">
                    <input type="hidden" name="harga" value="25000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    
                    <div id="muffin" style="font-weight: bold" class="text-center">
                      <span id="muffin-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="muffin-ajax">
                        <span id="muffin-number">{{ $muffin }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $muffin }}">
                      </span>
                      
                      <span id="muffin-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth
                
                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/products/croisant.jpg" width="100%" alt="">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>15.000 IDR</h4>
                </div>
                <h3>Croisant</h3>
                <br>

                @guest
                  <div class="text-center">
                    <a href="/login" class="btn btn-primary">Login to Order</a>
                  </div>
                @endguest
                @auth
                  <form action="/cart" method="post">
                  @csrf
                    <input type="hidden" name="roti" value="croisant">
                    <input type="hidden" name="harga" value="15000">
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    
                    <div id="croisant" style="font-weight: bold" class="text-center">
                      <span id="croisant-minus" class="btn btn-warning">&minus;</span>&nbsp;

                      <span id="croisant-ajax">
                        <span id="croisant-number">{{ $croisant }}</span>&nbsp;
                        <input type="hidden" name="jumlah" value="{{ $croisant }}">
                      </span>
                      
                      <span id="croisant-plus" class="btn btn-warning">&plus;</span>
                      
                    </div>
                    <br>

                    <div class="text-center">
                      <button type="submit" name="addcart" class="btn btn-info">Add to Cart</button>
                    </div>
                  </form>
                @endauth
                
                <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
              </div>
            </div>
          </div><!-- End Course Item-->
        </div><!-- Akhir Tingkat 2 -->

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

@endsection