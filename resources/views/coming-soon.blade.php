@extends('layouts.main')
@section('title')
 {{__('Coming Soon')}}
@endsection
@section('content')
<div class="main-content">
        <div class="wrapper" id="skipCont"></div>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay rs-breadcrumbs-event">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/guidlines_bg.png') }}"
                    alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color padding">
                <h1 class="page-title">Coming Soon </h1>
                <!-- <ul>
                <li>
                    <a class="active" href="index.html">Home</a>
                </li>
                <li>
                    <a class="active" href="index.html">about</a>
                </li>
                <li>
                   nrcp-board
                </li>
                
            </ul> -->
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <div id="rs-page-error" class="rs-page-error">
            <div class="error-text">
                <h1 class="error-code">Coming soon...</h1>
               
                <div class=" bg-button text-center">
                    <a class="readon2" href="{{ url('/home') }}">Back to Home Page <i class="fa fa-angle-right pl-2"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection