@extends('layouts.main')
@section('title')
    {{ __('Publications') }}
@endsection
<style>
    .error {
        color: #FF0000;
    }
</style>
@section('content')
    <div class="main-content">
        <div class="wrapper" id="skipCont"></div>
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{ asset('assets/Nrcp_img/banner.png') }}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Feedback</h1>
            </div>
        </div>
        <div class="rs-publications-main contact-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="rs-breadcrumbs ">

                            <div class="breadcrumbs-text ">

                                <ul>
                                    <li>
                                        <a class="active" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>Publications</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        @include('share_link')
                    </div>
                </div>
            </div>

            <div id="rs-about" class="rs-about style1 pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <div class="rs-quick-contact new-style">
                                <div class="inner-part mb-20">
                                    <h2 class="title mb-15">Feedback Form</h2>

                                </div>
                                <div id="form-messages"></div>
                                <form id="form" method="post" action="{{ url('feedback-submit') }}">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if( Session::has("success") )
                                    <div class="alert alert-success alert-block" role="alert">
                                    <button class="close" data-dismiss="alert"></button>
                                    {{ Session::get("success") }}
                                   </div>
                                    @endif

                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Name">
                                            @if ($errors->has('name'))
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="Email">
                                            @if ($errors->has('email'))
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="designation" name="designation"
                                                placeholder="Designation">
                                            @if ($errors->has('designation'))
                                                <div class="text-danger">{{ $errors->first('designation') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="phone" name="phone"
                                                minlength="10" maxlength="10" placeholder="Contact No.">
                                            @if ($errors->has('phone'))
                                                <div class="text-danger">{{ $errors->first('phone') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="organization" name="organization"
                                                placeholder="Organization">
                                            @if ($errors->has('organization'))
                                                <div class="text-danger">{{ $errors->first('organization') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 mb-35 col-md-12">
                                            <input class="from-control" type="text" id="address" name="address"
                                                placeholder="Address">
                                            @if ($errors->has('address'))
                                                <div class="text-danger">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 mb-35">
                                            <textarea class="from-control" id="message" name="message" placeholder=" Message"></textarea>
                                            @if ($errors->has('message'))
                                                <div class="text-danger">{{ $errors->first('message') }}</div>
                                            @endif

                                        </div>


                                        <div class="form-group col-md-5 mx-auto mb-0">
                                            <input class="btn-send" type="submit" value="Submit">
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div>
    </div>

    <script>
        // disable alphate
        $('#phone').keypress(function(e) {
            var regex = new RegExp("^[0-9_]");
            var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            if (regex.test(str)) {
                return true;
            }
            e.preventDefault();
            return false;
        });
    </script>

<script>
    $("document").ready(function(){
        setTimeout(function(){
           $("div.alert").remove();
        }, 5000 ); // 5 secs
    
    });
</script>

@endsection
