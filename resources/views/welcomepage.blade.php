<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>National Rabies Control Program</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="{{ asset('assets-welcome/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link href="{{ asset('assets-welcome/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets-welcome/vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    
    <script src="{{ asset('assets-welcome/js/code.jquery.com_jquery-3.7.0.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets-welcome/css/style.css') }}">

</head>

<body>

    <div class="curtain">

        <!-- The container that wraps the curtain -->
        <div class="curtain__wrapper">


        <!-- Inauguration button -->
   
         <a href="{{ route('index') }}" onclick=curtain(); class="IN-btn-main btn">
         <img src="{{ asset('assets-welcome/img/rope.png') }}" alt="rope" class="ino-rope">
         </a>

            <!-- The left curtain panel -->
            <div class="curtain__panel curtain__panel--left">

            </div> <!-- curtain__panel -->

            <div class="container-fluid px-0">
                <div class="backgorund-img1"></div>
                <div class="backgorund-img2"></div>
                <div class="backgorund-img3"></div>

            </div>

            <!-- <div class="curtain__prize">
                <div class="main-container">
                    <div class="container">
                        <div class="launching-page">
            
                            <div class="header">
                                <div class="row">
            
                                    <div class="col-md-2 ">
                                        <div class="logo">
                                            <a href="#">
            
                                                <img src="{{ asset('assets-welcome/img/government-of-india.jpg') }}" alt="nrcp" title="government-of-india">
                                                
                                            </a>
                                           
                                        </div>
            
                                    </div>
                                    <div class="col-md-8  width-70">
                                      <div class="header_content">
                                        <h3>Welcome to National Rabies Control Programme Website (NRCP)</h3>
                                        <h5> National Center for Disease Control</h5>
                                        <p> Directorate General of Health Services,
                                         Ministry of Health & Family Welfare, <br> Government of India</p>
                                      </div>
                                    </div>
                                    <div class="col-md-2 justify-content-end d-flex width-15">
                                        <div class="logo">
                                            <a href="#" class="me-3">
            
                                                <img src="{{ asset('assets-welcome/img/nrcp-logo.jpg') }}" alt="nrcp" title="nrcp">
                                            </a>

                                            <a href="#">
            
                                                <img src="{{ asset('assets-welcome/img/rog_kendra.png') }}" alt="nrcp" title="rog_kendra">
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="about-content">
                                            <h1 class="title"> About NRCP</h1>
                                            <div class="about-item">
                                                <P>
                                                    <b>Rabies</b> is responsible for extensive morbidity and mortality in India. The
                                                    disease is endemic throughout the country. Except for Andaman & Nicobar and
                                                    Lakshadweep Islands, human cases of rabies are reported from all over the
                                                    country. The cases occur throughout the year. About 96% of the mortality and
                                                    morbidity is associated with dog bites. Cats, wolf, jackal, mongoose and monkeys
                                                    are other important reservoirs of rabies in India. Bat rabies has not been
                                                    conclusively reported from the country.
            
                                                </P>
                                            </div>
            
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="proceed">
                                            <div class="text-center">
            
                                                <a href="{{ route('index') }}" class="pulse">Proceed Now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                        </div>
            
            
                    </div>
                </div>
            </div> -->
             <!-- curtain__prize -->

            <!-- The right curtain panel -->
            <div class="curtain__panel curtain__panel--right">

            </div> <!-- curtain__panel -->

        </div> <!-- curtain__container -->

    </div>
    <script src="{{ asset('assets-welcome/js/main.js') }}"></script>
</body>

</html>