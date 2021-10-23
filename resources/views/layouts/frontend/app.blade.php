<!DOCTYPE html PUBLIC>
<html lang="en">

<head>
  <!-- Google Tag Manager -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="JB ONLINE SHOP" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="author" content="Jahangir Alam" />
  <title>JB ONLINE SHOP</title>

  <!-- favicon icon -->
  <link rel="icon" href="#" type="image/gif" sizes="16x16" />
  <!--Font icon-->
  <link rel="stylesheet" href="{{asset("assets/frontend/vendor/fontawesome/font-awesome-all.min.css")}}"/>
  <link rel="stylesheet" href="{{asset("assets/frontend/vendor/fontawesome/brands.min.css")}}"/>
  <link rel="stylesheet" href="{{asset("assets/frontend/vendor/fontawesome/solid.min.css")}}"/>
  <!-- bootstrap-4 css -->

  <link rel="stylesheet" href="{{asset("assets/frontend/bootstrap/css/bootstrap.css")}}" />
   <!-- slick slider css -->
  <link rel="stylesheet" type="text/css" href="{{asset("assets/frontend/vendor/css/slick.css")}}" />
  <link rel="stylesheet" type="text/css" href="{{asset("assets/frontend/vendor/css/slick-theme.css")}}" />
  <!-- style css -->
  <link rel="stylesheet" href="{{asset("assets/frontend/css/style.css")}}" />
</head>

