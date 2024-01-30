@extends('layouts.main')
@section('title')
{{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
{{ __('Home') }}
@endsection
@section('breadcrumbs')
{{ __('Contact US') }}
@endsection
@section('content')
<!-- <div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70"> -->
<div class="contact-page-section pt-60 pb-60 md-pt-70 md-pb-70" id="rs-about">
    <div class="container">
        <div class="row contact-address-section">
            <div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
                <div class="contact-info contact-address">
                    <div class="icon-part">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">Address</h5>
                        <h4 class="info-title">
                            National Centre for Disease Control,
                            Directorate General of Health Services,<br>
                            Ministry of Health and Family Welfare,<br>
                            Government of India,<br>
                            22 – Sham Nath Marg, Delhi - 110054
                        </h4>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-12 md-mb-30">
                <div class="contact-info contact-mail">
                    <div class="icon-part">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">Email Address</h5>
                        <h4 class="info-title"><a
                                href="mailto:napreindia-ncdc@ncdc.gov.in">napreindia-ncdc[at]ncdc[dot]gov[dot]in</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-12 lg-pr-0">
                <div class="contact-info contact-phone">
                    <div class="icon-part">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="content-part">
                        <h5 class="info-subtitle">Phone Number</h5>
                        <h4 class="info-title"><a href="tel:011-23930178">011-23930178</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <div class="rs-quick-contact new-style">
                    <div class="inner-part mb-20">
                        <h2 class="title mb-15">Get In Touch</h2>

                    </div>
                    <div id="form-messages"></div>
                    <form method="post" action="{{route('contact-us')}}?msg=success">
                        @csrf
                        <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                        @if( Session::has("success") )
                        <div class="alert alert-success alert-block" role="alert">
                            <button class="close" data-dismiss="alert"></button>
                            {{ Session::get("success") }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 mb-25 col-md-12">
                                <input class="from-control" type="text" id="name" name="name" value="{{ old('name') }}"
                                    placeholder="Name">


                                @if ($errors->has('name'))
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-25 col-md-12">
                                <input class="from-control" type="text" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="Email">


                                @if ($errors->has('email'))
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>


                            <div class="col-lg-6 mb-25 col-md-12">
                                <input class="from-control phone" type="text" id="phone" value="{{ old('phone') }}"
                                    name="phone" placeholder="Phone" maxlength="10" minlength="10">

                                @if ($errors->has('phone'))
                                <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>

                            <div class="col-lg-6 mb-25 col-md-12">
                                <input class="from-control" type="text" id="subject" value="{{ old('subject') }}"
                                    name="subject" placeholder="Subject">

                                @if ($errors->has('subject'))
                                <div class="text-danger">{{ $errors->first('subject') }}</div>
                                @endif

                            </div>
                            <div class="col-lg-12 mb-25">
                                <textarea class="from-control" id="message" name="message"
                                    placeholder=" Message">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <div class="text-danger">{{ $errors->first('message') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                {!! captcha_image_html('ContactCaptcha') !!}
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" id="CaptchaCode" name="CaptchaCode"
                                    placeholder="Captcha here" style="margin-top:5px;">
                                @if ($errors->has('CaptchaCode'))
                                <div class="text-danger">{{ $errors->first('CaptchaCode') }}</div>
                                @endif
                            </div>
                            <div class="form-group col-md-5 mx-auto mt-5 mb-3">
                                <input class="btn-send" type="submit" value="Submit Now">
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-lg-6 md-mb-30">
                        <div class="contact-map2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3500.3822174465167!2d77.222103!3d28.678211000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfda49c63895b%3A0xf42dc723f30a63d2!2sNATIONAL%20CENTRE%20FOR%20DISEASE%20CONTROL%2C%20CSU%20INTEGRATED%20DISEASE%20SURVEILLANCE%20PROGRAMME%2C%20Civil%20Lines%2C%20Delhi%2C%20110054%2C%20India!5e0!3m2!1sen!2sus!4v1690304684981!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

        </div>
    </div>
</div>
@push('post-scripts')
@endpush
@endsection