<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 footer-widget mb-4">
                    <div class="textwidget white-color">
                        <h4 class="footer-text-logo">National Rabies Control Program</h4>
                    </div>
                    <ul class="footer_social">
                    @if(!empty($social_media))
                        @if($social_media->facebook  != '')
                        <li>
                            <a href="{{ url($social_media->facebook) }}" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @else  onclick="return confirm('This link will take you to an external web site.')"  @endif target="_blank" rel="noopener noreferrer"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        @endif
                        @if($social_media->twitter  != '')
                        <li>
                            <a href="{{ url($social_media->twitter) }}" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @else  onclick="return confirm('This link will take you to an external web site.')"  @endif target="_blank" rel="noopener noreferrer"><span><img src="{{ asset('assets/Nrcp_img/twitter-logo.png') }}"
                                    alt="img" rel="noopener noreferrer" class="twitter-logo"></span></a>
                        </li>
                        @endif
                        <!-- @if($social_media->linkedin  != '')
                        <li>
                            <a href="{{ url($social_media->linkedin) }}" @if (Session::get('Lang') == 'en') onclick="return confirm('This link will take you to an external web site.')"  @else onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @endif target="_blank"><span><i class="fa fa-linkedin"></i></span></a>
                        </li>
                        @endif -->
                    @endif
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 pl-20 md-pl-20 footer-widget md-mb-50 width-sm-50 mt-s-40">
                            <h3 class="widget-title">Important Links</h3>
                            <ul class="site-map border-right-white">
                                @foreach ($footerMenu->slice(0,5) as $footerMenus)
                                <li><a @if ($footerMenus->tab_type == 1) @if (Session::get('Lang') == 'hi')  onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')"  @else onclick="return confirm('This link will take you to an external web site.')"  @endif   target="_blank" href="{{ url($footerMenus->url  ??'') }}">   @else  href="{{ url($footerMenus->url  ??'') }}" @endif>
                                    @if (Session::get('Lang') == 'hi')
                                        {{ $footerMenus->name_hi  }}
                                    @else
                                        {{ $footerMenus->name_en  }}
                                    @endif
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50 p-0 width-sm-50">
                            <ul class="site-map footer-link-withput-h border-right-white">
                                @foreach ($footerMenu->slice(5,10) as $footerMenus)
                                  <li>
                                      @if ($footerMenus->tab_type == 1)
                                           @if (Session::get('Lang') == 'hi')
                                           @else
                                           <a onclick="return confirm('This link will take you to an external web site.')" href="{{ url($footerMenus->url  ??'') }}" target="_blank" rel="noopener noreferrer">
                                           @endif
                                           <a onclick="return confirm('This link will take you to an external web site.')" href="{{ url($footerMenus->url  ??'') }}" target="_blank" rel="noopener noreferrer">
                                      @else
                                      <a href="{{ url($footerMenus->url  ??'') }}" rel="noopener noreferrer">
                                      @endif
                                        @if (Session::get('Lang') == 'hi')
                                            {{ $footerMenus->name_hi  }}
                                        @else
                                            {{ $footerMenus->name_en  }}
                                        @endif
                                     </a>
                                  </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Contact Us</h3>
                    <ul class="address-widget">
                        <li>
                            <div class="desc"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <b> Center for One Health </b><br>
                                National Centre for Disease Control,<br> Directorate General of Health Services,
                              <br>  Ministry of Health and Family Welfare,<br> Government of India, <br>
                                22 – Sham Nath Marg, Delhi - 110054
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <a href="tel:+91-11-23971272" rel="noopener noreferrer"> 011-23930178</a>
                            </div>
                        </li>
                        <li>
                            <div class="desc">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="mailto:dirnicd@nic.in" rel="noopener noreferrer">napreindia-ncdc[at]ncdc[dot]gov[dot]in</a>
                            </div>
                        </li>                        
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 footer-widget p-0">
                    <h3 class="widget-title">Locate Us</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.343413096401!2d77.22101037444737!3d28.67937218195402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfda49c63895b%3A0xf42dc723f30a63d2!2sNATIONAL%20CENTRE%20FOR%20DISEASE%20CONTROL%2C%20CSU%20INTEGRATED%20DISEASE%20SURVEILLANCE%20PROGRAMME%2C%20Civil%20Lines%2C%20Delhi%2C%20110054!5e0!3m2!1sen!2sin!4v1689766036308!5m2!1sen!2sin"
                         allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="locate-us-iframe" >
                    </iframe>
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
                        <h5>Website last Updated on: <?php echo date("d F Y", strtotime(date('y-m-d'))); ?>  &nbsp; &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Visitors :
                            <span class="number-visitor">{{ $visitCounter }}</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="scrollUp" class="green-color">
    <i class="fa fa-angle-up"></i>