<body>
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
              <a href="#">
                <div class="link-area d-flex">
                  <i class="fas fa-user-plus"></i>
                  <span class="strong">Sing Up</span>
                </div>
              </a>
              <a href="#">
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
            <a href="#"><img src="{{asset("assets/frontend/images/logo_b.png")}}" alt=""></a>
          </div>
          <div class="search-area">
            <form class="form-inline">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <!-- cart area start -->
          <div class="cart-area  d-flex justify-content-between">
            <div class="cart-icon">
              <a href="#"><i class="fas fa-cart-arrow-down"></i>
                <div class="item-count">20</div>
              </a>

              <!-- cart popup contain area start -->
              <div class="cart-contain-area">
                <div class="header-area">
                  <h2>Recently Added Products</h2>
                </div>
                <ul>
                  <a href="#">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{asset("assets/frontend/images/my_picture_squre.jpg")}}" alt="">
                        <div class="product-name">
                          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum odio modi adipisci
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$5000</h2>
                        </div>
                      </div>
                    </li>
                  </a>
                  <a href="#">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{URL::to("assets/frontend/images/my_picture_squre.jpg")}}" alt="">
                        <div class="product-name">
                          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum odio modi adipisci
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$400</h2>
                        </div>
                      </div>
                    </li>
                  </a>
                  <a href="#">
                    <li>
                      <div class="product-details d-flex justify-content-between">
                        <img src="{{URL::to("assets/frontend/images/my_picture_squre.jpg")}}" alt="">
                        <div class="product-name">
                          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum odio modi adipisci
                          </h2>
                        </div>
                        <div class="product-price">
                          <h2>$500</h2>
                        </div>
                      </div>
                    </li>
                  </a>
                </ul>
                <div class="footer-area">
                  <button class="primary-btn">View Shoping Cart</button>
                </div>
              </div>
              <!-- cart popup contain area end -->
            </div>

            <!--user-profile-area start  -->
            <div class="user-profile-area">

              <div class="user-area d-flex">
                <div class="profile-pic">
                  <img src="{{URL::to("assets/frontend/images/my_picture_squre.jpg")}}" alt="">
                </div>
                <div class="user-name">
                  <span>Jahangir Alam</span>
                  <div class="user-account-area">

                    <a href="#">Account</a>
                    <a href="#">Purchase</a>
                    <a href="#">Shopping Cart</a>
                    <a href="#">Logout</a>

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
              <img class="d-block w-100" src="{{URL::to("assets/frontend/images/banner/banner1.png")}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Accessorise Collection</h5>
                <a href="#" class="link-button">Discover Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL::to("assets/frontend/images/banner/banner2.png")}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Home Appliance</h5>
                <a href="#" class="link-button">Discover Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{URL::to("assets/frontend/images/banner/banner3.png")}}" alt="Third slide">
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
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/electronics.png")}}" alt="">
            </div>
            <span>Electronics</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/mobile.png")}}" alt="">
            </div>
            <span>Smart Phones</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/camera.png")}}" alt="">
            </div>
            <span>Cameras & Photo</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/women.png")}}" alt="">
            </div>
            <span>Women's Fashion</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/men.png")}}" alt="">
            </div>
            <span>Men's Fashion</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/beauty.png")}}" alt="">
            </div>
            <span>Healthy & Beauty</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/gift.png")}}" alt="">
            </div>
            <span>Gift Ideas</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/game.png")}}" alt="">
            </div>
            <span>Toy & Games</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/cooking.png")}}" alt="">
            </div>
            <span>Cooking</span>
          </a>
          <a href="#" class="item-box d-flex">
            <div class="img-area">
              <img src="{{URL::to("assets/frontend/images/categories/assesorise.png")}}" alt="">
            </div>
            <span>Accessories</span>
          </a>

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

        <!-- main product area start -->
        <div class="main-product-area">
          <div class="row">
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
        <!-- main product area start -->
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
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-lg-3 col-md-4 col-sm-6">
              <a href="#">
                <div class="product-card">
                  <div class="product-image-area">
                    <img src="{{asset("assets/frontend/images/Product img/redmi.jpg")}}" alt="">
                  </div>
                  <div class="product-heading">
                    <h4>XIAOMI REDMI 6A 2+16GB (Used) Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Asperiores incidunt cum architecto minus, a optio recusandae officia consectetur, exercitationem
                      rem voluptatibus eius animi possimus quam excepturi sapiente ipsam vel adipisci.</h4>
                  </div>
                  <div class="product-price">
                    <span class="before-price price">Bdt<strong>500</strong> </span>
                    <span class="after-price price">Bdt<strong>500</strong></span>
                  </div>
                  <div class="p-card-footer d-flex justify-content-between">
                    <div class="rating d-flex">
                      <img src="{{URL::to("assets/frontend/images/review-image/5star.png")}}" alt="">
                      <span class="p-sold-count">(105)</span>
                    </div>
                    <div class="shop-location">
                      <h4>Dhaka</h4>
                    </div>
                  </div>
                  <div class="special-tag">
                    <span class="p-special-tag">Recommend</span>
                  </div>
                  <div class="offer-percent">
                    <span class="p-percent">50%</span><br>OFF
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
        <!-- main product area start -->
      </div>
    </div>
  </section>


  <!-- populer products end-->












  <!-- contact end -->
  <footer class="footer-section">
    <div class="content-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="contain about">
              <div class="heading">
                <h5>About Jb Online Shop</h5>
              </div>
              <div class="link-area">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Help Centre</a></li>
                  <li><a href="#">Return & Refund</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="contain payment-patner">
              <div class="heading">
                <h5>PAYMENT</h5>
              </div>
              <div class="link-area">
                <img src="{{URL::to("assets/frontend/images/patner/paypal-logo.png")}}" alt="">
              </div>
              <div class="heading logistics-h">
                <h5>LOGISTICS</h5>
              </div>
              <div class="link-area logistics-img">
                <img src="{{asset("assets/frontend/images/patner/lo-bangladesh.png")}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="contain follow-us">
              <div class="heading">
                <h5>FOLLOW US</h5>
              </div>
              <div class="link-area">
                <a href="#">
                  <div class="social-link-area d-flex">
                    <i class="fab fa-facebook-square"></i>
                    <div class="span">Facebook</div>
                  </div>
                </a>
                <a href="#">
                  <div class="social-link-area d-flex">
                    <i class="fab fa-twitter-square"></i>
                    <div class="span">Twitter</div>
                  </div>
                </a>
                <a href="#">
                  <div class="social-link-area d-flex">
                    <i class="fab fa-instagram-square"></i>
                    <div class="span">Instagram</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="contain app-download">
              <div class="heading">
                <h5>APP DOWNLOAD</h5>
              </div>
              <div class="link-area app-bercod-img">

                <img src="{{URL::to("assets/frontend/images/patner/barcode.png")}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-area">
      <span class="copy-write">© 2021 JB Online Shop. All Rights Reserved</span>
    </div>
  </footer>
  <!-- jquery -->
  <script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/frontend/bootstrap/js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/frontend/vendor/js/slick.min.js')}}"  ></script>
  <script src="{{asset('assets/frontend/vendor/js/zoomsl.min.js')}}"></script>
  <!-- custom.js  -->
  <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
</body>

</html>
