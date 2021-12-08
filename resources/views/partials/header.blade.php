<!-- ======= Header ======= -->
<header id="header" class="fixed-top" style="border-bottom: 4px solid darkgreen;">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto" style="margin-left: -40px;"><img src="assets/img/logoo.png" alt="" class="img-fluid"></a>
      <h1 class="logo mr-auto" style="margin-left: -230px;"><a href="/">gal</a></h1>
      
      <nav class="nav-menu d-none d-lg-block" style="margin-right: 30px;">
        <ul>
          <li class="{{ ($title === "Home") ? 'active' : '' }}"><a href="/">Home</a></li>
          <li class="{{ ($title === "About Us") ? 'active' : '' }}"><a href="/about">About</a></li>
          <li class="{{ ($title === "Catalog") ? 'active' : '' }}"><a href="/catalog">Catalog</a></li>
          
          @auth
          <li class="{{ ($title === "Your Cart") ? 'active' : '' }}"><a href="/cart">Cart</a></li>
          <li class="{{ ($title === "Transaction") ? 'active' : '' }}"><a href="/transaction">Transaction</a></li>
          @endauth
          
          <li class="{{ ($title === "Contact") ? 'active' : '' }}"><a href="/contact">Contact</a></li>
          
          <!-- Signup Login Logout Button -->
          @auth
          <li class="drop-down">
            <span class="btn-dark drop-down" style="border-radius: 15px; padding-left: 15px; padding-right: 15px; padding-bottom: 7px; padding-top: 7px;">
              <img src="assets/img/user.png" height="20px" style="margin-right: 3px;">
            </span>
            <ul>
                <li><a class="text-center">Login as : {{ auth()->user()->name }}</a></li>
                <li><a><i class="bx bx-chevron-right"></i> {{ auth()->user()->email }}</a></li>
                <hr>
                
                {{-- <?php if (!isset($_SESSION['admin'])) : ?>
                  <li><a href="profile" class="text-center">Edit Profile</a></li>
                <?php else : ?>
                  <li><a href="admin" class="text-center">Admin Page</a></li>
                <?php endif ?> --}}
                
            </ul>
          </li>
          @endauth
          

        </ul>
      </nav><!-- .nav-menu -->

      <div> 
        @guest
          <a href="/register" class="get-started-btn" style="margin-right: -13px;">Sign Up</a>
          <a href="/login" class="get-started-btn" style="margin-right: -80px;">Login</a>      
        @endguest

        @auth
          <form action="/logout" method="POST">
          @csrf
            <button class="get-started-btn" style="margin-right: -80px;">Logout</button>
          </form>
        @endauth
        </div><!-- Signup Login Logout Button -->
      

    </div>
  </header><!-- End Header -->