@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('content')


<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/banner.png" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Site Map</h1>
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
                                <li>Site Map</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="publication-sociol-icon">
                        <ul class="d-flex justify-content-end">
                            <li><a href="javascript:void();" id="" download> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/printer.png"
                                        alt="printer Image" aria-label="printer" class="slash">/</a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/share.png"
                                        alt="share Image" aria-label="share"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/facebook.png"
                                        alt="facebook Image" aria-label="facebook"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/twitter.png"
                                        alt="twitter Image" aria-label="twitter"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/linkedin.png"
                                        alt="linkedin Image" aria-label="linkedin"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="rs-about" class="rs-about style1 pt-40 pb-40">
            <div class="container">

                <div class="row">
                   <div class="col-md-12"> 
                    <div class="heading-title">
                        <h2 class="title">Website Link</h2>
                    </div>                        

                        <div class="desc rs-inner-blog">
                            <div class="blog-deatails">
                                <div class="blog-full p-0">
                                    <ul class="unorder-list">
                                        @foreach ($headerMenu as $menuName)
                                            @if (@isset($menuName->children))
                                                <li class="menu-item-has-children pb-0">
                                                    <a href="{{ url('nrcp/' . $menuName->url) }}"
                                                        class="main-anchor">{{ $menuName->name_en }}</a>
    
                                                    <ul class="unorder-list pt-10">
                                                        @foreach ($menuName->children as $suMenu)
                                                            @if (@isset($suMenu->children))
                                                                <li class="menu-item-has-children pb-0">
                                                                    <a @if ($suMenu->tab_type == 1) target="_blank"  href="{{ url($suMenu->url ??'') }}"    @else  href="{{ url($suMenu->url ??'') }}" @endif
                                                                        class="main-anchor">{{ $suMenu->name_en }}</a>
                                                                    <ul class="unorder-list pt-0">
    
                                                                        @foreach ($suMenu->children as $childMenu)
                                                                            @if (@isset($childMenu->children))
                                                                                <li class="menu-item-has-children">
                                                                                    <a @if ($childMenu->tab_type == 1) target="_blank"  href="{{ url($childMenu->url ??'') }}"    @else  href="{{ url($childMenu->url ??'') }}" @endif
                                                                                     
                                                                                        class="main-anchor">{{ $childMenu->name_en }}</a>
    
                                                                                    <ul class="unorder-list pt-0">
    
                                                                                        @foreach ($childMenu->children as $subchildMenu)
                                                                                            <li>
                                                                                                <a
                                                                                                    @if ($subchildMenu->tab_type == 1) target="_blank"  href="{{ url($subchildMenu->url ??'') }}"    @else  href="{{ url($subchildMenu->url  ??'') }}" @endif>{{ $subchildMenu->name_en }}</a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            @else
                                                                                <li>
                                                                                    <a
                                                                                        @if ($childMenu->tab_type == 1) target="_blank"  href="{{ url($childMenu->url ??'') }}"    @else  href="{{ url($childMenu->url ??'') }}" @endif>{{ $childMenu->name_en }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <a
                                                                        @if ($suMenu->tab_type == 1) target="_blank"  href="{{ url($suMenu->url ??'') }}"    @else  href="{{ url($suMenu->url ??'') }}" @endif>{{ $suMenu->name_en }}</a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="">
                                                    <a
                                                        @if ($menuName->tab_type == 1) target="_blank"  href="{{ url($menuName->url ??'') }}"    @else  href="{{ url($menuName->url ??'') }}" @endif>{{ $menuName->name_en }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                        {{-- current-menu-item --}}
                                    </ul>
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