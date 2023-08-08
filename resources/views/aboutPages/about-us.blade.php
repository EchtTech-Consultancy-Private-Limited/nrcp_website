@extends('layouts.main')
@section('title')
 {{__('About US')}}
@endsection
@section('content')
<div class="main-content">
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">About Us</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 md-pl-15 md-pr-15 md-mb-30">
                        <div class="img-part">
                            <img class="" src="{{ asset('assets/Nrcp_img/event/event5.jpg') }}" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="bold-text mb-10 mt-0 text-black">National Rabies Control Programme (NRCP): </div>
                            <div class="desc">
                                 Rabies is responsible for extensive morbidity and mortality in India. 
                                    The disease is endemic throughout the country. With the exception of Andaman & 
                                    Nicobar and Lakshadweep Islands, human cases of rabies are reported from all over 
                                    the country. The cases occur throughout the year. About 96% of the mortality and 
                                    morbidity is associated with dog bites. Cats, wolf, jackal, mongoose and monkeys 
                                    are other important reservoirs of rabies in India. Bat rabies has not been conclusively 
                                    reported from the country. 
                            </div>

                            <div class="desc">
                                To address the issue of rabies in the country, National Rabies Control Programme 
                                was approved during 12th FYP by Standing Finance Committee meeting held on 
                                03.10.2013 as Central Sector Scheme to be implemented under the Umbrella of 
                                NHM .The Programme had two components – Human and Animal Components in 
                                12th FYP. Human  Component for roll out in the all States and UTs through nodal 
                                agency 
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 mt-3">
                        <div class="sec-title">
                           
                            <div class="desc">
                                NCDC with total budget of Rs 20 Crores  and Animal Health Component for 
                                pilot testing in Haryana and Chennai  through nodal agency 
                                Animal Welfare Board of 
                                India(AWBI)under the aegis of MoEF&CC, GOI with total budget of Rs 30 Crores for 
                                the Plan period. 
                                The Human Health Component has been rolled out in 26 States and 
                                UTs (Pilot Project for Animal Health Component by AWBI has been ended with 
                                closure of last FY of 12th FYP i.e. with effect from 31.3.2017)  
                            </div>

                         
                           
                            <div class="bold-text mb-20 mt-30 text-black">Objectives:  </div>
                            <div class="desc rs-inner-blog">
                                <div class="blog-deatails">
                                    <div class="blog-full p-0">
                                        <ul class="unorder-list mb-20">
                                            <li>Training of Health Care professionals on appropriate Animal bite management 
                                                and Rabies Post Exposure Prophylaxis. </li>
                                            <li>Advocacy for states to adopt and implement Interdermal route of Post 
                                                exposure prophylaxis for Animal bite Victims and Pre exposure prophylaxis for 
                                                high risk categories. </li>
                                            <li>Strengthen Human Rabies Surveillance System. </li>
                                            <li>Strengthening of Regional Laboratories under NRCP for Rabies Diagnosis. </li>
                                            <li>Creating awareness in the community through Advocacy & Communication 
                                                and Social Mobilization. </li>
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