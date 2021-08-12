<div class="side-panel-body-overlay"></div>
<div id="side-panel-container" class="dark" data-tm-bg-img="{{asset('frontend/images/side-push-bg.jpg')}}">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
    <img class="logo mb-50" src="{{asset('static/logo.png')}}" alt="Logo"><br>
    <span class="font-italic">{!! \App\Util\Util::getCData($components,'Slogan','description') !!}</span>
    <div class="widget mt-40">
      <div class="latest-posts">
        <article class="post media-post clearfix pb-0 mb-10">
          <div>{!! \App\Util\Util::getCData($components,'About Us','synopsis') !!}</div>
        </article>
      </div>
    </div>

    <div class="widget mt-20">
      <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
      <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
        <ul>
          {{-- <li class="contact-name">
            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
            <div class="text">John Doe</div>
          </li> --}}
          <li class="contact-phone">
            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
            <div class="text"><a href="tel:{!! strip_tags(\App\Util\Util::getCData($components,'Contact Number','description')) !!}">{!! strip_tags(\App\Util\Util::getCData($components,'Contact Number','description')) !!}</a></div>
          </li>
          <li class="contact-email">
            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
            <div class="text"><a href="mailto:{!! strip_tags(\App\Util\Util::getCData($components,'Email','description')) !!}">{!! strip_tags(\App\Util\Util::getCData($components,'Email','description')) !!}</a></div>
          </li>
          <li class="contact-address">
            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
            <div class="text">{!! strip_tags(\App\Util\Util::getCData($components,'Address','description')) !!}</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
