 <!-- Section: Funfact -->
 <section class="funfact-section">
    <div class="container pb-120 pb-md-70">
      <div class="row">
        <div class="col-lg-6">
          <div class="tm-sc-section-title section-title mb-0 pt-10">
            <div class="title-wrapper mb-0">
              <p class="subtitle line-bottom">Our Fun Facts Numbers</p>
              <h2 class="title mb-30">{!! strip_tags(\App\Util\Util::getCData($components,'Fun Fact','synopsis')) !!}</h2>
              <div class="paragraph mb-50">
                <p>{!! strip_tags(\App\Util\Util::getCData($components,'Fun Fact','description')) !!}</p>
              </div>
            </div>
          </div>
          <div class="tm-sc-funfact-wrapper funfact-current-theme-style">
            <div class="row">
              <div class="mb-sm-40 col-md-4 col-lg-4">
                <div class="tm-sc-funfact funfact cp-hover-effect">
                  <h2 class="counter mt-0 line-height-1">
                    <span class="animate-number" data-value="{!! strip_tags(\App\Util\Util::getCData($components,'Senior Couples','description')) !!}" data-animation-duration="1500">0</span>
                  </h2>
                  <h5 class="title">Senior Couples</h5>
                </div>
              </div>
              <div class="mb-sm-40 col-md-4 col-lg-4">
                <div class="tm-sc-funfact funfact cp-hover-effect">
                  <h2 class="counter mt-0 line-height-1">
                    <span class="animate-number" data-value="{!! strip_tags(\App\Util\Util::getCData($components,'Happy People','description')) !!}" data-animation-duration="1500">0</span>
                  </h2>
                  <h5 class="title">Happy People</h5>
                </div>
              </div>
              <div class="mb-sm-40 col-md-4 col-lg-4">
                <div class="tm-sc-funfact funfact cp-hover-effect">
                  <h2 class="counter mt-0 line-height-1">
                    <span class="animate-number" data-value="{!! strip_tags(\App\Util\Util::getCData($components,'Nursing Staff','description')) !!}" data-animation-duration="1500">0</span>
                  </h2>
                  <h5 class="title">Nursing Staff</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="layer-image-bg-half" data-tm-bg-img="{{ asset('images/component/'.\App\Util\Util::getCData($components,'Fun Fact','image') ) }}">
      <div class="content">
        <h4 class="title">We’re Committed to Trusted Senior Care Center</h4>
        <a class="text-theme-colored1" href="{{ route('index') }}">Visit Home</a>
      </div>
    </div>
    <div class="cp-shape"></div>
</section>
<!-- End Divider -->
