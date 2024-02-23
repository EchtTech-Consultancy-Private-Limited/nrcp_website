@extends('layouts.main')

{{-- map js --}}
<script>
    var baseUrl = '{{ url('/') }}';
</script>

<style>
    /* html,
    body,
    #map {
        height: 100%;
        margin: 0;
        padding: 0;
    } */

    .esriPopup .titleButton.close {
        top: 11px;
    }
</style>
{{-- map js --}}


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
    if (request('animal_bite') == 'yes') {
        $vDate = request('v-date');
        $date = request('date');
        $animal_bite = request('animal_bite');
    } elseif (request('animal_bite') == 'no') {
        $vDate = date('Y-m-d'); //request('date');
        $date = request('date');
    } else {
        $vDate = request('date');
        $date = request('date');
    }
    ?>
    <div id="rs-about" class="event-page-section pt-60 pb-50 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link

                                {{ request('tab') == 'nhrl' || request('tab') == 'narl' ? '' : 'active' }}"


                                 id="Master_layout_0" data-toggle="pill"
                                    data-target="#master-layout_0" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="true" tabindex="0">
                                    Know Your Vaccination Schedule
                                </button>
                                <button class="nav-link " id="Master_layout_4" data-toggle="pill"
                                    data-target="#master-layout_4" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Know Your RIG Dose
                                </button>
                                <button class="nav-link" id="Master_layout_1" data-toggle="pill"
                                    data-target="#master-layout_1" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Health Facility Where Rabies Vaccine Available
                                </button>

                                <button class="nav-link {{ request('tab') == 'nhrl' ? ' active' : '' }}" id="Master_layout_2" data-toggle="pill"
                                    data-target="#master-layout_2" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Human Rabies Laboratory
                                </button>

                                <button class="nav-link {{ request('tab') == 'narl' ? ' active' : '' }}" id="Master_layout_3" data-toggle="pill"
                                    data-target="#master-layout_3" type="button" role="tab"
                                    aria-controls="annual-report" aria-selected="false" tabindex="0">
                                    Nearest Animal Rabies Laboratory
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="tab-content sub-tab" id="tabContent">
                                <div class="tab-pane  fade active show" id="master-layout_0" role="tabpanel"
                                    aria-labelledby="Master_layout_0">
                                    <!-- Content and Images -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="rs-inner-blog">
                                                <div class="widget-area">
                                                    <form method="get"
                                                        action="{{ url('vaccination_dose') }}?data={{ $date }}&animal_bite={{ $animal_bite ?? '' }}&v-date={{ $vDate }}">
                                                        <div class="search-widget mb-20">
                                                            <select class="form-control" data-date="{{ request('date') }}"
                                                                onchange="changeURL(this.value)" name="type"
                                                                id="vaccination-dose">
                                                                <option
                                                                    value="0,{{ $date }},{{ $animal_bite ?? '' }},{{ $vDate }}"{{ request('type') == 0 ? 'selected' : '' }}>
                                                                    Select route of vaccine administration </option>
                                                                <option
                                                                    value="1,{{ $date }},{{ $animal_bite ?? '' }},{{ $vDate }}"
                                                                    {{ request('type') == 1 ? 'selected' : '' }}> IM
                                                                    (Intra Muscular) </option>
                                                                <option
                                                                    value="2,{{ $date }},{{ $animal_bite ?? '' }},{{ $vDate }}"{{ request('type') == 2 ? 'selected' : '' }}>
                                                                    ID (Intra Dermal)</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <span id="biteDate"><b>Date of Animal Bites:
                                                    {{ date('d/m/Y', strtotime($date)) }}</b></span>
                                            <div id="vaccinationDate" class="mt-1"><b>Date of 1st Dose of vaccination
                                                    (day0): {{ date('d/m/Y', strtotime($vDate)) }}</b></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive hide-some-input">
                                        <table class="example1">
                                            <thead>
                                                <th>Dose Type</th>
                                                <th>Dose of vaccine</th>
                                                <th>Dose day 0</th>
                                                <th>Dose day 3</th>
                                                <th>Dose day 7</th>
                                                <th>Dose day 14</th>
                                                <th>Dose day 28 </th>
                                                <th>Summary</th>
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
                                            <li class="mb-2"><sup class="text-danger star"> * </sup>Site of vaccine
                                                injection:
                                                Adult/Children : Deltoid muscle (IM/ID)
                                                Infant and Children : Anterolateral thigh(IM)
                                            </li>

                                            <li class="mb-2"><sup class="text-danger star"> * </sup>All category III bites
                                                wounds must be
                                                infiltrated with Rabies immunoglobulin.

                                            </li>

                                            <li class="mb-2"><sup class="text-danger star"> * </sup>If you have never been
                                                vaccinated for
                                                Rabies, this is the schedule you need to follow.

                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Know Your Dose Tab -->
                                <div class="tab-pane  fade" id="master-layout_4" role="tabpanel"
                                    aria-labelledby="Master_layout_4">
                                    <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                        <div class="container">
                                            <div class="sec-title6 title-78 text-center mb-20">
                                                <h2 class="title text-left">Know Your RIG Dose</h2>
                                            </div>

                                            <!-- ************************************************************************** -->


                                            <div class="sec-bg-white vaccination-tab">
                                                <div class="row nearest-vaccication">

                                                    <div class="col-lg-12 col-md-12 ">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <form method="get" action="">
                                                                    <div class="search-widget mb-20">
                                                                        <div class="row">
                                                                            <div class="col-lg-8 row align-items-center">
                                                                                <label for=""
                                                                                    class="col-md-5 mb-0 some-bold-l">Enter
                                                                                    Weight of Patient : </label>
                                                                                <input type="number" id="calculate"
                                                                                    class="form-control col-md-6" required
                                                                                    placeholder="Enter Weight">
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="radio-btn-box pt-7">
                                                                                    <div class="d-flex">
                                                                                        <input type="radio"
                                                                                            id="Equine" name="RIG"
                                                                                            class="form-control radio RIG"
                                                                                            value="40">
                                                                                        <label for="Equine">Equine
                                                                                            RIG</label>
                                                                                    </div>

                                                                                    <div class="d-flex">
                                                                                        <input type="radio"
                                                                                            id="Human" name="RIG"
                                                                                            class="form-control radio RIG"
                                                                                            value="20">
                                                                                        <label for="Human">Human
                                                                                            RIG</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <div
                                                                                    class="btn-part view-all-btn mt-30 mt-smm-0">
                                                                                    <button
                                                                                        class="readon2 vaccination-btn mod mb-0"
                                                                                        id="calculate" onclick="fun()"
                                                                                        type="button">Calculate
                                                                                        Dose</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>

                                                                <div class="calculate_dosse">

                                                                </div>



                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- ********************************************************************* -->

                                        </div>
                                    </div>

                                </div>
                                <!-- Know Your Dose Tab End-->

                                <div class="tab-pane  fade" id="master-layout_1" role="tabpanel"
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

                                                    <!-- ************************************************************************** -->


                                                    <div class="sec-bg-white vaccination-tab">
                                                        <ul class="nav nav-tabs vaccination-child-tab" id="myTab"
                                                            role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="district-tab"
                                                                    data-toggle="tab" data-target="#district"
                                                                    type="button" role="tab"
                                                                    aria-controls="district" aria-selected="true">By
                                                                    District</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="map-tab" data-toggle="tab"
                                                                    data-target="#map" type="button" role="tab"
                                                                    aria-controls="map" aria-selected="false">On the Map
                                                                </button>
                                                            </li>

                                                        </ul>
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="district"
                                                                role="tabpanel" aria-labelledby="district-tab">
                                                                <div class="row nearest-vaccication">

                                                                    <div class="col-lg-12 col-md-12 ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <form method="get" action="">
                                                                                    <div class="search-widget mb-20">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-5">
                                                                                                <select name="state"
                                                                                                    required id="stateC"
                                                                                                    class="form-control"
                                                                                                    onchange="getDistrictList();">
                                                                                                    <option value="0">
                                                                                                        All Option
                                                                                                    </option>

                                                                                                    @foreach ($state as $states)
                                                                                                        <option
                                                                                                            value="{{ $states->state_name }}">
                                                                                                            {{ $states->state_name }}
                                                                                                        </option>
                                                                                                    @endforeach

                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-lg-5">
                                                                                                <div
                                                                                                    class="location-select">
                                                                                                    <select name="cities"
                                                                                                        required
                                                                                                        id="citiesC"
                                                                                                        class="form-control">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            All Option
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-2">
                                                                                                <div
                                                                                                    class="btn-part view-all-btn ">
                                                                                                    <button
                                                                                                        class="readon2 vaccination-btn mod mt-0"
                                                                                                        type="button"
                                                                                                        id="getSearchResults"
                                                                                                        onclick="getSearchResults();">Search</button>
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
                                                                </div>

                                                            </div>
                                                            <div class="tab-pane fade" id="map" role="tabpanel"
                                                                aria-labelledby="map-tab">


                                                                <div class="row">
                                                                <a class="readon2 mod float-right mt-0 print-button" href="javascript:void();" rel="noopener noreferrer" tabindex="0" onclick="printContent('printMap1')" id="btn-print-map"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="col-lg-12" id="printMap1">
                                                                        <div class="map">
                                                                            <div id="newMapC"></div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- ********************************************************************* -->

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
                                        <div class="tab-pane fade show active



                                        " id="sub-tab1-content" role="tabpanel"
                                            aria-labelledby="sub-tab1">
                                            <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                                <div class="container">

                                                    <!-- ************************************************************************** -->


                                                    <div class="sec-bg-white vaccination-tab">
                                                        <ul class="nav nav-tabs vaccination-child-tab" id="myTab"
                                                            role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="district-tab2"
                                                                    data-toggle="tab" data-target="#district2"
                                                                    type="button" role="tab"
                                                                    aria-controls="district2" aria-selected="true">By
                                                                    District</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="map-tab2" data-toggle="tab"
                                                                    data-target="#map2" type="button" role="tab"
                                                                    aria-controls="map2" aria-selected="false">On the Map
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="district2"
                                                                role="tabpanel" aria-labelledby="district-tab2">
                                                                <div class="row nearest-vaccication">
                                                                    <div class="col-lg-12 col-md-12 ">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <form method="get" action="">
                                                                                    <div class="search-widget mb-20">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-5">
                                                                                                <select name="state"
                                                                                                    id="stateH"
                                                                                                    class="form-control"
                                                                                                    onchange="getDistrictListH();">
                                                                                                    <option value="0">
                                                                                                        All Option
                                                                                                    </option>

                                                                                                    @foreach ($human_labs_state as $human_labs_state)
                                                                                                        <option
                                                                                                            value="{{ $human_labs_state->state_name }}">
                                                                                                            {{ $human_labs_state->state_name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-lg-5">
                                                                                                <div
                                                                                                    class="location-select">
                                                                                                    <select name="cities"
                                                                                                        id="citiesH"
                                                                                                        class="form-control">
                                                                                                        <option
                                                                                                            value="">
                                                                                                            All Option
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-2">
                                                                                                <div
                                                                                                    class="btn-part view-all-btn ">
                                                                                                    <button
                                                                                                        class="readon2 vaccination-btn mod mt-0"
                                                                                                        id="getSearchResultsH"
                                                                                                        type="button"
                                                                                                        onclick="getSearchResultsH();">Search</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </form>

                                                                            </div>

                                                                            <div class="col-lg-12">

                                                                                <section class="loaded">

                                                                                    <div class="table"
                                                                                        id="search-data-H">

                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- show map of citywise --}}
                                                            <div class="fade" id="map2" role="tabpanel"
                                                                aria-labelledby="map-tab2">
                                                                <div class="row">
                                                                <a class="readon2 mod float-right mt-0 print-button" href="javascript:void();" rel="noopener noreferrer" tabindex="0" onclick="printContent('printMap2')" id="btn-print-map"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="col-lg-12" id="printMap2">
                                                                        <div id="newMapH"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- End show map of citywise --}}
                                                        </div>
                                                    </div>
                                                    <!-- ********************************************************************* -->
                                                    <div class="sec-bg-white">

                                                        <div class="row grid nearest-vaccication">

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

                                <div class="tab-pane  fade" id="master-layout_3" role="tabpanel"
                                    aria-labelledby="Master_layout_3">
                                    <!-- tab content start -->

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active"

                                         id="sub-tab1-content" role="tabpanel"
                                            aria-labelledby="sub-tab1">
                                            <div id="rs-popular-courses" class="rs-popular-courses style1 modify1">
                                                <div class="container">
                                                    <!-- ************************************************************************** -->
                                                    <div class="sec-bg-white vaccination-tab">
                                                        <ul class="nav nav-tabs vaccination-child-tab" id="myTab2"
                                                            role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="district-tab3"
                                                                    data-toggle="tab" data-target="#district3"
                                                                    type="button" role="tab"
                                                                    aria-controls="district3" aria-selected="true">By
                                                                    District</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="map-tab3" data-toggle="tab"
                                                                    data-target="#map3" type="button" role="tab"
                                                                    aria-controls="map3" aria-selected="false">On the Map
                                                                </button>
                                                            </li>

                                                        </ul>

                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="district3"
                                                                role="tabpanel" aria-labelledby="district-tab3">
                                                                <div class="nearest-vaccication">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <form method="get" action="">
                                                                                <div class="search-widget mb-20">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-5">

                                                                                            <select name="state"
                                                                                                id="stateA"
                                                                                                class="form-control"
                                                                                                onchange="getDistrictListA();">
                                                                                                <option value="0">
                                                                                                    All Option
                                                                                                </option>

                                                                                                @foreach ($animal_labs_state as $animal_labs_state)
                                                                                                    <option
                                                                                                        value="{{ $animal_labs_state->state_name }}">
                                                                                                        {{ $animal_labs_state->state_name }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-lg-5">
                                                                                            <div class="location-select">
                                                                                                <select name="cities"
                                                                                                    id="citiesA"
                                                                                                    class="form-control">
                                                                                                    <option value="">
                                                                                                        All Option
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-lg-2">
                                                                                            <div
                                                                                                class="btn-part view-all-btn ">
                                                                                                <button
                                                                                                    class="readon2 vaccination-btn mod mt-0 print-button"
                                                                                                    id="getSearchResultsA"
                                                                                                    type="button">Search</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </form>

                                                                        </div>

                                                                        <div class="col-lg-12">

                                                                            <section class="loaded">

                                                                                <div class="table" id="search-data-A">

                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="map3" role="tabpanel"
                                                                aria-labelledby="map-tab3">
                                                                <div class="row">
                                                                <a class="readon2 mod float-right mt-0 print-button" href="javascript:void();" rel="noopener noreferrer" tabindex="0" onclick="printContent('printMap3')" id="btn-print-map"><i class="fa fa-print"></i> Print</a>
                                                                    <div class="col-lg-12" id="printMap3">

                                                                        <div class="map">
                                                                            <div id="newMapA"></div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- ********************************************************************* -->
                                                    <div class="sec-bg-white">

                                                        <div class="row grid nearest-vaccication">

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
