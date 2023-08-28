@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('content')

<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Videos</h1>           
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
                                <li>Videos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    @include('share_link')
                </div>
            </div>
        </div>

        <div id="rs-about" class="rs-about style1 pt-70 pb-40 md-pt-70 md-pb-70">
            <div class="container">

                <div class="row">
                  <div class="col-md-4 mb-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/D0UnqGm_miA?si=bkmsDgo_suODr44T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>

                 <div class="col-md-4 mb-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/D0UnqGm_miA?si=bkmsDgo_suODr44T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>

                 <div class="col-md-4 mb-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/D0UnqGm_miA?si=bkmsDgo_suODr44T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>

                 <div class="col-md-4 mb-4">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/D0UnqGm_miA?si=bkmsDgo_suODr44T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                 </div>
              
                </div>
            </div>
        </div>
    </div>

</div>

@endsection