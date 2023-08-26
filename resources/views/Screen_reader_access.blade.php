
@extends('layouts.main')
@section('title')
{{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
{{ __('Home') }}
@endsection
@section('breadcrumbs')
{{ __('Home') }}
@endsection
@section('content')
<?php //dd($menu)
    ?>

    <div class="main-content">

        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Screen Reader Access</h1>           
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
                                    <li>Screen Reader Access</li>
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
                <div class="heading-title">
                    <h2 class="title"> Screen Reader Access </h2>
                </div>

                <p>
                    The website of Indian Institute of Management Kashipur complies with Guidelines for Indian Government Websites and World Wide Web Consortium (W3C) Web Content Accessibility Guidelines (WCAG) 2.0 level A. This will enable people with visual impairments access the website using technologies, such as screen readers. The information of the website is accessible with different screen readers, such as JAWS, NVDA, SAFA, Supernova and Window-Eyes.
                </p>
                <p> Following table lists the information about different screen readers: <b>Information related to the various screen readers</b>
             </p>

             <table>

                <thead>
    
                    <tr>
    
                        <th>Screen Reader</th>
                        <th>Website</th>
                        <th>Free / Commercial</td>
    
                    </tr>
    
                </thead>
    
                <tbody>
                        <tr>
                        <td>Non Visual Desktop Access (NVDA)</td>
                        <td><a class="ext" href="http://www.nvda-project.org/" target="_BLANK" title="External site that opens in a new window">http://www.nvda-project.org/ (link is external)</a><br>(External website that opens in a new window)</td>
                        <td>Free</td>
                        </tr>
                        <tr>
                            <td>System Access To Go</td>
                            <td><a class="ext" href="http://www.satogo.com/" target="_BLANK" title="External site that opens in a new window">http://www.satogo.com/ (link is external)</a><br>(External website that opens in a new window)</td>
                            <td>Free</td> </tr><tr><td>Web Anywhere</td>
                            <td><a class="ext" href="http://webanywhere.cs.washington.edu/wa.php" target="_BLANK" title="External site that opens in a new window">http://webanywhere.cs.washington.edu/wa.php (link is external)</a><br>(External website that opens in a new window)</td>
                            <td>Free</td> </tr><tr><td>Hal</td>
                            <td><a class="ext" href="http://www.yourdolphin.co.uk/productdetail.asp?id=5" target="_BLANK" title="External site that opens in a new window">http://www.yourdolphin.co.uk/productdetail.asp?id=5 (link is external)</a><br>(External website that opens in a new window)</td>
                            <td>Commercial</td> </tr><tr>
                            <td>JAWS</td> <td><a class="ext" href="http://www.freedomscientific.com/jaws-hq.asp" target="_BLANK" title="External site that opens in a new window">http://www.freedomscientific.com/jaws-hq.asp (link is external)</a><br> 						(External website that opens in a new window)</td>
                            <td>Commercial</td> </tr><tr><td> Supernova</td> <td> 						<a class="ext" href="http://www.yourdolphin.co.uk/productdetail.asp?id=1" target="_BLANK" title="External site that opens in a new window">http://www.yourdolphin.co.uk/productdetail.asp?id=1 (link is external)</a><br> 						(External website that opens in a new window)</td> <td> 						Commercial</td> </tr><tr><td> 						Window-Eyes</td> <td> 						<a class="ext" href="http://www.gwmicro.com/Window-Eyes/" target="_BLANK" title="External site that opens in a new window">http://www.gwmicro.com/Window-Eyes/ (link is external)</a><br> 						(External website that opens in a new window)</td> <td>Commercial</td>
    
    
                        </tr>
                </tbody>
    
            </table>
          
        </section>

    </div> 
        </div>
    </div>
    <!-- Main content End -->
@endsection