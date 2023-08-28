<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 footer-widget">
                    {{-- <div class="footer-logo mb-10">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/Nrcp_img/nrcp_white.png') }}" alt="">
                        </a>
                    </div> --}}
                    <div class="textwidget white-color">
                        <h4 class="footer-text-logo">National Rabies Control Program</h4>
                        {{-- <p class="text-big"> National Center for Disease control </p> --}}
                        <p class="text-normal-footer">Directorate General of Health Services, Ministry of
                            Health & Family Welfare, Government of India </p>
                    </div>
                    <ul class="footer_social">


                        
                    @if(!empty($social_media))
                        @if($social_media->facebook  != '')
                        <li>
                            <a href="{{ url($social_media->facebook) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        @endif
                       
                        @if($social_media->twitter  != '')
                        <li>
                            <a href="{{ url($social_media->twitter) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>
                        @endif

                        @if($social_media->linkedin  != '')
                        <li>
                            <a href="{{ url($social_media->linkedin) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        @endif

                    @endif

                    </ul>
                </div>

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 pl-20 md-pl-20 footer-widget md-mb-50 width-sm-50 mt-s-40">
                            <h3 class="widget-title">Important Links</h3>
                            <ul class="site-map border-right-white">
                                <li><a href="{{ route('coming-soon') }}">Disclaimer</a></li>
                                <li><a href="{{ route('coming-soon') }}">Copyright Policy</a></li>
                                <li><a href="{{ route('coming-soon') }}">Hyper Linking Policy</a></li>
                                <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('coming-soon') }}">Terms & Conditions</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50 p-0 width-sm-50">
                            <ul class="site-map footer-link-withput-h border-right-white">
                                <li><a href="{{ route('coming-soon') }}">Website Policies,</a></li>
                                <li><a href="{{ route('coming-soon') }}">Accessibility Statement</a></li>
                                <li><a href="{{ route('coming-soon') }}">Web Information Manager</a></li>
                                <li><a onclick="return confirm('You Are Now Leaving This Site. Would you like to leave this site?')" href="https://ihip.nhp.gov.in/idsp/#!/login" target="_blank">IHIP Portal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul class="address-widget">
                        <li>
                            <div class="desc-text-title">Full Mailing Address:</div>
                        </li>
                        <li>

                            <div class="desc"> <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                Center for One Health,
                                {{-- (Division of Zoonotic Disease Programme), --}}
                                National Centre for Disease Control,
                                Ministry of Health and Family Welfare,
                                Goverment Of India, 22 Sham Nath Marg, Civil Lines, New Delhi, Delhi, 110054
                            </div>
                        </li>
                        <li>

                            <div class="desc">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <a href="tel:+91-11-23971272">Telephone: 011-23930178</a>
                            </div>
                        </li>
                        <li>

                            <div class="desc">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:dirnicd@nic.in">Email id nrcp.ncdc@gmail.com</a>
                            </div>
                        </li>

                        <li>
<!-- 
                            <div class="desc">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <a href="www.ncdc.gov.in">www.ncdc.gov.in</a>
                            </div> -->
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12 footer-widget p-0">
                    <h3 class="widget-title">Locate Us</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.343413096401!2d77.22101037444737!3d28.67937218195402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfda49c63895b%3A0xf42dc723f30a63d2!2sNATIONAL%20CENTRE%20FOR%20DISEASE%20CONTROL%2C%20CSU%20INTEGRATED%20DISEASE%20SURVEILLANCE%20PROGRAMME%2C%20Civil%20Lines%2C%20Delhi%2C%20110054!5e0!3m2!1sen!2sin!4v1689766036308!5m2!1sen!2sin"
                        width="100%" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10">
                    <div class="copyright">
                        <p>© Copyright {{date('Y')}} National Centre for Disease control.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-right md-text-left pr-0">
                    <div class="visitors-sec">
                        <h5>Visitors :
                            <span class="number-visitor">2</span>
                            <span class="number-visitor">6</span>
                            <span class="number-visitor">4</span>
                            <span class="number-visitor">6</span>
                            <span class="number-visitor">8</span>
                            <span class="number-visitor">2</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- start scrollUp  -->
<div id="scrollUp" class="green-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->


<!-- Modal Popup Start -->

<!-- Modal -->
<div id="vaccination" class="modal fade" role="dialog">
    <div class="modal-dialog modal-vaccination">

        <!-- Modal content-->
        <div class="modal-content modal-content1">

            <div class="modal-body">

                <div class="d-flex justify-content-between pl-2">
                    <h4 class="modal-title pt-3">Know Your Vaccination Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="contact-page-section mt-4">
                    <div class="contact-comment-box">

                        <form method="get" action="{{ url('vaccination_dose') }}">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-25 mt-10 col-md-12 col-sm-12">
                                        <label class="pl-2">Date of Animal Bites</label>
                                        <input class="from-control mt-2" type="date" name="date"
                                            placeholder="Name" required>
                                    </div>
                                </div>
                                <div class=" row form-group">
                                    <div class="col-md-5  mx-auto">
                                        <button type="submit" class="readon2">
                                            Proceed
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- Modal Popup End -->
<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>