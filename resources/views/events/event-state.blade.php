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
        <!-- Contact Section Start -->
<div class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        @if (Count($data) > 0)
            @foreach ($data as $image)
                <p> {!! $image->description !!}</p>
                <div class="row">
                    <?php foreach (json_decode($image->public_url)as $public_url) { ?>
                    <div class="col-lg-4 col-md-3">
                        <div class="event-img">
                            <a href="{{ asset('uploads/EventsManagement/'.$public_url) }}"
                                class="image-link">
                                <img src="{{ asset('uploads/EventsManagement/'.$public_url) }}"
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
@endsection
@push('post-scripts')
@endpush
