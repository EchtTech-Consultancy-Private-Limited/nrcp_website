<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @include('partials.head-css-scripts')
   </head>
   <body class="defult-home">
      <div id="loader" class="loader green-color">
         <div class="loader-container">
            <div class='loader-icon'>
               <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt="">
            </div>
         </div>
      </div>
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
        <!-- Slider Section Start -->
        <div class="rs-slider style1">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="20" data-autoplay="true"
               data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
               data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
               data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false"
               data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
               data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false"
               id="banner1">
               <div class="slider-content">
                  <div class="container-fluid px-0">
                     <div class="row banner-mobile">
                        <div class="col-lg-12 order-last p-0">
                           <div class="img-part banner-image">
                              <img class="" src="{{ asset('assets/Nrcp_img/banner/banner-m.jpg') }}"
                                 alt="">
                           </div>
                        </div>
                        {{-- <div class="col-lg-6 pr-0 banner-mobile">
                           <div class="banner-content alignment-center">
                              <div>
                                 <h1 class="sl-title wow fadeInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="3000ms">
                                    National Rabies Control Program
                                 </h1>
                                 <div class="sl-sub-title wow bounceInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="2000ms">is a public health initiative in India that aims to
                                    prevent and control the spread of rabies,
                                    a deadly viral disease that is transmitted to humans through the bite of an
                                    infected animal.
                                 </div>
                                 <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms"
                                    data-wow-duration="2000ms">
                                    <a class="readon green-banner" href="{{ route('about-us') }}">Read More <i
                                       class="fa fa-angle-right pl-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
               <div class="slider-content">
                  <div class="container-fluid px-0">
                     <div class="row banner-mobile">
                        <div class="col-lg-12 order-last p-0">
                           <div class="img-part banner-image">
                              <img class="" src="{{ asset('assets/Nrcp_img/banner/banner.jpg') }}"
                                 alt="">
                           </div>
                        </div>
                        {{-- <div class="col-lg-6 pr-0">
                           <div class="banner-content alignment-center">
                              <div class="">
                                 <h1 class="sl-title wow fadeInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="3000ms">
                                    Publications
                                 </h1>
                                 
                                 <div class="sl-sub-title wow bounceInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="2000ms">is a public health initiative in India that aims to
                                    prevent and control the spread of rabies,
                                    a deadly viral disease that is transmitted to humans through the bite of an
                                    infected animal.
                                 </div>
                              
                                 <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms"
                                    data-wow-duration="2000ms">
                                    <a class="readon green-banner"
                                       href="https://ncdc.gov.in/WriteReadData/linkimages/GuidelinesforRabiesProphylaxis.pdf"
                                       target="_blank">Read More <i class="fa fa-angle-right pl-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
               <div class="slider-content">
                  <div class="container-fluid px-0">
                     <div class="row banner-mobile">
                        <div class="col-lg-12 order-last p-0">
                           <div class="img-part banner-image">
                              <img class="" src="{{ asset('assets/Nrcp_img/event/event4.jpg') }}"
                                 alt="">
                           </div>
                        </div>
                        {{-- <div class="col-lg-6 pr-0">
                           <div class="banner-content alignment-center">
                              <div class="">
                                 <h1 class="sl-title wow fadeInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="3000ms">
                                    Events
                                 </h1>
                              
                                 <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms"
                                    data-wow-duration="2000ms">
                                    <a class="readon green-banner">Read More <i
                                       class="fa fa-angle-right pl-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
               <div class="slider-content">
                  <div class="container-fluid px-0">
                     <div class="row banner-mobile">
                        <div class="col-lg-12 order-last p-0">
                           <div class="img-part banner-image">
                              <img class="" src="{{ asset('assets/Nrcp_img/event/event5.jpg') }}"
                                 alt="">
                           </div>
                        </div>
                        {{-- <div class="col-lg-6 pr-0">
                           <div class="banner-content alignment-center">
                              <div class="">
                                 <h1 class="sl-title wow fadeInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="3000ms">
                                    Upcoming Activities
                                 </h1>
                                 
                                 <div class="sl-sub-title wow bounceInLeft text-white" data-wow-delay="300ms"
                                    data-wow-duration="2000ms">is a public health initiative in India that aims to
                                    prevent and control the spread of rabies,
                                    a deadly viral disease that is transmitted to humans through the bite of an
                                    infected animal.
                                 </div>
                              
                                 <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms"
                                    data-wow-duration="2000ms">
                                    <a class="readon green-banner" href="{{ route('activities') }}">Read More <i
                                       class="fa fa-angle-right pl-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="btns">
               <div class="customPreviousBtn"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
               <div class="customPause"><i class="fa fa-pause" aria-hidden="true"></i></div>
               <div class="customPlay "><i class="fa fa-play" aria-hidden="true"></i></div>
               <div class="customNextBtn"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
         </div>
        <!-- Banner Section End -->
      

        <!-- latest news section start   -->

        <section class="latest-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="latest-news-text">
                            <p class="m-0">Latest News</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="rs-slider style1">
                            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="3000"
                                data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false"
                                data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
                                data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false"
                                data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                                data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true"
                                data-md-device-dots="false" id="banner2">
                                @if (Count($news) > 0)
                                    @foreach ($news->take(3) as $item)
                                        <div class="slider-content">
                                            <div class="container-fluid px-0">
                                                <div class="d-flex align-items-center latest-news-slider-content-text">
                                                    <p>
                                                        @if (Session::get('Lang') == 'hi')
                                                            {!! $item->title_name_hi  !!}
                                                        @else
                                                            {!! $item->title_name_en   !!}
                                                        @endif
                                                        <span class="date-news-latest"> | {{  date('d/m/Y', strtotime($item->start_date)) }} </span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                @endif


                            </div>

                        </div>
                    </div>

                    <div class="col-md-1 rs-slider style1">
                        <div class="btns">
                            <div id="customPreviousBtn2"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div id="customPause2"><i class="fa fa-pause" aria-hidden="true"></i></div>
                            <div id="customPlay2" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                            </div>
                            <div id="customNextBtn2"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- latest news section end  -->

        <!-- Card Section Start -->
        <!-- <div class="container">
            <marquee style="padding:13px 0 3px;">
                <a href="javascript:void();" style="color: red; font-weight: bold;">
                    World Rabies Day is going to be celebrated on <b>28th September 2023 </b>.</span>
            </marquee>
        </div> -->


        {{-- <div id="rs-features" class="rs-features main-home ">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-12 md-mb-30 ml-auto">
            <a href="{{ route('human-health') }}">
               <div class="features-wrap">
                  <div class="icon-part c-card">
                     <img src="{{ asset('assets/Nrcp_img/human.png') }}" alt="" class="animal-rotate human h-40">
                  </div>
                  <div class="content-part">
                     <h4 class="title">
                        <span class="watermark">8,53,99,928</span>
                     </h4>
                     <p class="dese red-text">Human Health</p>
            <a href="{{ route('human-health') }}">Read More <i class="fa fa-angle-right pl-2"></i></a>
            </div>
            </div>
            </a>
         </div>
         <div class="col-lg-3 col-md-12 md-mb-30 mr-auto">
            <a href="{{ route('anumal-health') }}">
               <div class="features-wrap">
                  <div class="icon-part c-card">
                     <img src="{{ asset('assets/Nrcp_img/animal.png') }}" alt="" class="animal-rotate h-40">
                  </div>
                  <div class="content-part">
                     <h4 class="title"><span class="watermark">27,18,00,060</span></h4>
                     <p class="dese deep-purple-text">Animal Health</p>
            <a href="{{ route('anumal-health') }}">Read More <i class="fa fa-angle-right pl-2"></i></a>
            </div>
            </div>
            </a>
         </div>
      </div>
   </div>

--}}
<!-- Card Section End -->
{{-- 
<div class="ministers-memories">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4 bg-min">
            <h1 class="sl-title wow fadeInLeft text-white minister-h1" data-wow-delay="300ms"
               data-wow-duration="3000ms"
               style="visibility: visible; animation-duration: 3000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
               From Director's <br> Desk
            </h1>
         </div>
         <div class="col-md-6 bg-design">
            <div class="box-min">
               <div class="min-post">
                  <div class="post-img">
                     <img src="{{ asset('assets/Nrcp_img/Prof_Atul_Goel.png') }}" alt="">
                  </div>
                  <div class="post-item">
                     <div class="post-desc min-heading">
                        <a href="javascript:void();">PROF (DR.) ATUL GOEL</a>
                     </div>
                     <p class="sub-title-head"> DGHS & DIRECTOR NCDC </p>
                  </div>
               </div>
               <div class="min-post">
                  <div class="post-img">
                     <img src="assets/Nrcp_img/pk.png" alt="">
                  </div>
                  <div class="post-item">
                     <div class="post-desc min-heading">
                        <a href="#">DR P K SEN</a>
                     </div>
                     <p class="sub-title-head"> PRINCIPAL ADVISOR </p>
                  </div>
               </div>
               <div class=" bg-button text-center">
                  <a class="readon2" href="javascript:void();">View All <i class="fa fa-angle-right pl-2"></i></a>
               </div>
            </div>
         </div>
         <div class="col-md-2 bg-button text-center">
            <a class="readon2" href="javascript">View All <i class="fa fa-angle-right pl-2"></i></a>
         </div>
      </div>
   </div>
</div>
--}}
        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style8 pt-60 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="main-content">

                            <div class="row">
                                <div class="col-lg-9 mb-4">
                                    <div class="sec-title3 pl-10 wow fadeInUp" data-wow-delay="300ms"
                                        data-wow-duration="2000ms">
                                        <h2 class="title">About NRCP</h2>
                                        <div class="desc mb-30 about-t">
                                        Rabies is responsible for extensive morbidity and mortality in India. The disease is endemic throughout the country. Except for Andaman & Nicobar and Lakshadweep Islands, human cases of rabies are reported from all over the country. The cases occur throughout the year. About 96% of the mortality and morbidity is associated with dog bites. Cats, wolf, jackal, mongoose and monkeys are other important reservoirs of rabies in India. Bat rabies has not been conclusively reported from the country.
                                        <br><br>
                                        <b>Evolution of National Rabies Control Program</b>
                                        <br><br>
In the 11th five-year plan (2007–2012) Rabies control efforts in India gained momentum and the Ministry of Health and Family Welfare, Govt of India approved a “Pilot Project for the Control of Human Rabies”, for which ` 8.65 crores were allocated. For the first time, Rabies control in animals, animal birth control and vaccination of stray dogs were mentioned in this plan, as components of animal welfare to be handled by the Animal Welfare Board of India. The project was implemented by NCDC in 5 cities Delhi, Ahmedabad, Pune, Bangalore and Madurai and the project began in January 2008 and continued till 2012. The objectives of the project were prevention of human deaths due to Rabies, enhancing awareness in the general community, developing trained health manpower, strengthening diagnostic facilities, strengthening surveillance and maintenance of continuous surveillance and sensitization of other sectors. Experience gained in the pilot project indicated that strategy is feasible, reproducible, and implementable.

With the lessons learned in the pilot project, the Ministry of Health and Family Welfare approved National Rabies Control Programme (NRCP) in the 12th Five Year Plan for rollout in the entire country. During the 12th Five years plan, from 2014 to 2017, a small pilot was also taken to test the strategy of Animal Health Components in Haryana and Chennai through the Animal Welfare Board of India (AWBI) under the aegis of the Ministry of Environment, Forest and Climate Change, Govt of India. From 2017 onwards NCDC is coordinating to implement Human Health Component of National Rabies Control Program. From the financial year 2019-20 onwards, human health component activities at the State and District level are being funded by the National Health Mission’s program implementation and planning mechanism.
                                        </div>
                                        <div class="btn-part wow fadeInUp" data-wow-delay="400ms"
                                            data-wow-duration="2000ms">
                                            <a class="readon2" href="{{ url('About-NRCP') }}">Read More <i
                                                    class="fa fa-angle-right pl-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pdf-image">
                                        <a href="{{ asset('assets/Nrcp_img/NationalActiopPlan.pdf') }}" target="_blank"
                                            title="National Action Plan">
                                            <img src="{{ asset('assets/Nrcp_img/pdf-frtontpage.PNG') }}"
                                                alt="National Action Plan" title="National Action Plan" />
                                        </a>
                                        <div class="btn-part wow fadeInUp mt-4" data-wow-delay="400ms"
                                            data-wow-duration="2000ms">
                                            <a class="readon2"
                                                href="{{ asset('assets/Nrcp_img/NationalActiopPlan.pdf') }}"
                                                target="_blank" title="National Action Plan">View PDF <i
                                                    class="fa fa-angle-right pl-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
        <!--<div id="rs-categories" class="rs-categories style1 pt-60 pb-60">
              <div class="container">
                  <div class="row y-middle mb-30">
                      <div class="col-md-6 sm-mb-30">
                          <div class="sec-title">
                              <h2 class="title mb-0">Media Alerts / Action Taken </h2>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="btn-part text-right sm-text-left">
                              <a href="#" class="readon">View All</a>
                          </div>
                      </div>
                  </div>
                  <div class="row">
              
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="300ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="400ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="500ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
              
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="300ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="400ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
                      <div class="col-lg-4 col-md-6 wow fadeInUp p-0" data-wow-delay="500ms" data-wow-duration="2000ms"
                          style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                          <a class="categories-item" href="#">
                              <div class="content-part text-center">
                                  <div class="date-text"> 15 Feb 2023</div>
                                  <h4 class="title">Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing Elitr, Sed Diam
                                      Nonumy Eirmod Tempor</h4>
                                  <span class="courses course-icon pt-3"><img
                                          src="{{ asset('assets/Nrcp_img/arrow-right.png') }}" /></span>
                              </div>
                          </a>
                      </div>
              
              
                  </div>
              </div>
              </div>-->
        <div id="rs-popular-courses" class="rs-about rs-latest-events style1 modify1 pt-60 pb-10">
            <div class="container">
                <div class="row p-0">
                    <div class="col-md-4">
                        <div class="notice-bord style1">
                            <h4 class="title">Recent Activity</h4>
                            <div class="marquee-height">
                                <!-- <ul class="recent-activity-slide marquee--inner">
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                        <div class="desc"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 700ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                </ul> -->

                                <h5 class="ml-2 mt-4">Content Coming soon</h5>

                            </div>

                            <div class="btn-part view-all-btn">
                                <a class="readon2 mod" href="#">View All</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="notice-bord style1">
                            <h4 class="title">Publications</h4>

                            <div class="marquee-height">
                            <h5 class="ml-2 mt-4">Content Coming soon</h5>
                                <!-- <ul class="Publications-slide marquee--inner ">
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms"
                                        style="visibility: visible; animation-duration: 2000ms; animation-delay: 700ms; animation-name: fadeInUp;">
                                        <div class="desc"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Lorem
                                            Ipsum is
                                            simply dummy text of the printing and setting
                                        </div>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="btn-part view-all-btn">
                                <a class="readon2 mod" href="#">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  pr-0">
                        <div class="notice-bord style1">
                            <h4 class="title">Latest News</h4>
                            <div class="marquee-height">
                                <ul class="Latest-news-slider marquee--inner ">
                                    @if (Count($news) > 0)
                                        @foreach ($news as $item)
                                            <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                                                style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                                <div class="date">{{ date('d M', strtotime($item->start_date)) }}</div>
                                                <div class='desc'>
                                                    @if (Session::get('Lang') == 'hi')
                                                      @if($item->tab_type == '1')
                                                      <a href="{{ $item->public_url }}" target="_blank">{!! $item->title_name_hi  !!}</a>
                                                      @else
                                                      <a href="{{ $item->public_url }}">{!! $item->title_name_hi  !!}</a>
                                                      @endif
                                                    @else
                                                      @if($item->tab_type == '1')
                                                      <a href="{{ $item->public_url }}" target="_blank">{!! $item->title_name_en !!}</a>
                                                      @else
                                                      <a href="{{ $item->public_url }}">{!! $item->title_name_en !!}</a>
                                                      @endif
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>

                            <div class="btn-part view-all-btn">
                                <a class="readon2 mod" href="{{ route('news-details')}}">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>

 
{{-- <div id="rs-popular-courses" class="rs-popular-courses style1 modify1 pt-60 pb-60">
   <div class="container">
      <div class="sec-title6 text-center mb-40">
         <h2 class="title">Quick Links</h2>
      </div>
      <div class="sec-bg-white">
         <div class="gridFilter style2 text-left mb-40">
            <button data-filter=".filter1" class="active">What's New</button>
            <button data-filter=".filter2" class="btn2">Budget and Finance</button>
            <button data-filter=".filter3" class="btn3">Rabies Clinic</button>
            <button data-filter=".filter4" class="btn4">ID Hospitals</button>
         </div>
         <div class="row grid">
            <div class="col-lg-12 col-md-12 grid-item filter1">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-part">
                        <img src="{{ asset('assets/Nrcp_img/banner/banner.jpg') }}" alt="Image">
                     </div>
                  </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms"
                     style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                     <div class="content">
                        <div class="sec-title mb-10">
                           <h4 class="coming_soon">Content Coming Soon </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 grid-item filter2 d-none">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-part">
                        <img src="{{ asset('assets/Nrcp_img/Updated_images/DSC_3631.jpg') }}" alt="Image">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="content">
                        <div class="sec-title mb-10">
                           <h4 class="coming_soon">Content Coming Soon </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 grid-item filter3 d-none">
               <div class="row align-item-center">
                  <div class="col-lg-12">
                     <div class="content">
                        <div class="sec-title mb-10">
                           <div class="blog-button">
                              <a class="blog-btn" href="{{ asset('assets/Nrcp_img/Model_Anti_rabies_Clinic.pdf') }}"
                                 target="_blank">View PDF</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 grid-item filter4 d-none">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="content">
                        <div class="sec-title mb-10">
                           <div class="blog-button">
                              <a class="blog-btn" href="{{ asset('assets/Nrcp_img/ID_Hospitals.pdf') }}" target="_blank">View
                              PDF</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> --}}

{{-- 
<div class="rs-cta bg-cta pt-20 pb-10">
   <div class="container">
      <div class="sec-title6 text-center pt-60 mb-40">
         <h2 class="title text-white">Technical Documents and Guidelines</h2>
      </div>
      <div class="row rs-blog home9-style pt-20 pb-50">
         <div class="col-md-4">
            <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms"
               data-wow-duration="2000ms"
               style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
               <img src="{{ asset('assets/Nrcp_img/pdf-2.png') }}" class="pdf-guidline" />
               <div class="content-part">
                  <p class="txt">
                     Rabies General Aspects & Laboratory Diagnostic Techniques 2022
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
               style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
               <img src="{{ asset('assets/Nrcp_img/pdf-2.png') }}" class="pdf-guidline" />
               <div class="content-part">
                  <p class="txt">
                     National Guidelines on Diagnosis Case Management and Prevention and Control of
                     Leptospirosis
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="events-short-top mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms"
               style="visibility: visible; animation-duration: 2000ms; animation-delay: 400ms; animation-name: fadeInUp;">
               <img src="{{ asset('assets/Nrcp_img/pdf-2.png') }}" class="pdf-guidline" />
               <div class="content-part">
                  <p class="txt">
                     NCDC notified as National Coordinating Centre for Surveillance of Antimicrobial
                     Resistance
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
--}}
<div class="gallery-section pt-60 pb-60">
   <div class="container-fluid pr-0">
      <div class="row">
         <div class="col-md-6">
            <div class="gallery-lbox">
               <div class="content">
                  <div class="sec-title3 text-center mb-40 ">
                     <h2 class="title mb-10">Photo Gallery</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="rs-carousel owl-carousel nav-style2 gallery-carausel" data-loop="true"
                     data-items="4" data-margin="10" data-autoplay="true" data-hoverpause="true"
                     data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
                     data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                     data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                     data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                     data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2"
                     data-md-device-nav="false" data-md-device-dots="false">
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/11.jpg') }}" alt="">
                           <div class="text-gallery" id="banner3">
                              Event 1
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/22.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 2
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/33.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 3
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/44.jpeg') }}" alt="">
                           <div class="text-gallery">
                              State Level ToT for NRCP (Kerala)
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/55.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 5
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/66.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 6
                           </div>
                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box">
                           <img src="{{ asset('assets/Nrcp_img/gallery/about.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 7
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="btn-view_play">
                  <div class="btn-part mt-4 text-center">
                     <a class="readon2" href="#">View All</a>
                  </div>
                  <div class="btns">
                     <div id="customPreviousBtn3"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                     <div id="customPause3"><i class="fa fa-pause" aria-hidden="true"></i></div>
                     <div id="customPlay3" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                     </div>
                     <div id="customNextBtn3"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="gallery-lbox video-sec">
               <div class="content">
                  <div class="sec-title3 text-center mb-40 ">
                     <h2 class="title mb-10">Video Gallery</h2>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="rs-carousel owl-carousel nav-style2 gallery-carausel" data-loop="true"
                     data-items="4" data-margin="10" data-autoplay="true" data-hoverpause="true"
                     data-autoplay-timeout="4500" data-smart-speed="900" data-dots="false" data-nav="false"
                     data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                     data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                     data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                     data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="2"
                     data-md-device-nav="false" data-md-device-dots="false" id="banner4">
                     <div class="team-item">
                        <div class="gallery-box media-icon orange-color">
                           {{-- <img src="{{ asset('assets/Nrcp_img/gallery/22.jpg') }}" alt="">
                           <div class="text-gallery">
                              Event 1
                           </div>
                           <a class="popup-videos" href="{{ url('/video') }}">
                           <i class="fa fa-play"></i>
                           </a>                                   --}}

                           <video controls muted class="video-g">
                              <source src="{{ asset('assets/Nrcp_img/video1.mp4') }}" type="video/mp4">
                              </video>

                        </div>
                     </div>
                     <div class="team-item">
                        <div class="gallery-box media-icon orange-color">
                           <video controls muted class="video-g">
                              <source src="{{ asset('assets/Nrcp_img/video2.mp4') }}" type="video/mp4">
                              </video>                              
                        </div>
                     </div>
                  </div>
               </div>
               <div class="btn-view_play">
                  <div class="btn-part mt-4 text-center">
                     <a class="readon2" href="{{ url('/video') }}">View All</a>
                  </div>
                  <div class="btns">
                     <div id="customPreviousBtn4"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                     <div id="customPause4"><i class="fa fa-pause" aria-hidden="true"></i></div>
                     <div id="customPlay4" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                     </div>
                     <div id="customNextBtn4"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
   <!-- Faq Section Start -->
   {{-- 
   <div class="rs-faq-part style1 pt-40 pb-80">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 padding-0 col-md-12">
               <div class="main-part new-style padding-sm-0">
                  <div class="title mb-20">
                     <h2 class="text-part">Frequently Asked Questions</h2>
                  </div>
                  <div class="faq-content">
                     <div id="accordion" class="accordion">
                        <div class="card">
                           <div class="card-header">
                              <a class="card-link" data-toggle="collapse" href="#collapseOne">Q 1: What is
                              rabies?</a>
                           </div>
                           <div id="collapseOne" class="collapse " data-parent="#accordion">
                              <div class="card-body">
                                 Rabies is a disease transmitted from animals to humans, which is caused
                                 by a virus. There are two clinical manifestations of rabies – frantic
                                 and paralytic. Frantic rabies is most common form of human rabies.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header">
                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                 aria-expanded="false">Q 2: How is rabies transmitted?</a>
                           </div>
                           <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                              <div class="card-body">
                                 The rabies virus invades the nervous system of mammals. It is primarily
                                 transmitted from the rabid animal’s saliva when it bites or scratches
                                 someone. Licks to wounds or grazed and broken skin, or to the lining of
                                 the mouth and nose, can also transmit the disease.
                                 Dogs are responsible for 96% of human rabies cases in South-East Asia,
                                 but there are also reports
                                 of human rabies due to bites of cats, mongooses, jackals, foxes, wolves
                                 and other carnivorous animals.
                                 Rabies due to monkey and rat bites are rare. Horses and donkeys get
                                 aggressive and bite ferociously when they are rabid. Cattle and
                                 buffaloes do not bite when they are rabid, but precautions should be
                                 taken while examining sick animals that are salivating.
                                 Sometimes livestock owners confuse rabies with foot-and-mouth disease,
                                 haemorrhagic septicaemia or choking and may attempt to administer drugs
                                 by hand, and thus get infected with rabies virus.
                                 There are no evidence-based reports of human rabies occurring due to
                                 consumption of milk.
                                 Individuals or professionals who slaughter rabiesinfected animals and
                                 handle brain and other infected material may be at risk, but there are
                                 no human cases due to consumption of cooked meat.
                                 Human-to-human transmission of rabies through corneal or other organ
                                 transplantation is rare but possible. Such transmission has occurred
                                 among recipients of transplanted corneas and recently among recipients
                                 of solid organs and vascular tissue.
                                 Therefore corneas or organs should not be collected from a patient who
                                 died due to rabies encephalitis or any undiagnosed neurological disease.
                                 Although rabies patients are extremely unlikely to bite other people,
                                 caregivers should be watchful and alert when looking after them, and
                                 avoid contact with the patient’s saliva.
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header">
                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                 aria-expanded="false">Q 3: How does one treat an animal bite?</a>
                           </div>
                           <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                              <div class="card-body">
                                 <ul>
                                    If a person is bitten by an animal:
                                    <li> ●● Wounds should be washed and flushed immediately with soap and water
                                       for 10–15 minutes. If soap is not available, flush with water alone.
                                    </li>
                                    This is the most effective first-aid treatment against rabies.</li>
                                    <li> ●● Wounds should be cleaned thoroughly with 70% alcohol/ethanol or
                                       povidone-iodine, if available.
                                    <li> ●● As soon as possible, take the person to a healthcare facility for
                                       further treatment.
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-part mt-4 text-center">
                     <a class="readon2" href="#">View All</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   --}}
   <!-- faq Section END -->
   <!-- Partner Start -->
   <div class="rs-partner pt-40 pb-40 gray-bg-color">
      <div class="container">
         <div class="rs-carousel owl-carousel" data-loop="true" data-items="6" data-margin="15" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="2"
            data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="3"
            data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="3"
            data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="6" data-md-device-nav="true"
            data-md-device-dots="false" id="banner5">

            <div class="partner-item">
               <a href="https://ncdc.mohfw.gov.in/" target="_blank" role="link"><img
                  src="{{ asset('assets/Nrcp_img/clients/ncdc.jpg') }}" alt="NCDC"
                  title="NCDC"></a>
            </div>

            <div class="partner-item">
               <a href="https://www.mohfw.gov.in/" target="_blank" role="link"><img
                  src="{{ asset('assets/Nrcp_img/clients/MHFW.png') }}" alt="Ministry of Health and Family Welfare Government of India"
                  title="Ministry of Health and Family Welfare Government of India"></a>
            </div>

            <div class="partner-item">
               <a href="https://www.who.int/" target="_blank" role="link"><img
                  src="{{ asset('assets/Nrcp_img/clients/who.png') }}" alt="World Health Organization"
                  title="World Health Organization"></a>
            </div>


            <div class="partner-item">
               <a href="http://pgportal.gov.in/" target="_blank" role="link"><img
                  src="{{ asset('assets/Nrcp_img/clients/pg-portal.png') }}" alt="PORTAL FOR PUBLIC GRIEVANCES"
                  title="PORTAL FOR PUBLIC GRIEVANCES"></a>
            </div>
            <div class="partner-item">
               <a href="https://notto.gov.in/" target="_blank" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/logo-(1)_0_0.png') }}" alt="NOTTO"
                  title="NOTTO">
               </a>
            </div>
            <div class="partner-item">
               <a href="https://www.nhp.gov.in/" target="_blank" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/nhp-india.png') }}" alt="National Health Portal"
                  title="National Health Portal">
               </a>
            </div>
            <div class="partner-item">
               <a href="http://nhm.gov.in/" target="_blank" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/RashtriyaBalSwasthyaKaryakram.jpg') }}"
                  alt="Rashtriya Bal Swasthya Karyakram (RBSK)" title="Rashtriya Bal Swasthya Karyakram (RBSK)">
               </a>
            </div>
            <div class="partner-item">
               <a href="https://www.nikshay.in" target="_blank" rel="noopener noreferrer" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/nikshay.png') }}"
                  alt="Nikshay, External link that will open in a new window"
                  title="Nikshay, External link that will open in a new window"></a>
            </div>
            <div class="partner-item">
               <a href="https://cgewho.in/" target="_blank" rel="noopener noreferrer">
               <img src="{{ asset('assets/Nrcp_img/clients/CENTRALGOVERNMENTEMPLOYEES.jpg') }}"
                  alt="CENTRAL GOVERNMENT EMPLOYEES, External link that will open in a new window"
                  title="CENTRAL GOVERNMENT EMPLOYEES, External link that will open in a new window"></a>
            </div>
            <div class="partner-item">
               <a href="https://main.mohfw.gov.in/major-programmes/poor-patients-financial-support" target="_blank"
                  role="link"><img src="{{ asset('assets/Nrcp_img/clients/poor.png') }}"
                  alt="Poor Patients-Financial Support" title="Poor Patients-Financial Support"></a>
            </div>
            <div class="partner-item">
               <a href="https://www.nhp.gov.in/quit-tobacco" target="_blank" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/quittobacco.jpg') }}"
                  alt="Quit Tabacoo, External link that will open in a new window"
                  title="Quit Tabacoo, External link that will open in a new window">
               </a>
            </div>
            <div class="partner-item">
               <a href="https://www.incometaxindia.gov.in/Pages/income-declaration-scheme.aspx" target="_blank"
                  role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/IncomeTaxDepartment.jpg') }}"
                  alt="Income Tax Department, External link that will open in a new window"
                  title="Income Tax Department, External link that will open in a new window">
               </a>
            </div>
            <div class="partner-item">
               <a href="https://www.mygov.in/group-issue/inviting-ideas-pm-narendra-modis-mann-ki-baat-august-2016/"
                  target="_blank" rel="noopener noreferrer" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/8956354581471930117.jpg') }}" alt="mann ki baat"
                  title="mann ki baat"></a>
            </div>
            <div class="partner-item">
               <a href="https://main.mohfw.gov.in/my-hospital" target="_blank" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/mera_aspatal.png') }}"
                  alt="My Hospital, External Link That Will Open in a New Window."
                  title="External Link That Will Open in a New Window.">
               </a>
            </div>
            <div class="partner-item">
               <a href="https://www.mygov.in/" target="_blank" rel="noopener noreferrer" role="link">
               <img src="{{ asset('assets/Nrcp_img/clients/mygov_2.png') }}"
                  alt="My Gov, External Link That Will Open in a New Window."
                  title="External Link That Will Open in a New Window."></a>
            </div>
         </div>
         <div class="gallery-section clientail">
            <div class="btns pr-0">
               <div id="customPreviousBtn5"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
               <div id="customPause5"><i class="fa fa-pause" aria-hidden="true"></i></div>
               <div id="customPlay5" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
               </div>
               <div id="customNextBtn5"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
         </div>
      </div>
   </div>
   <!-- Partner End -->
</div>
</div>
         @include('partials.footer')
         @include('partials.footer-scripts')
   </body>
</html>