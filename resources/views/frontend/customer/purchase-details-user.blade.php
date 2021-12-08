@extends('layouts.frontend.app')

@section('content')
    <section>
        <div class="account-detalis">
            <div class="container">
                <div class="row">
                    @include('frontend.customer.partial.user-profile-nav')
                    <div class="col-9">
                        <div class="right-side-area">
                            <!--product purchase area start -->

                            <div class="purchase-area">
                                <div class="single-heading-back">
                                    <div class="all-heading">
                                        <a href="{{route('home.index')}}">
                                            <i class="fas fa-backspace"></i>Back
                                        </a>
                                    </div>
                                    <h3>My Purchase</h3>
                                </div>
                                <div class="search-ber">
                                    <form class="my-2 form-inline" method="GET">
                                        <input class="form-control" type="search" name="search"
                                            placeholder="Search by Order ID or Product Name" aria-label="Search">
                                        <button class="primary-btn" type="submit">Search</button>
                                    </form>
                                </div>
                                <!-- order list area start -->
                                @forelse ($purchaseOrder as $key => $item )
                                    <div class="single-product">
                                        <div class="header-ber d-flex justify-content-between">
                                            <div class="left-side">
                                                <span class="delivered">ORDER STATUS</span>
                                                @if ( $item->order_status === 1)
                                                    <span  class="p-status">Order Completed</span>
                                                @elseif ($item->shipping_status === 1)
                                                    <span  class="p-status">Shiping Procesing</span>
                                                @elseif ( $item->status === 1)
                                                    <span  class="p-status">ORDER PLACEd</span>
                                                @endif
                                            </div>

                                            <div class="order-id">
                                                Order ID : <span class="id-nbo">BG-{{$item->id}}</span>
                                            </div>
                                        </div>
                                        <div class="product-area ">
                                            <!-- order summary area-start -->
                                            <div class="order-summary-area d-flex">
                                                <div class="product-price-detali d-flex">
                                                    <h4>Total Summary</h4>
                                                    <div class="sub-total d-flex justify-content-between">
                                                        <h5>Subtotal<span class="item-count">({{$item->order_details->count()}})</span>Item</h5>
                                                        <h5>BDT <span class="item-price">{{$item->order_total}}</span></h5>
                                                    </div>
                                                    <div class="shipping-fee d-flex justify-content-between">
                                                        <h5>Shipping Fee </h5>
                                                        <h5>BDT <span class="fee">0</span></h5>
                                                    </div>
                                                    <div class="total d-flex justify-content-between">
                                                        <h5>Total(0% GST) </h5>
                                                        <h5>BDT <span class="fee">{{$item->order_total}}</span></h5>
                                                    </div>
                                                </div>
                                                <div class="payment-mathod">
                                                    <div class="payment-type-area">
                                                        <span>Payment Method </span>
                                                        <h5 class="payment-type">{{$item->payment->payment_method}}</h5>
                                                    </div>

                                                </div>

                                                <div class="shiping-address d-flex">
                                                    <h3>Delivery Address</h3>
                                                    <h4 class="user-name">{{Auth::user()->full_name}}</h4>
                                                    <span class="user-phone-number">{{Auth::user()->phone}}</span>
                                                    <span class="user-address">{{ $item->shipping->address}} {{ $item->shipping->state }} {{ $item->shipping->post_code }} - {{ $item->shipping->city }}</span>
                                                </div>
                                            </div>
                                            <!-- order summary area-end -->
                                        </div>
                                        <div class="footer-area">
                                            <div class="total-price d-flex">
                                                <h4>Order Total : </h4>
                                                <div class="product-total-price">
                                                    BDT <span class="p-t-price">{{$item->order_total}}</span>
                                                </div>
                                            </div>
                                            <div class="oparation-area d-flex">
                                                <div class="given-rating">
                                                    <span>No rating received</span>
                                                </div>
                                                <div class="button-area d-flex">
                                                    <a href="{{route('single.purchase.details', $item->id)}}"
                                                        class="link-button detalis">See Purchase
                                                        Details</a>
                                                    <a href="product-details.html" class="link-button ">Print Receipt</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div>
                                        <h2>Items Not Available</h2>
                                    </div>
                                @endforelse


                            </div>
                            {{-- {{ $purchaseOrder->links() }} --}}
                            <!-- product purchase area end -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
