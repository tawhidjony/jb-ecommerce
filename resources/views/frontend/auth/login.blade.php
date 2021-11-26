@extends('layouts.frontend.app')

@section('content')
<section class="signup-login-section">
    <div class="container">
      <div class="row">
        <div class="col-8 left-banner-area">
          <!-- <h1>Welcome to <br> <span>
            JB Online Shop
          </span> </h1> -->
          <img src="{{asset('frontend/assets/images/banner-login.png')}}" alt="">
        </div>
        <div class="col-4">
          <div class="main-area login-area">
            <h4>Login</h4>

            <form action="{{route('customer.attempt')}}" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="form-group ">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
                <button type="submit" class="primary-btn btn-lg btn-block">LOGN IN</button>
            </form>

            <div class="create-account d-flex">
              <span class="or">Or</span>
              <span class="allrady-member">Don't Have an Account</span>
              <a href="signup.html" class="primary-btn create-btn">Sinp Up</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
