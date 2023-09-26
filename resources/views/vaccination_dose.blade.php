@extends('layouts.main')

@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('Vaccination Dose') }}
@endsection
@section('content')
<!-- Contact Section Start -->
<?php 
if(request('animal_bite') == 'yes'){
    $vDate =request('v-date');
    $date = request('date');
    $animal_bite = request('animal_bite');
}elseif(request('animal_bite') == 'no'){
    $vDate =request('date');
    $date = request('date');
}else{
    $vDate =request('date');
    $date = request('date');
}
?>
    <div id="rs-about" class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">               

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-lg-3 col-md-12">

                            <div class="nav flex-column nav-pills" id="tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="Master_layout_0" data-toggle="pill"
                                    data-target="#master-layout_0" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="true" tabindex="0">
                                    Know Your Vaccination Schedule 
                                </button>
                                <button class="nav-link" id="Master_layout_1" data-toggle="pill"
                                    data-target="#master-layout_1" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Anti Rabies Clinic
                                </button>
                                
                                <button class="nav-link" id="Master_layout_2" data-toggle="pill"
                                    data-target="#master-layout_2" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Human Rabies laboratory
                                </button>
                                
                                <button class="nav-link" id="Master_layout_3" data-toggle="pill"
                                    data-target="#master-layout_3" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Animal Rabies laboratory
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="tab-content sub-tab" id="tabContent">
                                <div class="tab-pane fade active show" id="master-layout_0" role="tabpanel"
                                    aria-labelledby="Master_layout_0">
                                <!-- Content and Images -->
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="rs-inner-blog">
                                        <div class="widget-area">
                                            <form method="get" action="{{ url('vaccination_dose') }}?data={{$date}}&animal_bite={{$animal_bite??''}}&v-date={{ $vDate}}">
                                                <div class="search-widget mb-20">
                                                        <select class="form-control" data-date="{{ request('date') }}"
                                                            onchange="changeURL(this.value)" name="type" id="vaccination-dose">
                                                            <option value="0,{{$date}},{{$animal_bite ?? ''}},{{ $vDate}}"{{ request('type') == 0 ? 'selected' : '' }}>
                                                            Select route of  vaccine administration </option>
                                                            <option value="1,{{$date}},{{$animal_bite ?? ''}},{{ $vDate}}"
                                                                {{ request('type') == 1 ? 'selected' : '' }}> IM
                                                                (Intra Muscular) </option>
                                                            <option
                                                                value="2,{{$date}},{{$animal_bite ?? ''}},{{ $vDate}}"{{ request('type') == 2 ? 'selected' : '' }}>
                                                                ID (Intra Dermal)</option>
                                                        </select>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 text-right">

                                        <span id="biteDate"><b>Date of Animal Bites: {{ date('d/m/Y', strtotime($date)) }}</b></span>
                                    </div>  
                                </div>
                                <div class="table-responsive hide-some-input">
                                    <table class="example1">
                                        <thead>
                                            <th>Dose Type</th>
                                            <th>Dose of vaccine</th>
                                            <th>Dose day 0</th>
                                            <th> Dose day 3</th>
                                            <th> Dose day 7</th>
                                            <th> Dose day 14</th>
                                            <th> Dose day 28 </th>
                                            <th> Summary</th>
            
                                        </thead>
                                        <tbody>
                                            <?php if(request('type') ==1){ ?>
                                            <tr>
                                                <td class="text-left">IM (Intra Muscular)</td>
                                                <td>{{ _('1 entire vaccine vial') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate)) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 3 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 7 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 14 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 28 days')) }}</td>
                                                <td> Total 5 injection 5 visit</td>
                                            </tr>
                                            <?php }elseif(request('type') ==2){ ?>
                                            <tr>
                                                <td class="text-left">ID (Intra Dermal)</td>
                                                <td>{{ _('0.1ml per dose on each Arm') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate)) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 3 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 7 days')) }}</td>
                                                <td>{{ __('NIL') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 28 days')) }}</td>
                                                <td>Total 8 injection 4 visits</td>
                                            </tr>
                                            <?php }else{  ?>
                                            <tr>
                                                <td class="text-left">IM (Intra Muscular)</td>
                                                <td>{{ _('1 entire vaccine vial') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate)) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 3 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 7 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 14 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 28 days')) }}</td>
                                                <td> Total 5 injection 5 visit</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">ID (Intra Dermal)</td>
                                                <td>{{ _('0.1ml per dose on each Arm') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate)) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 3 days')) }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 7 days')) }}</td>
                                                <td>{{ __('NIL') }}</td>
                                                <td>{{ date('d/m/Y', strtotime($vDate . ' + 28 days')) }}</td>
                                                <td> Total 8 injection 4 visits </td>
                                            </tr>
                                            <?php } ?>          
            
            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12">

                                    <ul class="mt-4 text-normal-ul">
                                        <li class="mb-2"><sup class="text-danger star"> * </sup>Site of vaccine injection:
                                            Adult/Children : Deltoid muscle (IM/ID)
                                            Infant and Children : Anterolateral thigh(IM)
                                        </li>
                
                                        <li class="mb-2"><sup class="text-danger star"> * </sup>All category III bites wounds must be
                                            infiltrated with Rabies immunoglobulin.
                
                                        </li>
                
                                        <li class="mb-2"><sup class="text-danger star"> * </sup>If you have never been vaccinated for
                                            Rabies, this is the schedule you need to follow.
                
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                <div class="tab-pane fade" id="master-layout_1" role="tabpanel"
                                    aria-labelledby="Master_layout_1">
                                    <!-- tab content start -->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="sub-tab1-content" role="tabpanel"
                                            aria-labelledby="sub-tab1">
                                            <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                                <div class="container">
                                                    {{-- <div class="sec-title6 text-center mb-40">
                                                  <h2 class="title">Quick Links</h2>
                                               </div> --}}
                                                    <div class="sec-bg-white">
                                                        <div class="gridFilter style2 text-left mb-40">
                                                            <button data-filter=".filter1" class="active">By
                                                                District</button>
                                                            <button data-filter=".filter2" class="btn2 on-the-map" id="on-the-map">On the
                                                                Map</button>

                                                        </div>
                                                        <div class="row grid nearest-vaccication">

                                                            <div class="col-lg-12 col-md-12 grid-item filter1">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <form method="get"
                                                                            action="">
                                                                            <div class="search-widget mb-20">
                                                                                <div class="row">
                                                                                    <div class="col-lg-5">
                                                                                        <select name="state"
                                                                                            id="stateC"
                                                                                            class="form-control" onchange="getDistrictList();">
                                                                                            <option
                                                                                                value="">
                                                                                                Select-Your-State
                                                                                            </option>
                                                                                           
                                                                                            @foreach($state as $states)
                                                                                            <option value="{{ $states->state_name }}">{{ $states->state_name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-5">
                                                                                        <div class="location-select">
                                                                                            <select name="cities" id="cities" class="form-control">
                                                                                                <option value="">
                                                                                                    Select-District
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-2">
                                                                                        <div class="btn-part view-all-btn ">
                                                                                            <button class="readon2 vaccination-btn mod mt-0" type="button" onclick="getSearchResults();">Search</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                    <div class="col-lg-12">

                                                                        <section class="loaded">

                                                                            <div class="table" id="search-data">
                                                                                
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 grid-item filter2 d-none">
                                                                <div class="row">
                                                                   <div class="col-lg-12">
                                                                    <div class="map">
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281445.36555606!2d72.11145795589131!3d20.758022812161478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1694066812387!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300px"></iframe>
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
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/Model_Anti_rabies_Clinic.pdf') }}"
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
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/ID_Hospitals.pdf') }}"
                                                                                        target="_blank">View
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
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="sub-tab2-content" role="tabpanel"
                                            aria-labelledby="sub-tab2">tab2</div>
                                    </div>
                                    <!-- tab content end -->
                                </div>
                                <div class="tab-pane fade" id="master-layout_2" role="tabpanel"
                                    aria-labelledby="Master_layout_2">
                                    <!-- tab content start -->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="sub-tab1-content" role="tabpanel"
                                            aria-labelledby="sub-tab1">
                                            <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                                <div class="container">
                                                    {{-- <div class="sec-title6 text-center mb-40">
                                                  <h2 class="title">Quick Links</h2>
                                               </div> --}}
                                                    <div class="sec-bg-white">
                                                        <div class="gridFilter style2 text-left mb-40">
                                                            <button data-filter=".filter3" class="active">By
                                                                District</button>
                                                            <button data-filter=".filter4" class="btn2 on-the-map" id="on-the-map">On the
                                                                Map</button>

                                                        </div>
                                                        <div class="row grid nearest-vaccication">

                                                            <div class="col-lg-12 col-md-12 grid-item filter3">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <form method="get"
                                                                            action="">
                                                                            <div class="search-widget mb-20">
                                                                                <div class="row">
                                                                                    <div class="col-lg-5">
                                                                                        <select name="state"
                                                                                            id="stateH"
                                                                                            class="form-control" onchange="getDistrictListH();">
                                                                                            <option
                                                                                                value="">
                                                                                                Select-Your-State
                                                                                            </option>
                                                                                           
                                                                                            @foreach($human_labs_state as $human_labs_state)
                                                                                            <option value="{{ $human_labs_state->state_name }}">{{ $human_labs_state->state_name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-5">
                                                                                        <div class="location-select">
                                                                                            <select name="cities" id="citiesH" class="form-control">
                                                                                                <option value="">
                                                                                                    Select-District
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-2">
                                                                                        <div class="btn-part view-all-btn ">
                                                                                            <button class="readon2 vaccination-btn mod mt-0" type="button" onclick="getSearchResults();">Search</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                    <div class="col-lg-12">

                                                                        <section class="loaded">

                                                                            <div class="table" id="search-data">
                                                                                
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 grid-item filter4 ">
                                                                <div class="row">
                                                                   <div class="col-lg-12">
                                                                    <!-- <div class="map">
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281445.36555606!2d72.11145795589131!3d20.758022812161478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1694066812387!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300px"></iframe>
                                                                    </div> -->
                                                                   </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 grid-item filter3 d-none">
                                                                <div class="row align-item-center">
                                                                    <div class="col-lg-12">
                                                                        <div class="content">
                                                                            <div class="sec-title mb-10">
                                                                                <div class="blog-button">
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/Model_Anti_rabies_Clinic.pdf') }}"
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
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/ID_Hospitals.pdf') }}"
                                                                                        target="_blank">View
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
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="sub-tab2-content" role="tabpanel"
                                            aria-labelledby="sub-tab2">tab2</div>
                                    </div>
                                    <!-- tab content end -->
                                </div>
                                <div class="tab-pane fade" id="master-layout_3" role="tabpanel"
                                    aria-labelledby="Master_layout_3">
                                    <!-- tab content start -->

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="sub-tab1-content" role="tabpanel"
                                            aria-labelledby="sub-tab1">
                                            <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                                <div class="container">
                                                    {{-- <div class="sec-title6 text-center mb-40">
                                                  <h2 class="title">Quick Links</h2>
                                               </div> --}}
                                                    <div class="sec-bg-white">
                                                        <div class="gridFilter style2 text-left mb-40">
                                                            <button data-filter=".filter1" class="active">By
                                                                District</button>
                                                            <button data-filter=".filter2" class="btn2 on-the-map" id="on-the-map">On the
                                                                Map</button>

                                                        </div>
                                                        <div class="row grid nearest-vaccication">

                                                            <div class="col-lg-12 col-md-12 grid-item filter1">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <form method="get"
                                                                            action="">
                                                                            <div class="search-widget mb-20">
                                                                                <div class="row">
                                                                                    <div class="col-lg-5">
                                                                                        <select name="state"
                                                                                            id="stateA"
                                                                                            class="form-control" onchange="getDistrictListA();">
                                                                                            <option
                                                                                                value="">
                                                                                                Select-Your-State
                                                                                            </option>
                                                                                           
                                                                                            @foreach($animal_labs_state as $animal_labs_state)
                                                                                            <option value="{{ $animal_labs_state->state_name }}">{{ $animal_labs_state->state_name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-5">
                                                                                        <div class="location-select">
                                                                                            <select name="cities" id="citiesA" class="form-control">
                                                                                                <option value="">
                                                                                                    Select-District
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-2">
                                                                                        <div class="btn-part view-all-btn ">
                                                                                            <button class="readon2 vaccination-btn mod mt-0" type="button" onclick="getSearchResults();">Search</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>

                                                                    </div>

                                                                    <div class="col-lg-12">

                                                                        <section class="loaded">

                                                                            <div class="table" id="search-data">
                                                                                
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 grid-item filter2 d-none">
                                                                <div class="row">
                                                                   <div class="col-lg-12">
                                                                    <div class="map">
                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281445.36555606!2d72.11145795589131!3d20.758022812161478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1694066812387!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="300px"></iframe>
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
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/Model_Anti_rabies_Clinic.pdf') }}"
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
                                                                                    <a class="blog-btn"
                                                                                        href="{{ asset('assets/Nrcp_img/ID_Hospitals.pdf') }}"
                                                                                        target="_blank">View
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
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="sub-tab2-content" role="tabpanel"
                                            aria-labelledby="sub-tab2">tab2</div>
                                    </div>
                                    <!-- tab content end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('post-scripts')

    <script>
        
        function changeURL(e) {
            var temp = new Array();
            var temp = e.split(',');
            document.location.href = "vaccination_dose?type=" + temp[0] + '&' + 'date=' + temp[1]+'&'+'animal_bite=' + temp[2]+'&'+'v-date=' + temp[3];
        }
        $(document).ready(function() {
            $(".btn2").click(function() {
                $(".grid-item.filter2").removeClass('d-none');
            });
            $(".btn3").click(function() {
                $(".grid-item.filter3").removeClass("d-none");
            });
        });
    
    
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function
                    opener: function(openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        });
        
        function getDistrictList(){
        var statename = $('#stateC').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "get-districts-list",
            type: "POST",
            data:{
                'state_name' : statename // in header request I'm getting value [productName: plastic product] *
                },
            success:function(data){
                document.querySelector('#cities').innerHTML = data;
                $select.selectmenu("refresh", true);
            },
            error:function(e){
                alert("Some error occured. Please try again later.");
            }
        });
    }
    
        function getDistrictListH(){
        var statename = $('#stateH').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "get-districts-list-human",
            type: "POST",
            data:{
                'state_name' : statename // in header request I'm getting value [productName: plastic product] *
                },
            success:function(data){
                document.querySelector('#citiesH').innerHTML = data;
                $select.selectmenu("refresh", true);
            },
            error:function(e){
                alert("Some error occured. Please try again later.");
            }
        });
    }
    
        function getDistrictListA(){
        var statename = $('#stateA').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "get-districts-list-animal",
            type: "POST",
            data:{
                'state_name' : statename // in header request I'm getting value [productName: plastic product] *
                },
            success:function(data){
                document.querySelector('#citiesA').innerHTML = data;
                $select.selectmenu("refresh", true);
            },
            error:function(e){
                alert("Some error occured. Please try again later.");
            }
        });
    }
    
    
    //Search code starts
    function getSearchResults(){
        var statename = $('#state').val();
        var districtname = $('#cities').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "get-vaccination-center",
            type: "POST",
            data:{
                'state_name' : statename,
                'city_name' : districtname // in header request I'm getting value [productName: plastic product] *
                },
            success:function(data){
                document.querySelector('#search-data').innerHTML = data
            },
            error:function(e){
                alert("Some error occured. Please try again later.");
            }
        });
    }

$(".nav-link").click(function(){
    $(".row.grid.nearest-vaccication").addClass('nearest-vaccication1');
    
  });

  $("#on-the-map").click(function(){
    $(".row.grid.nearest-vaccication").removeClass('nearest-vaccication1');
    
  });

  $("#on-the-map").click(function(){
    console.log("this is tab");
        $(".col-lg-12.col-md-12.grid-item.filter4.d-none").css("display", "block");
        col-lg-12 col-md-12 grid-item filter4 
    })

    </script>
@endpush
