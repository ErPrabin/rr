<section id="home">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col">
          <!-- START Home Slider REVOLUTION SLIDER 6.0.8 -->
          <p class="rs-p-wp-fix"></p>
          <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="lovims-rev-slider" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0; z-index:-1;">
            <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.6">
              <rs-slides>
                @foreach($sliders as $slider)
                    <rs-slide data-key="rs-{{$loop->index}}" data-title="Slide" data-thumb="images/bg/bg1.jpg" data-anim="ei:d;eo:d;s:2590;r:0;t:slidingoverlayleft;sl:d;" data-firstanim="t:slidingoverlayleft;s:1500;">
                    <img src="{{asset('images/slider/'.$slider->image)}}" title="rev-s4" width="1920" height="1280" data-bg="p:0% 40%;" data-parallax="12" class="rev-slidebg" data-no-retina>
                    <rs-layer
                        id="slider-1-slide-{{$loop->index}}-layer-2"
                        class="rs-pxl-1"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,l,c;xo:55px,55px,55px,0;y:m;yo:-117px,-110px,-89px,-87px;"
                        data-text="s:75,65,54,48;l:85,75,65,61;fw:800;a:inherit,inherit,inherit,center;"
                        data-dim="w:515px,456px,379px,335px;"
                        data-padding="r:20,20,20,0;l:20,20,20,0;"
                        data-frame_0="x:175%;o:1;"
                        data-frame_0_mask="u:t;x:-100%;"
                        data-frame_1="e:Power3.easeOut;st:700;sp:1000;sR:700;"
                        data-frame_1_mask="u:t;"
                        data-frame_999="x:175%;o:1;st:w;sp:1000;sR:7300;"
                        data-frame_999_mask="u:t;x:-100%;"
                        style="z-index:12;background-color:rgba(0, 0, 0, 0.3);font-family:Open Sans;text-transform:uppercase;"
                    >{{ $slider->title1 }}
                    </rs-layer>
                    <rs-layer
                        id="slider-1-slide-{{$loop->index}}-layer-5"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,l,c;xo:54px,55px,55px,0;y:m;yo:45px,47px,44px,45px;"
                        data-text="s:18,18,16,16;l:28,26,24,22;ls:0,0,0px,0px;a:inherit,inherit,inherit,center;"
                        data-dim="w:auto,auto,auto,478px;h:auto,auto,auto,64px;"
                        data-frame_1="e:Power4.easeInOut;st:1300;sp:1000;sR:1300;"
                        data-frame_999="o:0;e:Power4.easeInOut;st:w;sp:1000;sR:6700;"
                        style="z-index:10;background-color:rgba(0, 0, 0, 0.3);padding:0 10px;font-family:Open Sans;"
                    >{!! $slider->title3 !!}
                    </rs-layer>
                    <rs-layer
                        id="slider-1-slide-{{$loop->index}}-layer-7"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,l,c;xo:56px,55px,55px,0;y:m;yo:-31px,-30px,-20px,-25px;"
                        data-text="s:35,35,30,28;l:54,52,48,42;fw:600;a:inherit;"
                        data-padding="r:20,20,20,15;l:20,20,20,15;"
                        data-frame_0="sX:0.8;sY:0.8;"
                        data-frame_1="e:Power4.easeOut;st:1000;sp:1000;sR:1000;"
                        data-frame_999="sX:0.9;sY:0.9;o:0;st:w;sp:1000;sR:7000;"
                        style="z-index:11;background-color:rgba(0, 0, 0, 0.3);font-family:Open Sans;text-transform:uppercase;"
                    >{!! $slider->title2 !!}
                    </rs-layer>
                    <rs-layer
                        id="slider-1-slide-{{$loop->index}}-layer-16"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,l,c;xo:54px,55px,55px,0;y:t,m,m,m;yo:451px,119px,126px,122px;"
                        data-text="w:normal;s:20,15,11,6;l:25,19,14,8;"
                        data-frame_0="y:bottom;"
                        data-frame_1="st:1620;sp:1000;sR:1620;"
                        data-frame_999="x:50,38,28,17;o:0;st:w;sp:1000;sR:6380;"
                        style="z-index:9;"
                    >
                    @if($loop->index % 2 == 1)
                    <a href="{{ route('contact') }}" class="btn btn-theme-colored2 btn-round btn-lg">Contact Us</a>
                    @else
                    <a href="{{ route('service') }}" class="btn btn-theme-colored2 btn-round btn-lg">Explore Our Service</a>
                    @endif
                    </rs-layer>
                    <rs-layer
                        id="slider-1-slide-26-layer-17"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                        data-dim="w:100%;h:100%;"
                        data-basealign="slide"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:8;background-color:rgba(44,159,219,0.32);font-family:Roboto;"
                    >
                    </rs-layer>
                    </rs-slide>
                @endforeach
              </rs-slides>
              <rs-static-layers>
              </rs-static-layers>
              <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
            </rs-module>
          </rs-module-wrap>
          <!-- END REVOLUTION SLIDER -->
        </div>
      </div>
    </div>
  </section>
