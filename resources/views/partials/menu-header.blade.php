<div class="row y-middle">
   <div class="col-lg-4">
      <div class="logo-cat-wrap">
         <div class="logo-part">
            <a href="{{ url('/') }}">
               <img src="{{ asset('assets/Nrcp_img/logo-gov.png') }}" alt="" class="logo logo1">
               <div class="pl-2">
                  <h2 class="title black-color logo-text">National Rabies Control Program</h2>
                  <h5 class="sub-text-l">National Center for Disease control</h5>
                  <h6 class="sub-text-b-l">Directorate General of Health Services, Ministry of
                     Health & Family Welfare, Government of India
                  </h6>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="col-lg-6 text-lg-left pl-0 pr-0">
      <div class="rs-menu-area">
         <div class="main-menu">
            <div class="mobile-menu">
               <a class="rs-menu-toggle">
               <i class="fa fa-bars"></i>
               </a>
            </div>
            <div class="top-menu-box">
               <ul>
                  <li>
                     <a href="javascript:void();" class="text-vaccination pulse"
                        data-toggle="modal" data-target="#vaccination"
                        style="border: solid 4px; display: block !important">
                     Know Your Vaccination Schedule
                     </a>
                  </li>
                  <li class="d-xs-none">
                     <a href="javascript:void();" class="top-logo">
                     <img src="{{asset('assets/Nrcp_img/Swach_Bharat.svg') }}">
                     </a>
                  </li>
               </ul>
            </div>
            <nav class="rs-menu">
               <ul class="nav-menu">
                  @foreach($headerMenu as $menuName)

                     @if(@isset($menuName->children))
                     <li class="menu-item-has-children <?php  ?>">
                        <a href="{{ url('nrcp/'.$menuName->url) }}">{{ $menuName->name }}</a>

                           <ul class="sub-menu"> 
                              @foreach($menuName->children as $suMenu)

                                 @if(@isset($suMenu->children))
                                    <li class="menu-item-has-children">
                                       <a href="{{ url('nrcp/'.$suMenu->url) }}">{{ $suMenu->name}}</a> 
                                       <ul class="sub-menu">

                                          @foreach ($suMenu->children as $childMenu)
                                             <li>
                                                <a href="{{url('nrcp/'.$childMenu->url )}}" >{{ $childMenu->name  }}</a>
                                                
                                             </li>
                                          @endforeach
                                       </ul>
                                    </li>

                                 @else

                                    <li>
                                       <a href="{{ url('nrcp/'.$suMenu->url) }}">{{ $suMenu->name}}</a> 
                                    </li>
                                 @endif

                              @endforeach
                           </ul>
                      </li> 
                     @else
                    
                        <li class="rs-mega-menu ">
                           <a href="{{ url($menuName->name) }}">{{ $menuName->name }}</a>
                        </li>

                     @endif

                  @endforeach
                  <li class="">
                     <a href="https://dev.nrcpdashboard.staggings.in/public/" target="_blank">Login</a>
                  </li>
               </ul>
               <!-- //.nav-menu -->
            </nav>
         </div>
         <!-- //.main-menu -->
      </div>
   </div>
   <div class="col-lg-2 text-lg-right pr-0">
      <div class="logo-cat-wrap right-h">
         <div class="logo-part mobile-logo-s">
            <a href="{{ url('/') }}">
            <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt="" class="logo logo2">
            <img src="{{ asset('assets/Nrcp_img/rog_kendra.png') }}" alt="" class="logo logo1">
            <img src="{{ asset('assets/Nrcp_img/Swach_Bharat.svg') }}"
               class="logo logo1 extra-logo d-none d-xs-block">
            </h2>
            </a>
         </div>
      </div>
   </div>
</div>