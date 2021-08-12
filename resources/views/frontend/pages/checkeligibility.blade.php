@extends('frontend.master')
@section('title')
    @include('frontend.partials.title',[
    'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Check Eligibility','title')
    ])
@endsection
@section('meta')
    @include('frontend.partials.meta',[
    'metatags' => \App\Util\Util::getMetDataCont($metatags,'check-eligibility')
    ])
@endsection
@section('main-content')
    @include('frontend.partials.breadcrumb',[
    'title1' => 'Access to NDIS',
    ])

    <section class="divider bg-white-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 order-md-1 eligibility-border">
                        @foreach ($qns as $key => $q)
                            <div class="eligibility-style">
                                <p>{{ $key + 1 }}) {{ $q->question }}</p>
                                {!! $q->answer !!}
                            </div>
                        @endforeach
                    <!-- Contact Form -->
                    {{-- <form id="contact_form" name="contact_form" class="" action="{{ route('check-eligibility-post') }}"
                    method="post">
                    @csrf
                    <div class="row mt-4">
                        @foreach ($qns as $q)
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label>{{ $q->question }} <small>*</small></label><br>
                                @foreach (config('custom.options') as $key => $o)
                                <input type="radio" name="{{ $q->id }}" value="{{ $key }}"
                                    {{ $key==1?'required':'' }}>&nbsp;
                                {{$o}}
                                &nbsp;&nbsp;&nbsp;
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <button type="submit"
                            class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Submit</button>
                    </div>
                </form> --}}

                    </>
                    {{-- <div class="col-lg-5 col-sm-12 order-first order-md-2">
                <h3 class="mt-8 mb-0 text-center">Result</h3>
                <div class="result text-center mt-10">
                    @if (Session::has('result'))
                    @if (Session::get('result') == '1')
                    <font style="color: green">
                        YOU MAY BE ELIGIBLE
                    </font>
                    @else
                    <font class="text-danger">
                        NOT ELIGIBLE
                    </font>
                    @endif
                    @else
                    --
                    @endif
                </div>
            </div> --}}
                </div>
            </div>
    </section>

@endsection
