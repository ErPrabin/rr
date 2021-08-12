@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'booking','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'booking')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'Appointment',
])

<div class="row"
    style="background: linear-gradient( 
                0deg
                 , rgb(8 8 8 / 30%), rgb(2 2 2 / 30%)), url('{{ asset('images/component/' . \App\Util\Util::getCData($components, 'Appointment Background Image', 'image')) }}'); background-size: cover; ">
    <div class=" col-md-6 offset-md-3">
        {{-- <div class="text-center mb-60"><a href="#" class=""><img alt="images" src="images/logo-wide.png"></a></div> --}}
        <div class="bg-white-fc border-1px p-25 mt-40 mb-40" style="opacity: 0.92">
            <h4 class="text-theme-colored1 text-uppercase m-0">Book Appointment</h4>
            <div class="line-bottom mb-30"></div>
            @include('frontend.partials.messages')
            <form id="job_apply_form" name="job_apply_form" action="{{ route('booking-post') }}" method="post"
                enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="">
                            <label>Full Name <small>*</small></label>
                            {{-- <input name="first_name" type="text" placeholder="First Name" class="form-control" required> --}}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <input name="first_name" type="text" placeholder="First Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <input name="last_name" type="text" placeholder="Last Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Number <small>*</small></label>
                            <input name="phone_number" type="text" placeholder="Enter Number" class="form-control"
                                required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label>Email <small>*</small></label>
                            <input name="form_email" class="form-control required email" type="email"
                                placeholder="Enter Email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label>Appointment Date <small>*</small></label>
                            <input name="form_appointment_date" class="form-control required date-picker" type="text"
                                id="date-picker" placeholder="Appointment Date" aria-required="true">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label>Appointment Time <small>*</small></label>
                            {{-- <input type="checkbox" name="time"> --}}
                            <input type="hidden" id="timee" name="time" value="" class="form-control" required>
                            {{-- <div class="a-tag-style"> --}}
                            <div class="row">
                                @php
                                $time = 8;
                                @endphp
                                @for ($i = 0; $i < 16; $i++) @php if ($i % 2==1) { $time=$time; } else { $time=$time +
                                    1; } @endphp <div class="col-md-3">
                                    <div id="color{{ $i }}"
                                        onclick="assignvalue('{{ $time }}:{{ $i % 2 == 0 ? '00' : '30' }} {{ $time >= 12 ? 'PM' : 'AM' }}',{{ $i }})"
                                        class="time-style">
                                        <a href="javascript:void(0)">{{ $time }}:{{ $i % 2 == 0 ? '00' : '30' }}
                                            {{ $time >= 12 ? 'PM' : 'AM' }}</a>
                                    </div>
                            </div>
                            @endfor
                        </div>
                        <div id="show-time"></div>

                        <div></div>
                    </div>
                </div>
        </div>
        <div class="mb-3">
            <label>Message <small>*</small></label>
            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="mb-1">
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA') }}"> </div>
                </div>
            </div>
        </div>
        <div class="mb-3 tm-sc-button mb-0 mt-20">
            <input name="form_botcheck" class="form-control" type="hidden" value="">
            <button type="submit" class="btn btn-theme-colored1 btn-block btn-sm mt-20"> Submit </button>
        </div>
        </form>
    </div>
</div>
</div>
<div class="data">

</div>

@endsection