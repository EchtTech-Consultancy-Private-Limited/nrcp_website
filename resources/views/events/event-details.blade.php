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
                        @foreach(json_decode($data->images) as $datas)
                        <div class="mySlides">
                            <img src="{{ asset('uploads/EventsManagement/'.$datas) }}" style="width:100%">
                        </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="col-md-6 col-box-g">
                    @foreach(json_decode($data->images) as $key=>$datas)
                        <div class="column">
                            <img class="demo cursor" src="{{ asset('uploads/EventsManagement/'.$datas) }}" style="width:100%" onclick="currentSlide({{$key}})" alt="">
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
<script>
        let slideIndex = 1;
        showSlides(slideIndex);        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("demo");
          let captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
@endpush


