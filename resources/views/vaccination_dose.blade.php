@extends('layouts.main')
@section('title')
 {{__('Whos Who')}}
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
                <h1 class="page-title">Vaccination Dose</h1>
                <ul>
                    <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                        <a class="active" href="{{ url('/') }}">Vaccination Dose</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->
        <!-- Contact Section Start -->
        <div class="event-page-section pt-80 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="rs-inner-blog">
                        <div class="widget-area">
                            <form method="get" action="{{ url('vaccination_dose') }}?data={{ request('date') }}">
                            <div class="search-widget mb-20">
                               <select class="form-control" data-date="{{ request('date') }}" onchange="changeURL(this.value)" name="type" id="vaccination-dose">
                                 <option value="0,{{ request('date') }}"{{ (request('type')==0)?'selected':'' }}>Select Dose Type </option>    
                                 <option value="1,{{ request('date') }}" {{ (request('type')==1)?'selected':'' }}> IM (Intra Muscular) </option>    
                                 <option value="2,{{ request('date') }}"{{ (request('type')==2)?'selected':'' }}> ID (Intra Dermal)</option>    
                               </select>
                               <form>
                            </div>
                        </div>
                    </div>
                       
                    </div>

                    <div class="col-md-12">                       
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Dose Type</th>
                                    <th>First Dose</th>
                                    <th>Second Dose</th>
                                    <th> Third Dose </th>
                                    <th> Fourth Dose </th>
                                    <th> Fifth Dose </th>
                                </thead>
                                <tbody>
                                    <?php if(request('type') ==1){ ?>
                                    <tr>
                                        <td class="text-left">IM (Intra Muscular)</td>
                                        <td>{{ date('Y-m-d', strtotime(request('date'))) }}</td>
                                        <td>{{ date('Y-m-d', strtotime(request('date'). ' + 3 days')) }}</td>
                                        <td>{{ date('Y-m-d', strtotime(request('date'). ' + 7 days')) }}</td>
                                        <td>{{ date('Y-m-d', strtotime(request('date'). ' + 14 days')) }}</td>
                                        <td>{{ date('Y-m-d', strtotime(request('date'). ' + 28 days')) }}</td>
                                    </tr>
                                        <?php }elseif(request('type') ==2){ ?>
                                        <tr>
                                            <td class="text-left">ID (Intra Dermal)</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'))) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 3 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 7 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 28 days')) }}</td>
                                        </tr>
                                        <?php }else{  ?>
                                        <tr>
                                            <td class="text-left">IM (Intra Muscular)</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'))) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 3 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 7 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 14 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 28 days')) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">ID (Intra Dermal)</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'))) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 3 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 7 days')) }}</td>
                                            <td>{{ date('Y-m-d', strtotime(request('date'). ' + 28 days')) }}</td>
                                        </tr>
                                        <?php } ?>
                                    
                                    
                                
                            </tbody>
                          </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
    </div>

@endsection
@push('post-scripts')
<script>
    function changeURL(e){
        var temp = new Array();
        var temp= e.split(',');
        document.location.href = "vaccination_dose?type="+temp[0]+'&'+'date='+temp[1];
        }
        $(document).ready(function() {
            $(".btn2").click(function() {
                $(".grid-item.filter2").removeClass('d-none');
            });
            $(".btn3").click(function() {
                $(".grid-item.filter3").removeClass("d-none");
            });
        });
</script>
<script>
    $(document).ready(function() {
        $('.image-link').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    });
</script>
@endpush