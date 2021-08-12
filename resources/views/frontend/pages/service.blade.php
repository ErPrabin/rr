@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'services','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'services')
])
@endsection
@section('content')
<section>
    <div class="row m-auto justify-content-center service-banner-image"
        style="background-image: url('{{ asset('images/component/' . getCData('Service Banner Image', 'image')) }}')">
        <div class=" m-auto">
            <h2 class="font-weight-bold text-white">Service</h2>
        </div>
    </div>
</section>
<!-- card -->

<div class="container">
    <div class="row">
        @foreach ($services as $service)
        <div class="col-md-4 my-3 text-center">
            <div class="service-card h-100 m-1">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="card-img mx-auto m-2">
                            <img class="img-fluid" src="{{ asset('images/service/' . $service->thumbnail) }}"
                                alt="{{ $service->title }}" />
                        </div>
                    </div>
                    <div class="description mt-2">
                        <h4 class="service-card-head ">{{ $service->title }}</h4>
                        <div class="card-head-underline mx-auto mb-4"></div>
                        <div>
                            {!! $service->synopsis !!}
                        </div>
                    </div>
                    <a href="{{ route('singleservice', $service->slug) }}"
                        class="border px-4 py-2 text-white  border-none primary-bg">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- card ends -->


@endsection