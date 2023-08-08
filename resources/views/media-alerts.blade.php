@extends('layouts.main')
@section('title')
@parent
 {{__('Events')}}
@endsection
@section('content')
<div class="main-content">

<div class="wrapper" id="skipCont"></div>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay rs-breadcrumbs-event">
    <div class="breadcrumbs-img">
        <img src="{{ asset('assets/Nrcp_img/guidlines_bg.png') }}" alt="Breadcrumbs Image">
    </div>
    <div class="breadcrumbs-text white-color padding">
        <h1 class="page-title">Events</h1>
        <ul>
            <li>
                <a class="active" href="{{ url('/') }}">Home</a>
                <a class="active" href="{{ url('/') }}">Events</a>
            </li>

        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th>S.No</th>
                            <th >State Name</th>
                            <th class="set-width">News</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tamil Nadu</td>
                                <td class="link">
                                    <a href="https://www.newindianexpress.com/states/tamil-nadu/2019/dec/10/-8-yr-old-dies-in-tirunelveli-following-wrong-administration-of-rabies-shot-2073802.html"
                                        target="_blank"> News 1 </a>
                                    , <a href="https://timesofindia.indiatimes.com/city/madurai/boy-died-of-rabies-due-to-parents-negligence-says-med-college/articleshow/72464837.cms"
                                        target="_blank"> News 2 </a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Goa </td>
                                <td>
                                    <a
                                        href=" https://timesofindia.indiatimes.com/city/goa/four-rabies-cases-detected-in-goa-in-feb/articleshow/81558154.cms" target="_blank">News 1
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Maharashtra </td>
                                <td>
                                    <a
                                        href="https://indianexpress.com/article/cities/mumbai/rabid-dog-caught-15-days-after-licking-8-yr-old-who-died-5878206/" target="_blank">News 2
                                        </a>

                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kerala </td>
                                <td>
                                     <a
                                        href=" https://timesofindia.indiatimes.com/city/kozhikode/7-year-old-boy-dies-of-rabies-in-kasaragod/articleshow/86864037.cms" target="_blank">News 1
                                        </a> ,
                                    <a
                                        href=" https://www.newindianexpress.com/states/kerala/2021/oct/04/tribal-girl-in-kerala-died-of-rabies-reveals-autopsy-report-2367213.html" target="_blank">News 2
                                        
                                    </a> 
                                    ,
                                    <a href=" https://english.mathrubhumi.com/news/kerala/cherthala-boy-alappuzha-rabies-1.6100261" target="_blank"> News 3 </a>

                                    ,
                                    <a href=" https://www.newindianexpress.com/states/kerala/2022/aug/10/70-year-old-woman-dies-of-rabies-in-palakkad-2485912.html" target="_blank"> News 4 </a>

                                    ,
                                    <a href=" https://www.time8.in/rabies-patient-from-assam-flees-hospital-in-kerala-caught/" target="_blank"> News 5 </a>

                                    ,
                                    <a href="https://english.mathrubhumi.com/news/kerala/stray-dog-attacks-12-yr-old-girl-in-pathanamthitta-1.7788954" target="_blank"> News 6 </a>

                                    ,
                                    <a href=" https://www.indiatvnews.com/news/india/kerala-anti-rabies-vaccine-deaths-hospitals-health-authorities-rabies-dose-2022-08-22-801937" target="_blank"> News 7 </a>
                                    ,
                                    <a href="https://timesofindia.indiatimes.com/city/kochi/65-year-old-woman-dies-of-rabies-in-idukki/articleshow/92311700.cms" target="_blank"> News 8 </a>
                                    ,
                                    <a href="https://english.mathrubhumi.com/news/kerala/kozhikode-medical-college-struggles-to-cope-with-anti-rabies-vaccine-shortage-1.7546871" target="_blank"> News 9 </a>
                                    ,
                                    <a href="https://www.thenewsminute.com/article/18-yr-old-kerala-student-dies-rabies-month-after-being-bitten-dog-165427" target="_blank"> News 10 </a>
                                    ,
                                    <a href="https://timesofindia.indiatimes.com/city/kochi/woman-dies-of-dog-bite/articleshow/92816379.cms" target="_blank"> News 11 </a>
                                    ,
                                    <a href="https://english.mathrubhumi.com/news/kerala/woman-injured-in-stray-dog-attack-dies-during-treatment-1.7707916" target="_blank"> News 12 </a>
                                    ,
                                    <a href="https://keralakaumudi.com/en/news/news.php?id=896654" target="_blank"> News 13 </a>
                                    ,
                                    <a href="https://keralakaumudi.com/en/news/news.php?id=896654" target="_blank"> News 14 </a>
                                    ,
                                    <a href="https://english.mathrubhumi.com/news/kerala/rabies-confirmed-in-dog-that-bit-3-year-old-in-palakkad-1.7866574" target="_blank"> News 15 </a>
                                    ,
                                    <a href="https://english.janamtv.com/news/50990/stray-dog-attack-in-palakkad-3-year-old-injured/" target="_blank"> News 16 </a>
                                    ,
                                    <a href="https://keralakaumudi.com/en/news/news.php?id=1090069&u=" target="_blank"> News 17 </a>
                                    ,
                                    <a href="https://www.newindianexpress.com/states/kerala/2023/jun/18/two-rabies-deaths-instil-fear-concern-among-public-in-kerala-2586106.html" target="_blank"> News 18 </a>
                                    ,
                                    <a href="https://m.dailyhunt.in/news/india/english/news9+live-epaper-newslive/woman+dies+in+palakkad+due+to+rabies+infection-newsid-n519858620?s" target="_blank"> News 19 </a>
                                  

                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Karnataka </td>
                                <td> <a href=" http://outbreaknewstoday.com/india-kadaba-government-pu-college-student-dies-from-rabies-84340/" target="_blank"> News 1 </a> , 
                                        <a href=" https://timesofindia.indiatimes.com/city/bengaluru/bit-by-stray-4-months-agowoman-31-dies-of-rabies/articleshow/74155432.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst" target="_blank"> News 2 </a>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Madhya Pradesh </td>
                                <td>   </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Nagaland </td>
                                <td> <a href="http://outbreaknewstoday.com/india-kadaba-government-pu-college-student-dies-from-rabies-84340/" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Punjab </td>
                                <td> <a href="https://www.hindustantimes.com/cities/chandigarh-news/ludhiana-boy-conceals-dog-bite-dies-of-rabies-20-days-later-101627417221220.html" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>9</td>
                                <td>Karnataka </td>
                                <td> <a href="http://outbreaknewstoday.com/india-kadaba-government-pu-college-student-dies-from-rabies-84340/https://timesofindia.indiatimes.com/city/bengaluru/bit-by-stray-4-months-agowoman-31-dies-of-rabies/articleshow/74155432.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Bihar</td>
                                <td> <a href="https://www.bhaskar.com/local/bihar/patna/sahar/news/two-dozen-people-bitten-by-dog-trouble-due-to-non-rabies-injection-128180533.html" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>11</td>
                                <td>Uttar Pradesh</td>
                                <td> 
                                    <a href="https://m.livehindustan.com/uttar-pradesh/pratapgarh-kunda/story-anti-rabies-injection-finished-people-wandering-3843603.html" target="_blank"> News 1 </a>   ,
                                    <a href="https://www.freepressjournal.in/bhopal/bhopal-mphrc-seeks-report-on-dog-bite-roof-plaster-collapse" target="_blank"> News 2 </a>  ,
                                    <a href="https://timesofindia.indiatimes.com/videos/city/lucknow/bizarre-man-in-rampur-dies-of-rabies-locals-fear-transferable-disease-like-covid-19-take-rabies-" target="_blank"> News 3 </a> ,                                    
                                    <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7266186/" target="_blank"> News 4 </a>                                        
                               
                                    ,
                                    <a href="https://timesofindia.indiatimes.com/city/agra/up-differently-abled-girl-10-critical-after-attacked-by-stray-dogs/articleshow/93149497.cms" target="_blank"> News 5 </a>
                                    ,
                                    <a href="https://www.india.com/uttar-pradesh/noida-uttar-pradesh-seven-months-old-mauled-to-death-by-stray-dog-in-noida-5692016/" target="_blank"> News 6 </a>
                                    ,
                                    <a href="https://www.aajtak.in/uttar-pradesh/story/street-dog-bite-attack-baby-baby-girl-year-and-a-quarter-rabies-injection-ghaziabad-uttar-pradesh-lclar-1580957-2022-11-22" target="_blank"> News 7 </a>
                                   
                                </td>
                          
                            </tr>

                            <tr>
                                <td>12</td>
                                <td>Madhya Pradesh</td>
                                <td> <a href="https://www.bhaskar.com/local/bihar/patna/sahar/news/two-dozen-people-bitten-by-dog-trouble-due-" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td>Manipur</td>
                                <td>
                                     <a href="https://www.thesangaiexpress.com/Encyc/2022/1/17/By-Our-Staff-ReporterIMPHAL-Jan-16-A-41-year-old-man-Nongthombam-Bishorjit-Singh-hailing-from.html" target="_blank"> News 1 </a> , 
                                     <a href="https://ukhrultimes.com/five-year-old-boy-dies-of-rabies-in-manipur/" target="_blank"> News 2 </a>  
                               
                                    </td>
                          
                            </tr>

                            <tr>
                                <td>14</td>
                                <td>Kashmir </td>
                                <td> <a href="https://www.thekashmirmonitor.net/dog-terror-12-year-old-mauled-to-death-in-pattan-protests-rock-north-kashmir-against-local-municipality-smc/" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>15</td>
                                <td>Andhra Pradesh </td>
                                <td> 
                                    <a href="https://www.thehansindia.com/andhra-pradesh/andhra-pradesh-two-women-dead-due-to-rabies-caused-by-cat-bite-in-krishna-district-732139" target="_blank"> News 1 </a> 
                                   , <a href="https://www.thehansindia.com/andhra-pradesh/boy-dies-of-rabies-after-6-six-months-of-dog-bite-in-kakinada-810946" target="_blank"> News 2 </a> 
                                
                                </td>
                            </tr>

                            <tr>
                                <td>16</td>
                                <td>Telangana </td>
                                <td> 
                                    <a href="https://indianexpress.com/article/cities/hyderabad/two-year-old-mauled-death-stray-dogs-hyderabad-residents-allege-official-apathy-7891552/" target="_blank"> News 1 </a> 
                                  ,  <a href="https://www.indiatoday.in/india/story/4-year-old-mauled-to-death-by-street-dogs-in-hyderabad-video-2337496-2023-02-21" target="_blank"> News 2 </a> 
                                
                                </td>
                            </tr>

                            <tr>
                                <td>17</td>
                                <td>Gujarat </td>
                                <td> <a href="https://timesofindia.indiatimes.com/city/surat/five-year-old-girl-dies-of-rabies-in-surat/articleshow/98320342.cms" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>18</td>
                                <td>Rajasthan </td>
                                <td> <a href="https://www.indiatoday.in/india/story/stray-dog-mauls-infant-in-rajasthan-experts-say-sterilisation-vaccination-key-to-curb-canine-scare-2341116-2023-03-01" target="_blank"> News 1 </a>  </td>
                            </tr>

                            <tr>
                                <td>19</td>
                                <td>Delhi </td>
                                <td> <a href="https://www.indiatoday.in/india/story/delhi-stray-dog-incidents-two-children-killed-in-vasant-kunj-2345671-2023-03-12" target="_blank"> News 1 </a>  </td>
                            </tr>
                    
                    </tbody>
                  </table>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
</div>
@endsection
@push('post-scripts')

@endpush