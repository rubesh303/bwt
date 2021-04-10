<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>BeautyeBooking | Blog</title>

<!-- Stylesheets -->
<link href="{{ url('/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ url('/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ url('/assets/css/responsive.css') }}" rel="stylesheet">

<!--Color Switcher Mockup-->
<!-- <link href="{{ asset('front/css/color-switcher-design.css')}}" rel="stylesheet"> -->

<!--Color Themes-->
<link id="theme-color-file" href="{{ url('/assets/css/color-themes/default-theme.css') }}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ url('/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ url('/assets/images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header">
        
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><a href="#"><i class="fa fa-volume-control-phone"></i> 9090909090</a></li>
                            <li><a href="mailto:info@beautyebooking.com"><i class="fa fa-envelope-o"></i> info@beautyebooking.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <div class="link-box">
                            <!-- <a href="booking.html">Book Now</a> -->
                            <div class="language dropdownn">
                                <a class="btn btn-default dropdown-toggle country_lang" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon flaticon-globe"></span><i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i> United States <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-uk" style="margin-right: 10px;"></i>United Kingdom</a></li>
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-fi" style="margin-right: 10px;"></i>Suomi</a></li>
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-ie" style="margin-right: 10px;"></i>Ireland</a></li>
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-da" style="margin-right: 10px;"></i>DACH</a></li>
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-ca" style="margin-right: 10px;"></i>Canada</a></li>
                                    <li><a href="#"><i class="flagstrap-icon flagstrap-au" style="margin-right: 10px;"></i>Australia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png')}}" alt=""></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class=""><a href="list_business.html">List a Business</a></li>
                                    <li class=""><a href="salon.html">Find A Job</a></li>
                                    <li class=""><a href="help.html">Help</a></li>
                                    <li class="dropdown"><a href="#">Sign In</a>
                                        <ul>
                                            <li><a href="login.html">Sign In</a></li>
                                            <li><a href="login.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                        
                        <!--outer Box-->
                        <div class="outer-box">
                            <!-- Cart Btn -->
                            <div class="cart-btn">
                                <a href="cart.html" title="">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="count">0</span>
                                </a>
                            </div>

                            <!--Search Box-->
                            <div class="dropdown search-box-outer">
                                <button class="search-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://html.efforttech.com/html/spaland/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End outer Box-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="{{ asset('assets/images/logo.png')}}" alt="" title="" class="logo_btm"></a>
                </div>
                    
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                    <li class=""><a href="list_business.html">List a Business</a></li>
                                    <li class=""><a href="salon.html">Find A Job</a></li>
                                    <li class=""><a href="help.html">Help</a></li>
                                    <li class="dropdown"><a href="#">Sign In</a>
                                        <ul>
                                            <li><a href="login.html">Sign In</a></li>
                                            <li><a href="login.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!--End Main Header -->