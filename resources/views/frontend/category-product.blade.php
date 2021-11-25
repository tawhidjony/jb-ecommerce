@extends('layouts.frontend.app')

@section('content')
<section>
    <div class="top-banner-section">
      <div class="container">
        <div class="banner-img">
          <img src="{{asset('frontend/assets/images/banner/banner2.png')}}" alt="">
          <h2>Electronics</h2>
        </div>
      </div>
    </div>
  </section>
    <section class="main-section-search-result">
      <div class="container">
        <div class="row margin-none">
          <div class="search-filter">
            <div class="sub-section category">
              <h1 class="filter-text">SEARCH FILTER</h1>
              <!--Accordion wrapper start-->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                <!-- Accordion card -->
                <div class="card">
                  <!-- Card header -->
                  <div class="card-header" role="tab" id="heading-1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse-1" aria-expanded="true"
                      aria-controls="collapse-1">
                      <div class="heading d-flex justify-content-between">
                        <h3>Categorise</h3>
                        <i class="fas fa-chevron-down"></i>
                      </div>
                    </a>
                  </div>
                  <!-- Card body -->
                  <div id="collapse-1" class="collapse show" role="tabpanel" aria-labelledby="heading-1"
                    data-parent="#accordionEx">
                    <div class="card-body">
                      <div class="category-item-area search-option">
                        @foreach ($categoryAll as $cateItems)
                            <a href="{{route('category.product', $cateItems->uuid)}}">{{$cateItems->name}}<span class="item-count"></span></a>
                        @endforeach

                         {{--
                        <a href="#">Smart Phones<span class="item-count">(89)</span></a>
                        <a href="#">Cameras & Photo<span class="item-count">(99)</span></a>
                        <a href="#">Women's Fashion<span class="item-count">(445)</span></a>
                        <a href="#">Men's Fashion<span class="item-count">(245)</span></a>
                        <a href="#">Healthy & Beauty<span class="item-count">(2342)</span></a>
                        <a href="#">Gift Ideas<span class="item-count">(233)</span></a>
                        <a href="#">Toy & Games<span class="item-count">(546)</span></a>
                        <a href="#">Cooking<span class="item-count">(231)</span></a>
                        <a href="#">Home & Garden<span class="item-count">(1435)</span></a>
                        <a href="#">Home Appliance<span class="item-count">(321)</span></a>
                        <a href="#">Accessories<span class="item-count">(56)</span></a> --}}

                      </div>

                    </div>
                  </div>
                </div>
                <!-- Accordion card -->
              </div>

              <!-- Accordion wrapper end -->
            </div>
            <div class="sub-section price">
              <div class="heading">
                <h3>Price Rang</h3>
              </div>
              <div class="search-option">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">

                      <input type="number" class="form-control" id="inputLowValue" placeholder="From Bdt">
                    </div>
                    <div class="form-group col-md-6">

                      <input type="number" class="form-control" id="inputHighValue" placeholder="To Bdt">
                    </div>
                  </div>
                  <button class="primary-btn">Find</button>
                </form>

              </div>
            </div>
            <div class="sub-section rating">
                <div class="heading">
                  <h3>Rating</h3>
                </div>
                <div class="search-option">
                  <form class="was-validated">
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked"
                        required>
                      <label class="custom-control-label" for="customControlValidation1"><img
                          src="{{asset('frontend/assets/images/review-image/5star.png')}}" alt=""></label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked"
                        required>
                      <label class="custom-control-label" for="customControlValidation2"><img
                          src="{{asset('frontend/assets/images/review-image/4star.png')}}" alt=""></label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked"
                        required>
                      <label class="custom-control-label" for="customControlValidation3"><img
                          src="{{asset('frontend/assets/images/review-image/3star.png')}}" alt=""></label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation4" name="radio-stacked"
                        required>
                      <label class="custom-control-label" for="customControlValidation4"><img
                          src="{{asset('frontend/assets/images/review-image/2star.png')}}" alt=""></label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" id="customControlValidation5" name="radio-stacked"
                        required>
                      <label class="custom-control-label" for="customControlValidation5"><img
                          src="{{asset('frontend/assets/images/review-image/1star.png')}}" alt=""></label>
                    </div>
                  </form>
                </div>
              </div>
              <div class="sub-section payment-option">
                <button class="primary-btn">Clear all</button>
              </div>
          </div>
          <div class="search-filter-product-area">
            <div class="product-sortBy-menu d-flex justify-content-between">
              <div class="left-side-option">
                <span class="sortby">Sort By</span>
                <a href="#"class="option-by actived">Relevance</a>
                <a href="#"class="option-by">Latest</a>
                <a href="#"class="option-by">Top Sales</a>
              </div>
              <div class="right-side-option">
                <div class="input-group">
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Price</option>
                    <option value="1">Price: Low to High</option>
                    <option value="2">Price: High to Low</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="main-product-area">
              <div class="row">
                @forelse ($categoryProduct as $productCategory)
                <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                    <a href="{{route('home.show', $productCategory->uuid)}}">
                      <div class="product-card">
                        <div class="product-image-area">
                          <img src="{{asset($productCategory->thumbnail)}}" alt="">
                        </div>
                        <div class="product-heading">
                          <h4>{{$productCategory->name}}</h4>
                        </div>
                        <div class="product-price">
                          {{-- <span class="before-price price">RM<strong></strong> </span> --}}
                          <span class="after-price price">BDT<strong>{{$productCategory->price}}</strong></span>
                        </div>
                        {{-- <div class="p-card-footer d-flex justify-content-between">
                          <div class="rating d-flex">
                            <img src="assets/images/review-image/5star.png" alt="">
                            <span class="p-sold-count">(10)</span>
                          </div>
                          <div class="shop-location">
                            <h4>Dhaka</h4>
                          </div>
                        </div>
                        --}}
                        <div class="special-tag">
                          <span class="p-special-tag">Recommend</span>
                        </div>
                        {{--
                        <div class="offer-percent">
                          <span class="p-percent">5%</span><br>OFF
                        </div> --}}
                      </div>
                    </a>
                  </div>
                @empty

                @endforelse

                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
