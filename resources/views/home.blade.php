@extends('layouts.main')

@section('main')
    
@include('partials.header')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Order Today,<br>Never Regret Tomorrow</h1>
      <h2>We value & nurture our people.</h2>
      
      @guest
        <a href="/register" class="btn-get-started">Register Now</a>
      @endguest

      @auth
        <a href="/catalog" class="btn-get-started">Order Now</a>  
      @endauth

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Popular Products Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p>Popular Products</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="katalog.php">
              <div class="course-item">
                <img src="assets/img/products/brioche.jpg" width="100%" alt="">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>15.000 IDR</h4>
                  </div>
                  <h3>Brioche</h3>
                  <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
                </div>
              </div>
            </a>
          </div><!-- End Products Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="katalog.php">
              <div class="course-item">
                <img src="assets/img/products/crumpet.jpg" width="100%" alt="">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>25.000 IDR</h4>
                  </div>
                  <h3>Crumpet</h3>
                  <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
                </div>
              </div>
            </a>
          </div><!-- End Products Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <a href="katalog.php">
              <div class="course-item">
                <img src="assets/img/products/muffin.jpg" width="100%" alt="">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>25.000 IDR</h4>
                  </div>
                  <h3>Muffin</h3>
                  <p style="color: white" class="text-justify">Hypertext Markup Language (HTML)</p>
                </div>
              </div>
            </a>
          </div><!-- End Products Item-->

        </div>

      </div>
    </section><!-- End Popular Products Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about abouthero d-flex justify-content-center align-items-center">
      <div class="container" data-aos="fade-up">


        <div class="section-title" >
          <h2 style="color: white">About</h2>
          <p style="color: white">Why Rara Bakery</p>
        </div>

        <div class="row" style="color: white">
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              <b>Our vision is to make Rara Bakery’s products a preferred staple food choice for everyone.</b>
            </p>
            
           <div class="col-lg-9 offset-1">
              <p class="font-italic">
                Have you ever want to eat some meal, but had no idea where to go?
              </p>
              <p>
                You have come to the right place.
              </p>
           </div>
           <br>
            <a href="about.php" class="learn-more-btn">Learn More</a>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Professional Chefs</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection