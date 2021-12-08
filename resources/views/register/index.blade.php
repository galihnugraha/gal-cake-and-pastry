@extends('layouts.main')

@section('main')

@include('partials.header')

  <!-- ======= Main Content ======= -->
  <div id="main_content" class="container-fluid justify-content-between p-0" style="margin-top: 100px; min-height: 45rem;" data-aos="fade-in">
    <!--container-left-->
    <div class="responsif container-fluid p-0">
        <img class="image" src="assets/img/bg-reg.png">
    </div>
    <!--container-left-end-->

    <!--container-right-->
    <div id="formlogin" class="container d-flex flex-column justify-content-center">

        <!--Headline-->
        <div class="row d-flex justify-content-sm-center mt-5 mb-n1 px-4">
            <h2 style="color: #5fcf80;" class="mx-auto mb-5 mt-5">Sign Up</h2>
        </div>
        <!--Headline-end-->

        <!--form-->
        <div class="container d-flex justify-content-center align-content-center mb-n5">
          <form class="form-login" action="/register" method="post">
          @csrf
            <!--Nama-->
            <div class="form-group">
              <label class="pl-3" for="name">Full Name :</label>
              
              <input type="text" class="radius form-control p-4 @error('name') is-invalid @enderror " id="name" placeholder="Enter your full name" name="name" autocomplete="off" autofocus required>
              @error('name')
                <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                  {{ $message }}
                </div>
              @enderror
              
            </div>
            <!--Nama-end-->

            <!--Email-->
            <div class="form-group">
              <label class="pl-3" for="email">Email Address :</label>
              
              <input type="email" class="radius form-control p-4 @error('email') is-invalid @enderror " id="email" placeholder="Enter your email address" name="email" autocomplete="off" required>
              @error('email')
                <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                  {{ $message }}
                </div>
              @enderror
            
            </div>
            <!--Email-end-->

            <!--Password-->
            <div class="form-group">
              <label class="pl-3" for="password-register">Password :</label>
              
              <div class="mata">
                <input type="password" class="radius form-control p-4 @error('password') is-invalid @enderror " id="password-register" placeholder="Enter your password" name="password" autocomplete="off" required>               
                <div class="eye">
                  <i id="eye-register" class="fa fa-eye eye-icon"></i>
                </div>
              </div>
              <div class="validate" style="margin-top: 5px; margin-left: 10px;"></div>
              @error('password')
                <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                  {{ $message }}
                </div>
              @enderror

            </div>
            <!--Password-end-->

            <!--Password Validate-->
            <div class="form-group">
                <label class="pl-3" for="passwordverif">Password Confirmation :</label>
                <input type="password" class="radius form-control p-4 @error('passwordverif') is-invalid @enderror " id="passwordverif" placeholder="Re-enter your password" name="passwordverif" autocomplete="off" required>
                <div style="margin-top: 5px; margin-left: 10px; color: red;">{{ $messageVerif }}</div>
                @error('passwordverif')
                  <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                    {{ $message }}
                  </div>
                @enderror

            </div>
            <!--Password Validate-end-->

            <!-- Checkbox -->
            <div class="form-group mx-auto text-center my-4 font-weight-normal">
              <input type="checkbox" class="agree" name="agree" id="agree" style="cursor: pointer;">&nbsp;
              <label style="cursor: pointer;" class="agree" for="agree">Agree of our terms and conditions of sevices</label>
            </div>
            <!-- checkbox-end -->

            <!--button-->
            <div class="row">
              <button style="border: 0px;" name="register" type="submit" id="register" class="get-started-btn mx-auto px-4" disabled>Register</button>
            </div>
            <!--button-end-->
          </form>
        </div>
        <!--form-end-->

        <div class="row mt-5"></div>
        <h6 class="mx-auto mt-4 mb-4">
          Already have an account?&nbsp;&nbsp; <a class="a-login" href="/login"><u>Login</u></a>
        </h6>
    </div>
    <!--container-right-end-->

  </div><!-- End Main Content -->

@endsection