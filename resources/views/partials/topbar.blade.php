<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
    <div class="container">
        <div class="row">
            <div class="menumenu__container clearfix">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assetss/images/logo/logo.png')}}" alt="logo images"></a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                    <nav class="main__menu__nav hidden-xs hidden-sm">
                        <ul class="main__menu">
                            <li class="drop"><a href="{{route('home')}}">Home</a></li>
                            <li class="drop"><a href="{{route('products.all')}}">Products</a></li>
                            <li class="drop"><a href="{{route('cart.all')}}">Cart</a></li>
                            <li class="drop"><a href="{{route('calculate')}}">Predictor</a></li>
                            <li class="drop"><a href="{{route('contact')}}">Contact Us</a></li>
                            <li class="drop"><a href="#">About Us</a></li>
                           {{-- <li class="drop"><a href="#">Our Shops</a></li>--}}
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">

                    <div class="header__right">
                        <div class="header__account">
                            <a href="{{route('login')}}"><img src="{{asset(Auth::user()->avatar)}}" style="height: 40px; width: 40px; border-radius: 50%;"></a>
                        </div>
                        <div class="header__account">
                            <a href="{{route('user.logout')}}"><i class="fa fa-sign-out"></i></a>
                        </div>
                        <div class="htc__shopping__cart">
                            <a href="{{route('cart.all')}}"><i class="icon-handbag icons"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area"></div>
    </div>
</div>
