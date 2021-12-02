@extends('layouts.frontend.app')

@section('content')
<section>
    <div class="account-detalis">
      <div class="container">
        <div class="row">
          <!-- nevigration menu area start -->
          <div class="col-3 ">
            <div class="left-side-area purchase-page">
              <div class="profile-pic-area">
                <img src="assets/images/my_picture_squre.jpg" alt="">
                <span class="user-name">Alam Jahangir</span>

              </div>
              <div class="side-menu-area">
                <a href="personal-detalis-user-account.html">
                  <div class="v-list d-flex"><i class="fas fa-user"></i>
                    <h4>My Account Deatlis</h4>
                  </div>
                </a>
                <a href="purchase-detalis-user-account.html" class="active">
                  <div class="v-list d-flex"><i class="fas fa-store"></i>
                    <h4>My Purchase</h4>
                  </div>
                </a>
                <a href="shoping-cart-user-account.html">
                  <div class="v-list d-flex"><i class="fas fa-shopping-cart"></i>
                    <h4>My Shopping Cart</h4>
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

          <!--single product purchase area start -->
          <div class="col-9">
            <div class="right-side-area">
              <div class="purchase-area single-p-detalis">
                <div class="single-heading-back">
                  <div class="all-heading">
                    <a href="purchase-detalis-user-account.html"><i class="fas fa-backspace"></i>Back</a>
                  </div>
                </div>
                <!--  single-product details area start-->
                <div class="single-product">
                  <div class="header-ber d-flex justify-content-between">
                    <div class="left-side">
                      <span class="delivered">ORDER STATUS</span>
                      <span class="p-status">ORDER PLACED</span>
                    </div>
                    <div class="order-id">
                      Order ID : <span class="id-nbo">BG-{{$purchaseOrderDetails->id}}</span>
                    </div>
                  </div>
                  <!-- order summary area-start -->
                  <div class="order-summary-area d-flex">
                    <div class="product-price-detali d-flex">
                      <h4>Total Summary</h4>
                      <div class="sub-total d-flex justify-content-between">
                        <h5>Subtotal<span class="item-count">(1)</span>Item</h5>
                        <h5>BDT <span class="item-price">{{$purchaseOrderDetails->order_total}}</span></h5>
                      </div>
                      <div class="shipping-fee d-flex justify-content-between">
                        <h5>Shipping Fee </h5>
                        <h5>BDT <span class="fee">0</span></h5>
                      </div>
                      <div class="total d-flex justify-content-between">
                        <h5>Total(0% GST) </h5>
                        <h5>BDT <span class="fee">{{$purchaseOrderDetails->order_total}}</span></h5>
                      </div>
                    </div>
                    <div class="payment-mathod">
                      <div class="payment-type-area">
                        <span>Payment Method </span>
                        <h5 class="payment-type">{{$purchaseOrderDetails->payment->payment_method}}</h5>
                      </div>

                    </div>

                    <div class="shiping-address d-flex">
                        <h3>Delivery Address</h3>
                        <h4 class="user-name">{{Auth::user()->name}}</h4>
                        <span class="user-phone-number">{{Auth::user()->phone}}</span>
                        <span class="user-address">{{ $purchaseOrderDetails->shipping->address}} {{ $purchaseOrderDetails->shipping->state }} {{ $purchaseOrderDetails->shipping->post_code }} - {{ $purchaseOrderDetails->shipping->city }}</span>
                    </div>
                  </div>
                  <!-- order summary area-end -->
                  <!-- delivary summary start -->
                  <div class="delivary-summary">
                    <div class="p-tracking-area d-flex justify-content-around">
                      <div class="actived comon-div order-place">
                        <div class="icon-area">
                          <i class="fas fa-luggage-cart"></i>
                        </div>
                        <h5>Order Placed</h5>
                        <span class="date-time">26-5-2021 5:10</span>
                      </div>
                      <div class="comon-div shiping-procesing">
                        <div class="icon-area">
                          <i class="fas fa-caravan"></i>
                        </div>
                        <h5>Shiping Procesing</h5>
                        <span class="date-time">26-5-2021 5:10</span>
                      </div>
                      <div class="comon-div order-completed">
                        <div class="icon-area">
                          <i class="fas fa-download"></i>
                        </div>
                        <h5>Order Completed</h5>
                        <span class="date-time">26-5-2021 5:10</span>
                      </div>
                    </div>
                  </div>


                  <!-- delivary summary end -->


                  <!-- product list start-->
                  <div class="product-list-area">

                    @forelse ($purchaseOrderDetails->order_details as $item)
                        <div class="product-area d-flex">
                            <div class="p-image">
                            <img src="{{ URL::to($item->product[0]['thumbnail']) }}" alt="">
                            </div>
                            <div class="p-detalis">
                            <h4>{{$item->product[0]['name']}}</h4>
                            <div class="p-variation d-flex">
                                <span>Variation :</span>
                                <span class="variation">{{$item->variation}}</span>
                            </div>
                            <div class="p-quantity d-flex">
                                <span>Quantity :</span>
                                <span class="quantity">{{$item->qty}}</span>
                            </div>
                            </div>
                            <div class="product-price">
                            BDT<span class="p-price">{{$item->product[0]['price']}}</span>
                            </div>
                        </div>
                    @empty

                    @endforelse


                  </div>
                  <!-- product list end-->


                  <a href="#" class="mb-5 link-button" data-toggle="modal" data-target="#giveReviewModal">Give A
                    Review</a>
                </div>
                <!--  single-product area end-->
              </div>
            </div>
          </div>
          <!--single product details purchase area end -->
        </div>
      </div>
    </div>
  </section>



  <!-- user account purchase detalisend-->



  <!-- give review Modal  start-->
  <div class="modal fade give-review-modal" id="giveReviewModal" tabindex="-1" role="dialog"
    aria-labelledby="giveReviewModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-grin-hearts"></i>Give a Review</h5>

        </div>
        <div class="modal-body">
          <form class="was-validated">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked"
                required>
              <label class="custom-control-label" for="customControlValidation1"><img
                  src="assets/images/review-image/5star.png" alt=""></label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked"
                required>
              <label class="custom-control-label" for="customControlValidation2"><img
                  src="assets/images/review-image/4star.png" alt=""></label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked"
                required>
              <label class="custom-control-label" for="customControlValidation3"><img
                  src="assets/images/review-image/3star.png" alt=""></label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customControlValidation4" name="radio-stacked"
                required>
              <label class="custom-control-label" for="customControlValidation4"><img
                  src="assets/images/review-image/2star.png" alt=""></label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="customControlValidation5" name="radio-stacked"
                required>
              <label class="custom-control-label" for="customControlValidation5"><img
                  src="assets/images/review-image/1star.png" alt=""></label>
            </div>

            <div class="form-group">
              <label for="yourComment">Write your comment</label>
              <textarea class="form-control" id="yourComment" rows="3"></textarea>
            </div>
            <div class="mb-3 input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">Upload photo of this product</label>
              </div>

            </div>
          </form>




        </div>
        <div class="modal-footer">
          <button type="button" class="primary-btn close-btn" data-dismiss="modal">Close</button>
          <button type="button" class="primary-btn ">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <!-- give review Modal  end-->
@endsection
