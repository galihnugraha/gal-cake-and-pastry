@extends('layouts.main')

@section('main')
    
@include('partials.header')

    <main id="main">

    @include('partials.breadcrumbs')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our vision is to make Rara Bakery’s products a preferred staple food choice for Indonesian people.</h3>
            <p class="font-italic">
              We believe in the power and promise that comes from eating sumptuous food.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Continuously develop high quality, nutritious and healthy products to adapt Indonesian taste.</li>
              <li><i class="icofont-check-circled"></i> Continuously open new stores to be accessible nationwide.</li>
              <li><i class="icofont-check-circled"></i> Continuously improve human resources quality by increasing welfare and competence to provide excellent service to customers.</li>
            </ul>
            <p class="font-italic">
             Have you ever want to eat some meal, but had no idea where to go?
            </p>
            <p>
              You have come to the right place.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">25</span>
            <p>Cakes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Sold</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span><b data-toggle="counter-up">10</b>+</span>
            <p>Variety</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">7</span>
            <p>Recipes</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="about" class="about whyushero d-flex justify-content-center align-items-center">
      <div class="container" data-aos="fade-up">


        <div class="section-title" >
          <h2 style="color: white">Why Us</h2>
          <p style="color: white">something that we attempt for</p>
        </div>

        <div class="row">
          <div class="col-lg-9 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <ul style="color: white">
              <li><i class="icofont-check-circled"></i> We value & nurture our people.</li>
              <li><i class="icofont-check-circled"></i> We value personal & professional integrity.</li>
              <li><i class="icofont-check-circled"></i> We embrace innovation as our way of life.</li>
              <li><i class="icofont-check-circled"></i> We take pride in our work and do it well.</li>
              <li><i class="icofont-check-circled"></i> We support lifelong learning & value open communication.</li>
              <li><i class="icofont-check-circled"></i> We grow our business with the commitment of giving back to society.</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                “No matter the event, Alison can create the perfect cookie to match. And when I say perfect, I mean it. Rara Bakery’s works of art aren’t simply beautiful, they are absolutely delicious!”
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Your beautiful cookies were a big hit, especially with my 3 year old. He will do anything we ask of him, as long as he can have a cookie! Thank you again for making cookies that completely matched my theme and made our Christmas morning so fun. We have enjoyed our family time and your cookies made it all the more special.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                The cookies on a stick were amazing and fun. They used my graphic and printed it off on edible paper. It was such a fun display and take home party favor. I also made some rice crispy cake pops to go along with it. I’m pretty much sold on Rara Bakery’s cookies and think they need to be a part of every special occasion from here forward.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I really appreciate the time taken with me to have the perfect Seahawk themed cake. They made sure I was happy before I left and even offered to deck the cake out in blue and green for this 12th man!!! Thank you so much. My 44 birthday will be the best yet!!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               I had Sweet Themes create my beautiful wedding cake and I must say I was completely satisfied! Not only was it beautiful but it was also delicious! Thank you so much Sweet Themes for making my wedding that much sweeter!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

@endsection