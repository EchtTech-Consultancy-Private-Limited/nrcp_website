<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      @include('partials.head-css-scripts')
   </head>
      <body class="defult-home">
         <div id="loader" class="loader green-color">
            <div class="loader-container">
               <div class='loader-icon'>
                     <img src="{{ asset('assets/Nrcp_img/nrcp.png') }}" alt="">
               </div>
            </div>
         </div>
            <div class="full-width-header header-style1 home1-modifiy home12-modifiy">
               <header id="rs-header" class="rs-header">
                  <div class="topbar-area home11-topbar">
                     <div class="container">
                        @include('partials.top-header')
                     </div>
                  </div>
                     <div class="menu-area menu-sticky">
                        <div class="container-fluid">
                           <nav class="rs-menu">
                              @include('partials.menu-header')
                           </nav>
                        </div>
                     </div>
               </header>
            </div>
         
        
         <!-- <div class="main-content"> -->
            @yield('content')
         <!-- </div> -->
      @include('partials.footer')
      @include('partials.footer-scripts')
   </body>
</html>