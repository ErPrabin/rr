@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,$singleservice->slug,'title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,$singleservice->slug)
])
@endsection
@section('content')
<div class="container">
    <div class="row pt-5 m-auto">
        <div class="col-md-3 p-0">
            <!-- Tabs nav -->
            <div class="nav flex-column nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach ($services as $service)
                <a class="nav-link  p-3 shadow {{ $service->slug == $singleservice->slug ? 'active' : '' }}"
                    href="{{ route('singleservice', $service->slug) }}">
                    <span class="font-weight-bold small text-uppercase">
                        {{ $service->title }}
                    </span>
                </a>

                @endforeach
            </div>
        </div>
        <div class="col-md-9 pr-0">
            <!-- Tabs content -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade shadow p-2 rounded bg-white show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <img class="img-fluid" src="{{ asset('images/service/' . $singleservice->image) }}"
                        alt="{{ config('app.name') }}">
                    <h4>{{ $singleservice->title }}</h4>
                    <div class="my-2">
                        {!! $singleservice->description !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection