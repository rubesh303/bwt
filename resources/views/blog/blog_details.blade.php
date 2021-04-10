<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>BeautyeBooking | Blog Detail</title>

<!-- Stylesheets -->
<link href="{{ url('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ url('assets/css/style.css')}}" rel="stylesheet">
<link href="{{ url('assets/css/responsive.css')}}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{ url('assets/css/color-switcher-design.css')}}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ url('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ url('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ url('assets/images/favicon.png')}}" type="image/x-icon">

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
                        <div class="logo"><a href="index.html"><img src="url('assets/images/logo.png') }}" alt=""></a></div>
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
                    <a href="index.html" class="img-responsive"><img src="{{ url('assets/images/logo.png')}}" alt="" title="" class="logo_btm"></a>
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

 	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ url('assets/images/background/11.jpg')}});">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Blogs Details</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index-2.html">Home</a></li>
	                <li>Latest Blogs</li>
	            </ul>
        	</div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-detail">
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <img src="{{ asset($blog->img)}}"height="300px" alt="">
                                    <span class="tag">{{$blog->category_name}}</span>
                                </div>
                                <div class="lower-content">
                                    <ul class="info">
                                        <li>By <a href="blog-detail.html">{{$blog->name}}</a></li>
                                        <li><a href="blog-detail.html">{{ date('d-F-Y',strtotime($blog->date)) }}</a></li>
                                    </ul>
                                    <h3><a href="blog-detail.html">{{$blog->category_name}}</a></h3>
                                    <p>{{$blog->desc}}</p>
                                    <div class="blockquote">
                                        <div class="row clearfix">
                                            <div class="image-column pull-right col-md-5 col-sm-6 col-xs-12">
                                                <div class="image"><img src="{{ asset('front/images/resource/blockquote.jpg')}}" alt=""></div>
                                            </div>

                                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                                <div class="inner-column">
                                                    <div class="text">{{$blog->desc}}.</div>
                                                    <div class="info">
                                                        <h4>{{$blog->name}}</h4>
                                                        <span>Head of Department</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <p>{{$blog->desc}}</p>
                                </div>
                                <div class="blog_icons">
                                    <ul class="social-icons clearfix">
                                        <li><a href="#"><i class="fa fa-eye mr-1"></i></a>1K</li>
                                        <li><a href="#"><i class="fa fa-thumbs-up mr-1"></i></a>800</li>
                                        <li><a href="#"><i class="fa fa-share mr-1"></i></a>270</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Other Options -->
                        <div class="post-share-options clearfix">
                            <div class="pull-left">
                                <p>Tags : </p>
                                <ul class="tags">
                                    <li><a href="#">Body</a>,</li>
                                    <li><a href="#">Care</a>,</li>
                                    <li><a href="#">Center</a>,</li>
                                    <li><a href="#">Spa</a>,</li>
                                </ul>                               
                            </div>
                            <div class="pull-right">
                                <p>Share : </p>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Author Box -->
                        

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Read Comments</h2></div>
                            <div class="comment-box">
                                <!-- Comment -->
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ url('assets/images/resource/thumb-1.jpg')}}" alt=""></div>
                                    <div class="comment-info">
                                        <h4 class="name">{{$blog->name}} -</h4>
                                        <span class="date">{{ date('F:d,Y',strtotime($blog->date)) }}</span>
                                    </div>  
                                    <div class="text">{{$blog->desc}}</div>
                                </div>
                            </div>


                            <div class="comment-box">
                                <!-- Comment -->
                                <div class="comment">
                                    <div class="author-thumb"><img src="{{ url('assets/images/resource/thumb-2.jpg')}}" alt=""></div>
                                    <div class="comment-info">
                                        <h4 class="name">{{$blog->name}} -</h4>
                                        <span class="date">{{ date('F:d,Y',strtotime($blog->date)) }}</span>
                                    </div>  
                                    <div class="text">{{$blog->desc}}</div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="clearfix">
                                <div class="group-title"><h2>Add Your Comments:</h2></div>
                            </div>

                            <!--Comment Form-->
                            <form method="post" action="http://html.efforttech.com/html/spaland/blog.html">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Your Comments"></textarea>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-four" type="submit" name="submit-form">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--End Comment Form -->

                    </div>
                </div><!-- Blog List -->

                <!--Sidebar Side-->
                <div class="sidebar-side col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar default-sidebar">
                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="http://html.efforttech.com/html/spaland/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search......" required="">
                                    <button type="submit"><span class="icon flaticon-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h2>Categories</h2></div>
                            <ul class="category-list">
                                
                               @foreach($categories as $cat)
                               <li><a href="#">{{$cat->category_name}}<span>(06)</span></a></li>
                               @endforeach
                            </ul>
                        </div>

                        <!-- Latest News -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Popular Posts</h2></div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="url('assets/images/resource/post-thumb-1.jpg') }}" alt=""></a></div>
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                    <span class="date">28 November 2020</span>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="url('assets/images/resource/post-thumb-2.jpg') }}" alt=""></a></div>
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                    <span class="date">28 November 2020</span>
                                </article>

                                <article class="post">
                                    <div class="post-thumb"><a href="blog-single.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                    <h3><a href="blog-single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></h3>
                                    <span class="date">28 November 2020</span>
                                </article>
                            </div>
                        </div>


                        <!-- Gallery Widget -->
                        <div class="sidebar-widget gallery-widget">
                            <div class="sidebar-title"><h2>Gallery</h2></div>
                            <div class="gallery-outer clearfix">
                                <figure class="image">
                                    <a href="images/gallery/1.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-1.jpg')}}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/2.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-2.jpg')}}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/3.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-3.jpg')}}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/4.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-4.jpg')}}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/5.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-5.jpg')}}" alt=""></a>
                                </figure>

                                <figure class="image">
                                    <a href="images/gallery/6.jpg" class="lightbox-image" title="Image Title Here"><img src="{{ url('assets/images/resource/flicker-6.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>

                        <!-- Tags -->
                        <div class="sidebar-widget tags">
                            <div class="sidebar-title"><h2>Tag Cloud</h2></div>
                            <ul class="tag-list clearfix">
                                <li><a href="#">Message</a></li>
                                <li><a href="#">Therapy</a></li>
                                <li><a href="#">Facial</a></li>
                                <li><a href="#">Pedicure</a></li>
                                <li><a href="#">Menicure</a></li>
                                <li><a href="#">Salt</a></li>
                                <li><a href="#">Oil Bath</a></li>
                                <li><a href="#">Organic Spa</a></li>
                            </ul>
                        </div>             
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <!-- Subscribe Section -->
    <section class="subscribe-section" style="background-image: url('assets/images/background/10.jpg')">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Book a Session Now</h2>
                        <ul class="contact-info">
                            <li>Call Us at : <a href="#">90909 90909</a> or</li>
                            <li>Send us an email : <a href="#">info@beautyebooking.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="subscribe-form">
                            <div class="text">If you Want to get updates on Spa & news?</div>
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                    <button type="submit" class="search-btn"><span class="fa fa-send"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section -->

    <!-- Main Footer -->
   <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Big Column-->
                    <div class="big-column col-md-8 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                            <!--Footer Column-->
                            <div class="footer-column col-md-7 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="index.html"><img src="{{ url('assets/images/logo.png')}}" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <p>Beautyebooking is the users friendly scheduling software for appointment base businesses; yet is the powerful online booking platform that is created to connect professional beauty experts and clients. </p>
                                        <div class="social-links">
                                            <span>Social Media:</span>
                                            <ul class="social-icon-one">
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Quick Links</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="blog.html">Blogs</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="user_agreement.html">User Agreement</a></li>
                                            <li><a href="terms.html">Terms and Conditions</a></li>
                                            <li><a href="privcay_policy.html">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                    
                    <!--Big Column-->
                    <div class="big-column col-md-4 col-sm-12 col-xs-12">
                        <div class="row clearfix">

                            <div class="footer-column col-md-12 col-sm-6 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><strong>Call now : </strong>9090909090</li>
                                            <li><strong>Email : </strong><a href="mailto:info@beautyebooking.com">info@beautyebooking.com</a></li>
                                            <li><strong>Booking Time : </strong>24/7</li>
                                            <li><strong>Address : </strong>153 North Street, Wasington, USA.</li>
                                        </ul>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="copyright-text clearfix">
                    <p> © <a href="index.html">BeautyeBooking</a> <script>document.write(new Date().getFullYear())</script> All rights reserved.</p>
                    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-level-up"></span></div>
                </div> 
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>    
<!--End pagewrapper-->


<script src="{{ url('assets/js/jquery.js')}}"></script> 
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
<!--End Revolution Slider-->
<script src="{{ url('assets/js/jquery-ui.js')}}"></script> 
<script src="{{ url('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ url('assets/js/owl.js')}}"></script>
<script src="{{ url('assets/js/appear.js')}}"></script>
<script src="{{ url('assets/js/wow.js')}}"></script>
<script src="{{ url('assets/js/mixitup.js')}}"></script>
<script src="{{ url('assets/js/script.js')}}"></script>
<!--Color Switcher-->
<script src="{{ url('assets/js/color-settings.js')}}"></script>
</body>

</html>