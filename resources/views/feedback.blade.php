@extends('layouts.main')
@section('title')
    {{ __('Publications') }}
@endsection
@section('content')
    <div class="main-content">
        <div class="wrapper" id="skipCont"></div>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Feedback</h1>
            </div>
        </div>
        <div class="rs-publications-main contact-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="rs-breadcrumbs ">

                            <div class="breadcrumbs-text ">

                                <ul>
                                    <li>
                                        <a class="active" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>Publications</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        @include('share_link')
                    </div>
                </div>
            </div>

            <div id="rs-about" class="rs-about style1 pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="rs-quick-contact new-style">
                                <div class="inner-part mb-50">
                                    <h2 class="title mb-15">Get In Touch</h2>

                                </div>
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="">
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Name" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="Email" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="designation" name="designation"
                                                placeholder="Designation" required="">
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="tel" id="phone" name="phone"
                                                placeholder="Contact No." required="">
                                        </div>
                                        <div class="col-lg-12 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="organization" name="organization"
                                                placeholder="Organization" required="">
                                        </div>

                                        <div class="col-lg-12 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="address" name="address"
                                                placeholder="Address" required="">
                                        </div>

                                        <div class="col-lg-12 mb-35">
                                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                        </div>

                                        <div class="form-group col-md-5 mx-auto mb-0">
                                            <input class="btn-send" type="submit" value="Submit">
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div>
    </div>
@endsection
