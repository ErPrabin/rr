@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> \App\Util\Util::getMetDataCont($metatags,'complaint','title')
])
@endsection
@section('meta')
@include('frontend.partials.meta',[
'metatags' => \App\Util\Util::getMetDataCont($metatags,'complaint')
])
@endsection
@section('main-content')
@include('frontend.partials.breadcrumb',[
'title1' => 'Complaint',
])


<section class="contact-section complaint-body-style">
    <div class="container pt-105">
        <div class="section-content">
            <div class="row complaint-form-row-style">
                {{-- <div class="col-xl-1"></div> --}}
                <div class="col-lg-12 col-xl-6">
                    <div class="col-lg-12 col-xl-11 offset-xl-1  "
                        style="background-image: url('{{ asset('images/gallery/2021-05-21-070112.jpg') }}'); background-size:cover">
                        <div class="complaint-form-style">
                            <div class="tm-sc-section-title section-title mb-50">
                                <div class="title-wrapper">
                                    <p class="subtitle line-bottom">Contact with Us</p>
                                    <h2 class="title mb-20">Get in Touch</h2>
                                </div>
                            </div>
                            <div class="contact-info-list">
                                <div class="info-list-item">
                                    <div class="icon cp-hover-effect">
                                        <img class="icon-img" src="{{ asset('frontend/images/icons/c01.png') }}"
                                            alt="Icon">
                                    </div>
                                    <div class="content">
                                        <p class="title">Visit Us</p>
                                        <h4>{!! strip_tags(\App\Util\Util::getCData($components, 'Address',
                                            'description')) !!}</h4>
                                    </div>
                                </div>
                                <div class="info-list-item">
                                    <div class="icon cp-hover-effect">
                                        <img class="icon-img" src="{{ asset('frontend/images/icons/c02.png') }}"
                                            alt="Icon">
                                    </div>
                                    <div class="content">
                                        <p class="title">Email Address</p>
                                        <h4>{!! strip_tags(\App\Util\Util::getCData($components, 'Email',
                                            'description')) !!}</h4>
                                    </div>
                                </div>
                                <div class="info-list-item">
                                    <div class="icon cp-hover-effect">
                                        <img class="icon-img" src="{{ asset('frontend/images/icons/c03.png') }}"
                                            alt="Icon">
                                    </div>
                                    <div class="content">
                                        <p class="title">Call Now</p>
                                        <h4>{!! strip_tags(\App\Util\Util::getCData($components, 'Contact Number',
                                            'description')) !!}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="contact-form pt-15 ml-4" lang="en-US" dir="ltr">
                        <!-- Contact Form -->

                        @include('frontend.partials.messages')
                        <form class="complaint-contact-form" name="contact_form" class=""
                            action="{{ route('complaintMail') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-row name-padding">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <small>*</small></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number <small>*</small></label>
                                        <input name="phone_number" class="form-control required email" type="text"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <small>*</small></label>
                                        <input name="email" class="form-control required email" type="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Reason for Complaint<small>*</small></label>
                                        <input name="reason" class="form-control required" type="text"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control required" rows="5"
                                    placeholder="Enter Message"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA') }}"></div>
                                <div class="form-group">
                                    {{-- <input name="form_botcheck" class="form-control" type="hidden" value="" /> --}}
                                    <button type="submit"
                                        class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                        data-loading-text="Please wait...">Send your message</button>
                                </div>
                        </form>

                        <!-- Contact Form Validation-->
                        <script>
                            (function($) {
                                    $("#contact_form").validate({
                                        submitHandler: function(form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before(
                                                '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                            );
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data(
                                                "loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function(data) {
                                                    if (data.status == 'true') {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(
                                                        form_btn_old_msg);
                                                    $(form_result_div).html(data.message)
                                                        .fadeIn('slow');
                                                    setTimeout(function() {
                                                        $(form_result_div).fadeOut(
                                                            'slow')
                                                    }, 6000);
                                                }
                                            });
                                        }
                                    });
                                })(jQuery);

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Divider -->

<section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="map-style">
                    {!! \App\Util\Util::getCData($components, 'Map', 'description') !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection