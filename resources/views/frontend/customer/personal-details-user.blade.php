@extends('layouts.frontend.app')

@section('content')
<section>
    <div class="account-detalis">
      <div class="container">
        <div class="row">
          <!-- nevigration menu area start -->
          <div class="col-3 ">
            <div class="left-side-area">
              <div class="profile-pic-area">
                <img src="assets/images/my_picture_squre.jpg" alt="">
                <span class="user-name">Alam Jahangir</span>
                <a href="#" class="change-pic">Change Image</a>
              </div>
              <div class="side-menu-area">
                <a href="#" class="active">
                  <div class="v-list d-flex"><i class="fas fa-user"></i>
                    <h4>My Account Deatlis</h4>
                  </div>
                </a>
                <a href="purchase-detalis-user-account.html">
                  <div class="v-list d-flex"><i class="fas fa-store"></i>
                    <h4>My Purchase</h4>
                  </div>
                </a>
                <a href="shoping-cart-user-account.html">
                  <div class="v-list d-flex"><i class="fas fa-shopping-cart"></i>
                    <h4>My Shoping Cart</h4>
                  </div>
                </a>
                <a href="#">
                  <div class="v-list d-flex"><i class="fas fa-bell"></i>
                    <h4>Notifications</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- nevigration menu area end -->


          <div class="col-9">
            <div class="right-side-area">
              <!-- profile area start -->
              <div class="profile-area">

                <div class="all-heading-left with-p">
                  <h3>My Profile</h3>
                  <p>Manage and protect your account</p>
                </div>
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <span class="user-name">jbalam</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="EX: Alam Jahangir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="Ex: +60131232143">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGender">Gender
                    </label>

                    <div class="redio-area was-validated d-flex">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation1"
                          name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation1">Male</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2"
                          name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation2">Female</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation3"
                          name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation3">Other</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control birth-date">
                  </div>
                  <button type="submit" class="primary-btn">Save</button>
                </form>
              </div>
              <!-- profile area end -->

              <!-- password area start -->
              <div class="profile-area password-area mt-5">

                <div class="all-heading-left ">
                  <h3>password</h3>
                </div>
                <form>

                  <div class="form-group">
                    <label for="inputCurrentPassword">Current password</label>
                    <input type="password" class="form-control" id="inputCurrentPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="password" class="form-control" id="inputNewPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="inputRetypeNewPassword">Retype New password</label>
                    <input type="password" class="form-control" id="inputRetypeNewPassword" placeholder="Password">
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
                      <span class="full-name">Alam Jahangir</span>
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <span class="user-name">+60234242342</span>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <span class="address-line">1, Jalan SS 7/17, Ss 7, 47301 Petaling Jaya, Selangor</span>
                    </div>
                  </div>
                  <div class="oparation-area d-flex">
                    <div class="edit"><a href="#" data-toggle="modal" data-target="#editAddress">Edit</a></div>
                    <div class="delete"><a href="#">Delete</a></div>
                    <div class="set-up"> <a href="#">Set As Default</a></div>
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
                          <form>
                            <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                                placeholder="EX: Alam Jahangir">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPhoneNumber">Phone Number</label>
                              <input type="number" class="form-control" id="exampleInputPhoneNumber"
                                aria-describedby="emailHelp" placeholder="Ex: +60131232143">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlAddress">Address</label>
                              <textarea class="form-control" id="exampleFormControlAddress" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputState">State</label>
                              <input type="text" class="form-control" id="exampleInputState"
                                aria-describedby="emailHelp" placeholder="EX: Selangor">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputCity">City</label>
                              <input type="text" class="form-control" id="exampleInputCity" aria-describedby="emailHelp"
                                placeholder="EX: Petaling Jaya">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPostcode">Postcode</label>
                              <input type="number" class="form-control" id="exampleInputPostcode"
                                aria-describedby="emailHelp" placeholder="Ex: 47301">
                            </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="primary-btn close-btn" data-dismiss="modal">Close</button>
                          <button type="button" class="primary-btn ">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- edit address model end -->
                </div>
                <!--single  address end -->


                <!--single  address start -->
                <div class="address  d-flex">
                  <div class="defult-tag ">
                    <span class="not-actived">Default</span>
                  </div>
                  <div class="display-address">
                    <div class="form-group">
                      <label for="full-name">Full Name</label>
                      <span class="full-name">Alam Jahangir</span>
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <span class="user-name">+60234242342</span>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <span class="address-line">1, Jalan SS 7/17, Ss 7, 47301 Petaling Jaya, Selangor</span>
                    </div>
                  </div>
                  <div class="oparation-area d-flex">
                    <div class="edit"><a href="#" data-toggle="modal" data-target="#editAddress2">Edit</a></div>
                    <div class="delete"><a href="#">Delete</a></div>
                    <div class="set-up"> <a href="#">Set As Default</a></div>
                  </div>

                  <!-- edit address model start -->
                  <div class="modal fade add-address" id="editAddress2" tabindex="-1" role="dialog"
                    aria-labelledby="editAddress2Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-edit"></i>Edit Address-2
                          </h5>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp"
                                placeholder="EX: Alam Jahangir">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPhoneNumber">Phone Number</label>
                              <input type="number" class="form-control" id="exampleInputPhoneNumber"
                                aria-describedby="emailHelp" placeholder="Ex: +60131232143">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlAddress">Address</label>
                              <textarea class="form-control" id="exampleFormControlAddress" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputState">State</label>
                              <input type="text" class="form-control" id="exampleInputState"
                                aria-describedby="emailHelp" placeholder="EX: Selangor">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputCity">City</label>
                              <input type="text" class="form-control" id="exampleInputCity" aria-describedby="emailHelp"
                                placeholder="EX: Petaling Jaya">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPostcode">Postcode</label>
                              <input type="number" class="form-control" id="exampleInputPostcode"
                                aria-describedby="emailHelp" placeholder="Ex: 47301">
                            </div>

                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="primary-btn close-btn" data-dismiss="modal">Close</button>
                          <button type="button" class="primary-btn ">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- edit address model end -->
                </div>
                <!--single  address start -->
                <!-- ------------------------------------------------------------------------- -->

                <!-- add address modal start -->

                <!-- Button trigger modal -->
                <button type="button" class="primary-btn" data-toggle="modal" data-target="#exampleModalCenter">
                  Add New Address
                </button>

                <!-- Modal -->
                <div class="modal fade add-address" id="exampleModalCenter" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-address-card"></i>Add
                          Address</h5>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName"
                              placeholder="EX: Alam Jahangir">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPhoneNumber">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputPhoneNumber"
                              placeholder="Ex: +60131232143">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlAddress">Address</label>
                            <textarea class="form-control" id="exampleFormControlAddress" rows="2"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputState">State</label>
                            <input type="text" class="form-control" id="exampleInputState" placeholder="EX: Selangor">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input type="text" class="form-control" id="exampleInputCity"
                              placeholder="EX: Petaling Jaya">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPostcode">Postcode</label>
                            <input type="number" class="form-control" id="exampleInputPostcode" placeholder="Ex: 47301">
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="primary-btn close-btn" data-dismiss="modal">Close</button>
                        <button type="button" class="primary-btn ">Save Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- add address modal end -->
              </div>
              <!-- address area end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
