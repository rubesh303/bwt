<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>BeautyeBookings | Dashboard </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png"/>
    <!-- <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <script src="{{ asset('assets/js/loader.js"') }}></script> -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ url('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('public/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ url('public/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
      <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
      @include('layouts.dashboard_header')

       <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
         <!-- @include('layouts.sidebar') -->
      
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <!-- <div class="layout-px-spacing"> -->

               
            @yield('content')


            <!-- </div> -->
            
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    @include('layouts.footer')
</body>
</html>