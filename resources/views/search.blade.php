@extends('layouts.main')
@section('title')
    {{ __('Animal Health') }}
@endsection
@section('content')
    <div class="main-content">
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Search</h1>
            </div>
        </div>
        <div class="rs-publications-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="rs-breadcrumbs ">

                            <div class="breadcrumbs-text ">

                                <ul>
                                    <li>
                                        <a class="active" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>Search</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        @include('share_link')
                    </div>
                </div>
            </div>

            <div id="rs-about" class="rs-about style1 pt-50 pb-40 md-pt-70 md-pb-70">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4 contact-page-section">
                            <form class="contact-comment-box p-relative search-sec">
                                <input class="from-control" type="search" placeholder="search here..." required="">
                                <i class="fa fa-search search-icon"> </i>
                            </form>
                        </div>

                        <div class="col-md-12">
                            <p class="mt-4 mb-3 text-primary">Search Result</p>
                            <div class="search-content-box">
                                <h6>Biography</h6>                              
                            </div>                         

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
