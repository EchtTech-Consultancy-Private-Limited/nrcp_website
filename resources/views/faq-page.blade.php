@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('Frequently Asked Questions') }}
@endsection
@section('content')
<!-- Faq Section Start -->
<section>
<div class="rs-faq-part style1 pt-40 pb-80" id="rs-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 padding-0 col-md-12">
                <div class="main-part new-style padding-sm-0">
                    <div class="title mb-20">
                    <h2 class="text-part">Frequently Asked Questions</h2>
                    </div>
                    <div class="faq-content">
                        @if(count($faqdata)>0)
                        <div id="accordion" class="accordion">
                             <?php $i=1;  ?>
                            @foreach($faqdata as $faqdatas)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne_{{$faqdatas->uid}}">Q {{ $i++ }}: {{ $faqdatas->question_en }}</a>
                                </div>
                                <div id="collapseOne_{{$faqdatas->uid}}" class="collapse " data-parent="#accordion">
                                    <div class="card-body">{!! $faqdatas->answer_en !!}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div id="accordion" class="accordion">
                            <p>No Content Available!</p>
                        </div>
                        @endif
                    </div>                                            
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection 