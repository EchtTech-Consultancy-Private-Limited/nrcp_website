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
            @if(!empty($data))
            <div class="rs-blog main-home">
                <div class="container1 row">
                    <div class="col-md-6">
                        @foreach($eventImag as $datas)
                        <div class="mySlides">
                            <img src="{{ asset('resources/uploads/EventsManagement/'.$datas->public_url) }}" style="width:100%">
                        </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="col-md-6 col-box-g">
                    @foreach($eventImag as $key=>$datas)
                        <div class="column">
                            <img class="demo cursor" src="{{ asset('resources/uploads/EventsManagement/'.$datas->public_url) }}" style="width:100%" onclick="currentSlide({{$key+1}})" alt="">
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="mt-5">
                    <h4>{{ $data->title_name_en }}</h4>
                    <p>{!! $data->description_en !!}</p>
                </div>
            </div>
            @else
            {{ abort(404) }}
            @endif
        </div>
    </div>
</div>
@endsection
@push('post-scripts')
@endpush


