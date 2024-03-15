<meta charset="utf-8">
<title>
@section('title')
    {{ config('app.name') }}
@show
</title>
<meta name="description" content="">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ $metaDetails->meta_tag_description ?? 'National Rabies Control Program' }}">
<meta name="keywords" content="{{ $metaDetails->meta_keywords ?? 'National Rabies Control Program' }}">
<meta name="tag" content="{{ $metaDetails->meta_tag ?? 'National Rabies Control Program' }}">
<meta name="basepath" content="{{ asset('assets/css/') }}">
<meta name="baseURL" content="{{ asset('/') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" href="{{ asset('assets/Nrcp_img/nrcp.png') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/fonts.googleapis.com_css2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/poppins/Poppins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Nrcp_img/nrcp.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linea-fonts.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" id="langStyle">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
<link rel="stylesheet" type="text/css" id="theme-style" href="">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/mapFiles/esri.css') }}">
<link rel="stylesheet" href=" " id= "hindiStyle">
