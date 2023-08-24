@extends('layouts.main')
@section('title')
{{__('Publications')}}
@endsection
@section('content')
<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Publications</h1>
           
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
                                <li>Publications</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="publication-sociol-icon">
                        <ul class="d-flex justify-content-end">
                            <li><a href="#"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/printer.png') }}"
                                        alt="printer Image" aria-label="printer" class="slash">/</a></li>
                            <li><a href="#"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/share.png') }}"
                                        alt="share Image" aria-label="share"></a></li>
                            <li><a href="#"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/facebook.png') }}"
                                        alt="facebook Image" aria-label="facebook"></a></li>
                                        <li><a href="#"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/twitter.png') }}"
                                        alt="twitter Image" aria-label="twitter"></a></li>
                            <li><a href="#"> <img src="{{ asset('assets/Nrcp_img/sociol-icon/linkedin.png') }}"
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
                            <button class="nav-link active" id="technical-document-tab" data-toggle="pill" data-target="#technical-document"
                                type="button" role="tab" aria-controls="technical-document" aria-selected="true">Technical Document and Guideline</button>
                            <button class="nav-link" id="research-papers-tab" data-toggle="pill" data-target="#research-papers"
                                type="button" role="tab" aria-controls="research-papers" aria-selected="false">Research Papers</button>
                            <button class="nav-link" id="annual-report-tab" data-toggle="pill" data-target="#annual-report"
                                type="button" role="tab" aria-controls="annual-report"
                                aria-selected="false">Annual Report</button>
                           
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                  
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="technical-document" role="tabpanel" aria-labelledby="technical-document-tab">
                           
                            <div class="table">
                                <table>
                                    <tr>
                                    <h2 class="title">Technical Document and Guideline</h2>
                                    </tr>
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
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        <!-- <div class="accessible-version">
                                        <span>Accessible Version:</span><span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div> -->
                                       </td>
                                    </tr>
                                  

                                    <tr>
                                    <td>	National Guidelines for Rabies Prophylaxis, 2019 </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	National Action Plan for Dog Mediated Rabies Elimination by 2030 </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Guidance Note for Addressing Anti Rabies Vaccine and Anti Rabies Serum Shortage </td>

                                       <td>03/05/2009</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Rabies- General Aspects & Laboratory Diagnostic Techniques 2022 </td>
                                       <td>05/05/2002</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(17kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        <div class="download">
                                        <span>Accessible Version:</span> <span class="view">View</span><span class="size">(17kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                        
                                       </td>
                                    </tr>
                                </table>
                            </div>
                             </div>
                            <div class="tab-pane fade" id="research-papers" role="tabpanel" aria-labelledby="research-papers-tab">
                                profile... 
                            </div>
                            <div class="tab-pane fade" id="annual-report" role="tabpanel" aria-labelledby="annual-report-tab">
                                messages...
                            </div>
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                settings...
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

</div>
@endsection