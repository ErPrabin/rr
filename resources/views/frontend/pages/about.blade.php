@extends('frontend.master')
{{-- @section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'about','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'about')
])
@endsection --}}
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'About Us',])

    <!-- Section About-->
    <section class="section section-xl bg-default text-md-start">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
            <div class="col-md-11 col-lg-6 col-xl-5">
                <!-- Quote Classic Big-->
                <article class="quote-classic-big inset-xl-right-30">
                <div class="heading-3 text-transform-capitalize quote-classic-big-text">
                    <div class="q">The best biryani house</div>
                </div>
                </article>
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-bs-toggle="tab">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-bs-toggle="tab">Our mission</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-bs-toggle="tab">Our goals</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                    <p>Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and meat usually that of chicken, goat, lamb, prawn, fish, and sometimes, in addition, eggs or vegetables such as potatoes in certain regional varieties</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                    <p>Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and meat usually that of chicken, goat, lamb, prawn, fish, and sometimes, in addition, eggs or vegetables such as potatoes in certain regional varieties</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                    <p>Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and meat usually that of chicken, goat, lamb, prawn, fish, and sometimes, in addition, eggs or vegetables such as potatoes in certain regional varieties</p>
                    </div>
                </div>
                </div><a class="button button-lg button-shadow-2 button-primary button-zakaria" href="#">Read more</a>
            </div>
            <div class="col-md-11 col-lg-6 col-xl-7">
                <div class="slick-slider-1 inset-xl-left-35">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent" data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel" data-for="#child-carousel" data-arrows="true">
                    <div class="item"><img src="{{ asset('assets/img/biryani.jpg') }}" alt="" width="634" height="373"/>
                    </div>
                    <div class="item"><img src="{{ asset('assets/img/biryani.jpg') }}" alt="" width="634" height="373"/>
                    </div>
                    <div class="item"><img src="{{ asset('assets/img/biryani.jpg') }}" alt="" width="634" height="373"/>
                    </div>
                    <div class="item"><img src="{{ asset('assets/img/biryani.jpg') }}" alt="" width="634" height="373"/>
                    </div>
                </div>
                {{-- <div class="slick-slider child-carousel" id="child-carousel" data-items="3" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-xxl-items="4" data-for="#carousel-parent">
                    <div class="item"><img src="{{ asset('images/about-1-143x114.jpg') }}" alt="" width="143" height="114"/>
                    </div>
                    <div class="item"><img src="{{ asset('images/about-2-143x114.jpg') }}" alt="" width="143" height="114"/>
                    </div>
                    <div class="item"><img src="{{ asset('images/about-3-143x114.jpg') }}" alt="" width="143" height="114"/>
                    </div>
                    <div class="item"><img src="{{ asset('images/about-4-143x114.jpg') }}" alt="" width="143" height="114"/>
                    </div>
                </div> --}}
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Section History-->
    {{-- <section class="section section-fluid section-xl section-bottom-0 bg-image-2 section-relative context-dark">
    <div class="container-fluid">
        <h2 class="text-transform-capitalize">Our History</h2>
        <div class="slick-history"> 
        <!-- Slick Carousel-->
        <div class="slick-slider carousel-parent" id="carousel-parent-2" data-items="1" data-sm-items="2" data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="4" data-autoplay="false" data-loop="false">
            <div class="item">
            <div class="box-info-classic">
                <h4 class="box-info-classic-title">Establishment</h4>
                <p class="box-info-classic-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin facilisis, velit non fringilla pharetra, elit odio</p>
            </div>
            </div>
            <div class="item">
            <div class="box-info-classic">
                <h4 class="box-info-classic-title">First Success</h4>
                <p class="box-info-classic-text">Mirabilis fraticinida patienter imperiums luna est. Ecce, mensa! Eleatess crescere, tanquam grandis valebat. Dexter, ferox accolas</p>
            </div>
            </div>
            <div class="item">
            <div class="box-info-classic">
                <h4 class="box-info-classic-title">New Technologies</h4>
                <p class="box-info-classic-text">Est primus usus, cesaris. Azureus, fortis coordinataes sapienter magicae de raptus, germanus bursa. Peritus, nobilis buxums sed</p>
            </div>
            </div>
            <div class="item">
            <div class="box-info-classic">
                <h4 class="box-info-classic-title">National Recognition</h4>
                <p class="box-info-classic-text">Barbatus fortiss ducunt ad poeta. Orexis dexter domus est. Glos, fermium, et demissio. Altus, germanus sectams tandem experientia</p>
            </div>
            </div>
            <div class="item">
            <div class="box-info-classic">
                <h4 class="box-info-classic-title">Partnership</h4>
                <p class="box-info-classic-text">Guttuss sunt sagas de pius ionicis tormento. Sunt capioes acquirere brevis, mirabilis fluctuses. Regius, alter lapsuss semper</p>
            </div>
            </div>
        </div>
        
        </div>
    </div>
    </section> --}}
@endsection