</div>
<div id="vaccination" class="modal fade" role="dialog">
    <div class="modal-dialog modal-vaccination">
        <div class="modal-content modal-content1">
            <div class="modal-body">
                <div class="d-flex justify-content-between pl-2">
                    <h4 class="modal-title pt-3">Know Your Vaccination Schedule</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="contact-page-section mt-4">
                    <div class="contact-comment-box">
                        <form method="get" action="{{ url('vaccination_dose') }}" id="myform" novalidate="novalidate">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12 mb-25 mt-10 col-md-12 col-sm-12">
                                        <label class="pl-2">Date of Animal Bites</label>
                                        <input class="from-control mt-2" type="date" name="date" id="txtDate" placeholder="Name" required/>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-11 mx-auto">
                                        <a class="readon2 modal-btn text-white">
                                            Have you taken Rabies Vaccine after animal bite
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <div class="radio button">
                                           <div class="radio-box">
                                            <input type="radio" onclick="checkYesNo('1')" name="animal_bite" value="yes" id="yes-dogbite" required />
                                            <label for="yes-dogbite">Yes</label>
                                           </div>
                                           <div class="radio-box">
                                            <input type="radio" onclick="checkYesNo('0')" name="animal_bite" value="no" id="no-bite" required />
                                            <label for="no-bite">No</label>
                                           </div>
                                       </div>
                                       <p class="text-center text-danger" id="radio_error"></p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12" id="yesINput">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12 text-center">
                                    <input type="submit" name="Submit" class="readon2 modal-btn" onclick="cehckradio()" value="Submit" id="mysbutton" />
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
<div id="vaccinationt" class="modal fade" role="dialog">
    <div class="modal-dialog modal-vaccination modal-lg">
        <div class="modal-content modal-content1">
            <div class="modal-body">
                <div class="py-3 d-flex justify-content-between ">
                    <h4 class="modal-title">Rabies Global Activities</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="text-anime">
                    <ul>
                        <li class="d-flex align-item-start" > <div><i class="fa fa-arrow-right mt-4" aria-hidden="true"></i></div>  <a class="highlighted" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @else  onclick="return confirm('This link will take you to an external web site.')"  @endif  target="_blank"  href="{{ 'https://www.who.int/news-room/feature-stories/detail/eliminating-rabies-ukraine-journey-from-crisis-to-control' }}"> Eliminating rabies: Ukraine’s journey from crisis to control</a> <div><i class="fa fa-external-link mt-4 " aria-hidden="true"></i></div> </li>
                        <li class="d-flex align-item-start" > <div><i class="fa fa-arrow-right mt-4" aria-hidden="true"></i></div>  <a class="highlighted" @if (Session::get('Lang') == 'hi') onclick="return confirm('यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।')" @else  onclick="return confirm('This link will take you to an external web site.')"  @endif  target="_blank" href="{{ 'https://www.dvm360.com/view/spca-international-awards-grants-to-vaccinate-12-000-animals-against-rabies' }}"> SPCA International awards grants to vaccinate 12,000 animals against rabies</a> <div><i class="fa fa-external-link mt-4 " aria-hidden="true"></i></div> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered ">
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
