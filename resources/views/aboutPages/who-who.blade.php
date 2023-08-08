@extends('layouts.main')
@section('title')
 {{__('Whos Who')}}
@endsection
@section('content')
<div class="main-content">
        <div class="wrapper" id="skipCont"></div>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/guidlines_bg.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Who's Who</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a class="active" href="{{ url('about-us') }}">about</a>
                    </li>
                    <li>
                        Who's Who
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Contact Section Start -->
        <div class="nrcp-board-section pt-37 pb-100 md-pt-70 md-pb-70">
            <div class="container">

                <!--            <div class="sec-title">
                <h2 class="title mb-0">Faculty of the Division:</h2>
            </div>-->

                <div class="sec-title">

                    <div class="bold-text mb-40 mt-30 text-black"><span class="text-with-bg">
                            Head of the Division:
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="courses-item">
                            <div class="courses-grid">
                                <div class="img-part board-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/Nrcp_img/nrcp-board1.png') }}"
                                            alt="Breadcrumbs Image">
                                    </a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title"><a href="#"> Dr. Simmi Tiwari</a></h3>
                                    <ul class="meta-part">
                                        <li class="user">

                                            MBBS, DNB(SPM), PGDHHM
                                        </li>
                                        <li class="user">

                                            Joint Director & HoD
                                        </li>
                                        <li class="user">

                                            Email ID- drsimmi@ncdc.gov.in
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec-title">

                    <div class="bold-text mb-40 mt-30 text-black"><span class="text-with-bg">
                            Other Officers in the Division:
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="courses-item">
                            <div class="courses-grid">
                                <div class="img-part board-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/Nrcp_img/nrcp-board2.png') }}"
                                            alt="Breadcrumbs Image">
                                    </a>
                                </div>
                                <div class="content-part">



                                    <h3 class="title"><a href="#"> Dr. Ajit Dadaji Shewale</a></h3>
                                    <ul class="meta-part">
                                        <li class="user">
                                            MBBS, MD (CM), DNB(SPM), DHRM
                                        </li>
                                        <li class="user">
                                            Deputy Director
                                        </li>
                                        <li class="user">
                                            Email ID- ajitshewale@ncdc.gov.in
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="courses-item">
                            <div class="courses-grid">
                                <div class="img-part board-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/Nrcp_img/nrcp-board3.png') }}"
                                            alt="Breadcrumbs Image">
                                    </a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title"><a href="#"> Dr. Tushar N. Nale</a></h3>
                                    <ul class="meta-part">
                                        <li class="user">
                                            Deputy Director
                                        </li>
                                        <li class="user">
                                            MBBS MD (CM) DHRM
                                        </li>
                                        <li class="user">
                                            Email ID- tushar.nale@nic.in
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Contact Section End -->
    </div>

@endsection