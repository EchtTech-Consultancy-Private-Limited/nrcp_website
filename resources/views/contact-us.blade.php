@extends('layouts.main')
@section('title')
@parent
 {{__('Contact Us')}}
@endsection
@section('content')
<div class="main-content">
<div class="wrapper" id="skipCont"></div>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
<div class="breadcrumbs-img">
    <img src="{{ asset('assets/Nrcp_img/guidlines_bg.png') }}" alt="Breadcrumbs Image">
</div>
<div class="breadcrumbs-text white-color padding">
    <h1 class="page-title">Contact Us</h1>
    <ul>
        <li>
            <a class="active" href="{{ url('/') }}">Home</a>
        </li>
        <li>Contact Us</li>
    </ul>
</div>
</div>
<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
<div class="container">
    <div class="row contact-address-section">
        <div class=" col-lg-4 col-md-12 lg-pl-0 md-mb-30">
            <div class="contact-info contact-address">
                <div class="icon-part">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="content-part">
                    <h5 class="info-subtitle">Address</h5>
                    <h4 class="info-title">  Center for One Health                      
                        National Centre for Disease Control,
                        Directorate General of Health Services
                        Ministry of Health and Family Welfare,
                        Goverment Of India,
                        22 Sham Nath Marg, Delhi - 110054
                        </h4>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-12 md-mb-30">
            <div class="contact-info contact-mail">
                <div class="icon-part">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="content-part">
                    <h5 class="info-subtitle">Email Address</h5>
                    <h4 class="info-title"><a href="mailto:nrcp.ncdc@gmail.com">nrcp.ncdc@gmail.com</a></h4>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-12 lg-pr-0">
            <div class="contact-info contact-phone">
                <div class="icon-part">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="content-part">
                    <h5 class="info-subtitle">Phone Number</h5>
                    <h4 class="info-title"><a href="tel:011-23930178">011-23930178</a></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       
        <div class="col-lg-7">
            <div class="rs-quick-contact new-style">
                <div class="inner-part mb-50">
                    <h2 class="title mb-15">Get In Touch</h2>
                    
                </div>
                <div id="form-messages"></div>
                <form id="contact-form" method="post" action="{{route('contact-us')}}?msg=success">
                    <div class="row">
                        <div class="col-lg-6 mb-35 col-md-12">
                            <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                        </div> 
                        <div class="col-lg-6 mb-35 col-md-12">
                            <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                        </div>   
                        <div class="col-lg-6 mb-35 col-md-12">
                            <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone" required="">
                        </div>   
                        <div class="col-lg-6 mb-35 col-md-12">
                            <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                        </div>
                     
                        <div class="col-lg-12 mb-35">
                            <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                        </div>

                        <div class="form-group col-md-5 mx-auto mb-0">
                            <input class="btn-send" type="submit" value="Submit Now">
                        </div> 

                    </div>
                         
                </form>
            </div>
        </div> 

        <div class="col-lg-5 md-mb-30">
            <div class="contact-map2">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3500.3822174465167!2d77.222103!3d28.678211000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfda49c63895b%3A0xf42dc723f30a63d2!2sNATIONAL%20CENTRE%20FOR%20DISEASE%20CONTROL%2C%20CSU%20INTEGRATED%20DISEASE%20SURVEILLANCE%20PROGRAMME%2C%20Civil%20Lines%2C%20Delhi%2C%20110054%2C%20India!5e0!3m2!1sen!2sus!4v1690304684981!5m2!1sen!2sus" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Contact Section End --> 
</div>

@endsection