<div class="row y-middle">
   <div class="col-lg-4">
      <div class="logo-cat-wrap">
         <div class="logo-part">
            <a href="{{ url('/') }}" rel="noopener noreferrer">
               <img src="{{ asset(config('constants.brand.default_logo')) }}" alt="" rel="noopener noreferrer" class="logo logo1">
               <div class="pl-2">
                  <h2 class="title black-color logo-text">National Rabies Control Program</h2>
                  <h5 class="sub-text-l">National Center for Disease control</h5>
                  <h6 class="sub-text-b-l">Directorate General of Health Services,<br>
                     Ministry of Health & Family Welfare, <br>
                     Government of India
                  </h6>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="col-lg-8 text-lg-left pl-0 pr-0">
      <div class="rs-menu-area">
         <div class="main-menu">
            <div class="mobile-menu">
               <a class="rs-menu-toggle">
               <i class="fa fa-bars"></i>
               </a>
            </div>
            <div class="top-menu-box">
               <ul>
               <li tabindex="1">
                    <div class="mobile-number-box pulse">
                    
                    <a href="tel:01206025400" class="phone-number blink"> Rabies Help line No : 01206025400</a>
                    </div>
                  </li>
                  <li tabindex="1">
                     <div class="top-header-logo">
                        <a href="https://swachhbharat.mygov.in/" target="_blank" rel="noopener noreferrer" class="top-logo">
                        <img src="{{ asset('assets/Nrcp_img/Swach_Bharat.svg') }}" rel="noopener noreferrer">
                        </a>
                        <a href="https://www.g20.org/en/" target="_blank" rel="noopener noreferrer" class="top-logo">
                        <img src="{{ asset('assets/Nrcp_img/g20.png') }}" rel="noopener noreferrer">
                        </a>
                     </div>
                     <a href="javascript:void();" rel="noopener noreferrer" class="text-vaccination pulse" data-toggle="modal"
                        data-target="#vaccination" style="border: solid 4px; display: block !important">
                     <span> Have you Bitten by an Animal? </span> <br>
                     Know your Rabies Vaccination Schedule
                     </a>
                  </li>
                  <li tabindex="1">
                     <div class="logo-cat-wrap right-h">
                        <div class="logo-part mobile-logo-s">
                           <a href="{{ url('/') }}" rel="noopener noreferrer">
                           <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt=""
                              class="logo logo2" rel="noopener noreferrer">
                           <img src="{{ asset('assets/Nrcp_img/rog_kendra.png') }}" alt=""
                              class="logo logo1 d-none" rel="noopener noreferrer">
                           <img src="{{ asset('assets/Nrcp_img/Swach_Bharat.svg') }}"
                              class="logo logo1 extra-logo d-none d-xs-block" rel="noopener noreferrer">
                           <img src="{{ asset('assets/Nrcp_img/g20.png') }}"
                              class="logo logo1 extra-logo d-none d-xs-block" rel="noopener noreferrer">
                           </a>
                        </div>
                     </div>
                  </li>
                  {{-- 
                  <li class="d-xs-none">
                     <a href="javascript:void();" class="top-logo">
                     <img src="{{asset('assets/Nrcp_img/Swach_Bharat.svg') }}">
                     </a>
                     <a href="javascript:void();" class="top-logo">
                     <img src="{{asset('assets/Nrcp_img/g20.png') }}">
                     </a>
                  </li>
                  --}}
               </ul>
            </div>
         </div>
         <!-- //.main-menu -->
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
                        @if (@isset($menuName->children))
                        <li class="menu-item-has-children ">
                           <?php //dd($menuName->route_type); ?>
                           <a href="{{ url($menuName->url ??'') }}"
                              class="main-anchor" rel="noopener noreferrer">
                           @if (Session::get('Lang') == 'hi')
                           {{ $menuName->name_hi ??''}}
                           @else
                           {{ $menuName->name_en ??''}}
                           @endif
                           </a>
                           <ul class="sub-menu">
                              @foreach ($menuName->children as $suMenu)
                              @if (@isset($suMenu->children))
                              <li class="menu-item-has-children">
                                 <a @if ($suMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif target="_blank"  href="{{$menuName->route_type}}{{ ($suMenu->url ?? '/') }}"    @else  href="{{$menuName->route_type}}{{ ($suMenu->url ?? '/') }}" @endif
                                 class="main-anchor" rel="noopener noreferrer">
                                 @if (Session::get('Lang') == 'hi')
                                 {{ $suMenu->name_hi ??''}}
                                 @else
                                 {{ $suMenu->name_en ??''}}
                                 @endif
                                 </a>
                                 <ul class="sub-menu">
                                    @foreach ($suMenu->children as $childMenu)
                                    @if (@isset($childMenu->children))
                                    <li class="menu-item-has-children">
                                       <a @if ($childMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif target="_blank"  href="{{ url($childMenu->url ?? '') }}"    @else  href="{{ url($childMenu->url ?? '') }}" @endif
                                       class="main-anchor" rel="noopener noreferrer">
                                       @if (Session::get('Lang') == 'hi')
                                       {{ $childMenu->name_hi ??''}}
                                       @else
                                       {{ $childMenu->name_en  ??''}}
                                       @endif
                                       </a>
                                       <ul class="sub-menu">
                                          @foreach ($childMenu->children as $subchildMenu)
                                          <li>
                                             <a
                                             @if ($subchildMenu->tab_type == 1)  @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif  target="_blank"  href="{{ url($subchildMenu->url ??'') }}"    @else  href="{{ url($subchildMenu->url ??'') }}" @endif rel="noopener noreferrer">
                                             @if (Session::get('Lang') == 'hi')
                                             {{ $subchildMenu->name_hi ??''}}
                                             @else
                                             {{ $subchildMenu->name_en ??'' }}
                                             @endif
                                             </a>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </li>
                                    @else
                                    <li>
                                       <a
                                       @if ($childMenu->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif target="_blank"  href="{{ url($childMenu->url ?? '') }}"    @else  href="{{ url($childMenu->url ?? '') }}" @endif rel="noopener noreferrer">
                                       @if (Session::get('Lang') == 'hi')
                                       {{ $childMenu->name_hi ??''}}
                                       @else
                                       {{ $childMenu->name_en  ??''}}
                                       @endif
                                       </a>
                                    </li>
                                    @endif
                                    @endforeach
                                 </ul>
                              </li>
                              @else
                              <li>
                                 <a
                                 @if ($suMenu->tab_type == 1) target="_blank" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif href="{{ url($suMenu->url ?? '') }}"    @else  href="{{ url($suMenu->url ?? '') }}" @endif rel="noopener noreferrer">
                                 @if (Session::get('Lang') == 'hi')
                                 {{ $suMenu->name_hi ??''}}
                                 @else
                                 {{ $suMenu->name_en ??'' }}
                                 @endif
                                 </a>
                              </li>
                              @endif
                              @endforeach
                           </ul>
                        </li>
                        @else
                        <li class="">
                           <a
                           @if ($menuName->tab_type == 1)    @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif   target="_blank"  href="{{ url($menuName->url ?? '') }}"    @else  href="{{ url($menuName->url ?? '') }}" @endif rel="noopener noreferrer">
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

                        <li class="menu-bar-side">                                       
                           <a id="nav-expander" class="nav-expander style6">
                           <span class="dot1"></span>
                           <span class="dot2"></span>
                           <span class="dot3"></span>
                           </a>
                        </li>

                        <li class="menu-item-has-children mobile-menu-visible d-none">
                           <a href="javascript:void();" rel="noopener noreferrer">
                             More
                           </a>
                           <ul class="sub-menu">
                           @foreach($toogleMenu as $toogleMenus)
                           <li><a href="{{ url($toogleMenus->url ?? '') }}" rel="noopener noreferrer">{{ $toogleMenus->name_en }}</a></li>
                           @endforeach    
                        </ul>
                     <!-- //.nav-menu -->
                  </nav>
                  <!-- //.nav-menu -->
               </nav>
            </div>
            <!-- //.main-menu -->
         </div>
      </div>
   </div>
</div>
<div class="overlay"></div>
<!-- Canvas Menu start -->
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
            <ul>
               @foreach($toogleMenu as $toogleMenus)
               <li><a href="{{ url($toogleMenus->url ?? '') }}" rel="noopener noreferrer">{{ $toogleMenus->name_en }}</a></li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
   <a class="tab-close">&nbsp;</a> 
   {{-- 
   <div class="canvas-contact">
      <ul class="social">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
   </div>
   --}}
</nav>
<!-- Canvas Menu end -->