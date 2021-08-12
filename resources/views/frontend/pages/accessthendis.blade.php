@extends('frontend.master')
@section('title')
    @include('frontend.partials.title',[
    'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'access-the-ndis','title')
    ])
@endsection
@section('meta')
    @include('frontend.partials.meta',[
    'metatags' => \App\Util\Util::getMetDataCont($metatags,'access the ndis')
    ])
@endsection
@section('content')

    <!-- NDIS banner -->
    @if (session()->has('message'))
        <script>
            alert('{{ session()->get('message') }}')
        </script>

    @endif
    <section>
        <div class="row m-auto justify-content-center ndis-banner-image"
            style="background-image: url('{{ asset('images/component/' . getCData('Access the NDIS Banner Image', 'image')) }}')">
            <div class=" m-auto">
                <h2 class="font-weight-bold text-white">Access the NDIS</h2>
            </div>
        </div>
    </section>

    <!-- NDIS banner ends -->

    <!-- list for smooth scroll -->
    <div class="container">
        <div class="links access-ndis">
            <h3 class="primary-color mb-4">Steps to Check Eligibility</h3>
            @foreach ($eligibilities as $key => $eligibility)
                <p>
                    <img class="ndis-icon mx-2" src="{{ asset('images/eligibility-question/' . $eligibility->image) }}"><a
                        class="primary-color" href="#section-{{ $key }}">
                        <span>{{ $eligibility->title }}</span>
                    </a>
                </p>
            @endforeach

        </div>
    </div>


    <!-- Steps to Check Eligibility -->
    <div class="container">
        @foreach ($eligibilities as $key => $eligibility)

            <div class="mt-5 eligibility-style" id="section-{{ $key }}">
                <h3 class="primary-color">{{ $eligibility->title }}</h3>
                <div>
                    {!! $eligibility->description !!}
                </div>
            </div>

        @endforeach
    </div>
    <!-- How long until your access request is assessed? ends -->

    <!-- DOWNLOAD PDF -->
    <div class="container">
        <div class="mt-5 download-pdf">
            <h3 class="primary-color fw-bold">
                <a class="primary-color text-decoration-none"
                    href="{{ asset('images/component/' . getCData('NDIS File', 'image')) }}" download>
                    DOWNLOAD PDF
                </a>
            </h3>
        </div>
    </div>
    <!-- DOWNLOAD PDF ends -->


@endsection
