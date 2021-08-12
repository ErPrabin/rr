@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'about','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'about')
])
@endsection
@section('content')

<!-- banner-section -->

<section>
    <div class="row m-auto justify-content-center about-banner"
        style="background-image: url('{{ asset('images/component/' . getCData('About Us Banner Image', 'image')) }}')">
        <div class=" m-auto">
            <h2 class="font-weight-bold text-white">About Us</h2>
        </div>
    </div>
</section>

<!-- main section -->
<div class="about-section my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class=" my-5">
                    <h3 class="font-weight-bold">About Us</h3>
                    <div class="about-head-underline"></div>

                    <div class="mt-4">
                        {!! getCData('About Life Style Care and Support', 'description') !!}
                    </div>
                </div>


            </div>
            <!-- <div class="col-md-1 "></div> -->
            <div class="col-md-5 col-sm-8 text-sm-center text-center text-md-left text-lg-left pt-5 px-4 mt-5">
                <img class="img-fluid"
                    src="{{ asset('images/component/' . getCData('About Life Style Care and Support', 'image')) }}"
                    alt="{{ config('app.name') }}">
            </div>
        </div>
    </div>
</div>
<!-- main ends -->

<!-- Support Coordination will support participants to: -->
<section class="mt-5 pt-2">
    <div class="container">
        <div class="about-us-description">
            {!! getCData('About Us Description', 'description') !!}
        </div>

    </div>
</section>
<!-- Support Coordination will support participants to: ends -->



<!-- The four different stages Lifestyle Care and Support work  -->
<section class="mt-5">
    <div class="container">
        <h3 class="primary-color mt-5 mb-4">
            {!! strip_tags(getCData('Different Stage Content', 'description')) !!}
        </h3>
        <!-- engagement -->
        @foreach ($differentstages as $key => $differentstage)
        <div class="engagement mb-5 pb-2">
            <div class="about-head-card">
                <div class="card-body">
                    <div class="row align-items-center px-4">
                        <div class="about-card-img py-2">
                            <div class="p-0 m-0 number">0{{ $loop->index+1 }}</div>
                            <div class="p-0 m-0 text">stage</div>
                        </div>
                        <h3 class="font-weight-bold px-4">
                            {!! $differentstage->title !!}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                {!! $differentstage->description !!}
            </div>
        </div>
        @endforeach
    </div>
    <!-- The four different stages Lifestyle Care and Support work ends  -->
</section>

@endsection