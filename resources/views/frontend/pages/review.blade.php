@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'review','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'review')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'Reviews',
])

<section>
    <div class="container">
        @foreach ($reviews as $key => $review)
            @if($key % 2 ==0)
                <div class="row" style="margin: 2rem 0; padding: 0 2rem;">
                    <div class="col-md-6 col-xs-12">
                        <div class="thumb"> <img src="{{asset('images/review/'.$review->image)}}" alt="Image" style="width: 100%"></div>
                    </div>
                    <div class="col-md-6 col-xs-12" style="display: flex; align-items:center">
                        <div class="post-excerpt">
                            <h4 class="entry-title">{{ $review->name }}</h4>
                            <div class="mascot-post-excerpt">
                                {!! $review->review !!}
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row" style="margin: 2rem 0; padding: 0 2rem;">
                    <div class="col-md-6 col-xs-12 order-md-1" style="display: flex; align-items:center">
                        <div class="post-excerpt">
                            <h4 class="entry-title">{{ $review->name }}</h4>
                            <div class="mascot-post-excerpt">
                                {!! $review->review !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 order-first order-md-2">
                        <div class="thumb"> <img src="{{asset('images/review/'.$review->image)}}" alt="Image" style="width: 100%"></div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>

@endsection
