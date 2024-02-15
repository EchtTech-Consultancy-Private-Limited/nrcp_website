@extends('layouts.main')
@section('title')
 {{__('Animal Health')}}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
@if (Session::get('Lang') == 'hi')
{{ __('messages.video_gallery') }}
@else
{{ __('messages.video_gallery') }}
@endif
@endsection
@section('content')
    <div class="container common-container">
        <section class="sidebar-main-nav">
            <div class="col-md-12 p-0">
                <div class="main-content">
                    <section id="fontSize" class="wrapper body-wrapper rs-blog main-home">
                        <section id="paragraph" class="wrapper paragraph-wrapper">
                            <div class=" common-container four_content mb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="heading-title">
                                                <h2>
                                                @if (Session::get('Lang') == 'hi')
                                                    {{ __('messages.video_gallery') }}
                                                @else
                                                    {{ __('messages.video_gallery') }}
                                                @endif
                                                </h2>
                                            </div>
                                          </div>                                        
                                        @if (isset($galleryVideo) && count($galleryVideo) > 0)
                                            <div class="rs-blog main-home col-md-12">
                                                <div class="container1 row">
                                                    <div class="col-md-6">
                                                        @foreach ($galleryVideo as $videos)
                                                            @if (count($videos['gallery_details']) > 0)
                                                                @foreach ($videos['gallery_details'] as $key => $videoId)
                                                                    <div class="mySlides">
                                                                        @if ($videoId->public_url)
                                                                            {!! '<div class="youtube-player youtube-iframe" data-video-id="' . $videoId->public_url . '"></div>' !!}
                                                                        @else
                                                                            <p>No video available for this gallery.</p>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                                            @endif
                                                        @endforeach
                                                    </div>                                              
                                                    <div class="col-md-6">
                                                        <div class="col-box-g">
                                                        <div class="row ps-0">
                                                            @foreach ($galleryVideo as $key => $videos)
                                                                @if (count($videos['gallery_details']) > 0)                                                        
                                                                    @foreach ($videos['gallery_details'] as $videoId)
                                                                        <div class="col-md-3 mb-2">
                                                                            <img class="demo cursor fancybox-close" @if (!blank($videoId->public_url))
                                                                                src="https://i.ytimg.com/vi/{{ $videoId->public_url }}/maxresdefault.jpg"
                                                                                style="width:100%" onclick="currentSlide({{ $key + 1 }})"
                                                                                alt=""
                                                                            @endif>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                </div>
                                            </div>
                                        @else
                                        <p>No video found in the gallery.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection