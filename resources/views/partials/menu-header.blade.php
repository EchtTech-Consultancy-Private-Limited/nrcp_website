<div class="row y-middle">
   <div class="col-lg-4">
      <div class="logo-cat-wrap">
         <div class="logo-part">
            <a href="{{ url('/') }}">
               <img src="{{ asset(config('constants.brand.default_logo')) }}" alt="" class="logo logo1">
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

                            <div class="top-header-logo">
                                <a href="https://swachhbharat.mygov.in/" target="_blank" class="top-logo">
                                    <img src="{{ asset('assets/Nrcp_img/Swach_Bharat.svg') }}">
                                </a>

                                <a href="https://www.g20.org/en/" target="_blank" class="top-logo">
                                    <img src="{{ asset('assets/Nrcp_img/g20.png') }}">
                                </a>
                            </div>

                            <a href="javascript:void();" class="text-vaccination pulse" data-toggle="modal"
                                data-target="#vaccination" style="border: solid 4px; display: block !important">
                                <span> Have you Bitten by an Animal? </span> <br>
                                Know your Rabies Vaccination Schedule
                            </a>
                        </li>

                        <li tabindex="1">
                            <div class="logo-cat-wrap right-h">
                                <div class="logo-part mobile-logo-s">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt=""
                                            class="logo logo2">
                                        <img src="{{ asset('assets/Nrcp_img/rog_kendra.png') }}" alt=""
                                            class="logo logo1 d-none">
                                        <img src="{{ asset('assets/Nrcp_img/Swach_Bharat.svg') }}"
                                            class="logo logo1 extra-logo d-none d-xs-block">
                                        <img src="{{ asset('assets/Nrcp_img/g20.png') }}"
                                            class="logo logo1 extra-logo d-none d-xs-block">

                                    </a>
                                </div>
                            </div>
                        </li>

                         <!-- <li class="d-xs-none">
                     <a href="javascript:void();" class="top-logo">
                     <img src="{{asset('assets/Nrcp_img/Swach_Bharat.svg') }}">
                     </a>
                     <a href="javascript:void();" class="top-logo">
                        <img src="{{asset('assets/Nrcp_img/g20.png') }}">
                        </a>
                  </li>  -->
                    </ul>
                </div>

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
               <li><a href="{{ url($toogleMenus->url ?? '') }}">{{ $toogleMenus->name_en }}</a></li>
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