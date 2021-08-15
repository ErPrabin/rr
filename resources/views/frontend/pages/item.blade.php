@extends('frontend.master')
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'Item',])

    <!-- Section Shop-->
    <section class="section section-xxl bg-default text-md-start">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-4 col-xl-3">
                <div class="aside row row-30 row-md-50 justify-content-md-between">
                    <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                    <h6 class="aside-title">Categories</h6>
                        <ul class="list-shop-filter">
                            <li>
                            <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-1" type="checkbox">All
                            </label><span class="list-shop-filter-number">(18)</span>
                            </li>
                            <li>
                            <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-2" type="checkbox">Drinks
                            </label><span class="list-shop-filter-number">(9)</span>
                            </li>
                            <li>
                            <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-3" type="checkbox">Vegetables
                            </label><span class="list-shop-filter-number">(5)</span>
                            </li>
                            <li>
                            <label class="checkbox-inline">
                                <input name="input-group-radio" value="checkbox-4" type="checkbox">Exotic
                            </label><span class="list-shop-filter-number">(8)</span>
                            </li>
                        </ul>
                    <!-- RD Search Form-->
                    <form class="rd-search form-search" action="search-results.html" method="GET">
                        <div class="form-wrap">
                        <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                        <label class="form-label" for="search-form">Search in shop...</label>
                        <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                        </div>
                    </form>
                    </div>
                    <div class="aside-item col-sm-6 col-lg-12">
                    <h6 class="aside-title">Popular products</h6>
                    <div class="row row-10 row-lg-20 gutters-10">
                        <div class="col-4 col-sm-6 col-md-12">
                        <!-- Product Minimal-->
                        <article class="product-minimal">
                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-1-106x104.jpg" alt="" width="106" height="104"/></a></div>
                            <div class="unit-body">
                                <p class="product-minimal-title"><a href="single-product.html">Sparkling Drinks</a></p>
                                <p class="product-minimal-price">$13.00</p>
                            </div>
                            </div>
                        </article>
                        </div>
                        <div class="col-4 col-sm-6 col-md-12">
                        <!-- Product Minimal-->
                        <article class="product-minimal">
                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-2-106x104.jpg" alt="" width="106" height="104"/></a></div>
                            <div class="unit-body">
                                <p class="product-minimal-title"><a href="single-product.html">Tomatoes</a></p>
                                <p class="product-minimal-price">$16.00</p>
                            </div>
                            </div>
                        </article>
                        </div>
                        <div class="col-4 col-sm-6 col-md-12">
                        <!-- Product Minimal-->
                        <article class="product-minimal">
                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-3-106x104.jpg" alt="" width="106" height="104"/></a></div>
                            <div class="unit-body">
                                <p class="product-minimal-title"><a href="single-product.html">Carrots</a></p>
                                <p class="product-minimal-price">$23.00</p>
                            </div>
                            </div>
                        </article>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                <div class="product-top-panel group-md">
                    <p class="product-top-panel-title">Showing 1–12 of 28 results</p>
                    {{-- <div>
                        <div class="group-sm group-middle">
                            <div class="product-top-panel-sorting">
                            <select>
                                <option value="1">Sort by newness</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by alphabet</option>
                            </select>
                            </div>
                            <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid active" href="grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list" href="#"></a></div>
                        </div>
                    </div> --}}
                </div>
                <div class="row row-30 row-lg-50">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <!-- Product-->
                            <article class="product">
                                <div class="product-body">
                                <div class="product-figure"><img src="{{ asset('images/item/' . $item->image) }}" alt="" width="196" height="134"/>
                                </div>
                                <h5 class="product-title"><a href="{{ route('singleItem',$item->id) }}">{{ $item->name }}</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price product-price-old">Rs. {{ $item->price }}</div>
                                    <div class="product-price">Rs. {{ $item->price }}</div>
                                </div>
                                </div><span class="product-badge product-badge-sale">Sale</span>
                                <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="{{ route('singleItem',$item->id) }}"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-wrap">
                    <!-- Bootstrap Pagination-->
                    <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection