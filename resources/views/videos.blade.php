@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('content')

<div class="main-content"> 
  
        <div id="rs-about" class="rs-about style1 pt-70 pb-40 md-pt-70 md-pb-70">
            <div class="container">

                <div class="row">
                  <div class="col-md-4 mb-4">
                  <video controls muted class="video-g">
                              <source src="{{ asset('assets/Nrcp_img/video1.mp4') }}" type="video/mp4">
                              </video>
                 </div>

                 <div class="col-md-4 mb-4">
                 <video controls muted class="video-g">
                 <source src="{{ asset('assets/Nrcp_img/video2.mp4') }}" type="video/mp4">
                              </video>
                 </div>

                
                </div>
            </div>
        </div>
    </div>

</div>

@endsection