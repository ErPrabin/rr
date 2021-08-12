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
    <h1>This is home page</h1>
@endsection
