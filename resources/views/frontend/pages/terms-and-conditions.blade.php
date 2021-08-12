@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Terms And Conditions','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'Terms And Conditions')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'Terms And Conditions',
])

<section>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-push-1">
            <div id="section" class="mb-50">
                <p class="mb-20">{!! \App\Util\Util::getCData($components,'Terms & Conditions','description') !!}</p>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection
