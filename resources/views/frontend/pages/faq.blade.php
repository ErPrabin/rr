@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'FAQ','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'FAQ')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'FAQ',
])

<section>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-push-1">
          <div class="list-group">
            @foreach ($faqs as $faq)
                <a href="{{'#section-' . $faq->id}}" class="list-group-item smooth-scroll-to-target">Q. {{$faq->question}}</a>
            @endforeach
          </div>
        </div>
        <div class="col-md-10 col-md-push-1">
            @foreach ($faqs as $faq)
                <div id="{{'section-' . $faq->id}}" class="mb-50">
                    <h3>Q. {{$faq->question}}</h3>
                    <hr>
                    <p class="mb-20">{!! $faq->answer !!}</p>
                </div>
            @endforeach
        </div>
      </div>
    </div>
</section>
@endsection
