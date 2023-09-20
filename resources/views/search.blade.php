@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __('Search') }}
@endsection
@section('content')

<style>
    .search-button-page i {
    margin-right: 10px;
    line-height: 30px;
}

.search-button-page i:before {
    font-size: 17px !important;
    font-weight: 500 !important;
    color: #595454;
}
</style>

    <div class="main-content">
        <div class="rs-publications-main">
            <div id="rs-about" class="rs-about style1 pt-50 pb-40 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row rs-inner-blog">
                        <div class="col-md-4 contact-page-section widget-area">
                        <div class="search-widget">
                           <div class="search-wrap w-100">
                                <form action="{{ url('search') }}" method="get" class="contact-comment-box p-relative search-sec">
                                    <input class="from-control" name="search" type="search" placeholder="search here..." value="{{ request('search') }}" required="">
                                    <button type="submit" id="button" value="Search" class="search-button-page" tabindex="0"><i class="fa fa-search search-icon"> </i></i></button>
                                </form>
                            </div>
                        </div>

                        
                        </div>
                        <div class="col-md-12">
                        @php $c=count($data) @endphp
                            <p class="mt-4 mb-3 text-primary">
                            @if(count($data)>0) Search Result @else  @endif</p>
                            <div class="search-content-box">
                                @if(count($data)>0)
                                @for($i=0;$i<$c;$i++)
                                <h5>{!! $data[$i] !!}</h5> 
                                @endfor 
                                @else
                                <h4 style="color:red">No data found ....</h4> 
                                @endif                        
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection