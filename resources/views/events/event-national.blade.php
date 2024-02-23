@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('National Event') }}
@endsection
@section('content')
<!-- Contact Section Start -->
<div class="event-page-section pt-60 pb-50 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
                <section class="rs-blog main-home">
                    <div class="heading-title">
                        <h2 class="title event-heading-color">Event Gallery</h2>
                    </div>  
                    
                    @if(count($data->eventContent)>0)                  
                    <div class="row">
                        @foreach($data->eventContent as $datas)
                        <div class="col-md-4">
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('resources/uploads/EventsManagement/'.$datas->eventImags[0]->public_url) }}" alt="">
                                </div>
                                <div class="blog-content b-t">                                       
                                    <h3 class="title">
                                        <a href="{{ url($type.'/event-details/'.$datas->event->uid) }}" title="{{ $datas->event->title_name_en }}">{{ $datas->event->title_name_en }}</a>
                                    </h3>
                                </div>
                              </div>
                        </div>
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
