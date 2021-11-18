  <!--sidebar-wrapper-->
  <div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="" style=" font-size: 2rem">
            <i class="lnr lnr-cart"></i>
        </div>
        <div>
            <h4 class="logo-text">JB Commerce</h4>
        </div>
        <a href="javascript:;" class="ml-auto toggle-btn"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        @if(auth()->user()->can('dashboard') || auth()->user()->hasRole('super-admin'))
        <li>
            <a href="{{route('dashboard')}}" >
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        @endif

        <li>
            <a href="{{route('category.index')}}" >
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
        </li>
        <li>
            <a href="{{route('product.index')}}" >
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
        </li>

        @if(auth()->user()->can('users.index') || auth()->user()->can('role.index') || auth()->user()->hasRole('super-admin'))
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                @if(auth()->user()->can('users.index') || auth()->user()->hasRole('super-admin'))
                    <li>
                        <a href="{{route('users.index')}}">
                            <div class="parent-icon icon-color-7">
                                <i class='bx bx-buildings'></i>
                            </div>
                            <div class="menu-title">Users</div>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->can('roles.index') || auth()->user()->hasRole('super-admin'))
                    <li>
                        <a href="{{route('roles.index')}}">
                            <div class="parent-icon icon-color-7">
                                <i class='bx bx-buildings'></i>
                            </div>
                            <div class="menu-title">Roles </div>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
        @endif
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar-wrapper-->
