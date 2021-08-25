@extends('frontend.master')
{{-- @section('title')
    @include('frontend.partials.title',[
    'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'home','title')
    ])
@endsection
@section('meta')
    @include('frontend.partials.meta',[
    'metatags' => \App\Util\Util::getMetDataCont($metatags,'home')
    ])
@endsection --}}
@section('content')
    <!-- Banner -->
    @include('frontend.partials.master-header')
    
    @include('frontend.partials.home-banner')

    @include('frontend.partials.services')

    @include('frontend.partials.todays-special')
    @include('frontend.partials.fooditems')

    @include('frontend.partials.featured')

    @include('frontend.partials.what-people-say')

    @include('frontend.partials.index-gallery')

    {{-- @include('frontend.partials.our-team') --}}

    {{-- @include('frontend.partials.blog-post') --}}

    @include('frontend.partials.slogan')
@endsection
