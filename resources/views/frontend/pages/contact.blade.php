@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'Contact Us','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'contact')
])
@endsection
@section('content')
<div class="container">
    <div class=" mt-5">
        <div class="text-center">
            <h2 class="mb-0">Contact Us</h2>
            <h2 class="contact-head-underline"></h2>
        </div>
        @include('frontend.partials.messages')
        <div class="mt-5 mb-5 connection-form">
            <div class="mb-5 contact-form">
                <form class="p-5" method="POST" action="{{ route('mail.send') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group py-3">
                                <label class="mb-2" for="exampleInputName">Name*</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName"
                                    aria-describedby="nameHelp" required>
                            </div>
                            <div class="form-group py-3">
                                <label class="mb-2" for="exampleInputEmail1">Subject*</label>
                                <input type="text" name="subject" class="form-control" id="exampleInputEmail1" required>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group py-3">
                                <label class="mb-2" for="exampleInputEmail2">Email Address*</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail2"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group py-3">
                                <label class="mb-2" for="phone">Phone Number*</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPhone" required>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group py-3">
                                <label class="mb-2" for="phone">Your Message*</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 recaptcha-style">
                            <div class="g-recaptcha" data-sitekey="6Lcv8tsbAAAAAKqf-ItEy0xgz3biz1PjwNGmKAw9" data-callback="correctCaptcha"></div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn text-white primary-bg send-button">Send Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-style">
                        {!! \App\Util\Util::getCData($components, 'Map', 'description') !!}
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection