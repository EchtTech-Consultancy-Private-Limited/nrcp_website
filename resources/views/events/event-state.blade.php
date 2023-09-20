@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('State Event') }}
@endsection
@section('content')
<div class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <section class="rs-blog main-home">
                <div class="heading-title">
                    <h2 class="title">Event Gallery</h2>
                </div>                     
                @if(count($data->eventContent)>0)                  
                    <div class="row">
                        @foreach($data->eventContent as $datas)
                        <div class="col-md-4">
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ asset('uploads/EventsManagement/'.$datas->eventImags[0]->public_url) }}" alt="">
                                </div>
                                <div class="blog-content">                                       
                                    <h3 class="title">
                                        <a href="{{ url($type.'/event-details/'.$datas->event->uid) }}">{{ $datas->event->title_name_en }}</a>
                                    </h3>
                                    <!-- <div class="desc">
                                        {!! $datas->event->description_en  !!}
                                    </div> -->
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
