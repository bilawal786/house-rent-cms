 <!-- ====== Header Mobile Area ====== -->
 <header class="mobile-header-area bg-nero hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <!--Mobile Main Menu-->
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div><!--/.menuexpandermain-->
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-phone-square"></i>Call Us -{{$setting->phone}}</a>
                                            </li>
                                            <li>
                                                <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.left-content -->
                                </div>
                            </div><!--/#mobile-main-nav-->
                        </div><!--/.mobile-menu-main-->
                    </div><!-- /.menu-area -->
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="{{asset($setting->logo)}}" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.logo-area -->
                    <div class="search-block tb-cell">
                        <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                    </div><!-- /.search-block -->
                    <div class="additional-content tb-cell">
                        <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                    </div><!-- /.additional-content -->
                </div><!-- /.mobile-header-block -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.mobile-header-area --> 

<!-- ====== Header Top Area ====== -->
<header class="header-area bg-nero hidden-xs hidden-sm">
    <div class="container">
        <div class="header-top-content">
            <div class="row">
                <div class="col-md-7 col-sm-7 mobile-center">
                    <div class="site-logo">
                        <a href="index.html">
                            <img src="{{asset($setting->logo)}}" alt="site-logo" />
                        </a>
                    </div><!-- /.site-logo -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-5 col-sm-5 mobile-center">
                    <div class="left-content">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - {{$setting->phone}}</a>
                            </li>
                            <li>
                                <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                            </li>
                            <li>
                                <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                            </li>
                            <li>
                                <a href="#" class="trigger-overlay"><i class="fa fa-bars"></i></a>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.header-top-content -->
    </div><!-- /.container -->
</header><!-- /.head-area -->

<!-- ====== Header Bottom Content ====== -->
<header class="header-bottom-content bg-nero hidden-xs hidden-sm">
    <div class="container">        
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <nav id="main-nav" class="site-navigation top-navigation">
                    <div class="menu-wrapper">
                        <div class="menu-content">
                            <ul class="menu-list">
                                <li>
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">Home Layout One</a>
                                        </li>
                                        <li>
                                            <a href="index02.html">Home Layout Two</a>
                                        </li>                                            
                                        <li>
                                            <a href="index03.html">Home Layout Three</a>
                                        </li>                                            
                                        <li>
                                            <a href="index04.html">Home Layout Four</a>
                                        </li>                                            
                                        <li>
                                            <a href="index05.html">Home Layout Five</a>
                                        </li>                                            
                                        <li>
                                            <a href="index06.html">Home Layout Six</a>
                                        </li>                                            
                                        <li>
                                            <a href="index07.html">Home Layout Seven</a>
                                        </li>                                            
                                        <li>
                                            <a href="index08.html">Home Layout Eight</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="booking.html">Booking</a>
                                </li>
                                <li>
                                    <a href="#">House</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="apartment.html">All Apartment</a>
                                        </li>                                            
                                        <li>
                                            <a href="apartment-single.html">Apartment Single</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="gallery.html">Our Gallery</a>
                                        </li>                                            
                                        <li>
                                            <a href="comming.html">Coming Soon</a>
                                        </li>                                            
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>                                            
                                        <li>
                                            <a href="blog-single.html">Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul> <!-- /.menu-list -->
                        </div> <!-- /.menu-content-->
                    </div> <!-- /.menu-wrapper --> 
                </nav><!-- /.site-navigation --> 
            </div><!-- /.col-md-10 -->

            <div class="col-md-2 col-sm-2">
                <div class="booking">
                    <span><a href="booking.html">Booking</a></span>
                </div><!-- /.Booking -->
            </div><!-- /.col-md-2 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /.header-bottom-content --> 
