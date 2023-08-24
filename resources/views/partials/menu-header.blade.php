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
                  <li class="rs-mega-menu current-menu-item">
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{ route('about-us') }}">About</a>
                     <ul class="sub-menu">
                        <li><a href="{{ route('about-us') }}">About NRCP</a> </li>
                        <li class=""><a href="{{ route('activitie') }}">Activities</a> </li>
                        <li class="border-none"><a href="{{ route('who-who') }}">Who's Who</a> </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{url('/publications')}}"> Publications</a>
                     <ul class="sub-menu">
                        <li><a href="https://ncdc.gov.in/WriteReadData/linkimages/GuidelinesforRabiesProphylaxis.pdf"
                           target="_blank">Technical Document and Guidelines </a> </li>
                        <li class=""><a href="https://ncdc.mohfw.gov.in/showfile.php?lid=435"
                           target="_blank"> Case Definition for Rabies </a> </li>
                        <li class=""><a href="https://ncdc.mohfw.gov.in/showfile.php?lid=389"
                           target="_blank">Rabies Post Exposure Guidelines</a> </li>
                        <li class=""><a href="{{ asset('assets/Nrcp_img/NationalActiopPlan.pdf') }}"
                           target="_blank">NAPRE </a> </li>
                        <li class=""><a href="https://ncdc.mohfw.gov.in/showfile.php?lid=419"
                           target="_blank">Guideline note on shortage Type </a> </li>
                        <li class="border-none"><a
                           href="https://ncdc.mohfw.gov.in/showfile.php?lid=420"
                           target="_blank">Guidance Note for Addressing Anti Rabies
                           Vaccine and Anti Rabies Serum Shortage</a> 
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="{{url('/downloads')}}"> Downloads</a>
                     <ul class="sub-menu">
                        <li class="menu-item-has-children">
                           <a href="javascript:void();">Committees</a>
                           <ul class="sub-menu">
                              <li>
                                 <a href="javascript:void(0);" target="_blank"> Documents –
                                 SOPs</a>
                                 <ul class="sub-menu">
                                    <li><a href="{{ route('coming-soon') }}"
                                       target="_blank"> Wound washing</a> </li>
                                    <li class=""><a href="{{ route('coming-soon') }}"
                                       target="_blank"> Disease sampling </a> </li>
                                    <li class=""><a href="{{ route('coming-soon') }}"
                                       target="_blank"> Disease Reporting</a> </li>
                                    <li class=""><a href="{{ route('coming-soon') }}"
                                       target="_blank"> PEP </a> </li>
                                    <li class=""><a href="{{ route('coming-soon') }}"
                                       target="_blank"> MDV </a> </li>
                                    <li class=""><a href="{{ route('coming-soon') }}"
                                       target="_blank"> ABC</a> </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="javascript:void(0);" target="_blank"> Reporting Format</a>
                           <ul class="sub-menu">
                              <li><a href="{{ asset('assets/Nrcp_img/pform_blank.pdf') }}" target="_blank">
                                 P Form</a> 
                              </li>
                              <li class=""><a href="{{ asset('assets/Nrcp_img/lform_blank.pdf') }}"
                                 target="_blank"> L Form </a> </li>
                              <li class=""><a href="{{ asset('assets/Nrcp_img/sform_blank') }}"
                                 target="_blank"> S Form</a> </li>
                           </ul>
                        </li>
                        <li>
                           <a href="javascript:void(0);" target="_blank">List of
                           Laboratories</a>
                           <ul class="sub-menu">
                              <li><a href="{{ route('anumal-health') }}">Animal</a> </li>
                              <li class="border-none"><a href="{{ route('human-health') }}"> Human </a> </li>
                           </ul>
                        </li>
                        <li class=""><a href="{{ route('coming-soon') }}" target="_blank">
                           List of Anti Rabies Clinic</a>
                        <li class=""><a href="{{ route('coming-soon') }}" target="_blank">
                           Case definition for Rabies</a>
                        <li class="border-none">
                           <a href="javascript:void();" target="_blank">
                           Maps</a>
                           <ul class="sub-menu">
                              <li><a href="{{ asset('assets/maps/ARVMap.pdf') }}"
                                 target="_blank"> ARV Maps</a> </li>
                              <li class=""><a href="{{ asset('assets/maps/RIGMap.pdf') }}"
                                 target="_blank"> RIG Maps </a> </li>
                              <li><a href="{{ asset('assets/maps/Anti-Rabies-Clinic.pdf') }}"
                                 target="_blank"> Anti Rabies Clinic</a> </li>
                              <li><a href="{{ asset('assets/maps/Human-Animal-Rabies-Laboratory-of-India.pdf') }}"
                                 target="_blank"> Human Animal Rabies Laboratory of
                                 India</a> 
                              </li>
                              <li class=""><a
                                 href="{{ asset('assets/maps/Stray-Dog-population-with-AWO.pdf') }}"
                                 target="_blank"> Stray Dog Population with AWO </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="javascript:void();"> IEC</a>
                     <ul class="sub-menu">
                        <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/RabiesBillboard.pdf"
                           target="_blank">Bill board </a> </li>
                        <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/RabiesBook.pdf"
                           target="_blank"> Book </a> </li>
                        <li class="">
                           <a
                              href="javascript:void();"
                              target="_blank">Video Jingles on Rabies
                           </a>
                           <ul class="sub-menu">
                              <li>
                                 <a href="{{ asset('assets/maps/ARVMap.pdf') }}"
                                    target="_blank">General information </a>
                                 <ul class="sub-menu">
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Hindi.m4v"
                                       target="_blank">Hindi </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_English.m4v"
                                       target="_blank">English </a> </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Assamese.m4v"
                                       target="_blank">Assamese </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Bengali.m4v"
                                       target="_blank"> Bengali </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Gujrati.m4v"
                                       target="_blank"> Gujrati</a> </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Punjabi.m4v"
                                       target="_blank"> Punjabi </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Kannada.m4v"
                                       target="_blank"> Kannad </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Kashmiri.m4v"
                                       target="_blank"> Kashmiri </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Malyalam.m4v"
                                       target="_blank"> Malyalam </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Marathi.m4v"
                                       target="_blank"> Marathi </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Orriya.m4v"
                                       target="_blank"> Oriya </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Tamil.m4v"
                                       target="_blank"> Tamil </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/General_Telgu.m4v"
                                       target="_blank"> Telgu </a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="">
                                 <a href="{{ asset('assets/maps/RIGMap.pdf') }}"
                                    target="_blank">Do's & Dont's </a>
                                 <ul class="sub-menu">
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Hindi.m4v"
                                       target="_blank">Hindi </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_English.m4v"
                                       target="_blank">English </a> </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Assamese.m4v"
                                       target="_blank">Assamese </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Bengali.m4v"
                                       target="_blank"> Bengali </a> </li>
                                    <li><a href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Gujrati.m4v"
                                       target="_blank"> Gujrati</a> </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Punjabi.m4v"
                                       target="_blank"> Punjabi </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Kannada.m4v"
                                       target="_blank"> Kannad </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Kashmiri.m4v"
                                       target="_blank"> Kashmiri </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Malyalam.m4v"
                                       target="_blank"> Malyalam </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Marathi.m4v"
                                       target="_blank"> Marathi </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Orriya.m4v"
                                       target="_blank"> Oriya </a>
                                    </li>
                                    <li class=""><a
                                       href="https://ncdc.mohfw.gov.in/WriteReadData/linkimages/Rabies/DonDont_Tamil.m4v"
                                       target="_blank"> Tamil </a>
                                    </li>
                                 </ul>
                              </li>
                              </li>
                           </ul>
                        </li>
                        </li>
                     </ul>
                  </li>
                  <li class=""><a href="{{ route('media-alerts') }}">Media Alerts</a></li>
                  <li class=""><a href="{{ route('event') }}">Events</a></li>
                  <li class=""><a href="{{ route('contact-us') }}">Contact Us</a></li>
                  <li class=""><a href="https://dev.nrcpdashboard.staggings.in/public/"
                     target="_blank">Login</a></li>
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