  <!-- header section -->

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
              <a href="signup.html">
                <div class="link-area d-flex">
                  <i class="fas fa-user-plus"></i>
                  <span class="strong">Sing Up</span>
                </div>
              </a>
              <a href="login.html">
                <div class="link-area d-flex">
                  <i class="fas fa-sign-in-alt"></i>
                  <span class="strong">Login</span>
                </div>
              </a>
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
              <a href="shoping-cart-user-account.html"><i class="fas fa-cart-arrow-down"></i>
                <div class="item-count">3</div>
              </a>

              <!-- cart popup contain area start -->
              <div class="cart-contain-area">
                <div class="header-area">
                  <h2>Recently Added Products</h2>
                </div>
                <ul>
                  <a href="shoping-cart-user-account.html">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{URL::to('frontend/assets/images/product-img/product-1/po-2.png')}}" alt="">
                        <div class="product-name">
                          <h2>iPhone 13 Pro Max 256GB A15 Bionic chip, Super Retina XDR display with ProMotion.
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$104500</h2>
                        </div>
                      </div>
                    </li>
                  </a>
                  <a href="shoping-cart-user-account.html">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{URL::to('frontend/assets/images/product-img/product-2/watch-main.jpg')}}" alt="">
                        <div class="product-name">
                          <h2>Apple Watch, Gold Aluminum Case with Sport Loop, 40mm.
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$24250</h2>
                        </div>
                      </div>
                    </li>
                  </a>
                  <a href="shoping-cart-user-account.html">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{URL::to('frontend/assets/images/product-img/product-5/airpods-main.png')}}" alt="">
                        <div class="product-name">
                          <h2>AirPods Max with 6 months of Apple Music free!
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$43200</h2>
                        </div>
                      </div>
                    </li>
                  </a>

                </ul>
                <div class="text-center footer-area">
                  <a href="shoping-cart-user-account.html" class="primary-btn">View Shoping Cart</a>
                </div>
              </div>
              <!-- cart popup contain area end -->
            </div>

            <!--user-profile-area start  -->
            <div class="user-profile-area">

              <div class="user-area d-flex">
                <div class="profile-pic">
                  <img src="{{URL::to('frontend/assets/images/my_picture_squre.jpg')}}" alt="">
                </div>
                <div class="user-name">
                  <span>Jahangir Alam</span>
                  <div class="user-account-area">

                    <a href="personal-detalis-user-account.html">Account</a>
                    <a href="purchase-detalis-user-account.html">Purchase</a>
                    <a href="shoping-cart-user-account.html">Shopping Cart</a>
                    <a href="logout-index.html">Logout</a>
                  </div>
                </div>

              </div>


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
                  <a href="search-result.html"><i class="fas fa-laptop-medical"></i>Electronics</a>
                  <a href="#"><i class="fas fa-mobile-alt"></i>Smart Phones</a>
                  <a href="#"><i class="fas fa-camera-retro"></i>Cameras & Photo</a>
                  <a href="#"><i class="fas fa-female"></i>Women's Fashion</a>
                  <a href="#"><i class="fas fa-male"></i>Men's Fashion</a>
                  <a href="#"><i class="fas fa-heartbeat"></i>Healthy & Beauty</a>
                  <a href="#"><i class="fas fa-gift"></i>Gift Ideas</a>
                  <a href="#"><i class="fas fa-gamepad"></i>Toy & Games</a>
                  <a href="#"><i class="fas fa-blender"></i>Cooking</a>
                  <a href="#"><i class="fas fa-laptop-house"></i>Home & Garden</a>
                  <a href="#"><i class="fas fa-house-user"></i>Home Appliance</a>
                  <a href="#"><i class="fas fa-swatchbook"></i>Accessories</a>
                </div>
              </div>
            </div>
            <a href="index.html">Home</a>
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
