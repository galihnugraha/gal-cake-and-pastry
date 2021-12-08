@extends('layouts.main')

@section('main')

@if(session()->has('success'))
<!-- Modal Register -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

@if(session()->has('loginError'))
<!-- Modal Register -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
      </div>
      <div class="modal-body">
        {{ session('loginError') }}
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
            <h2 style="color: #5fcf80;" class="mx-auto mb-5 mt-5">Log In</h2>
        </div>
        <!--Headline-end-->

        <!--form-->
        <div class="container d-flex justify-content-center align-content-center mb-n5">
          <form class="form-login" action="/login" method="post">
          @csrf
            <!--Email-->
            <div class="form-group">
              <label class="pl-3" for="email">Email Address :</label>
              
              <input type="text" class="radius form-control p-4 @error('email') is-invalid @enderror " id="email" placeholder="Enter your email address" name="email" autocomplete="off" autofocus required value="{{ old('email') }}">
              @error('email')
                <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                  {{ $message }}
                </div>
              @enderror
            
            </div>
            <!--Email-end-->

            <!--Password-->
            <div class="form-group">
              <label class="pl-3" for="password-login">Password :</label>
              
              <div class="mata">
                <input type="password" class="radius form-control p-4 @error('password') is-invalid @enderror " id="password-login" placeholder="Enter your password" name="password" autocomplete="off" required>               
                <div class="eye">
                  <i id="eye-login" class="fa fa-eye eye-icon"></i>
                </div>
              </div>
              @error('password')
                <div class="invalid-feedback" style="margin-top: 5px; margin-left: 10px;">
                  {{ $message }}
                </div>
              @enderror

            </div>
            <!--Password-end-->

            <!-- Checkbox -->
            {{-- <div class="form-group mx-auto text-center my-4 font-weight-normal">
              <input type="checkbox" name="remember" id="remember" style="cursor: pointer;">&nbsp;
              <label style="cursor: pointer;" for="remember">Remember me log in?</label>
            </div> --}}
            <!-- checkbox-end -->

            <!--button-->
            <div class="row">
              <button style="border: 0px;" name="login" type="submit" id="register" class="get-started-btn mx-auto px-4">Login</button>
            </div>
            <!--button-end-->
          </form>
        </div>
        <!--form-end-->

        <div class="row mt-5"></div>
        <h6 class="mx-auto mt-4 mb-4">
          Don't have an account?&nbsp;&nbsp; <a class="a-login" href="/register"><u>Sign Up</u></a>
        </h6>
    </div>
    <!--container-right-end-->

  </div><!-- End Main Content -->

@endsection