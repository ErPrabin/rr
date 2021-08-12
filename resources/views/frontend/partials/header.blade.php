<!-- Header -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
            <ul class="element contact-info">
              <li class="contact-phone"><i class="fa fa-phone-alt font-icon sm-display-block"></i> Tel: {!! strip_tags(\App\Util\Util::getCData($components,'Contact Number','description')) !!}</li>
              <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i> {!! strip_tags(\App\Util\Util::getCData($components,'Email','description')) !!}</li>
              <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> {!! strip_tags(\App\Util\Util::getCData($components,'Address','description')) !!}</li>
            </ul>
          </div>
          <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
            {{-- <div class="element pt-0 pb-0">
              <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                <li><a class="social-link" href="{!! strip_tags(\App\Util\Util::getCData($components,'Facebook Link','description')) !!}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a class="social-link" href="{!! strip_tags(\App\Util\Util::getCData($components,'Twitter Link','description')) !!}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a class="social-link" href="{!! strip_tags(\App\Util\Util::getCData($components,'Instagram Link','description')) !!}" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div> --}}
            <div class="element pt-0 pt-lg-10 pb-0">
              {{-- <a href="{{ route('contact') }}" class="btn btn-theme-colored2 btn-sm">Make an Appointment</a> --}}
              {{-- <a href="{{ route('contact') }}" class="btn btn-theme-colored2 btn-sm">Request a Callback</a> --}}
              <div class="row">
                <div class="col-md-12">
                  <!-- link that opens popup -->
                  <a class="popup-with-form btn btn-theme-colored2 btn-sm" href="#test-form">Request a Callback</a>

                  <!-- form itself -->
                  <div id="test-form" class="white-popup-block modal-promo-box mfp-hide bg-lightest">
                    <form id="mailchimp-subscription-form" class="newsletter-form" novalidate="true" action="{{route('request-callback')}}" method="post">
                        @csrf
                        <h3>Request a Callback</h3>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" name="number" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-default btn-submit">Submit</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav tm-enable-navbar-hide-on-scroll">
      <div class="header-nav-wrapper">
        <div class="menuzord-container header-nav-container">
          <div class="container position-relative">
            <div class="row header-nav-col-row">
              <div class="col-sm-auto align-self-center">
                <a class="menuzord-brand site-brand" href="{{route('index')}}">
                  <img class="logo-default logo-1x" src="{{asset('static/logo.png')}}" alt="Logo">
                  <img class="logo-default logo-2x retina" src="{{asset('static/logo.png')}}" alt="Logo">
                </a>
              </div>
              <div class="col-sm-auto ml-auto pr-0 align-self-center">
                <nav id="top-primary-nav" class="menuzord pink" data-effect="fade" data-animation="none" data-align="right">
                  <ul id="main-nav" class="menuzord-menu">
                    <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a  href="{{ route('index') }}">Home</a></li>
                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
                    <li class="{{ request()->routeIs('service') ? 'active' : '' }}"><a href="{{ route('service') }}">Services</a>
                      <ul class="dropdown">
                        @foreach ($services as $service)
                        <li class="{{ request()->is('service/'.$service->slug) ? 'active' : '' }}"><a href="{{ route('singleservice',$service->slug) }}">{{$service->title}}</a></li>
                          
                        @endforeach
                      </ul>
                    </li>
                    <li class="{{ request()->routeIs('review') ? 'active' : '' }}"><a href="{{ route('review') }}">Reviews</a>
                      {{-- <ul class="dropdown">
                        @foreach ($services as $service)
                            <li class="{{request()->routeIs('singleservice') && $service->slug == $singleservice->slug ? 'active' : ''}}"><a href="{{route('singleservice', $service->slug)}}">{{ $service->title }}</a></li>
                        @endforeach
                      </ul> --}}
                    </li>
                    <li class="{{ request()->routeIs('check-eligibility') ? 'active' : '' }}"><a href="{{ route('check-eligibility') }}">Access the NDIS</a></li>
                    <li class="{{ request()->routeIs('booking') || request()->routeIs('career') || request()->routeIs('complaint') || request()->routeIs('enquiry') || request()->routeIs('faq') ? 'active' : '' }} "><a>Pages</a>
                      <ul class="dropdown">
                        <li class="{{ request()->routeIs('career') ? 'active' : '' }}"><a href="{{ route('career') }}">Career</a></li>
                        <li class="{{ request()->routeIs('complaint') ? 'active' : '' }}"><a href="{{ route('complaint') }}">Complaint</a></li>
                        <li class="{{ request()->routeIs('enquiry') ? 'active' : '' }}"><a href="{{ route('enquiry') }}">Enquiry</a></li>
                        <li class="{{ request()->routeIs('booking') ? 'active' : '' }}"><a href="{{ route('booking') }}">Book Appointment</a></li>
                        <li class="{{ request()->routeIs('faq') ? 'active' : '' }}"><a href="{{ route('faq') }}">Faq</a></li>
                      </ul>
                    </li>
                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-sm-auto align-self-center nav-side-icon-parent">
                <ul class="list-inline nav-side-icon-list">
                  <li class="hidden-mobile-mode">
                  </li>
                  <li class="hidden-mobile-mode">
                    <div id="side-panel-trigger" class="side-panel-trigger"> <a href="#">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                      </a> </div>
                  </li>
                </ul>
                {{-- <div id="top-nav-search-form" class="clearfix">
                  <form action="#" method="GET">
                    <input type="text" name="s" value="" placeholder="Type and Press Enter..." autocomplete="off" />
                  </form>
                  <a href="#" id="close-search-btn"><i class="fa fa-times"></i></a>
                </div> --}}
              </div>
            </div>
            <div class="row d-block d-xl-none">
               <div class="col-12">
                <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
                 <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                 </ul>
                </nav>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
