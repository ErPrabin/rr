@extends('frontend.master')
{{-- @section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Gallery','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'Gallery')
])
@endsection --}}

@section('content')

    @include('frontend.partials.header')
    @include('frontend.partials.breadcrumb',['title1' => 'Gallery',])

    
    <section class="section section-xl bg-default">
        <div class="container isotope-wrap">
            <div class="isotope-wrap">
            <div class="isotope-filters">
                <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
                <div class="isotope-filters-list-wrap">
                <ul class="isotope-filters-list">
                    <li><a class="active" href="#" data-isotope-filter="*">All</a></li>
                    <li><a href="#" data-isotope-filter="Type 1">Fruits</a></li>
                    <li><a href="#" data-isotope-filter="Type 2">Vegetables</a></li>
                </ul>
                </div>
            </div>
            <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-1-270x250.jpg" alt="" width="270" height="250"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Bananas</a></h5>
                        <div class="thumbnail-classic-price">$12.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-1-270x250.jpg" alt="" width="270" height="250"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-2-270x530.jpg" alt="" width="270" height="530"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Tomatoes</a></h5>
                        <div class="thumbnail-classic-price">$13.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/masonry-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-2-270x530.jpg" alt="" width="270" height="530"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-3-270x250.jpg" alt="" width="270" height="250"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Lemons</a></h5>
                        <div class="thumbnail-classic-price">$10.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/masonry-gallery-3-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-3-270x250.jpg" alt="" width="270" height="250"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-4-270x250.jpg" alt="" width="270" height="250"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Avocados</a></h5>
                        <div class="thumbnail-classic-price">$8.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/masonry-gallery-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-4-270x250.jpg" alt="" width="270" height="250"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-5-270x250.jpg" alt="" width="270" height="250"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Strawberries</a></h5>
                        <div class="thumbnail-classic-price">$14.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-2-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-5-270x250.jpg" alt="" width="270" height="250"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-6-570x530.jpg" alt="" width="570" height="530"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Sorrel</a></h5>
                        <div class="thumbnail-classic-price">$16.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-6-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-6-570x530.jpg" alt="" width="570" height="530"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
                <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                    <div class="thumbnail-classic-figure"><img src="images/masonry-gallery-7-570x250.jpg" alt="" width="570" height="250"/>
                    </div>
                    <div class="thumbnail-classic-caption">
                    <div>
                        <h5 class="thumbnail-classic-title"><a href="single-product.html">Almonds</a></h5>
                        <div class="thumbnail-classic-price">$10.99</div>
                        <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button"><a class="button button-gray-6 button-zakaria fl-bigmug-line-search74" href="images/grid-gallery-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/masonry-gallery-7-570x250.jpg" alt="" width="570" height="250"/></a></div>
                        <div class="thumbnail-classic-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                        </div>
                    </div>
                    </div>
                </article>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
