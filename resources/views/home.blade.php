<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head-css-scripts')
    <style>
    </style>
</head>
<body class="defult-home">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v19.0" nonce="AbB7EpYI"></script>
    <div class="full-width-header header-style1 home1-modifiy home12-modifiy">
        <header id="rs-header" class="rs-header">
            <div class="topbar-area home11-topbar">
                <div class="container">
                    @include('partials.top-header')
                </div>
            </div>
            <div class="menu-area " >
                <!-- SVG-CONTENT-DISPLAY NONE -->
                <div class="svg-cont">
                    <img src="{{ URL::asset('assets/Nrcp_img/svg/blue-svg.png') }}" alt="NRCP">
                </div>
                <div class="container">
                    @include('partials.menu-header')
                </div>
            </div>
        </header>
    </div>
    <div class="main-content">
        <!-- Slider Section Start -->
        <!-- Banner Section End -->
        <!-- latest news section start   -->
        <section class="latest-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="latest-news-text">
                            <p class="m-0">Recent Activity</p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="ticker_wrap">
                            <div class="ticker__viewport">
                                <ul class="ticker__list" data-ticker="list" id="banner2">
                                    <li class="ticker__item" data-ticker="item">
                                        <a href="{{ asset('assets/Nrcp_img/WorldRabiesDayObservationReport.pdf') }}"
                                            class="text-white" target="_blank" rel="noopener noreferrer">World
                                            Rabies day 2023 Activities at National level</a>
                                    </li>
                                    <li class="ticker__item" data-ticker="item">
                                        We had celebrated World's Rabies Day on 28th Sept’2023
                                    </li>
                                    <li class="ticker__item" data-ticker="item">
                                        NRCP Website will be launched soon.
                                    </li>
                                    <li class="ticker__item" data-ticker="item">
                                        NCDC Journal for One Health will be launched in December 2023
                                    </li>
                                </ul>
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
        <!-- Demo new banner design -->
        <div class="container-custom_chngs">
            <div class="row">
                <div class="col-md-3 order-md-1 order-2">
                    <div class="cont_secsns left_dhr mob-item2">
                        <div class="main_btntop_chnges">
                            <div class="top-menu-box">                                
                            </div>
                            <div class="new_btns_cols">
                                <button class="button-29 text-center blink gradients" role="button" data-toggle="modal"
                                    data-target="#helpline">
                                    <a href="javascript:void();" class=""> Rabies Help line No :
                                        <i class="fa fa-phone"></i> 
                                        <!-- <img src="{{ asset('assets/Nrcp_img/gifs/call.gif') }}" alt="call now"> -->
                                        15400</a>
                                </button>
                                <button class="button-29 text-center flickering" role="button"> <a href="#"
                                        class="" data-toggle="modal" data-target="#vaccination">
                                        Have you Bitten by an Animal? <br>
                                        Know your Rabies Vaccination Schedule
                                    </a>
                                </button>
                                <button class="button-29 text-center colors" role="button">
                                    <a href="{{ url('directories') }}" class="">Who's who</a>
                                </button>
                                <button class="button-29 text-center " role="button" data-toggle="modal"
                                    data-target="#vaccinationt">
                                    <a href="#" class="blink_text">Global Updates on Rabies</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 px-0">
                    <div class="cont_secsns mid_dhr">
                        <div class="rs-slider style1">
                            <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="20"
                                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000"
                                data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false"
                                data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
                                data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false"
                                data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true"
                                data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true"
                                data-md-device-dots="false" id="banner1">
                                @if (count($homebanner) > 0)
                                    @foreach ($homebanner as $k => $value)
                                        <div class="slider-content">
                                            <div class="container-fluid px-0">
                                                <div class="row banner-mobile">
                                                    <div class="col-lg-12 order-last p-0">
                                                        <div class="img-part banner-image">
                                                            <img src="{{ asset('resources/uploads/banner/' . $value->public_url) }}"
                                                                alt="{{ $value->banner_title }}"
                                                                rel="noopener noreferrer">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="slider-content">
                                        <div class="container-fluid px-0">
                                            <div class="row banner-mobile">
                                                <div class="col-lg-12 order-last p-0">
                                                    <div class="img-part banner-image">
                                                        <img src="{{ asset(config('constants.brand.default_banner')) }}"
                                                            alt="Banner" rel="noopener noreferrer">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="btns">
                                <div class="customPreviousBtn"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="customPause"><i class="fa fa-pause" aria-hidden="true"></i></div>
                                <div class="customPlay "><i class="fa fa-play" aria-hidden="true"></i></div>
                                <div class="customNextBtn"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 order-md-3 order-3">
                    <div class="cont_secsns right_dhr new-till">
                        <div class="notice-bord style1">
                            <h4 class="title" tabindex="0">Human Health Sector Activities</h4>
                            <div class="marquee marquee-vertical" data-speed="50">
                                <div class="marquee-wrapper">
                                    <div class="marquee-content">
                                        @if (isset($human_activite) && count($human_activite) > 0)
                                            @foreach ($human_activite as $human_activites)
                                                @php
                                                    $humanUrl = $human_activites->url_link ?? 'javascript:void(0)';
                                                @endphp
                                                <div class="latest-lists">
                                                    <a @if ($human_activites->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return  confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                    target="_blank" href="{{ $humanUrl }}" @else
                                                        href="{{ url($humanUrl) }}" @endif>
                                                        <strong><i class="fa fa-hand-o-right mx-1"
                                                                aria-hidden="true"></i> : </strong>
                                                        @if (Session::get('Lang') == 'hi')
                                                            {{ $human_activites->recent_activities_hi ?? '' }}
                                                        @else
                                                            {{ $human_activites->recent_activities_en ?? '' }}
                                                        @endif
                                                        <img src="{{ asset('Nrcp_img/gifs/new-gif-new.gif') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <h4 class="title" tabindex="0">Animal Health Sector Activities</h4>
                            <div class="marquee marquee-vertical" data-speed="50">
                                <div class="marquee-wrapper">
                                    <div class="marquee-content">
                                        @if (isset($animal_activite) && count($animal_activite) > 0)
                                            @foreach ($animal_activite as $animal_activites)
                                                @php
                                                    $animalUrl = $animal_activites->url_link ?? 'javascript:void(0)';
                                                @endphp
                                                <div class="latest-lists">
                                                    <a @if ($animal_activites->tab_type == 1) @if (Session::get('Lang') == 'hi') onclick="return  confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')" @endif
                                                    target="_blank" href="{{ $animalUrl }}" @else
                                                        href="{{ url($animalUrl) }}" @endif
                                                        ><strong><i class="fa fa-circle-thin mx-1"
                                                                aria-hidden="true"></i> : </strong>
                                                        @if (Session::get('Lang') == 'hi')
                                                            {{ $animal_activites->recent_activities_hi ?? '' }}
                                                        @else
                                                            {{ $animal_activites->recent_activities_en ?? '' }}
                                                        @endif
                                                        <img src="{{ asset('Nrcp_img/gifs/new-gif-new.gif') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Demo new banner design Ends-->
        <!-- Card Section End -->
        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style8">
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
                                            Rabies is responsible for extensive morbidity and mortality in India. The
                                            disease is endemic throughout the country. Except for Andaman & Nicobar and
                                            Lakshadweep Islands, human cases of rabies are reported from all over the
                                            country. The cases occur throughout the year. About 96% of the mortality and
                                            morbidity is associated with dog bites. Cats, wolf, jackal, mongoose and
                                            monkeys are other important reservoirs of rabies in India. Bat rabies has
                                            not been conclusively reported from the country.
                                            <br><br>
                                            <b>Evolution of National Rabies Control Program</b>
                                            <br><br>
                                            In the 11th five-year plan (2007–2012) Rabies control efforts in India
                                            gained momentum and the Ministry of Health and Family Welfare, Govt of India
                                            approved a “Pilot Project for the Control of Human Rabies”, for which ` 8.65
                                            crores were allocated. For the first time, Rabies control in animals, animal
                                            birth control and vaccination of stray dogs were mentioned in this plan, as
                                            components of animal welfare to be handled by the Animal Welfare Board of
                                            India. The project was implemented by NCDC in 5 cities Delhi, Ahmedabad,
                                            Pune, Bangalore and Madurai and the project began in January 2008 and
                                            continued till 2012. The objectives of the project were prevention of human
                                            deaths due to Rabies, enhancing awareness in the general community,
                                            developing trained health manpower, strengthening diagnostic facilities,
                                            strengthening surveillance and maintenance of continuous surveillance and
                                            sensitization of other sectors. Experience gained in the pilot project
                                            indicated that strategy is feasible, reproducible, and implementable.
                                            With the lessons learned in the pilot project, the Ministry of Health and
                                            Family Welfare approved National Rabies Control Programme (NRCP) in the 12th
                                            Five Year Plan for rollout in the entire country. During the 12th Five years
                                            plan, from 2014 to 2017, a small pilot was also taken to test the strategy
                                            of Animal Health Components in Haryana and Chennai through the Animal
                                            Welfare Board of India (AWBI) under the aegis of the Ministry of
                                            Environment, Forest and Climate Change, Govt of India. From 2017 onwards
                                            NCDC is coordinating to implement Human Health Component of National Rabies
                                            Control Program. From the financial year 2019-20 onwards, human health
                                            component activities at the State and District level are being funded by the
                                            National Health Mission’s program implementation and planning mechanism.
                                        </div>
                                        <div class="btn-part wow fadeInUp" data-wow-delay="400ms"
                                            data-wow-duration="2000ms">
                                            <a class="readon2" href="{{ url('About-NRCP') }}"
                                                rel="noopener noreferrer">Read More <i
                                                    class="fa fa-angle-right pl-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="pdf-image">
                                        <a href="{{ asset('assets/Nrcp_img/NationalActiopPlan.pdf') }}"
                                            target="_blank" title="National Action Plan" rel="noopener noreferrer">
                                            <img src="{{ asset('assets/Nrcp_img/pdf-frtontpage.PNG') }}"
                                                alt="National Action Plan" title="National Action Plan"
                                                rel="noopener noreferrer" />
                                        </a>git
                                        <div class="btn-part wow fadeInUp mt-4" data-wow-delay="400ms"
                                            data-wow-duration="2000ms">
                                            <a class="readon2"
                                                href="{{ asset('assets/Nrcp_img/NationalActiopPlan.pdf') }}"
                                                target="_blank" title="National Action Plan"
                                                rel="noopener noreferrer">View PDF <i
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
        <div id="rs-popular-courses" class="rs-about rs-latest-events style1 modify1 p-32 an-pt-tab">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="notice-bord style1">
                            <h4 class="title twitter-text-h"><img
                                    src="{{ asset('assets/Nrcp_img/twitter-logo.png') }}" alt="img"
                                    rel="noopener noreferrer" class="twitter-logo"> ( Twitter Feed )</h4>
                            <div class="marquee-height myslider">
                                <div class="item a text-center">
                                    <a href="https://twitter.com/nrcpmohfw"
                                        onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"
                                        target="_blank" title="Twitter" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/Nrcp_img/t6.jpg') }}" alt="img"
                                            rel="noopener noreferrer">
                                    </a>
                                </div>
                                <div class="item a text-center">
                                    <a href="https://twitter.com/nrcpmohfw"
                                        onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"
                                        target="_blank" title="Twitter" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/Nrcp_img/t5.png') }}" alt="img"
                                            rel="noopener noreferrer">
                                    </a>
                                </div>
                                <div class="item a text-center">
                                    <a href="https://twitter.com/nrcpmohfw"
                                        onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"
                                        target="_blank" title="Twitter" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/Nrcp_img/t1.png') }}" alt="img"
                                            rel="noopener noreferrer">
                                    </a>
                                </div>
                                <div class="item b text-center">
                                    <a href="https://twitter.com/nrcpmohfw"
                                        onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"
                                        target="_blank" title="Twitter" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/Nrcp_img/t2.png') }}" alt="img"
                                            rel="noopener noreferrer">
                                    </a>
                                </div>
                                <div class="item c text-center">
                                    <a href="https://twitter.com/nrcpmohfw"
                                        onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"
                                        target="_blank" title="Twitter" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/Nrcp_img/t3.png') }}" alt="img"
                                            rel="noopener noreferrer">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="notice-bord style1">
                            <h4 class="title twitter-text-h"><img
                                    src="{{ asset('assets/Nrcp_img/facebook-logo.png') }}" alt="img"
                                    rel="noopener noreferrer" class="facebook-logo"> ( Facebook Feed )</h4>
                            <div class="fbFeed">

                            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61557122245947" data-tabs="timeline" data-width="370" data-height="449" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/profile.php?id=61557122245947" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=61557122245947">NRCP-Mohfw</a></blockquote></div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="notice-bord style1">
                            <h4 class="title an-latest-news">Latest News</h4>
                            <div class="marquee-height">
                                <ul class="Latest-news-slider marquee--inner ">
                                    @if (Count($news) > 0)
                                        @foreach ($news as $item)
                                            <li class="wow fadeInUp" data-wow-delay="300ms"
                                                data-wow-duration="2000ms"
                                                style="visibility: visible; animation-duration: 2000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                                <div class="date">{{ date('d M', strtotime($item->start_date)) }}
                                                </div>
                                                <div class='desc'>
                                                    @if (Session::get('Lang') == 'hi')
                                                        @if ($item->tab_type == '1')
                                                            <a href="{{ $item->public_url }}" target="_blank"
                                                                onclick="return confirm('This link will take you to an external web site.')"
                                                                rel="noopener noreferrer">{!! $item->title_name_hi !!}</a>
                                                        @else
                                                            <a href="{{ $item->public_url }}"
                                                                rel="noopener noreferrer">{!! $item->title_name_hi !!}</a>
                                                        @endif
                                                    @else
                                                        @if ($item->tab_type == '1')
                                                            <a href="{{ $item->public_url }}" target="_blank"
                                                                onclick="return confirm('This link will take you to an external web site.')"
                                                                rel="noopener noreferrer">{!! $item->title_name_en !!}</a>
                                                        @else
                                                            <a href="{{ $item->public_url }}"
                                                                rel="noopener noreferrer">{!! $item->title_name_en !!}</a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="btn-part view-all-btn">
                                <a class="readon2 mod" href="{{ route('news-details') }}"
                                    rel="noopener noreferrer">View
                                    All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-section p-32">
        <div class="px-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="gallery-lbox new_gall_boxhead_change">
                        <div class="content">
                            <div class="sec-title3 text-center  ">
                                <h2 class="title mb-10">Photo Gallery</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="rs-carousel owl-carousel nav-style2 gallery-carausel" data-loop="true"
                                data-items="4" data-margin="10" data-autoplay="true" data-hoverpause="true"
                                data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                                data-nav="false" data-nav-speed="false" data-center-mode="false"
                                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
                                data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
                                data-md-device="2" data-md-device-nav="false" data-md-device-dots="false"
                                id="banner3">
                                @if (isset($galleryData) && !empty($galleryData))
                                    @foreach ($galleryData as $k => $galleryDatas)
                                        <div class="team-item">
                                            <div class="gallery-box">
                                                @if (count($galleryDatas['gallery_details']) > 0)
                                                    <img @if (isset($galleryDatas['gallery_details'][0]->public_url) && !blank($galleryDatas['gallery_details'][0]->public_url)) src="{{ asset('resources/uploads/GalleryManagement/' . $galleryDatas['gallery_details'][0]->public_url) }}" @endif
                                                        alt="" rel="noopener noreferrer">
                                                    <div class="text-gallery">
                                                        {{ $galleryDatas['gallery']->title_name_en ?? '' }}
                                                    </div>
                                                @else
                                                    <p>No images available for this gallery.</p>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="btn-view_play">
                            <div class="btn-part mt-2 text-center">
                                <a class="readon2" href="{{ url('photo-gallery-category') }}"
                                    rel="noopener noreferrer">View
                                    All</a>
                            </div>
                            <div class="btns">
                                <div id="customPreviousBtn3"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div id="customPause3"><i class="fa fa-pause" aria-hidden="true"></i></div>
                                <div id="customPlay3" class="customPlay2"><i class="fa fa-play"
                                        aria-hidden="true"></i>
                                </div>
                                <div id="customNextBtn3"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gallery-lbox video-sec new_gall_boxhead_change">
                        <div class="content">
                            <div class="sec-title3 text-center ">
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
                                @if (isset($galleryVideo) && !empty($galleryVideo))
                                @foreach($galleryVideo as $videos)
                                    @foreach($videos['gallery_details'] as $videoId)                                    
                                    <div class="team-item">
                                        <div class="gallery-box media-icon orange-color">
                                            @if($videoId->public_url)
                                            {!! '<div class="youtube-player" data-video-id="' . $videoId->public_url . '"></div>'!!}
                                            @else
                                            <p>No Video available for this gallery.</p>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="btn-view_play">
                            <div class="btn-part  text-center">
                                <a class="readon2" href="{{ route('video-gallery') }}" rel="noopener noreferrer">View
                                    All</a>
                            </div>
                            <div class="btns">
                                <div id="customPreviousBtn4"><i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div id="customPause4"><i class="fa fa-pause" aria-hidden="true"></i></div>
                                <div id="customPlay4" class="customPlay2"><i class="fa fa-play"
                                        aria-hidden="true"></i>
                                </div>
                                <div id="customNextBtn4"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Start -->
    <div class="rs-partner p-32 gray-bg-color">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="6" data-margin="15"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="2" data-mobile-device-nav="true" data-mobile-device-dots="false"
                data-ipad-device="3" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="3"
                data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="6"
                data-md-device-nav="true" data-md-device-dots="false" id="banner5">
                <div class="partner-item">
                    <a href="https://www.mohfw.gov.in/" target="_blank" role="link"
                        rel="noopener noreferrer"><img src="{{ asset('assets/Nrcp_img/clients/MHFW.png') }}"
                            alt="Ministry of Health and Family Welfare Government of India"
                            title="Ministry of Health and Family Welfare Government of India"
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://www.mohfw.gov.in/" target="_blank" role="link"
                        rel="noopener noreferrer"><img src="{{ asset('assets/Nrcp_img/clients/DAHD.jpg') }}"
                            alt="Department of Animal Husbandry & Dairying "
                            title="Department of Animal Husbandry & Dairying "
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://ncdc.mohfw.gov.in/" target="_blank" role="link"
                        rel="noopener noreferrer"><img src="{{ asset('assets/Nrcp_img/clients/ncdc.jpg') }}"
                            alt="NCDC" title="NCDC" rel="noopener noreferrer"></a>
                </div>
                
                <div class="partner-item">
                    <a href="http://pgportal.gov.in/" target="_blank" role="link" rel="noopener noreferrer"><img
                            src="{{ asset('assets/Nrcp_img/clients/pg-portal.png') }}"
                            alt="PORTAL FOR PUBLIC GRIEVANCES" title="PORTAL FOR PUBLIC GRIEVANCES"
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://notto.gov.in/" target="_blank" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/logo-(1)_0_0.png') }}" alt="NOTTO"
                            title="NOTTO" rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="https://www.nhp.gov.in/" target="_blank" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/nhp-india.png') }}" alt="National Health Portal"
                            title="National Health Portal" rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="http://nhm.gov.in/" target="_blank" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/RashtriyaBalSwasthyaKaryakram.jpg') }}"
                            alt="Rashtriya Bal Swasthya Karyakram (RBSK)"
                            title="Rashtriya Bal Swasthya Karyakram (RBSK)" rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="https://www.nikshay.in" target="_blank" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/nikshay.png') }}"
                            alt="Nikshay, External link that will open in a new window"
                            title="Nikshay, External link that will open in a new window"
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://cgewho.in/" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/CENTRALGOVERNMENTEMPLOYEES.jpg') }}"
                            alt="CENTRAL GOVERNMENT EMPLOYEES, External link that will open in a new window"
                            title="CENTRAL GOVERNMENT EMPLOYEES, External link that will open in a new window"
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://main.mohfw.gov.in/major-programmes/poor-patients-financial-support"
                        target="_blank" role="link" rel="noopener noreferrer"><img
                            src="{{ asset('assets/Nrcp_img/clients/poor.png') }}"
                            alt="Poor Patients-Financial Support" title="Poor Patients-Financial Support"
                            rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://www.nhp.gov.in/quit-tobacco" target="_blank" role="link"
                        rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/quittobacco.jpg') }}"
                            alt="Quit Tabacoo, External link that will open in a new window"
                            title="Quit Tabacoo, External link that will open in a new window"
                            rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="https://www.incometaxindia.gov.in/Pages/income-declaration-scheme.aspx" target="_blank"
                        role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/IncomeTaxDepartment.jpg') }}"
                            alt="Income Tax Department, External link that will open in a new window"
                            title="Income Tax Department, External link that will open in a new window"
                            rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="https://www.mygov.in/group-issue/inviting-ideas-pm-narendra-modis-mann-ki-baat-august-2016/"
                        target="_blank" rel="noopener noreferrer" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/8956354581471930117.jpg') }}" alt="mann ki baat"
                            title="mann ki baat" rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://main.mohfw.gov.in/my-hospital" target="_blank" role="link"
                        rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/mera_aspatal.png') }}"
                            alt="My Hospital, External Link That Will Open in a New Window."
                            title="External Link That Will Open in a New Window." rel="noopener noreferrer">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="https://www.mygov.in/" target="_blank" role="link" rel="noopener noreferrer">
                        <img src="{{ asset('assets/Nrcp_img/clients/mygov_2.png') }}"
                            alt="My Gov, External Link That Will Open in a New Window."
                            title="External Link That Will Open in a New Window." rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://www.who.int/" target="_blank" role="link" rel="noopener noreferrer"><img
                            src="{{ asset('assets/Nrcp_img/clients/who.png') }}" alt="World Health Organization"
                            title="World Health Organization" rel="noopener noreferrer"></a>
                </div>
                <div class="partner-item">
                    <a href="https://www.undp.org/india/" target="_blank" role="link" rel="noopener noreferrer"><img
                            src="{{ asset('assets/Nrcp_img/clients/UNDP-LOGO.png') }}" alt="World Health Organization"
                            title="World Health Organization" rel="noopener noreferrer"></a>
                </div>
            </div>
            <div class="gallery-section clientail">
                <div class="btns pr-0">
                    <div id="customPause5"><i class="fa fa-pause" aria-hidden="true"></i></div>
                    <div id="customPlay5" class="customPlay2"><i class="fa fa-play" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->
    </div>
    </div>
    <!-- Modal -->
    @include('partials.footer')
    @include('partials.footer-scripts')
   
</body>
</html>
