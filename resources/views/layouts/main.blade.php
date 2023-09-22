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
                  <div class="menu-area menu-sticky">
                     <div class="container">
                           @include('partials.menu-header')
                     </div>
                  </div>
         </header>
      </div>
      <div class="main-content">
         <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
               <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/banner.png" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
               <h1 class="page-title">@section('breadcrumbs')
                              {{ config('app.name') }}
                              @show  </h1>
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
                                 <a class="active" href="{{ url('/') }}">@section('pageTitle')
                                             {{ config('app.name') }}
                                             @show  </a>
                              </li>
                              <li>@section('breadcrumbs')
                              {{ config('app.name') }}
                              @show  </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="publication-sociol-icon">
                        <ul class="d-flex justify-content-end">
                           <!-- <li><a href="javascript:void();" id="" onclick="printDiv()" download> <img src="{{ asset('assets/Nrcp_img/sociol-icon/printer.png') }}"
                              alt="printer Image" aria-label="printer" class="slash"></a></li> -->
                           <li><a href="#" target="_blank"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/share.png') }}"
                              alt="share Image" aria-label="share"></a></li>
                              @if($social_media->facebook  != '')
                           <li><a href="{{$social_media->facebook}}" target="_blank"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/facebook.png') }}"
                              alt="facebook Image" aria-label="facebook"></a></li>
                              @endif
                              @if($social_media->twitter  != '')
                           <li><a href="{{$social_media->twitter}}" target="_blank"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/twitter.png') }}"
                              alt="twitter Image" aria-label="twitter"></a></li>
                              @endif
                           <!-- <li><a href="javascript:void();" target="_blank"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/linkedin.png') }}"
                              alt="linkedin Image" aria-label="linkedin"></a></li> -->
                        </ul>
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