<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head-css-scripts')
</head>

<body class="defult-home" id="wholePagePrint">

    <div class="full-width-header header-style1 home1-modifiy home12-modifiy">
        <header id="rs-header" class="rs-header">
            <div class="topbar-area home11-topbar">
                <div class="container">
                    @include('partials.top-header')
                </div>
            </div>
            <div class="menu-area ">
                <div class="container">
                    @include('partials.menu-header')
                </div>
            </div>
        </header>
    </div>
    <div class="main-content">
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="https://rabiesfreeindia.mohfw.gov.in/assets/Nrcp_img/banner.png" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">



                    @if (trim($__env->yieldContent('breadcrumbs')) == 'IEC')
                        Information Education and Communication
                    @else
                        @section('breadcrumbs')
                            {{ config('app.name') }}
                        @endif


                    @show
                </h1>
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
                                        <a class="active" href="{{ url('/') }}">
                                            @section('pageTitle')
                                                {{ config('app.name') }}
                                            @show
                                        </a>
                                    </li>
                                    <li>
                                        @section('breadcrumbs')
                                            {{ config('app.name') }}
                                        @show
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            @yield('content')
        </div>
    </div>
    @include('partials.footer')
    @include('partials.footer-scripts')
</body>

</html>
