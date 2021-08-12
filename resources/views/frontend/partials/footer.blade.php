<!-- Footer -->
<footer id="footer" class="footer">
    <div class="footer-widget-area">
      {{-- <div class="container pt-100 pb-30">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="widget widget-contact-info clearfix mb-20">
              <div class="tm-widget tm-widget-contact-info contact-info contact-info-style1  contact-icon-theme-colored1">
                <div class="thumb">
                  <img alt="Logo" src="{{asset('static/logo.png')}}">
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 pl-90 pl-lg-15">
            <div class="widget">
              <h4 class="widget-title">Links</h4>
              <div class="menu-service-nav-menu-container">
                <ul id="menu-service-nav-menu" class="menu">
                  <li class="menu-item"><a href="{{ route('about') }}">About Us</a></li>
                  <li class="menu-item"><a href="{{ route('service') }}">Services</a></li>
                  <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
                  <li class="menu-item"><a href="{{ route('enquiry') }}">Enquiry</a></li>
                  <li class="menu-item"><a href="{{ route('faq') }}">FAQ</a></li>
                  <li class="menu-item"><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                  <li class="menu-item"><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="widget">
              <div class="menu-service-nav-menu-container">
                <img class="ml-60 mt-50" width="70%" src="{{ asset('static/ndis.png')}}" />
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-bottom-style1">
                <ul class="element contact-info-footer">
                  <li class="contact-email"><i class="far fa-envelope-open font-icon sm-display-block"></i>{!! strip_tags(\App\Util\Util::getCData($components,'Email','description')) !!}</li>
                  <li class="contact-phone"><i class="fas fa-phone-volume font-icon sm-display-block"></i>Tel: {!! strip_tags(\App\Util\Util::getCData($components,'Contact Number','description')) !!}</li>
                  <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i>{!! strip_tags(\App\Util\Util::getCData($components,'Address','description')) !!}</li>
                  <li class="download-pdf"> <a href="{{route('download')}}"><i class="fa fa-download font-icon sm-display-block"></i>Download FM Supporting Evidence</a> </li>
                </ul>
                <img class="ndis-img" src="{{ asset('static/ndis.png') }}" alt="">
                {{-- <div class="footer-paragraph">
                    {{ config('app.name') }} &copy; {{ \Carbon\Carbon::now()->format('Y') }} | Designed By: <a
                        href="http://geniusitsolutions.com.au/" style="color: #ececec" target="_blank">Genius IT
                        Solutions</a>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
