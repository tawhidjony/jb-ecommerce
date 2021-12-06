@extends('layouts.frontend.app')

@section('content')
<section class="signup-login-section">
    <div class="container">
      <div class="row">
        <div class="col-8 mr-auto ml-auto">
          <div class="main-area sign-area">
            <h4>Sign Up</h4>
            <form action="{{route('customer.store')}}" method="POST">
                @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="User-id">User Name</label>
                  <input type="text" name="name" class="form-control" id="User-id" placeholder="Ex: jbalam">
                  <label for="phone-number">Phone Number</label>
                  <input type="number" name="phone" class="form-control" id="phone-number" placeholder="Ex: +60123456789">
                  <label for="inputPassword4">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
                <div class="form-group col-md-6">
                  <label for="fullName">Full Name</label>
                  <input type="text" name="full_name" class="form-control" id="fullName" placeholder="EX: Alam Jahangir">
                  <label for="Email">Email</label>
                  <input type="email" name="email" class="form-control" id="Email" placeholder="something@something.com">
                  <label for="inputPassword4">Retype Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
              <div class="form-row address-area-2">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Address</label>
                  <textarea class="form-control"  name="address" id="inputAddress" rows="3" placeholder=" 221B Baker Street"></textarea>
                  <label for="inputPostcode">Postcode</label>
                  <input type="number" name="post_code" class="form-control" id="inputPostcode" placeholder="Ex: 47301">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">State</label>
                  <input type="text" name="state" class="form-control" id="inputState" placeholder="EX: Selangor">
                  <label for="inputCity">City</label>

                  <input type="text" name="city" class="form-control" id="inputCity" placeholder="EX: Petaling Jaya">


                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                    <label class="custom-control-label" for="customCheck1">I agree with JB Online Shop's <span>Conditions of Use</span> and <span>Privacy Notice.</span> </label>
                  </div>
                </div>
              </div>

              <button type="submit" class="primary-btn">Sign Up</button>
            </form>
            <div class="create-account d-flex">
              <span class="or">Or</span>
              <span class="allrady-member">Already Member</span>
              <a href="{{route('customer.login')}}" class="primary-btn create-btn">Login</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
