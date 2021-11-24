@extends('layouts/frontend/app')

@section('content')
<section>
    <div class="section-product-detalis">
      <div class="container">
        <div class="main-contain">
          <div class="row">
            <!-- display image area start -->
            <div class="col-5">
              <div class="dis-image-area">
                <div class="slider-for">
                    @foreach ($productShow->product_img as $items)
                        <img src="{{asset($items)}}" alt="">
                    @endforeach
                </div>
              </div>
              <div class="navigration-image-area slider-nav">
                    @foreach ($productShow->product_img as $items)
                        <img class="small-img" src="{{asset($items)}}" alt="">
                    @endforeach
              </div>
            </div>
            <!-- display image area end -->
            <!-- product-briefing-area start -->

            <div class="col-7">
              <div class="product-briefing-area">
                <div class="heading">
                  <h1>{{$productShow->name}}</h1>
                </div>
                <div class="rating-area d-flex align-items-center">
                  <div class="comon-div ster-image d-flex align-items-center">
                    <span class="ster-count">5</span>
                    <img src="{{asset('frontend/assets/images/review-image/5star.png')}}" alt="">
                  </div>
                  <div class="comon-div rating-count d-flex align-items-center">
                    <span class="count">10</span>
                    <h5>Rating</h5>
                  </div>
                  <div class="comon-div sold d-flex align-items-center">
                    <span class="sold-count">10</span>
                    <h5>Sold</h5>
                  </div>
                </div>
                <div class="special-servise d-flex align-items-center">
                  <span class="special-word">Free Shiping</span>
                  <span class="special-word">100% Authentic</span>
                  <span class="special-word">Money Back</span>
                </div>
                <div class="product-price">
                  <h1>RM <span class="p-price">{{$productShow->price}}</span></h1>
                </div>
                <div class="product-variation d-flex">
                  <h4>Variation</h4>
                  <div class="variation-count">
                    @foreach ($productShow->variation as $variation)
                     <div class="v-list"><a href="#" class="select">{{$variation}}</a></div>
                    @endforeach
                  </div>
                </div>
                <form action="{{route('cart.store')}}" method="POST">
                    @csrf
                    <div class="quantity-area d-flex">
                    <h4>Quantity</h4>
                        <div class="form-group d-flex">
                        <input type="number" name="qty" value="1" class="form-control" id="inputPassword" min="1" max="100000">
                        <input type="hidden" name="uuid" value="{{$productShow->uuid}}">
                        <div class="item-available d-flex align-items-center">
                            {{-- <span class="available-count">23</span>
                            <h6>piece available</h6> --}}
                        </div>
                        </div>
                    </div>
                    <div class="button-area d-flex justify-content-start">
                        <button type="submit" class="add-cart">Add to cart</button>
                        <button class="buy-now">buy now</button>
                    </div>
                </form>

              </div>
            </div>
            <!-- product-briefing-area end -->

          </div>
        </div>
        <div class="comon-section product-description">
          <div class="heading-every-section d-flex justify-content-between">
            <h2>product description</h2>
          </div>
          <div class="text-area">
            {!! $productShow->description !!}
          </div>
        </div>
{{--
        <div class="comon-section product-rating">
          <div class="heading-every-section d-flex justify-content-between">
            <h2>product rating</h2>
          </div>
          <div class="rating-navigration d-flex ">
            <div class="rating-display">
              <div class="rating-star d-flex justify-content-start align-items-baseline">
                <span class="rating-star-count">4</span>
                <h5>out of 5</h5>
              </div>
              <img src="assets/images/review-image/4star.png" alt="">
            </div>
            <div class="navigration-option d-flex">
              <div class="v-list">
                <a href="#" class="select">All</a>
              </div>
              <div class="v-list"><a href="#">5 Star <span class="five-star-count">(100)</span> </a></div>
              <div class="v-list"><a href="#">4 Star <span class="four-star-count">(50)</span> </a></div>
              <div class="v-list"><a href="#">3-Star <span class="three-star-count">(30)</span> </a></div>
              <div class="v-list"><a href="#">2 Star <span class="two-star-count">(5)</span> </a></div>
              <div class="v-list"><a href="#">1 Star <span class="one-star-count">(0)</span> </a></div>
              <div class="v-list"><a href="#">With Comments <span class="with-comments">(100)</span> </a></div>
              <div class="v-list"><a href="#">With Media <span class="with-media">(24)</span> </a></div>
            </div>
          </div>

          <div class="customar-comment-area">
            <div class="single-customer d-flex">
              <div class="customer-pic"><img src="assets/images/my_picture_squre.jpg" alt=""></div>
              <div class="customaer-info">
                <h5>Alam Jahangir</h5>
                <div class="given-star">
                  <img src="assets/images/review-image/5star.png" alt="">
                </div>
                <div class="variation">Variation: <span class="buy-variation">Silver</span></div>
                <p class="user-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde error harum
                  similique facere officia corporis culpa consequuntur praesentium porro id, labore nobis repellendus,
                  assumenda laboriosam laborum corrupti possimus sequi totam!</p>
                <div class="user-upload-product-pic d-flex">
                  <img src="assets/images/product-img/product-1/po-3.png" alt="">
                  <img src="assets/images/product-img/product-1/po-3.png" alt="">
                  <img src="assets/images/product-img/product-1/po-3.png" alt="">
                </div>
                <div class="date-time">25-8-2021</div>
              </div>
            </div>
            <div class="single-customer d-flex">
              <div class="customer-pic"><img src="assets/images/my_picture_squre.jpg" alt=""></div>
              <div class="customaer-info">
                <h5>Alam Jahangir</h5>
                <div class="given-star">
                  <img src="assets/images/review-image/5star.png" alt="">
                </div>
                <div class="variation">Variation: <span class="buy-variation">Graphite</span></div>
                <p class="user-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde error harum
                  similique facere officia corporis culpa consequuntur praesentium porro id, labore nobis repellendus,
                  assumenda laboriosam laborum corrupti possimus sequi totam!</p>
                <div class="user-upload-product-pic d-flex">
                  <img src="assets/images/product-img/product-1/po-4.png" alt="">
                  <img src="assets/images/product-img/product-1/po-4.png" alt="">
                  <img src="assets/images/product-img/product-1/po-4.png" alt="">
                </div>
                <div class="date-time">25-8-2021</div>
              </div>
            </div>

          </div>
        </div> --}}

      </div>
    </div>
  </section>



