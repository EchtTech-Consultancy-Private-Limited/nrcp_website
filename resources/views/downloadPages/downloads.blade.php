@extends('layouts.main')
@section('title')
{{__('Downloads')}}
@endsection
@section('content')
<div class="main-content">
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Downloads</h1>
           
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
                                <li>Downloads</li>
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
                            <button class="nav-link active" id="sops-tab" data-toggle="pill" data-target="#sops"
                                type="button" role="tab" aria-controls="sops" aria-selected="true">SOPs</button>
                            <button class="nav-link" id="reporting-formate-tab" data-toggle="pill" data-target="#reporting-formate"
                                type="button" role="tab" aria-controls="reporting-formate" aria-selected="false">Reporting Format under NRCP</button>
                            <button class="nav-link" id="list-of-laboratories-tab" data-toggle="pill" data-target="#list-of-laboratories"
                                type="button" role="tab" aria-controls="list-of-laboratories"
                                aria-selected="false">List of laboratories</button>

                                <button class="nav-link" id="rabbies-case-management-tab" data-toggle="pill" data-target="#rabbies-case-management"
                                type="button" role="tab" aria-controls="rabbies-case-management"
                                aria-selected="false">Rabies Case Management facilities</button>
                                
                                <button class="nav-link" id="committees-tab" data-toggle="pill" data-target="#committees"
                                type="button" role="tab" aria-controls="committees"
                                aria-selected="false">Committees</button>

                               
                           
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                   
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="sops" role="tabpanel" aria-labelledby="sops-tab">
                           
                            <div class="table">
                                <table>
                                     <tr> <h2 class="title">SOPs</h2></tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View/Download</th>
                                    </tr>

                                    <tr>
                                    <td>	SOP of wound washing</td>
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
                                    <td>	SOP of Model Anti Rabies clinic</td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	SOP for mass dog vaccination</td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	SOP for dog population management</td>

                                       <td>03/05/2009</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    
                                </table>
                            </div>
                             </div>
                            <div class="tab-pane fade" id="reporting-formate" role="tabpanel" aria-labelledby="reporting-formate-tab">
                            <div class="table">
                                <table>
                                <tr> <h2 class="title">Reporting Format under NRCP</h2></tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View/Download</th>
                                    </tr>
                        
                                    <tr>
                                    <td>	State monthly Reporting format</td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                       </td>
                                    </tr>
                                  

                                    <tr>
                                    <td>	District monthly reporting format</td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Line list format for Reporting Human Rabies case</td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Laboratory monthly format</td>

                                       <td>03/05/2009</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Animal bite Register</td>
                                       <td>05/05/2002</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(17kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="list-of-laboratories" role="tabpanel" aria-labelledby="list-of-laboratories-tab">
                            <div class="table">
                                <table>
                                <tr> <h2 class="title">List of laboratories</h2></tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View/Download</th>
                                    </tr>
                                     


                                    <tr>
                                      <td>	Animal Rabies Diagnostic Labs </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                       </td>
                                    </tr>
                                  

                                    <tr>
                                    <td>	Human Rabies Diagnostic Labs </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                   
                                </table>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="rabbies-case-management" role="tabpanel" aria-labelledby="rabbies-case-management-tab">
                            <div class="table">
                                <table>

                                <tr> <h2 class="title">Rabies Case Management facilities</h2></tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View/Download</th>
                                    </tr>
                                    	

                                    <tr>
                                       <td>List of Anti Rabies Clinics in India</td>
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
                                    <td>	List of Critical Care Units (Infectious Disease Hospitals) in India </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                </table>
                            </div>
                            </div>

                            <div class="tab-pane fade" id="committees" role="tabpanel" aria-labelledby="committees-tab">
                            <div class="table">
                                <table>
                                <tr> <h2 class="title">Committees</h2></tr>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View/Download</th>
                                    </tr>
                                  

                                    <tr>
                                    <td>	National joint Steering Committee-Rabies Elimination </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                       
                                       </td>
                                    </tr>
                                  

                                    <tr>
                                    <td>	National Technical Advisory committee on Rabies </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	Standing committee on zoonosis </td>
                                       <td>03/05/2008</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	State Joint steering committee- Rabies Elimination </td>

                                       <td>03/05/2009</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                        
                                        
                                       </td>
                                    </tr>

                                    <tr>
                                    <td>	District joint steering committee- Rabies Elimination </td>
                                       <td>05/05/2002</td>
                                       <td>
                                        <div class="download ">
                                            <span class="view">View</span><span class="size">(17kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                        </div>

                                       
                                        
                                       </td>
                                    </tr>
                                </table>
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