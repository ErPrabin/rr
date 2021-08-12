@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Gallery','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'Gallery')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'Gallery',
])

@include('frontend.partials.gallery')
@include('frontend.partials.testimonial')
@endsection