{{--
    <section class="main-section-home populer-products">
      <div class="container">
        <div class="heading-every-section d-flex justify-content-between">
          <h2>SIMILAR PRODUCT</h2>
          <a href="#">See All</a>
        </div>
        <div class="row margin-none">

          <!-- main product area start -->
          <div class="main-product-area">
            <div class="row">
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="product-details.html">
                  <div class="product-card">
                    <div class="product-image-area">
                      <img src="assets/images/product-img/product-1/po-card.png" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>iPhone 13 Pro Max 256GB A15 Bionic chip. </h4>
                    </div>
                    <div class="product-price">
                      <span class="before-price price">Bdt<strong>110000</strong> </span>
                      <span class="after-price price">Bdt<strong>104500</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
                        <span class="p-sold-count">(10)</span>
                      </div>
                      <div class="shop-location">
                        <h4>Dhaka</h4>
                      </div>
                    </div>
                    <div class="special-tag">
                      <span class="p-special-tag">Recommend</span>
                    </div>
                    <div class="offer-percent">
                      <span class="p-percent">5%</span><br>OFF
                    </div>
                  </div>
                </a>
              </div>
              <!-- single product card end -->
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="product-details.html">
                  <div class="product-card">
                    <div class="product-image-area">
                      <img src="assets/images/product-img/product-2/watch-main.jpg" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>Apple Watch, Gold Aluminum Case with Sport Loop, 40mm. </h4>
                    </div>
                    <div class="product-price">
                      <span class="before-price price">Bdt<strong>25000</strong> </span>
                      <span class="after-price price">Bdt<strong>24250</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
                        <span class="p-sold-count">(32)</span>
                      </div>
                      <div class="shop-location">
                        <h4>Dhaka</h4>
                      </div>
                    </div>
                    <div class="special-tag">
                      <span class="p-special-tag">Recommend</span>
                    </div>
                    <div class="offer-percent">
                      <span class="p-percent">3%</span><br>OFF
                    </div>
                  </div>
                </a>
              </div>
              <!-- single product card end -->
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="product-details.html">
                  <div class="product-card">
                    <div class="product-image-area">
                      <img src="assets/images/product-img/product-3/laptop-main.png" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>MacBook Pro, 16-inch,10-Core CPU 16-Core GPU, 16GB Unified Memory, 1TB SSD Storage¹. </h4>
                    </div>
                    <div class="product-price">
                      <span class="before-price price">Bdt<strong>230000</strong> </span>
                      <span class="after-price price">Bdt<strong>229995</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
                        <span class="p-sold-count">(7)</span>
                      </div>
                      <div class="shop-location">
                        <h4>Dhaka</h4>
                      </div>
                    </div>
                    <div class="special-tag">
                      <span class="p-special-tag">Recommend</span>
                    </div>
                    <div class="offer-percent">
                      <span class="p-percent">5%</span><br>OFF
                    </div>
                  </div>
                </a>
              </div>
              <!-- single product card end -->
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="product-details.html">
                  <div class="product-card">
                    <div class="product-image-area">
                      <img src="assets/images/product-img/product-4/tablet-main.png" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>iPad Air 256GB, Wi-Fi + Cellular model.</h4>
                    </div>
                    <div class="product-price">
                      <span class="before-price price">Bdt<strong>75000</strong> </span>
                      <span class="after-price price">Bdt<strong>73500</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
                        <span class="p-sold-count">(11)</span>
                      </div>
                      <div class="shop-location">
                        <h4>Dhaka</h4>
                      </div>
                    </div>
                    <div class="special-tag">
                      <span class="p-special-tag">Recommend</span>
                    </div>
                    <div class="offer-percent">
                      <span class="p-percent">2%</span><br>OFF
                    </div>
                  </div>
                </a>
              </div>
              <!-- single product card end -->
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="product-details.html">
                  <div class="product-card">
                    <div class="product-image-area">
                      <img src="assets/images/product-img/product-5/airpods-main.png" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>AirPods Max with 6 months of Apple Music free!</h4>
                    </div>
                    <div class="product-price">
                      <span class="before-price price">Bdt<strong>45000</strong> </span>
                      <span class="after-price price">Bdt<strong>43200</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
                        <span class="p-sold-count">(13)</span>
                      </div>
                      <div class="shop-location">
                        <h4>Dhaka</h4>
                      </div>
                    </div>
                    <div class="special-tag">
                      <span class="p-special-tag">Recommend</span>
                    </div>
                    <div class="offer-percent">
                      <span class="p-percent">4%</span><br>OFF
                    </div>
                  </div>
                </a>
              </div>
              <!-- single product card end -->


            </div>
          </div>
          <!-- main product area start -->
        </div>
      </div>
    </section>
 --}}

@endsection


