<div class="row y-middle py-2">
    <div class="col-lg-1 pr-0">
        <div class="logo-cat-wrap">
            <div class="logo-part emblem">
                <a href="{{ url('/') }}" rel="noopener noreferrer">
                    @if (isset($logo) && $logo != '')
                        <img src="{{ asset('resources/uploads/WebsiteCoreSettings/' . $logo->header_logo) }}"
                            title="{{ $logo->logo_title }}" alt="{{ $logo->logo_title }}" rel="noopener noreferrer"
                            class="logo logo1">
                         
                    @else
                        <img src="{{ asset(config('constants.brand.default_logo')) }}" alt=""
                            rel="noopener noreferrer" class="logo logo1">
                            <p>Ministry of Health</p>
                    @endif
                    <div class="pl-2 text-center d-none d-xs-block">
                        <h2 class="title black-color text-center logo-text">National Rabies Control Program</h2>
                        <h5 class="sub-text-l text-center">National Center for Disease control</h5>
                        <h6 class="sub-text-b-l">Directorate General of Health Services,<br>
                            Ministry of Health & Family Welfare, <br>
                            Government of India
                        </h6>
                    </div>
                </a>
                <p>Ministry of Health</p>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xl-9 text-lg-left pr-0">
        <div class="rs-menu-area">
            <div class="main-menu">
                <div class="mobile-menu">
                    <a class="rs-menu-toggle">
                        <i class="fa fa-bars mr-2"></i>
                    </a>
                </div>
                <div class="top-menu-box">
                    <div class="main-text-logo">
                        <div class="pl-2 text-center d-xs-none">
                            <h2 class="title black-color logo-text">National Rabies Control Program</h2>
                            <h5 class="sub-text-l text-center">National Center for Disease Control</h5>
                            <h6 class="sub-text-b-l text-center">Directorate General of Health Services,
                            Ministry of Health & Family Welfare, <br>
                            Government of India
                        </h6>
                        </div>
                    </div>
                    <ul>
                        <li tabindex="1">
                            <div class="mobile-number-box pulse">
                                <a href="tel:01206025400" class="phone-number blink"> Rabies Help line No :
                                    <i class="fa fa-phone"></i> 01206025400</a>
                            </div>
                        </li>
                        <li tabindex="1">
                            <a href="javascript:void();" rel="noopener noreferrer" class="text-vaccination pulse"
                                data-toggle="modal" data-target="#vaccination"
                                style="border: solid 4px; display: block !important">
                                <span class="blink"> Have you Bitten by an Animal? </span> <br>
                                Know your Rabies Vaccination Schedule
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //.main-menu -->
        </div>
    </div>
    <div class="col-md-3 col-xl-2  text-lg-left pl-0 pr-0">
        <div class="logo-cat-wrap right-h justify-content-end">
            <div class="logo-part mobile-logo-s">
                <a href="{{ url('/') }}" rel="noopener noreferrer">
                    <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt="" class="logo logo2"
                        rel="noopener noreferrer">
                </a>
                <a href="{{ url('/') }}" rel="noopener noreferrer" class="logo_kendriya">
                    <img src="{{ asset('assets/Nrcp_img/rog_kendra.png') }}" alt="" class="logo logo2"
                        rel="noopener noreferrer">
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="rs-cta style7">
    <div class="partition-bg-wrap">
        <div class="container">
            <div class="row pt-10 md-pt-70 pb-10 md-pb-70">
                <div class="col-lg-1"></div>
                <div class="col-lg-4 pl-62 md-pl-15 col-md-12 md-pb-70">
                    <div class="mobile-number-box pulse">
                        <a href="tel:01206025400" class="phone-number blink" tabindex="0"> Rabies Help line No :
                            <i class="fa fa-phone"></i> 01206025400</a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 pl-62 md-pl-15 col-md-12 md-pt-70">
                    <div class="top-menu-box">
                        <a href="javascript:void();" rel="noopener noreferrer" class="text-vaccination pulse"
                            data-toggle="modal" data-target="#vaccination" style="display: block !important"
                            tabindex="0">
                            <span class="blink"> Have you Bitten by an Animal? </span> <br>
                            Know your Rabies Vaccination Schedule
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-lg-left pl-0 pr-0">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <nav class="rs-menu">
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                   
                        
                                    @foreach ($headerMenu as $menuName)                               
                                    @php
                                            $url = $headerMenu->url ?? '';
                                        @endphp

                                        @if (@isset($menuName->children))
                                        
                                        {{-- @dd($menuName->children) --}}
                                            <li class="menu-item-has-children ">
                                                <a href="{{ url($menuName->url ?? '') }}" class="main-anchor"
                                                    rel="noopener noreferrer">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $menuName->name_hi ?? '' }}
                                                    @else
                                                        {{ $menuName->name_en ?? '' }}
                                                    @endif
                                                </a>
                                                <ul class="sub-menu">
                                                    @foreach ($menuName->children as $suMenu)
                                                    {{-- @dd($url); --}}
                                                        @if (@isset($suMenu->children))
                                                            <li class="menu-item-has-children">
                                                                <a @if ($suMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                                    target="_blank"
                                                                    href="{{ $menuName->route_type }}{{ $suMenu->url ?? '/' }}"
                                                                @else
                                                                    href="{{ $menuName->route_type }}{{ $suMenu->url ?? '/' }}"
                                                                    @endif
                                                                    class="main-anchor" rel="noopener noreferrer">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $suMenu->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $suMenu->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                                <ul class="sub-menu">
                                                                    @foreach ($suMenu->children as $childMenu)
                                                                        @if (@isset($childMenu->children))
                                                                            <li class="menu-item-has-children">
                                                                                <a @if ($childMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                                                    target="_blank"
                                                                                    href="{{ url($childMenu->url ?? '') }}"
                                                                                @else
                                                                                    href="{{ url($childMenu->url ?? '') }}"
                                                                                    @endif
                                                                                    class="main-anchor"
                                                                                    rel="noopener noreferrer">
                                                                                    @if (Session::get('Lang') == 'hi')
                                                                                        {{ $childMenu->name_hi ?? '' }}
                                                                                    @else
                                                                                        {{ $childMenu->name_en ?? '' }}
                                                                                    @endif
                                                                                </a>
                                                                                <ul class="sub-menu">
                                                                                    @foreach ($childMenu->children as $subchildMenu)
                                                                                        <li>
                                                                                            <a @if ($subchildMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                                                                target="_blank"
                                                                                                href="{{ url($subchildMenu->url ?? '') }}"
                                                                                            @else
                                                                                                href="{{ url($subchildMenu->url ?? '') }}"
                                                                                                @endif
                                                                                                rel="noopener noreferrer">
                                                                                                @if (Session::get('Lang') == 'hi')
                                                                                                    {{ $subchildMenu->name_hi ?? '' }}
                                                                                                @else
                                                                                                    {{ $subchildMenu->name_en ?? '' }}
                                                                                                @endif
                                                                                            </a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </li>
                                                                        @else
                                                                            <li>
                                                                                <a @if ($childMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                                                    target="_blank"
                                                                                    href="{{ url($childMenu->url ?? '') }}"
                                                                                @else
                                                                                    href="{{ url($childMenu->url ?? '') }}"
                                                                                    @endif
                                                                                    rel="noopener noreferrer">
                                                                                    @if (Session::get('Lang') == 'hi')
                                                                                        {{ $childMenu->name_hi ?? '' }}
                                                                                    @else
                                                                                        {{ $childMenu->name_en ?? '' }}
                                                                                    @endif
                                                                                </a>
                                                                            </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a @if ($suMenu->tab_type == 1) target="_blank" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                                href="{{ url($url .'/'. $suMenu->url ?? '') }}" @else
                                                                    href="{{ url($url .'/'. $suMenu->url ?? '') }}" @endif rel="noopener noreferrer">
                                                                    @if (Session::get('Lang') == 'hi')
                                                                        {{ $suMenu->name_hi ?? '' }}
                                                                    @else
                                                                        {{ $suMenu->name_en ?? '' }}
                                                                    @endif
                                                                </a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="">
                                                <a @if ($menuName->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                target="_blank" href="{{ url($menuName->url ?? '') }}" @else
                                                    href="{{ url($menuName->url ?? '') }}" @endif
                                                    rel="noopener noreferrer">
                                                    @if (Session::get('Lang') == 'hi')
                                                        {{ $menuName->name_hi ?? '' }}
                                                    @else
                                                        {{ $menuName->name_en ?? '' }}
                                                    @endif
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                    {{-- current-menu-item --}}
                                    @if (isset($toogleMenu) && count($toogleMenu) > 0)
                                        <li class="menu-bar-side">
                                            <a id="nav-expander" class="nav-expander style6">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                            </a>
                                        </li>
                                    @endif
                                    @if (isset($toogleMenu) && count($toogleMenu) > 0)
                                        <li class="menu-item-has-children mobile-menu-visible d-none">
                                            <a href="javascript:void();" rel="noopener noreferrer">
                                                More
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach ($toogleMenu as $toogleMenus)
                                                    <li><a href="{{ url($toogleMenus->url ?? '') }}"
                                                            rel="noopener noreferrer">{{ $toogleMenus->name_en }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                            </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
            <div id="nav-close">
                <div class="line">
                    <span class="line1"></span><span class="line2"></span>
                </div>
            </div>
        </div>
        <div class="rs-inner-blog">
            <div class="widget-area">
                <div class="recent-posts mb-50">
                    @if (isset($toogleMenu) && count($toogleMenu) > 0)
                        <ul>
                            @foreach ($toogleMenu as $toogleMenus)
                                <li><a href="{{ url($toogleMenus->url ?? '') }}"
                                        rel="noopener noreferrer">{{ $toogleMenus->name_en }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <a class="tab-close">&nbsp;</a>
    </nav>
