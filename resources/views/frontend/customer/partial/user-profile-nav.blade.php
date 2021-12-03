          <!-- nevigration menu area start -->
          <div class="col-3 ">
            <div class="left-side-area">
              <div class="profile-pic-area">
                <img src="{{URL::to(Auth::user()->photo ? Auth::user()->photo : 'frontend/assets/images/my_picture_squre.png')}}" alt="">
                <span class="user-name">{{Auth::user()->full_name}}</span>
                <a href="#" class="change-pic">Change Image</a>
              </div>
              <div class="side-menu-area">
                <a href="{{route('customer.index')}}" class="active">
                  <div class="v-list d-flex"><i class="fas fa-user"></i>
                    <h4>My Account Deatlis</h4>
                  </div>
                </a>
                <a href="{{route('purchase.details')}}">
                  <div class="v-list d-flex"><i class="fas fa-store"></i>
                    <h4>My Purchase</h4>
                  </div>
                </a>
                <a href="{{route('cart.index')}}">
                  <div class="v-list d-flex"><i class="fas fa-shopping-cart"></i>
                    <h4>My Shoping Cart</h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- nevigration menu area end -->
