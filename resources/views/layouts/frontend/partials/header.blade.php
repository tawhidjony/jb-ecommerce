
  <header class="main-top-bar">
    <!-- top-bar start -->
    <div class="top-bar">
      <div class="container">
        <div class="navbar justify-content-between">
          <!-- socile icon area start -->
          <div class="top-left-side">
            <div class="social-icon d-flex justify-content-between">
              <a href="#"><i class="fab fa-facebook-square"></i></a>
              <a href="#"><i class="fab fa-twitter-square"></i></a>
              <a href="#"><i class="fab fa-instagram-square"></i></a>
            </div>
          </div>
          <!-- socile icon area end -->

          <!-- login sin up area start -->
          <div class="top-right-side">
            <div class="login-area d-flex justify-content-between">
              <a href="#">
                <div class="link-area d-flex">
                  <i class="fas fa-bell"></i>
                  <span>Notification</span>
                </div>
              </a>
              <a href="#">
                <div class="link-area d-flex">
                  <i class="fas fa-question-circle"></i>
                  <span>Help</span>
                </div>
              </a>
                @guest
                    <a href="{{route('customer.register')}}">
                        <div class="link-area d-flex">
                        <i class="fas fa-user-plus"></i>
                        <span class="strong">Sing Up</span>
                        </div>
                    </a>
                    <a href="{{route('customer.login')}}">
                        <div class="link-area d-flex">
                        <i class="fas fa-sign-in-alt"></i>
                        <span class="strong">Login</span>
                        </div>
                    </a>
                @endguest
            </div>
          </div>
          <!-- login sin up area end -->
        </div>
      </div>
    </div>
    <!-- top-bar end -->
    <!-- search-bar start -->
    <div class="search-bar">
      <div class="container">
        <div class="contant-area d-flex justify-content-between align-items-center ">
          <div class="logo-area">
            <a href="{{route('home.index')}}"><img src="{{URL::to('frontend/assets/images/logo_b.png')}}" alt=""></a>
          </div>
          <div class="search-area">
            <form class="form-inline">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <!-- cart area start -->
          <div class="cart-area d-flex justify-content-between">
            <div class="cart-icon">
              <a href="{{route('cart.index')}}"><i class="fas fa-cart-arrow-down"></i>
                <div class="item-count">{{ Cart::count() }}</div>
              </a>

              <!-- cart popup contain area start -->
              <div class="cart-contain-area">
                <div class="header-area">
                  <h2>Recently Added Products</h2>
                </div>
                <ul>
                    @foreach (Cart::content() as $items)
                        <a href="shoping-cart-user-account.html">
                            <li>
                                <div class="product-details d-flex justify-content-between">
                                    <img src="{{URL::to($items->options->photo)}}" alt="">
                                    <div class="product-name">
                                    <h2>{{$items->name}}</h2>
                                    </div>
                                    <div class="product-price">
                                    <h2>BDT {{$items->price}}</h2>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
                <div class="text-center footer-area">
                  <a href="{{route('cart.index')}}" class="primary-btn">View Shoping Cart</a>
                </div>
              </div>
              <!-- cart popup contain area end -->
            </div>

            <!--user-profile-area start  -->
            <div class="user-profile-area">

            @guest
            @else
            <div class="user-area d-flex">
                <div class="profile-pic">
                  <img src="{{URL::to(Auth::user()->photo ? Auth::user()->photo : 'frontend/assets/images/my_picture_squre.png')}}" alt="">
                </div>
                <div class="user-name">
                  <span>{{Auth::user()->full_name}}</span>
                  <div class="user-account-area">

                    <a href="{{route('customer.index')}}">Account</a>
                    <a href="{{route('purchase.details')}}">Purchase</a>
                    <a href="{{route('cart.index')}}">Shopping Cart</a>
                    <a href="{{ route('customer.logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('customer-logout-form').submit()"
                    >Logout</a>
                    <form id="customer-logout-form"  action="{{ route('customer.logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="submit" class="px-4 py-2 ml-2 ml-8 text-white bg-indigo-600 rounded" >Logout</button>
                    </form>
                  </div>
                </div>

              </div>
            @endguest


            </div>
            <!--user-profile-area end  -->

          </div>
          <!-- cart area end -->
        </div>

      </div>
    </div>
    <!-- search-bar end -->
    <!-- menu-bar start -->
    <div class="menu-bar">
      <div class="container">
        <div class="navbar justify-content-between">
          <div class="left-side d-flex">
            <div class="product-menu-area">
              <div class="all-categorise d-flex justify-content-between">
                <div class="list-icon-text d-flex">
                  <i class="fas fa-list"></i>
                  <a href="#">All CATEGORISE</a>
                </div>
                <i class="fas fa-chevron-down"></i>
              </div>

              <div class="mega-menu-area">
                <div class="category-col">

                    @foreach ( \App\Models\Category::all() as $items)
                        <a href="{{route('category.product', $items->uuid)}}"> <i class="{{$items->icon}}"></i>{{$items->name}}</a>
                    @endforeach

                </div>
              </div>
            </div>
            <a href="{{route('home.index')}}">Home</a>
            <a href="#">Special Offer</a>
            <a href="#">About Us</a>
          </div>
          <div class="right-side d-flex">

          </div>

        </div>
      </div>
    </div>
    <!-- menu-bar end -->

  </header>

  <!-- header section end-->
