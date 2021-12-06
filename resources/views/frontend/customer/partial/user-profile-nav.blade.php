
          <div class="col-3 ">
            <div class="left-side-area">

              <!-- profile picture area start -->
              <div class="profile-pic-area">
                <img src="{{URL::to(Auth::user()->photo ? Auth::user()->photo : 'frontend/assets/images/my_picture_squre.png')}}" alt="">
                <span class="user-name">{{Auth::user()->full_name}}</span>
                <form action="{{route('profilePic.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                  <div class="input-group mb-2">
                    <div class="custom-file">
                      <input type="file" name="photo" class="custom-file-input" id="inputGroupFile02">
                      <label class="custom-file-label" for="inputGroupFile02">Change Profile Picture</label>
                    </div>
                  </div>
                  <button type="submit" class="primary-btn update-btn ">Updates</button>
                </form>
              </div>
              <!-- profile picture area end -->

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
                    <h4>My Shopping Cart</h4>
                  </div>
                </a>

              </div>
            </div>
          </div>
