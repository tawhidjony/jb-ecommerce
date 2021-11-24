@extends('layouts/frontend/app')

@section('content')
<section>
    <div class="account-detalis">
      <div class="container">
        <div class="row">
          <!--main shoping cart area end -->
          <div class="col-8">
            <div class="right-side-area shoping-cart-area">
              <!--shoping cart area start -->

              <div class="purchase-area">
                <div class="single-heading-back">
                  <div class="all-heading">
                    <a href="purchase-detalis-user-account.html"><i class="fas fa-backspace"></i>Back</a>
                  </div>
                    <h3>My Shoping Cart</h3>

                </div>
                {{-- <div class="search-ber">
                  <form class="my-2 form-inline ">
                    <input class="form-control" type="search" placeholder="Search Product Name" aria-label="Search">
                    <button class="primary-btn" type="submit">Search</button>
                  </form>
                </div> --}}


                <div class="info-bar d-flex justify-content-between">
                  <div class="i-left-side">
                    <h4>Product Detalis</h4>
                  </div>
                  <div class="i-right-side d-flex">
                    <h4>Unit Price</h4>
                    <h4>Quantity</h4>
                    <h4>Total Price</h4>
                    <h4>Action</h4>
                  </div>
                </div>

                @forelse ($get_cart_item as $cartItem)
                    <div class="single-product">
                        <div class="product-area d-flex justify-content-between">
                        <div class="product-detalis d-flex">
                            {{-- <div class="select-option d-flex">
                            <div class="option-area ">
                                <div class="form-group">
                                <input type="checkbox" id="jb-1">
                                <label for="jb-1"></label>
                                </div>
                            </div>
                            </div> --}}
                            <div class="p-image">
                                <img src="{{asset($cartItem->options->photo)}}" alt="">
                            </div>
                            <div class="p-detalis">
                            <h4>{{$cartItem->name}}</h4>
                            <div class="p-variation d-flex">
                                <span>Variation :</span>
                                <span class="variation">Sierra Blue</span>
                            </div>
                            <div class="p-variation d-flex">
                                <span>Shipping fee :</span>
                                <span class="shiping-fee">0</span>
                            </div>
                            </div>
                        </div>
                        <div class="p-detalis-right-side d-flex justify-content-between">
                            <div class="product-price">
                            <h4>RM<span class="unit-price">{{$cartItem->price}}</span></h4>
                            </div>
                            <div class="p-quantity">
                            <div class="input-group">
                                <input type="number" max="50000" min="1" value="1" class="form-control" aria-label="Username"
                                aria-describedby="basic-addon1">
                            </div>
                            </div>
                            <div class="total-parice">
                            <h4>RM<span class="total-price">{{$cartItem->price}}</span></h4>
                            </div>
                            <div class="action">
                            <a href="#">Delete</a>
                            </div>
                        </div>
                        </div>
                     </div>
                @empty

                @endforelse

              </div>
              <!-- shoping cart area end -->
            </div>
          </div>
          <!--main shoping cart area end -->
          <!-- check out oparation area start -->
          <div class="col-4">
            <div class="check-out-area">
              <h1>Cart Total</h1>
              <div class="content-area">
                <div class="sub-total-area d-flex justify-content-between">
                  <h2>Subtotal<span class="item-count">(3)</span>Item</h2>
                  <h3>Bdt<span class="subtotal">171950</span></h3>
                </div>
                <div class="shipping-fee-area d-flex justify-content-between">
                  <h2>Shipping Fee</h2>
                  <h3>Bdt<span class="shipping-fee">0</span></h3>
                </div>
                <div class="total-area d-flex justify-content-between">
                  <h2>Total<span class="gst">(0%)</span>GST</h2>
                  <h3>Bdt<span class="subtotal">171950</span></h3>
                </div>
              </div>
              <a href="place-order-user-account.html" class="checkout-button">Proceed to checkout<i class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
          <!-- check out oparation area end -->
        </div>
      </div>
    </div>
  </section>
@endsection
