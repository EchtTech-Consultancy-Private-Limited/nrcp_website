@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('content')


<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="https://dev.nrcp.staggings.in/assets/Nrcp_img/banner.png" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Master Layout</h1>
        </div>
    </div>
    <div class="rs-publications-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="rs-breadcrumbs ">

                        <div class="breadcrumbs-text ">

                            <ul>
                                <li>
                                    <a class="active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Master Layout</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="publication-sociol-icon">
                        <ul class="d-flex justify-content-end">
                            <li><a href="javascript:void();" id="" download> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/printer.png"
                                        alt="printer Image" aria-label="printer" class="slash">/</a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/share.png"
                                        alt="share Image" aria-label="share"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/facebook.png"
                                        alt="facebook Image" aria-label="facebook"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/twitter.png"
                                        alt="twitter Image" aria-label="twitter"></a></li>
                            <li><a href="javascript:void();"> <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/sociol-icon/linkedin.png"
                                        alt="linkedin Image" aria-label="linkedin"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="Master_layout" data-toggle="pill"
                                data-target="#master-layout" type="button" role="tab" aria-controls="annual-report"
                                aria-selected="false">Master Layout</button>

                        </div>
                    </div>
                    <div class="col-lg">

                        <div class="tab-content" id="tabContent">

                            <div class="tab-pane fade show active" id="master-layout" role="tabpanel"
                                aria-labelledby="Master_layout">

                                <!-- Content and Images -->

                                <section>                                     
                                        <div class="heading-title">
                                            <h2 class="title">Heading</h2>
                                            <a href="javascript:vopid();" class="readon orange-btn"> Archive </a>
                                        </div>

                                        <p>
                                            Joint Launch of "National Action Plan for Dog Mediated Rabies
                                            Elimination from India 2030" at Nirman Bhawan on 28th Sep 2021 by
                                            Hon'ble Union Minister HFM, Hon'ble Minister of State HFM &amp; Hon'ble
                                            Union Minister MoF&amp;AHD and Hon'ble Moinister of State MoF&amp;A
                                        </p>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-3">
                                                <div class="event-img">
                                                    <a href="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357849.png" class="image-link">
                                                        <img src="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357849.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-3">
                                                <div class="event-img">
                                                    <a href="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357872.png" class="image-link">
                                                        <img src="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357872.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-3">
                                                <div class="event-img">
                                                    <a href="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357816.png" class="image-link">
                                                        <img src="https://dev.nrcp.staggings.in/public/uploads/EventsManagement/169296357816.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  
                                </section>




                                <!-- Table section -->

                                <section>
                                    <div class="heading-title">
                                        <h2 class="title">Technical Document and Guideline</h2>
                                        <a href="javascript:vopid();" class="readon orange-btn"> Archive </a>
                                    </div>

                                    <div class="table">
                                        <table>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>View/Download</th>
                                            </tr>
                                            <tr>
                                                <td>Case Definition for Rabies</td>
                                                <td>03/05/2008</td>
                                                <td>
                                                    <div class="download ">
                                                        <a href="#"><span class="view">View</span></a><span
                                                            class="size">(7kb)</span><i class="fa fa-file-pdf-o"
                                                            aria-hidden="true"></i> <a href="#"><i
                                                                class="fa fa-download" aria-hidden="true"></i></a>
                                                    </div>


                                                    <!-- <div class="accessible-version">
                                                <span>Accessible Version:</span><span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                                </div> -->
                                                </td>
                                            </tr>


                                            <tr>
                                                <td> National Guidelines for Rabies Prophylaxis, 2019 </td>
                                                <td>03/05/2008</td>
                                                <td>
                                                    <div class="download ">
                                                        <a href="#"><span class="view">View</span></a><span
                                                            class="size">(7kb)</span><i class="fa fa-file-pdf-o"
                                                            aria-hidden="true"></i> <a href="#"><i
                                                                class="fa fa-download" aria-hidden="true"></i></a>
                                                    </div>




                                                </td>
                                            </tr>

                                            <tr>
                                                <td> National Action Plan for Dog Mediated Rabies Elimination by
                                                    2030 </td>
                                                <td>03/05/2008</td>
                                                <td>
                                                    <div class="download ">
                                                        <a href="#"><span class="view">View</span></a><span
                                                            class="size">(7kb)</span><i class="fa fa-file-pdf-o"
                                                            aria-hidden="true"></i> <a href="#"><i
                                                                class="fa fa-download" aria-hidden="true"></i></a>
                                                    </div>




                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Guidance Note for Addressing Anti Rabies Vaccine and Anti
                                                    Rabies Serum Shortage </td>

                                                <td>03/05/2009</td>
                                                <td>
                                                    <div class="download ">
                                                        <a href="#"><span class="view">View</span></a><span
                                                            class="size">(7kb)</span><i class="fa fa-file-pdf-o"
                                                            aria-hidden="true"></i> <a href="#"><i
                                                                class="fa fa-download" aria-hidden="true"></i></a>
                                                    </div>




                                                </td>
                                            </tr>

                                            <tr>
                                                <td> Rabies- General Aspects & Laboratory Diagnostic Techniques 2022
                                                </td>
                                                <td>05/05/2002</td>
                                                <td>
                                                    <div class="download ">
                                                        <a href="#"><span class="view">View</span></a><span
                                                            class="size">(7kb)</span><i class="fa fa-file-pdf-o"
                                                            aria-hidden="true"></i> <a href="#"><i
                                                                class="fa fa-download" aria-hidden="true"></i></a>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>








@endsection