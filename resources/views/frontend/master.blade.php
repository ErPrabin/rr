<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title', config('app.name'))</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        @yield('meta')
        <meta name="author" content="{{ config('app.name') }}" />
        <meta name="MobileOptimized" content="320" />
        <link rel="shortcut icon" type="image/jpg" href="{{ asset('static/logo.png') }}" />
        @include('frontend.partials.css')
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container p-0">
                <a href="{{ route('index') }}">
                    <img class="logo" src="{{ asset('static/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link px-3 {{ request()->routeis('index') ? 'active' : '' }}"
                            href="{{ route('index') }}">
                            <img class="mx-1 menu-icon" src="{{ asset('static/navicons/home.png') }}"
                                alt="{{ config('app.name') }}">
                            Home
                        </a>
                        <a class="nav-item nav-link px-3  {{ request()->routeis('service') || request()->is('service/*') ? 'active' : '' }}"
                            href="{{ route('service') }}">
                            <img class="mx-1 menu-icon" src="{{ asset('static/navicons/our-services.png') }}"
                                alt="{{ config('app.name') }}">
                            Our Services
                        </a>
                        <a class="nav-item nav-link px-3 {{ request()->routeis('access-the-ndis') ? 'active' : '' }}"
                            href="{{ route('access-the-ndis') }}">
                            <img class="mx-1 menu-icon" src="{{ asset('static/navicons/access-the-ndis.png') }}"
                                alt="{{ config('app.name') }}">
                            Access The NDIS
                        </a>
                        <a class="nav-item nav-link px-3 {{ request()->routeis('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">
                            <img class="mx-1 menu-icon" src="{{ asset('static/navicons/about-us.png') }}"
                                alt="{{ config('app.name') }}">
                            About Us
                        </a>
                        <a class="nav-item nav-link px-3 {{ request()->routeis('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">
                            <img class="mx-1 menu-icon" src="{{ asset('static/navicons/contact.png') }}"
                                alt="{{ config('app.name') }}">Contact
                        </a>
                    </div>
                    <a class="nav-item nav-link"
                        href="tel:{!! strip_tags(getCData('Contact Number1', 'description')) !!}"><button
                            class="px-2 py-2 contact-button">
                            <i class="fa pl-2 fa-phone-alt" aria-hidden="true"></i>
                            <span class="pr-2">
                                {!! strip_tags(getCData('Contact Number1', 'description')) !!}
                            </span>
                        </button></a>
                </div>
            </div>
        </nav>
        <!-- header -->
        

        @yield('content')




        <!-- footer -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="footer-top p-3">
                    <div class="row text-white">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-2 text-center"><i class="fa fa-2x fa-map-marker-alt"></i></div>
                                <div class="col-md-9 text-center text-sm-center text-md-left text-lg-left">
                                    <h4 class="m-0 fw-bold">Location</h4>
                                    <p>{!! strip_tags(getCData('Address', 'description')) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-2 text-center"><i class="fa fa-2x fa-envelope"></i></div>
                                <div class="col-md-9 text-center text-sm-center text-md-left text-lg-left">
                                    <h4 class="m-0 fw-bold">Email</h4>

                                    <p>{!! strip_tags(getCData('Email', 'description')) !!}</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-2 text-center"><i class="fa fa-2x fa-phone-alt"></i></div>
                                <div class="col-md-9 text-center text-sm-center text-md-left text-lg-left">
                                    <h4 class="m-0 fw-bold">Phone</h4>
                                    <p>{!! strip_tags(getCData('Contact Number1', 'description')) !!}</p>
                                    <p>{!! strip_tags(getCData('Contact Number2', 'description')) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-sm-12 text-center">
                        <img class="img-fluid footer-logo" src="{{  asset('static/logo.png') }}"
                            alt="{{ config('app.name') }}">
                    </div>

                    <div class="col-md-6 text-white p-3 text-center text-md-left">
                        {!! strip_tags(getCData('Footer Content', 'description')) !!}

                    </div>
                    <div class="col-md-4 p-0 col-sm-12 text-white text-center text-md-left pl-md-5">
                        <ul class="p-0" style="list-style: none;">
                            <h5>
                                <u>Quick Links</u>
                            </h5>
                            <li class="py-1">
                                <a href="{{ route('index') }}" class="text-white">
                                    Home
                                </a>
                            </li>
                            <li class="py-1">
                                <a href="{{ route('service') }}" class="text-white">
                                    Services
                                </a>
                            </li>
                            <li class="py-1">
                                <a href="{{ route('access-the-ndis') }}" class="text-white">
                                    Access the NDIS
                                </a>
                            </li>
                            <li class="py-1">
                                <a href="{{ route('about') }}" class="text-white">
                                    About Us
                                </a>
                            </li>
                            <li class="py-1">
                                <a href="{{ route('contact') }}" class="text-white">
                                    Contact Us
                                </a>
                            </li>
                            <li class="py-1">
                                <a href="{{ route('career') }}" class="text-white">
                                    Career Form
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom p-3">
                <div class="row container mx-auto">
                    <div class="col-md-3 text-lg-left text-md-left text-center">
                        <img class="img-fluid" src="{{ asset('static/ndis-logo.png') }}" alt="{{ config('app.name') }}">

                    </div>
                    <div class="col-md-8 text-white text-center text-md-right text-lg-right"
                        style="text-align: end; margin: auto;">
                        Copyright © {{ \Carbon\Carbon::now()->year }}, Designed By Genius IT Solutions
                    </div>
                </div>
            </div>
        </div>
        <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100573659002083");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

        @include('frontend.partials.script')

    </body>

</html>