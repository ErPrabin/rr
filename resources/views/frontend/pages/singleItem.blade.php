@extends('frontend.master')
{{-- @section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Contact Us','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'contact')
])
@endsection --}}
@section('content')

    @include('frontend.partials.header')
    {{-- @include('frontend.partials.breadcrumb',['title1' => $item->name,]) --}}

    <!-- Single Product-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                            data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item">
                                <div class="slick-product-figure"><img src="{{ asset('images/item/' . $item->image) }}"
                                        alt="" width="530" height="480" />
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true"
                            data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3"
                            data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">
                            <div class="item">
                                <div class="slick-product-figure"><img src="{{ asset('images/item/' . $item->image) }}"
                                        alt="" width="530" height="480" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product">
                        <h3 class="text-transform-none fw-medium">{{ $item->name }}</h3>
                        <div class="group-md group-middle">
                            <div class="single-product-price">${{ $item->price }}</div>
                            <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                        </div>
                        <p>{!! $item->description !!} </p>
                        <hr class="hr-gray-100">
                        <ul class="list list-description">
                            <li><span>Categories:</span><span>{{ $item->menu->name }}</span></li>
                            <li><span>Delivery Time:</span><span>{{ $item->delivery_time }}</span></li>
                            {{-- <li><span>Box:</span><span>60 x 60 x 90 cm</span></li> --}}
                        </ul>
                        <form class="group-xs group-middle" method="post" action="{{ route('cart.store') }}">
                            @csrf
                            <input name="id" type="hidden" class="form-control" value="{{$item->id}}" >
                            <input name="name" type="hidden" class="form-control" value="{{$item->name}}" >
                            <input name="price" type="hidden" class="form-control" value="{{$item->price}}" >
                            <input name="image" type="hidden" class="form-control" value="{{$item->image}}" >
                            <div class="product-stepper">
                                <input class="form-input" type="number" data-zeros="true" name="qty" value="1" min="1" max="1000">
                            </div>
                            <div><input type="submit" class="button button-lg button-primary button-zakaria" value="ADD TO CART"/></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                {{-- <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                data-bs-toggle="tab">testimonials</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                data-bs-toggle="tab">Additional information</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                data-bs-toggle="tab">Delivery and payment</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="box-comment">
                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                            src="images/user-1-119x119.jpg" alt="" width="119" height="119" /></a></div>
                                <div class="unit-body">
                                    <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-xs group-middle">
                                                <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5>
                                                <div class="box-rating"><span class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star-half"></span></div>
                                            </div>
                                        </div>
                                        <div class="box-comment-time">
                                            <time datetime="2021-11-30">Nov 30, 2021</time>
                                        </div>
                                    </div>
                                    <p class="box-comment-text">Urna molestie at elementum eu facilisis sed odio. Odio eu
                                        feugiat pretium nibh ipsum consequat nisl vel. Sed risus ultricies tristique nulla
                                        aliquet enim tortor. Sapien faucibus et molestie ac feugiat sed. </p>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-transform-none fw-medium">Leave a Review</h4>
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                            method="post" action="bat/rd-mailform.php">
                            <div class="row row-20 row-md-30">
                                <div class="col-lg-8">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-first-name-2" type="text" name="name"
                                                    data-constraints="@Required" />
                                                <label class="form-label" for="contact-first-name-2">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-last-name-2" type="text" name="name"
                                                    data-constraints="@Required" />
                                                <label class="form-label" for="contact-last-name-2">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-email-2" type="email" name="email"
                                                    data-constraints="@Email @Required" />
                                                <label class="form-label" for="contact-email-2">E-mail</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                                    data-constraints="@Numeric" />
                                                <label class="form-label" for="contact-phone-2">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message-2">Message</label>
                                        <textarea class="form-input textarea-lg" id="contact-message-2" name="phone"
                                            data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="button button-lg button-primary button-zakaria" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span></div>
                                <div class="unit-body">
                                    <p>Ac orci phasellus egestas tellus rutrum tellus pellentesque. Pellentesque elit eget
                                        gravida cum sociis. Ut porttitor leo a diam sollicitudin tempor id. Consectetur
                                        lorem donec massa sapien faucibus et molestie ac. Rutrum tellus pellentesque eu
                                        tincidunt tortor aliquam. Lacinia at quis risus sed. Elit ullamcorper dignissim cras
                                        tincidunt lobortis feugiat vivamus at augue. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                <div class="unit-body">
                                    <p>Ut tortor pretium viverra suspendisse potenti. Fermentum leo vel orci porta non
                                        pulvinar neque laoreet suspendisse. Pellentesque dignissim enim sit amet. Rhoncus
                                        urna neque viverra justo nec ultrices dui sapien eget. Diam phasellus vestibulum
                                        lorem sed risus. Feugiat in fermentum posuere urna. Feugiat vivamus at augue eget
                                        arcu. Feugiat pretium nibh ipsum consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Related Products-->
    <section class="section section-sm section-last bg-default">
        <div class="container">
            <h4 class="fw-sbold">Related Items</h4>
            <div class="row row-lg row-30 row-lg-50 justify-content-center">
                @foreach ($relateditems as $data)
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="{{ asset('images/item/' . $data->image) }}" alt=""
                                        width="196" height="134" />
                                </div>
                                <h5 class="product-title"><a href="single-product.html">{{ $data->name }}</a></h5>
                                <div class="product-price-wrap">
                                    {{-- <div class="product-price product-price-old">$30.00</div> --}}
                                    <div class="product-price">${{ $data->price }}</div>
                                </div>
                            </div><span class="product-badge product-badge-sale">Sale</span>
                            <div class="product-button-wrap">
                                <div class="product-button">
                                    <a class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                        href="{{ route('singleItem', ['id' => $data->id]) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="product-button">
                                    <form method="post" action="{{ route('cart.store') }}" enctype="multipart/form">
                                        @csrf
                                        <input name="id" type="hidden" class="form-control" value="{{ $data->id }}">
                                        <input name="name" type="hidden" class="form-control" value="{{ $data->name }}">
                                        <input name="price" type="hidden" class="form-control" value="{{ $data->price }}">
                                        <input name="image" type="hidden" class="form-control" value="{{ $data->image }}">
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

@endsection
