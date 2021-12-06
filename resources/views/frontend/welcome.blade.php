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
                <a href="{{route('category.product', $categories->uuid)}}" class="item-box d-flex">
                <div class="img-area">
                  <img src="{{URL::to($categories->photo)}}" alt="">
                </div>
                <span>{{$categories->name}}</span>
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
                    <a href="{{route('home.show', $recentProducts->uuid)}}">
                    <div class="product-card">
                        <div class="product-image-area">
                        <img src="{{URL::to($recentProducts->thumbnail)}}" alt="">
                        </div>
                        <div class="product-heading">
                        <h4>{{$recentProducts->name}}</h4>
                        </div>
                        <div class="product-price">
                        {{-- <span class="before-price price">Bdt<strong>110000</strong> </span> --}}
                        <span class="after-price price">BDT <strong>{{$recentProducts->price}}</strong></span>
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
            @foreach ($recentProduct as $key => $recentProducts)
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="{{route('home.show', $recentProducts->uuid)}}">
                <div class="product-card">
                    <div class="product-image-area">
                    <img src="{{URL::to($recentProducts->thumbnail)}}" alt="">
                    </div>
                    <div class="product-heading">
                    <h4>{{$recentProducts->name}}</h4>
                    </div>
                    <div class="product-price">
                    {{-- <span class="before-price price">Bdt<strong>110000</strong> </span> --}}
                    <span class="after-price price">BDT <strong>{{$recentProducts->price}}</strong></span>
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
        <!-- main product area start -->
      </div>
    </div>
  </section>

  <!-- populer products end-->

@endsection
