@extends('layouts/frontend/app')

@section('content')


  <!-- top-slider home start -->
  <section>
    <div class="slider-section">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{URL::to('frontend/assets/images/banner/banner1.png')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Accessorise Collection</h5>
                <a href="#" class="link-button">Discover Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL::to('frontend/assets/images/banner/banner2.png')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Home Appliance</h5>
                <a href="#" class="link-button">Discover Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL::to('frontend/assets/images/banner/banner3.png')}}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Healthy & Beauty</h5>
                <a href="#" class="link-button">Discover Now</a>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- top-slider home  end-->
  <!-- categorise home  start-->
  <section>
    <div class="category-section">
      <div class="container">
        <div class="heading-every-section">
          <h2>Categorise</h2>
        </div>
        <div class="row margin-none">
            @foreach ($category as $key => $categories)
                <a href="search-result.html" class="item-box d-flex">
                <div class="img-area">
                  <img src="{{URL::to($categories->photo)}}" alt="">
                </div>
                <span>Electronics</span>
              </a>
            @endforeach
        </div>
      </div>
    </div>

  </section>
  <!-- categorise home  end-->


  <!-- recent collection start-->
  <section class="main-section-home recent-collection">
    <div class="container">
      <div class="heading-every-section d-flex justify-content-between">
        <h2>recent collection</h2>
        <a href="#">See All</a>
      </div>
      <div class="row margin-none">
        <div class="main-product-area">
          <div class="row">
              @foreach ($recentProduct as $key => $recentProducts)
                <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                    <a href="{{$recentProducts->uuid}}">
                    <div class="product-card">
                        <div class="product-image-area">
                        <img src="{{URL::to('frontend/assets/images/product-img/product-1/po-card.png')}}" alt="">
                        </div>
                        <div class="product-heading">
                        <h4>{{$recentProducts->name}}</h4>
                        </div>
                        <div class="product-price">
                        {{-- <span class="before-price price">Bdt<strong>110000</strong> </span> --}}
                        <span class="after-price price">RM <strong>{{$recentProducts->price}}</strong></span>
                        </div>
                        <div class="p-card-footer d-flex justify-content-between">
                        {{-- <div class="rating d-flex">
                            <img src="{{URL::to('fronten/assets/images/review-image/5star.png')}}" alt="">
                            <span class="p-sold-count">(10)</span>
                        </div>
                        <div class="shop-location">
                            <h4>Dhaka</h4>
                        </div> --}}
                        </div>
                        {{-- <div class="special-tag">
                        <span class="p-special-tag">Recommend</span>
                        </div>
                        <div class="offer-percent">
                        <span class="p-percent">5%</span><br>OFF
                        </div> --}}
                    </div>
                    </a>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- recent collection end-->
  <!-- populer products start-->

  <section class="main-section-home populer-products">
    <div class="container">
      <div class="heading-every-section d-flex justify-content-between">
        <h2>populer products</h2>
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
                    <img src="{{URL::to('frontend/assets/images/product-img/product-1/po-card.png')}}" alt="">
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
                      <img src="{{URl::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                    <img src="{{URL::to('frontend/assets/images/product-img/product-2/watch-main.jpg')}}" alt="">
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
                      <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                    <img src="{{URL::to('frontend/assets/images/product-img/product-3/laptop-main.png')}}" alt="">
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
                      <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                    <img src="{{URL::to('frontend/assets/images/product-img/product-4/tablet-main.png')}}" alt="">
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
                      <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                    <img src="{{URL::to('frontend/assets/images/product-img/product-5/airpods-main.png')}}" alt="">
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
                      <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                <!-- single product card start -->
                <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                  <a href="product-details.html">
                    <div class="product-card">
                      <div class="product-image-area">
                        <img src="{{URL::to('frontend/assets/images/product-img/product-2/watch-main.jpg')}}" alt="">
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
                          <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                        <img src="{{URL::to('frontend/assets/images/product-img/product-3/laptop-main.png')}}" alt="">
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
                          <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                        <img src="{{URL::to('frontend/assets/images/product-img/product-4/tablet-main.png')}}" alt="">
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
                          <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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
                        <img src="{{URL::to('frontend/assets/images/product-img/product-5/airpods-main.png')}}" alt="">
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
                          <img src="{{URL::to('frontend/assets/images/review-image/5star.png')}}" alt="">
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

  <!-- populer products end-->

@endsection
