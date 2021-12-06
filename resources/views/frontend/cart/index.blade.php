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
                                        <a href="{{route('home.index')}}"><i class="fas fa-backspace"></i>Back</a>
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
                                                <button type="submit" class="btn del-but" >Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $grand_total += $cartItem->subtotal}}">
                                @empty
                                    <div class="no-product bg-white my-4 p-5">
                                        <h3 class="text-center">No Product in Cart</h3>
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
                        <form action="{{route('cart.item.store')}}" method="POST">
                            @csrf
                            <h1>PLACE ORDER</h1>
                            <div class="shiping-address-delivary">
                                <h3>Delivery Address</h3>
                                <div class="address-contain">
                                    <h4 class="user-name">{{Auth::user()->full_name}}</h4>
                                    <span class="user-phone-number">{{Auth::user()->phone}}</span>
                                    <span class="user-address">
                                        @if(!$shippingAddress == "")
                                            {{$shippingAddress->address}},
                                            {{$shippingAddress->state}},
                                            {{$shippingAddress->post_code}},
                                            {{$shippingAddress->city}}
                                            <input type="hidden" name="shipping_id" value="{{$shippingAddress->id}}">
                                        @else
                                            <p>Login first</p>
                                        @endif
                                    </span>

                                    <a href="{{route('customer.index')}}" class="change-address" >Change</a>
                                </div>
                            </div>
                            <div class="payment-method-check was-validated">
                                <h4>Select Payment Method</h4>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="payment" value="cash on delevery" class="custom-control-input" required>
                                    <label class="custom-control-label" for="customRadio1">
                                        <div class="payment-option">
                                            <span class="option">Cash On Delivery</span>
                                            <span class="note">Payment will be demand during delivery</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio paypal-online">
                                    <input type="radio" id="customRadio2" name="payment" value="bank" class="custom-control-input" required>
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
                            @if(Auth::check())
                                <button style="width:92%" type="submit" class="checkout-button" {{ $grand_total === 0 ? "disabled":""}}>CHECKOUT<i class="fas fa-angle-double-right"></i></button>
                            @else
                            <a href="{{route('customer.login')}}" type="submit" class="checkout-button" {{ $grand_total === 0 ? "disabled":""}}>CHECKOUT<i class="fas fa-angle-double-right"></i></a>
                            @endif
                        </form>
                        </div>
                    </div>
                    <!-- check out oparation area end -->
                </div>
            </div>
        </div>
    </section>
@endsection
