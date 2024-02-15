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
    <div class="event-page-section pt-60 pb-60">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="heading-title">
                    <h2 class="title event-heading-color">Photo Gallery Images</h2>
                </div>
              </div>
                @if (isset($photogallery) && !empty($photogallery))
                    <div class="rs-blog main-home col-md-12">
                        <div class="container1 row">
                            <div class="col-md-6">
                                @foreach ($photogallery as $datas)
                                    <div class="mySlides">
                                        @if (!blank($datas->public_url))
                                            <img src="{{ asset('resources/uploads/GalleryManagement/' . $datas->public_url) }}"
                                                style="width:100%">
                                        @endif
                                    </div>
                                @endforeach
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>
                            </div>
                            <div class="col-md-6 col-box-g">
                                @foreach ($photogallery as $key => $datas)
                                    <div class="column">
                                        <img class="demo cursor"
                                            @if (!blank($datas->public_url)) src="{{ asset('resources/uploads/GalleryManagement/' . $datas->public_url) }}" @endif
                                            style="width:100%" onclick="currentSlide({{ $key + 1 }})" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                @else
                    {{ abort(404) }}
                @endif

                <div class="col-md-12 mt-3">
                @if (!blank($gallery->title_name_en))
                <h3>{{ $gallery->title_name_en ?? '' }}<h3>
            @endif
                </div>
            </div>
           
        </div>
    </div>
@endsection
@push('post-scripts')
@endpush
