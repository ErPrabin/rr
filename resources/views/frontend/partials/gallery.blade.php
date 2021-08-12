<!-- Our Gallery -->
<section class="gallery-section">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-12">
          <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-current-theme owl-carousel owl-theme tm-owl-carousel-5col tm-gallery-carousel  lightgallery-lightbox" data-margin="1">
            <!-- Gallery Item Start -->
            @foreach($galleries as $gallery)
            <div class="tm-carousel-item">
              <div class="tm-gallery">
                <div class="tm-gallery-inner">
                  <div class="thumb">
                    <a href="#"><img src="{{asset('images/gallery/'.$gallery->image)}}" class="" alt=""/></a>
                  </div>
                  <div class="tm-gallery-content-wrapper">
                    <div class="tm-gallery-content">
                      <div class="tm-gallery-content-inner">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-dark icon-circled icon-theme-colored3">
                            <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{asset('images/gallery/'.$gallery->image)}}" title="photo" href="{{asset('images/gallery/'.$gallery->image)}}"><i class="fa fa-plus"></i></a>
                          </div>
                        </div>
                        <div class="title-holder">
                          <h5 class="title"><a href="#">Demo Gallery 12</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- Gallery Item End -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Divider -->
