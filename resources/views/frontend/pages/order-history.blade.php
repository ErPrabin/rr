@extends('frontend.master')
{{-- @section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'about','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'about')
])
@endsection --}}
@section('content')
    @include('frontend.partials.header')

    @include('frontend.partials.breadcrumb',['title1' => 'My Order History', ''])

    <section class="section section-xxl bg-default text-center">
        <div class="row row-xl row-30 justify-content-center">
            @foreach ($orders as $order)
                <div class="col-sm-6 col-lg-4">
                    <article class="pricing-classic">
                        <div class="pricing-classic-body">
                            <ul class="pricing-classic-list">
                                <li><span>Order ID:</span>{{ $order->id }}</li>
                                <li><span>Name:</span>{{ $order->name }}</li>
                                <li><span>Total</span> {{ $order->total }}</li>
                                <li><span>Item(s)</span></li>
                                @foreach ($order->items as $item)
                                    <li>
                                        <span> {{ $item->name }} </span>{{ round($item->price,2) }}, 
                                        <span>Qty:</span> {{ $item->pivot->quantity }} </li>
                                @endforeach  
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </section>
@endsection