@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __($breadcrumbs) }}
@endsection
@section('content')
      <div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70">
         <div class="container">
         @if(count($objectpass->pageContent)>0)
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  
                  <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical">
                     @if(!empty($commonsideMenu))
                     @if(count($commonsideMenu)>0)
                           @foreach ($commonsideMenu as $k=>$commonsideMenus)
                                <a href="{{ url($commonsideMenus->url) }}" @if(request()->path()  == $commonsideMenus->url ) class="nav-link active" @else class="nav-link" @endif>
                                 {{-- <button  class="nav-link active" data-toggle="pill"
                                  type="submit" role="tab" aria-controls="annual-report"
                                 aria-selected="false"> --}}
                                     {{ $commonsideMenus->name_en  }}
                                  {{-- </button> --}}
                                 </a>
                                
                           @endforeach
                     @endif
                     @else
                     @foreach($objectpass->pageContent as $k=>$sidebar)
                     <button  @if($k == '0') class="nav-link active" @else class="nav-link" @endif id="Master_layout_{{ $k }}" data-toggle="pill"
                        data-target="#master-layout_{{ $k }}" type="button" role="tab" aria-controls="annual-report"
                        aria-selected="false">
                            {{$sidebar->pageTitle->page_title_en }}
                         </button>
                        @endforeach
                     @endif
                  </div>
               </div>
               <div class="col-lg">
                  <div class="tab-content" id="tabContent">
                     @foreach($objectpass->pageContent as $k=>$sidebar)
                     <div @if ($k =='0') class="tab-pane fade  show active" @else  class="tab-pane fade show "  @endif id="master-layout_{{ $k }}" role="tabpanel"
                        aria-labelledby="Master_layout_{{ $k }}">
                        <!-- Content and Images -->
                        <div class="heading-title">
                           <h2 class="title"> {{$sidebar->pageTitle->page_title_en }}</h2>
                        </div>
                        @if(count($sidebar->content_page) > 0)
                        <section>
                           <div class="heading-title">
                              {{-- <h3 class="title">{{ $gallery-> }}</h3>
                              <a href="javascript:vopid();" class="readon orange-btn"> Archive </a> --}}
                           </div>
                           @foreach ($sidebar->content_page  as  $page)  
                           <p>
                             {!! $page->page_content_en !!}
                           </p>
                          @endforeach
                        </section>
                     @endif
                        @if(count($sidebar->content_gallery) > 0)
                           <section>
                              <div class="heading-title">
                                 {{-- <h3 class="title">{{ $gallery-> }}</h3>
                                 <a href="javascript:vopid();" class="readon orange-btn"> Archive </a> --}}
                              </div>
                              <div class="row">
                                 @foreach ($sidebar->content_gallery  as  $gallery)  
                                 <div class="col-lg-4 col-md-3">
                                    <div class="event-img">
                                       <a href="{{ asset('uploads/PageContentGallery/'.$gallery->public_url) }}"  class="image-link">
                                           <img src="{{ asset('uploads/PageContentGallery/'.$gallery->public_url) }}" alt="">
                                       </a>
                                   </div>
                                 </div>
                                @endforeach
                              </div>
                           </section>
                        @endif
                        @if(count($sidebar->content_pdf) > 0)  
                        <!-- Table section -->
                        <section>
                           <div class="heading-title">
                              {{-- <h3 class="title">Technical Document and Guideline</h3> --}}
                              <a href="javascript:vopid();" class="readon orange-btn"> Archive </a>
                           </div>
                           <div class="table">
                              <table>
                                 <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>View/Download</th>
                                 </tr>
                                 @foreach ($sidebar->content_pdf  as  $pdf)
                                 <tr>
                                    <td>{{ $pdf->pdf_title ??''}}</td>
                                    <td>{{ date('d F Y', strtotime($pdf->start_date ??'')) }}</</td>
                                    <td>
                                       <div class="download ">
                                          <a href="#"><span class="view">View</span></a><span
                                             class="size">{{ $pdf->pdfimage_size ??'' }}</span><i class="fa fa-file-pdf-o"
                                             aria-hidden="true"></i> <a href="#"><i
                                             class="fa fa-download" aria-hidden="true"></i></a>
                                       </div>
                                       <!-- <div class="accessible-version">
                                          <span>Accessible Version:</span><span class="view">View</span><span class="size">(7kb)</span><i class="fa fa-file-pdf-o" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i>
                                          </div> -->
                                    </td>
                                 </tr>
                                 @endforeach
                              </table>
                           </div>
                        </section>
                       
                        @endif


                        <!-- Faq Section Start -->
                        <section>
                              <div class="rs-faq-part style1 pt-40 pb-80">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-lg-12 padding-0 col-md-12">
                                          <div class="main-part new-style padding-sm-0">
                                             <div class="title mb-20">
                                                <h2 class="text-part">Frequently Asked Questions</h2>
                                             </div>
                                             <div class="faq-content">
                                                <div id="accordion" class="accordion">
                                                   <div class="card">
                                                      <div class="card-header">
                                                         <a class="card-link" data-toggle="collapse" href="#collapseOne">Q 1: What is
                                                         rabies?</a>
                                                      </div>
                                                      <div id="collapseOne" class="collapse " data-parent="#accordion">
                                                         <div class="card-body">
                                                            Rabies is a disease transmitted from animals to humans, which is caused
                                                            by a virus. There are two clinical manifestations of rabies – frantic
                                                            and paralytic. Frantic rabies is most common form of human rabies.
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="card">
                                                      <div class="card-header">
                                                         <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                                            aria-expanded="false">Q 2: How is rabies transmitted?</a>
                                                      </div>
                                                      <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                                         <div class="card-body">
                                                            The rabies virus invades the nervous system of mammals. It is primarily
                                                            transmitted from the rabid animal’s saliva when it bites or scratches
                                                            someone. Licks to wounds or grazed and broken skin, or to the lining of
                                                            the mouth and nose, can also transmit the disease.
                                                            Dogs are responsible for 96% of human rabies cases in South-East Asia,
                                                            but there are also reports
                                                            of human rabies due to bites of cats, mongooses, jackals, foxes, wolves
                                                            and other carnivorous animals.
                                                            Rabies due to monkey and rat bites are rare. Horses and donkeys get
                                                            aggressive and bite ferociously when they are rabid. Cattle and
                                                            buffaloes do not bite when they are rabid, but precautions should be
                                                            taken while examining sick animals that are salivating.
                                                            Sometimes livestock owners confuse rabies with foot-and-mouth disease,
                                                            haemorrhagic septicaemia or choking and may attempt to administer drugs
                                                            by hand, and thus get infected with rabies virus.
                                                            There are no evidence-based reports of human rabies occurring due to
                                                            consumption of milk.
                                                            Individuals or professionals who slaughter rabiesinfected animals and
                                                            handle brain and other infected material may be at risk, but there are
                                                            no human cases due to consumption of cooked meat.
                                                            Human-to-human transmission of rabies through corneal or other organ
                                                            transplantation is rare but possible. Such transmission has occurred
                                                            among recipients of transplanted corneas and recently among recipients
                                                            of solid organs and vascular tissue.
                                                            Therefore corneas or organs should not be collected from a patient who
                                                            died due to rabies encephalitis or any undiagnosed neurological disease.
                                                            Although rabies patients are extremely unlikely to bite other people,
                                                            caregivers should be watchful and alert when looking after them, and
                                                            avoid contact with the patient’s saliva.
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="card">
                                                      <div class="card-header">
                                                         <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                                            aria-expanded="false">Q 3: How does one treat an animal bite?</a>
                                                      </div>
                                                      <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                                         <div class="card-body">
                                                            <ul>
                                                               If a person is bitten by an animal:
                                                               <li> ●● Wounds should be washed and flushed immediately with soap and water
                                                                  for 10–15 minutes. If soap is not available, flush with water alone.
                                                               </li>
                                                               This is the most effective first-aid treatment against rabies.</li>
                                                               <li> ●● Wounds should be cleaned thoroughly with 70% alcohol/ethanol or
                                                                  povidone-iodine, if available.
                                                               <li> ●● As soon as possible, take the person to a healthcare facility for
                                                                  further treatment.
                                                               </li>
                                                            </ul>
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
                             
                        </section>
                         <!-- faq Section END -->

                         {{-- Video Section start--}}
                         <section> 
                           <div class="heading-title">
                               <h2 class="title" tabindex="0"> Videos Section</h2>
                            </div>

                              <div class="row">
                                 <div class="col-md-6">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/TF1_HTwcHLc?si=-ajFiBVNsCCBZYdV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                                 </div>
                                 <div class="col-md-6">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/TF1_HTwcHLc?si=-ajFiBVNsCCBZYdV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                                 </div>
                                                               
                              </div>
                                         
                       </section>
                         {{-- Video Section End --}}
                     </div>
                     @endforeach
                  </div>
                 
               </div>
            </div>
         
         @else
            <p>No Content Available!</p>
            @endif
         </div>
      </div>
@endsection 

