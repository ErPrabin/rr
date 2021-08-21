<section class="section section-xxl bg-default">
    <div class="container">
        <h2 class="text-transform-capitalize wow fadeScale">Food Items</h2>
        <div class="row row-lg row-30 row-lg-50">
            @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <!-- Product-->
                    <article class="product wow fadeInRight">
                        <div class="product-body">
                            <div class="product-figure"><img src="{{ asset('images/item/' . $item->image) }}" alt=""
                                    width="196" height="134" />
                            </div>
                            <h5 class="product-title"><a href="single-product.html">{{ $item->name }}</a></h5>
                            <div class="product-price-wrap">
                                {{-- <div class="product-price product-price-old">$30.00</div> --}}
                                <div class="product-price"> ${{ $item->price }}</div>
                            </div>
                        </div><span class="product-badge product-badge-sale">Sale</span>
                        <div class="product-button-wrap">
                            <div class="product-button"><a
                                    class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                    href="single-product.html"><i class="fas fa-eye"></i></a></div>
                            <div class="product-button"><a
                                    class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                                    href="cart-page.html"><i class="fas fa-shopping-cart"></i></a></div>
                        </div>
                    </article>
                </div>

            @endforeach

        </div>
    </div>
</section>
