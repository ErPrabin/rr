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
                            <div class="product-button">
                                <a class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                    href="{{ route('singleItem', ['id' => $item->id]) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                            <div class="product-button">
                                <form method="post" action="{{ route('cart.store') }}" enctype="multipart/form">
                                    @csrf
                                    <input name="id" type="hidden" class="form-control" value="{{ $item->id }}">
                                    <input name="name" type="hidden" class="form-control" value="{{ $item->name }}">
                                    <input name="price" type="hidden" class="form-control" value="{{ $item->price }}">
                                    <input name="image" type="hidden" class="form-control" value="{{ $item->image }}">
                                    <button type="submit"
                                        class="button button-primary button-zakaria fl-bigmug-line-shopping202">
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>

            @endforeach

        </div>
    </div>
</section>
