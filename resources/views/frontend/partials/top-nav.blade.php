<div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-creative rd-navbar-creative-2" 
        data-layout="rd-navbar-fixed" 
        data-sm-layout="rd-navbar-fixed" 
        data-md-layout="rd-navbar-fixed" 
        data-md-device-layout="rd-navbar-fixed" 
        data-lg-layout="rd-navbar-static" 
        data-lg-device-layout="rd-navbar-fixed" 
        data-xl-layout="rd-navbar-static" 
        data-xl-device-layout="rd-navbar-static" 
        data-xxl-layout="rd-navbar-static" 
        data-xxl-device-layout="rd-navbar-static" 
        data-lg-stick-up-offset="100px" 
        data-xl-stick-up-offset="112px" 
        data-xxl-stick-up-offset="132px" 
        data-lg-stick-up="true" 
        data-xl-stick-up="true" 
        data-xxl-stick-up="true">
    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
    <div class="rd-navbar-aside-outer">
        <div class="rd-navbar-aside">
        <div class="rd-navbar-collapse">
            <ul class="contacts-classic">
            <li><span class="contacts-classic-title">Call us:</span> <a class="link" href="tel:#">+1 (844) 123 456 78</a>
            </li>
            <li><a href="mailto:#">info@demolink.org</a></li>
            </ul><a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202" href="#"><span>2</span></a>
        </div>
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand">
            <!--Brand--><a class="brand" href="{{ route('home') }}"><img class="brand-logo-dark" src="{{ asset('assets/img/logo.png') }}" alt="" width="180px" height="70px"/><img class="brand-logo-light" src="{{ asset('assets/img/logo.png') }}" alt="" width="180px" height="70px"/></a>
            </div>
        </div>
        <div class="rd-navbar-aside-element">
            <!-- RD Navbar Search-->
            <div class="rd-navbar-search rd-navbar-search-2">
            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                <div class="form-wrap">
                <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                </div>
            </form>
            </div>
            <!-- RD Navbar Basket-->
            <div class="rd-navbar-basket-wrap">
                <a href="{{ route('cart.index') }}">
                    <button class="rd-navbar-basket fl-bigmug-line-shopping202"> <i class="fas fa-shopping-cart"></i><span>{{ Cart::count() }}</span></button>
                </a>
            </div>
            @guest
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="{{ route('register') }}">Register</a>
                </div>
            @endguest
            @auth
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <form  method="POST" action="{{ route('logout') }}">
                        @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('LogOut') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
                <div class="rd-navbar-fixed-element-2 select-inline">
                    <a href="">Dashboard</a>
                </div>
            @endauth
        </div>
        </div>
    </div>
    <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
            <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('allItems') }}">Items</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="grid-shop.html">Shop</a>
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('cart.index') }}">Cart Page</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('checkout.index') }}">Checkout</a>
                        </li>
                    </ul>
                </li>
                @auth
                <li class="rd-nav-item"><a class="rd-nav-link" href="">My Details</a>
                    <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('profile') }}">Profile</a>
                        </li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('order.index') }}">My Orders</a>
                        </li>
                    </ul>
                </li>
                @endauth
                
                <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    </nav>
</div>