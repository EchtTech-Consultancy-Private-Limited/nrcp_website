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
<div class="main-content">
   <div class="rs-breadcrumbs breadcrumbs-overlay">
      <div class="breadcrumbs-img">
         <img src="https://dev.nrcp.staggings.in/public/assets/Nrcp_img/banner.png" alt="Breadcrumbs Image">
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


                      
                     @if(!empty($commonsideMenu))
                     
                     @if(count($commonsideMenu)>0)
                     
                           @foreach ($commonsideMenu as $commonsideMenus)
                                <a href="{{ url($commonsideMenus->url) }}" class="nav-link active">
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
                     <div @if ($k == '0') class="tab-pane fade  show active" @else  class="tab-pane fade show "  @endif id="master-layout_{{ $k }}" role="tabpanel"
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
                        <!-- List section -->
                        {{-- <section>
                           <h3 class="title">List Page</h3>
                           <div class="desc rs-inner-blog">
                              <div class="blog-deatails">
                                 <div class="blog-full p-0">
                                    <ul class="unorder-list mb-20">
                                       <li class="pb-0">
                                          Training of Health Care professionals on appropriate Animal bite management 
                                          and Rabies Post Exposure Prophylaxis. 
                                          <ul class="unorder-list">
                                             <li>Training of Health Care professionals on appropriate Animal bite management 
                                                and Rabies Post Exposure Prophylaxis. 
                                             </li>
                                             <li>Advocacy for states to adopt and implement Interdermal route of Post 
                                                exposure prophylaxis for Animal bite Victims and Pre exposure prophylaxis for 
                                                high risk categories. 
                                             </li>
                                             <li>Strengthen Human Rabies Surveillance System. </li>
                                             <li>Strengthening of Regional Laboratories under NRCP for Rabies Diagnosis. </li>
                                             <li>Creating awareness in the community through Advocacy &amp; Communication 
                                                and Social Mobilization. 
                                             </li>
                                          </ul>
                                       </li>
                                       <li>Advocacy for states to adopt and implement Interdermal route of Post 
                                          exposure prophylaxis for Animal bite Victims and Pre exposure prophylaxis for 
                                          high risk categories. 
                                       </li>
                                       <li>Strengthen Human Rabies Surveillance System. </li>
                                       <li>Strengthening of Regional Laboratories under NRCP for Rabies Diagnosis. </li>
                                       <li>Creating awareness in the community through Advocacy &amp; Communication 
                                          and Social Mobilization. 
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </section> --}}
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </div>
</div>
@endsection 

