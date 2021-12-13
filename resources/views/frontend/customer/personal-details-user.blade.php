@extends('layouts.frontend.app')

@section('content')
<section>
    <div class="account-detalis">
      <div class="container">
        <div class="row">
            @include('frontend.customer.partial.user-profile-nav')

          <div class="col-9">
            <div class="right-side-area">
              <!-- profile area start -->
              <div class="profile-area">

                <div class="all-heading-left with-p">
                  <h3>My Profile</h3>
                  <p>Manage and protect your account</p>
                </div>
                <form action="{{route('profile.update')}}" method="POST" >
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <span class="user-name">{{$user->name}}</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="EX: Alam Jahangir" name="full_name" value="{{$user->full_name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter email" name="email" value="{{$user->email}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Ex: +60131232143" name="phone" value="{{$user->phone}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGender">Gender
                    </label>

                    <div class="redio-area was-validated d-flex">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation1"
                          name="gender" value="male"  required {{ $user->gender == "male" ? 'checked' :"" }} >
                        <label class="custom-control-label" for="customControlValidation1">Male</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2"
                          name="gender" value="female" required {{ $user->gender == "female" ? 'checked' :"" }}>
                        <label class="custom-control-label" for="customControlValidation2">Female</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation3"
                          name="gender" value="other" required >
                        <label class="custom-control-label" for="customControlValidation3">Other</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="date_of_birth" value="{{$user->date_of_birth}}" max="3000-12-31" min="1000-01-01" class="form-control birth-date">
                  </div>
                  <button type="submit" class="primary-btn">Update</button>
                </form>
              </div>
              <!-- profile area end -->

              <!-- password area start -->
              <div class="mt-5 profile-area password-area">

                <div class="all-heading-left ">
                  <h3>password</h3>
                </div>
                <form action="{{route('password.changes')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="inputCurrentPassword">Current password</label>
                    <input type="password" required name="old_password" class="form-control" id="inputCurrentPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" required name="password" class="form-control" id="inputNewPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputRetypeNewPassword">Retype New password</label>
                    <input type="password" required name="password_confirmation" class="form-control" id="inputRetypeNewPassword" placeholder="Password">
                  </div>
                  <button type="submit" class="primary-btn">Update Password</button>
                </form>
              </div>
              <!-- password area end -->
               <!-- address area start -->
              <div class="address-area">
                <div class="all-heading-left">
                  <h3>My Addresses</h3>
                </div>
                <!-- ------------------------------------------------------------------------- -->
                <!--single  address start -->
                <div class="address  d-flex">
                  <div class="defult-tag ">
                    <span class="actived">Default</span>
                  </div>
                  <div class="display-address">
                    <div class="form-group">
                      <label for="full-name">Full Name</label>
                      <span class="full-name">{{$user->full_name}}</span>
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <span class="user-name">{{$user->phone}}</span>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <span class="address-line">
                          {{$shipping->address}}
                          {{$shipping->state}}
                          {{$shipping->city}}
                          {{$shipping->post_code}}
                        </span>
                    </div>
                  </div>
                  <div class="oparation-area d-flex">
                    <div class="edit"><a href="#" data-toggle="modal" data-target="#editAddress">Edit</a></div>
                    <!-- <div class="delete"><a href="#">Delete</a></div> -->
                    <!-- <div class="set-up"> <a href="#">Set As Default</a></div> -->
                  </div>
                  <!-- edit address model start -->
                  <div class="modal fade add-address" id="editAddress" tabindex="-1" role="dialog"
                    aria-labelledby="editAddressTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-edit"></i>Edit Address
                          </h5>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('shipping.update')}}" method="POST">
                              @csrf
                            <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" required value="{{Auth::user()->full_name}}" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                                placeholder="EX: Alam Jahangir">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPhoneNumber">Phone Number</label>
                              <input type="number" required value="{{Auth::user()->phone}}" class="form-control" id="exampleInputPhoneNumber"
                                aria-describedby="emailHelp" placeholder="Ex: +60131232143">
                              <input type="hidden"required name="shipping_id" value="{{Auth::user()->id}}" >
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlAddress">Address</label>
                              <textarea name="address" required class="form-control" id="exampleFormControlAddress" rows="2">{{$shipping->address}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputState">State</label>
                              <input type="text" required name="state" value="{{$shipping->state}}" class="form-control" id="exampleInputState"
                                aria-describedby="emailHelp" placeholder="EX: Selangor">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputCity">City</label>
                              <input type="text" required name="city" value="{{$shipping->city}}" class="form-control" id="exampleInputCity" aria-describedby="emailHelp"
                                placeholder="EX: Petaling Jaya">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPostcode">Postcode</label>
                              <input type="number" required name="post_code" value="{{$shipping->post_code}}" class="form-control" id="exampleInputPostcode"
                                aria-describedby="emailHelp" placeholder="Ex: 47301">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="primary-btn close-btn" data-dismiss="modal">Close</button>
                              <button type="submit" class="primary-btn ">Save Changes</button>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- edit address model end -->
                </div>
                <!--single  address end -->
              </div>
              <!-- address area end -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
