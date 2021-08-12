<!-- Section: Testimonial -->
<section class="testimonial-section" data-tm-bg-color="#f6f2f0">
    <div class="container pt-110 pb-120">
      <div class="section-title zp-1">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="tm-sc-section-title section-title text-center">
              <div class="title-wrapper">
                <p class="subtitle line-bottom">Our Testimonails</p>
                <h2 class="title">Client Words</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-content zp-1">
        <div class="tm-sc-testimonials testimonials-style-current-theme">
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme tm-owl-carousel-2col tm-testimonials-carousel">
                @foreach ($testimonials as $t)
                    <div class="tm-carousel-item">
                    <div class="tm-testimonial testimonials type-testimonials cp-hover-effect">
                        <div class="testimonial-inner">
                        <div class="testimonial-text-holder">
                            <div class="author-text">{!! $t->description !!}</div>
                        </div>
                        <div class="testimonial-author-details">
                            <div class="testimonial-author-info-holder">
                            <h5 class="name">{{ $t->name }}</h5>
                            <span class="job-position">{{ $t->designation }}</span>
                            </div>
                            <div class="testimonial-image-holder">
                            <div class="author-thumb"> <img width="75" height="75" src="{{asset('images/testimonial/'.$t->image)}}" class="img-thumbnail rounded-circle" alt=""/></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="layer-image-wrapper layer-image-divider6">
      <div class="layer-image-map" data-tm-bg-img="{{ asset('frontend/images/photos/map.png') }}"></div>
    </div>
  </section>
  <!-- End Divider -->
