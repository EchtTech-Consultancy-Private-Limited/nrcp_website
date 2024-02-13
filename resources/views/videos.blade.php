@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('Video') }}
@endsection
@section('content')
<div class="main-content">
  
        <div id="rs-about" class="rs-about style1 pt-70 pb-40 md-pt-70 md-pb-70">
            <div class="container">

                <section class="sidebar-main-nav">
                    <div class="col-md-12 p-0">
                        <div class="main-content">
                            <!--/#skipCont-->
                            <section id="fontSize" class="wrapper body-wrapper ">
                                <section id="paragraph" class="wrapper paragraph-wrapper">
                                    <div class=" common-container four_content mt-3 mb-3">
            
            
                                        @if (isset($galleryVideo) && count($galleryVideo) > 0)
                                        <div class="row">                                            
                                            @foreach($galleryVideo as $videos)
                                            @if (count($videos['gallery_details']) > 0)
                                            @foreach($videos['gallery_details'] as $videoId)
                                            <div class="col-md-4 mb-2">
                                                <div class="blog-item">
                                                        @if($videoId->public_url)
                                                        {!! '<div class="youtube-player" data-video-id="' . $videoId->public_url . '"></div>'!!}
                                                        @else
                                                        <p>No images available for this gallery.</p>
                                                        @endif
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                            @endforeach
                                        </div>
                                        @else
                                        <p>No images found in the gallery.</p>
            
                                    </div>
                                    @endif
            
                        </div>
                </section>
            </div>
        </div>
    </div>

</div>

@endsection