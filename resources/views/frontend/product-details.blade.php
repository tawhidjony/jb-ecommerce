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
                      <div class="small-img">
                      <img  src="{{asset($items)}}" alt="">
                      </div>  
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
                    <span class="ster-count">0</span>
                    <img src="{{asset('frontend/assets/images/review-image/5star.png')}}" alt="">
                  </div>
                  <div class="comon-div rating-count d-flex align-items-center">
                    <span class="count">0</span>
                    <h5>Rating</h5>
                  </div>
                  <div class="comon-div sold d-flex align-items-center">
                    <span class="sold-count">0</span>
                    <h5>Sold</h5>
                  </div>
                </div>
                <div class="special-servise d-flex align-items-center">
                  <span class="special-word">Free Shiping</span>
                  <span class="special-word">100% Authentic</span>
                  <span class="special-word">Money Back</span>
                </div>
                <div class="product-price">
                  <h1>BDT <span class="p-price">{{$productShow->price}}</span></h1>
                </div>
                <form action="{{route('cart.store')}}" method="POST">
                <div class="product-variation d-flex">
                  <h4>Variation</h4>
                  <div class="variation-count">
                    @foreach ($productShow->variation as $key => $variation)
                     <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio-{{ $key+1}}" name="variation" value="{{$variation}}" class="custom-control-input "  {{$key == 0 ? 'checked':""}} required>
                        <label class="custom-control-label " for="customRadio-{{ $key+1}}">{{$variation}}</label>
                      </div>
                    @endforeach
                  </div>
                </div>

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
                        {{-- <button class="buy-now">buy now</button> --}}
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
              <img src="{{URL::to('frontend/assets/images/review-image/4star.png')}}" alt="">
            </div>
            <div class="navigration-option d-flex">
              <div class="v-list">
                <a href="#" class="select">All</a>
              </div>
              <div class="v-list"><a href="#">5 Star <span class="five-star-count">(0)</span> </a></div>
              <div class="v-list"><a href="#">4 Star <span class="four-star-count">(1)</span> </a></div>
              <div class="v-list"><a href="#">3-Star <span class="three-star-count">(0)</span> </a></div>
              <div class="v-list"><a href="#">2 Star <span class="two-star-count">(0)</span> </a></div>
              <div class="v-list"><a href="#">1 Star <span class="one-star-count">(0)</span> </a></div>
              <div class="v-list"><a href="#">With Comments <span class="with-comments">(0)</span> </a></div>
              <div class="v-list"><a href="#">With Media <span class="with-media">(0)</span> </a></div>
            </div>
          </div>

          <div class="customar-comment-area">
            <h3 class="m-5 text-center">This product is not rated yet</h3>
          </div>
        </div>

      </div>
    </div>
  </section>




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
                @foreach ($smilerProduct as $key => $item)
              <!-- single product card start -->
              <div class="col-6 col-lg-3 col-md-4 col-sm-6">
                <a href="{{route('home.show', $item->uuid)}}">
                  <div class="product-card">
                    <div class="product-image-area">
                        <img src="{{URL::to($item->thumbnail)}}" alt="">
                    </div>
                    <div class="product-heading">
                      <h4>{{$item->name}}</h4>
                    </div>
                    <div class="product-price">
                        <span class="after-price price">BDT <strong>{{$item->price}}</strong></span>
                    </div>
                    <div class="p-card-footer d-flex justify-content-between">
                      {{-- <div class="rating d-flex">
                        <img src="assets/images/review-image/5star.png" alt="">
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
              <!-- single product card end -->
              @endforeach

            </div>
          </div>
          <!-- main product area start -->
        </div>
      </div>
    </section>


@endsection


