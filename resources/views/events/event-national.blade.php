@extends('layouts.main')
@section('title')
    {{ __('Events') }}
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

                    </li>
                    <li>
                        Events
                    </li>

                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Contact Section Start -->
        <div class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                @if (Count($data) > 0)
                    @foreach ($data as $image)
                        <p>
                            {{ $image->description }}
                        </p>

                        <div class="row">
                            <?php foreach (json_decode($image->public_url)as $public_url) { ?>
                            <div class="col-lg-4 col-md-3">
                                <div class="event-img">
                                    <a href="{{ asset('http://localhost/cmsapi/public/uploads/EventsManagement/' . $public_url) }}"
                                        class="image-link">
                                        <img src="{{ 'http://localhost/cmsapi/public/uploads/EventsManagement/' . $public_url }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- Contact Section End -->
    </div>

@endsection
@push('post-scripts')
@endpush
