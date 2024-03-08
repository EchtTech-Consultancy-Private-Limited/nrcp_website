@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('Photo gallery Category') }}
@endsection
@section('content')
    <!-- Contact Section Start -->
    <div class="event-page-section pt-60 pb-50 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <section class="rs-blog main-home">
                    <div class="heading-title">
                        <h2 class="title event-heading-color">Photo Gallery Category</h2>
                    </div>

                    @if (isset($galleryData) && count($galleryData) > 0)
                        <div class="row">
                            @foreach ($galleryData as $galleryDatas)
                                @if (count($galleryDatas['gallery_details']) > 0)
                                    <div class="col-md-4">
                                        <div class="blog-item">
                                            <a href="{{ url('photo-gallery-images/' . $galleryDatas['gallery']->uid) }}"
                                                title="{{ $galleryDatas['gallery']->title_name_en ?? '' }}">
                                                <div class="image-part">
                                                    <img @if(isset($galleryDatas['gallery_details'][0]->public_url) && !blank($galleryDatas['gallery_details'][0]->public_url)) src="{{ asset('resources/uploads/GalleryManagement/' . $galleryDatas['gallery_details'][0]->public_url) }}" @endif
                                                        alt="">
                                                </div>
                                                <div class="blog-content b-t">
                                                    <h3 class="title">

                                                        {{ $galleryDatas['gallery']->title_name_en ?? '' }}
                                                    </h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <p>NO Data Available!!</p>
                    @endif
                </section>
            </div>
        </div>
    </div>
@endsection
@push('post-scripts')
@endpush
