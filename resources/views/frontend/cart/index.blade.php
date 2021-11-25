@extends('layouts/frontend/app')

@section('content')
    @php
    $grand_total = 0 ;
    @endphp
    <section>
        <div class="account-detalis shoping-checkout-area">
            <div class="container">
                <div class="row">
                    <!--main shoping checkout area end -->
                    <div class="col-8">
                        <div class="right-side-area shoping-cart-area p-checkout">
                            <!--shoping cart area start -->

                            <div class="purchase-area">
                                <div class="single-heading-back">
                                    <div class="all-heading">
                                        <a href="shoping-cart-user-account.html"><i class="fas fa-backspace"></i>Back</a>
                                    </div>
                                    <h3>My Shopping Cart</h3>
                                </div>

                                @forelse ($get_cart_item as $cartItem)
                                    <div class="single-product">
                                        <div class="product-area d-flex justify-content-between">
                                            <div class="product-detalis d-flex">
                                                <div class="p-image">
                                                    <img src="{{ asset($cartItem->options->photo) }}" alt="">
                                                </div>
                                                <div class="p-detalis">
                                                    <h4>{{ $cartItem->name }}</h4>
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
                                            <form class="middle-form" action="{{ route('cart.update') }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <div class="p-detalis-right-side d-flex justify-content-between">
                                                    <div class="product-price">
                                                        <h4>BDT<span class="unit-price">{{ $cartItem->price }}</span>
                                                        </h4>
                                                        <span class="p-info"> Unit Price</span>
                                                    </div>
                                                    <div class="p-quantity">
                                                        <div class="input-group">
                                                            <input type="number" max="50000" name="qty" min="1"
                                                                value="{{ $cartItem->qty }}" class="form-control">
                                                            <input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
                                                        </div>

                                                        <span class="p-info"> Quantity</span>
                                                        <button type="submit" class="btn update-but">Update </button>
                                                    </div>
                                                    <div class="total-parice">
                                                        <h4>BDT<span
                                                                class="total-price">{{ $cartItem->subtotal }}</span>
                                                        </h4>
                                                        <span class="p-info"> Total Price</span>
                                                    </div>

                                                </div>
                                            </form>

                                            <form action="{{ route('cart.destroy', $cartItem->rowId) }}" class="del-action-form">
                                                @csrf
                                                <button type="submit" class="btn del-but">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $grand_total += $cartItem->subtotal}}">
                                @empty
                                    <div class="no-product">
                                        <h3>No Product in Cart</h3>
                                    </div>
                                @endforelse

                            </div>
                            <!-- shoping cart area end -->
                        </div>
                    </div>
                    <!--main shoping cart area end -->

                    <!-- check out oparation area start -->
                    <div class="col-4">
                        <div class="check-out-area">
                            <h1>PLACE ORDER</h1>
                            <div class="shiping-address-delivary">
                                <h3>Delivery Address</h3>
                                <div class="address-contain">
                                    <h4 class="user-name">Alam Jahangir</h4>
                                    <span class="user-phone-number">+6034520559</span>
                                    <span class="user-address">Block- B, Floor- 6, Room- 603, Tiara Kelana Condominium, 1,
                                        Jalan SS 7/17,
                                        Ss 7,, Petaling Jaya, 47301, Selangor</span>
                                    <a href="#" class="change-address" data-toggle="modal"
                                        data-target="#changeAddress">Change</a>
                                </div>
                            </div>
                            <div class="payment-method-check was-validated">
                                <h4>Select Payment Method</h4>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="payment" value="cash on delevery" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">
                                        <div class="payment-option">
                                            <span class="option">Cash On Delivery</span>
                                            <span class="note">Payment will be demand during delivery</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio paypal-online">
                                    <input type="radio" id="customRadio2" name="payment" value="bank" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">
                                        <div class="payment-option">
                                            <span class="option">
                                                <img src="{{asset('frontend/assets/images/patner/paypal-logo.png')}}" alt="">
                                                </span>
                                            <span class="note">Credit/Debit Card or Paypal online</span>
                                        </div>
                                    </label>
                                </div>

                            </div>

                            <div class="content-area-palce-order">
                                <div class="sub-total-area d-flex justify-content-between">
                                    <h2>Subtotal<span class="item-count"></span></h2>
                                    <h3>BDT<span class="subtotal">{{$grand_total}}</span></h3>
                                </div>
                                <div class="shipping-fee-area d-flex justify-content-between">
                                    <h2>Shipping Fee</h2>
                                    <h3>BDT<span class="shipping-fee">0</span></h3>
                                </div>
                                <div class="total-area d-flex justify-content-between">
                                    <h2>Total<span class="gst">(0%)</span>GST</h2>
                                    <h3>BDT<span class="subtotal">{{$grand_total}}</span></h3>
                                </div>
                            </div>
                            <a href="purchase-detalis-user-account.html" class="checkout-button">CHECKOUT<i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- check out oparation area end -->
                </div>
            </div>
        </div>
    </section>
@endsection
