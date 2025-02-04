</head>
<?php
foreach($site_info as $sitesetting)
?>
<body>
    <div class="preloader">
        <div class="preloader_animation">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
			<title>tooth</title><path d="M316.54,550.47q-.36-11.67-.49-23.35c-.32-29.6-3.9-54.78-20.56-80.11C267,403.74,257.7,355.76,259.33,304.82c2.28-71.37,41-119.16,106.45-129.85,27.08-4.43,53.58.75,77.24,13.22,39.56,20.84,77,20.66,116.95.4,36.4-18.44,75.57-21.17,113.88-4,49.7,22.24,68.94,64.74,72.32,115.8,3.4,51.34-5.7,100.28-34.33,144.21-15.55,23.86-22.15,49.18-21.54,78.24,1.56,74.77-2,149.53-26.7,221-7.93,22.95-21.69,44.37-35.56,64.59-8.61,12.55-22.56,22.56-40,16.29-18.35-6.58-21.13-23-24-40Q550.06,703.18,534.28,622c-2.4-12.27-7.56-24.4-13.58-35.43-4-7.3-11.45-14.23-18.13-18.78-26,23.21-34.19,59-40.75,91.83-8.53,42.71-13.64,86.1-20.28,129.19C439.2,804,435,818.11,418.83,824.61s-27.9-2.15-38.31-12.55c-28.2-28.15-41-64.47-47.69-102.06A1109.44,1109.44,0,0,1,316.54,550.47Zm280,246.39c24.2-16.59,33.23-39.12,40.48-62.18,21.11-67.18,26.58-136.72,25.11-206.41-.78-37,7.41-69.24,26-100.65C713.82,384.28,721.42,336.8,714.4,287c-6.48-46-36.84-78.7-82.21-81.59-20.48-1.3-43.19,4.24-62.15,12.78-45.39,20.44-89.11,22.89-133.8-.28-8.25-4.28-17.45-6.93-26.44-9.5-56.13-16.06-106.5,12.85-117.76,70.09-10.35,52.6-3.56,103.36,25.44,149.94,14.71,23.62,25.76,48.14,26.61,77.23,1.51,51.85,3.64,103.8,8.78,155.39,5,50.37,18.57,96.89,53.31,134.69,12.22-24.76,13-56.28,17.8-83.54,5.45-31.19,11.2-62.34,18.55-93.14,5.59-23.39,18.55-46.1,32.5-66.1,14.54-20.84,38.8-20.33,55.17-.66,10.4,12.5,20.06,27.18,24.82,42.51,11.42,36.79,21,74.28,28.92,112C589.9,735.18,592.16,764.35,596.57,796.87Z"/><path d="M373.39,245c24.16,1.24,8.7,24.67,1.95,35a66.12,66.12,0,0,0-10.54,31.47c-1.73,24,5.75,48.89,16.55,70,5.17,10.11,16.85,31.45-1.32,36.23-11.24,3-21.82-11-26.53-19.34-8.17-14.48-12.69-31-15.79-47.19a157.15,157.15,0,0,1,4.49-75.53c3.89-12.67,15.61-30.93,30.59-30.71Z"/></svg>
        </div>
    </div>
    <!-- Wrapper start -->
    <div class="wrapper">

        <!-- HEADER start -->
        <header>
            <div id="site-header" class="sticky">
                <!-- Header top start -->
                <div class="row header_top">
                    <div class="container_1336">
                        <div class="row">
                            <!-- Start clock -->
                            <div class="header_clock">
                                <i class="fa fa-clock-o"></i>
                                <span>{{$sitesetting->works_hrs}}</span>
                                <span>{{$sitesetting->closed}}</span>
                            </div>
                            <!-- End clock -->
                            <!-- Start phone -->
                            <a href="tel:201064564694" class="header_phone">
                                <i class="fa fa-phone"></i>{{$sitesetting->phone}}
                            </a>
                            <!-- End phone -->
                            <!-- Start mail -->
                            <a href="mailto:ourmail@gmail.com" class="header_mail">
                                <i class="fa fa-envelope"></i>{{$sitesetting->email}}
                            </a>
                            <!-- End mail -->
                            <!-- Start address -->
                            <div class="header_address">
                                <i class="fa fa-map-marker"></i>{{$sitesetting->address_ar}}
                            </div>
                            <!-- End address -->
                            <!-- Start social button -->
                            <div class="header_social_button">
                                <a href="{{$sitesetting->facebook}}"><i class="fa fa-facebook"></i></a>
                            </div>
                            <!-- End social button -->
                        </div>
                    </div>
                </div>
                <!-- Header top end -->

                <!-- Header bottom start -->
                <div class="row header_bottom">
                    <div class="container_1336">
                        <div class="row">
                            <!-- LOGO start -->
                            <div class="logo">
                                <a href=""><img class="lozad" src="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->logo}}" alt="Royal Dental Clinic" /></a>
                            </div>
                            <!-- LOGO end -->

                            <!-- Headr Button start -->
                            <div class="header_btn">
                                <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn_white booknow">Book Now</a></div>
                            </div>
                            <!-- Headr Button end -->

                            <!-- NAVIGATION start -->
                            <div class="menu">
                                <nav>
                                    <ul>
                                        <li class="">
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('/')}}/about">About Us</a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('/')}}/services">Services</a>
                                        </li>

                                        <li><a href="{{url('/')}}/contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- NAVIGATION end -->

                            <!-- Mobile Menu start -->
                            <nav class="nav" id="menu_right_sidebar">
                                <div class="menu-right-button open-button"><i class="fa fa-bars"></i></div>
                                <div class="container_right_menu">
                                    <span class="close-button"><i class="fa fa-times"></i></span>
                                    <div class="row header_menu">
                                        <div class="row logotype_light">
                                            <img class="lozad" src="{{url('/')}}/backend/uploads/site_setting/{{$sitesetting->logo}}"  alt="{{$sitesetting->name_site_ar}}">
                                        </div>
                                        <div id="dl-menu" class="dl-menuwrapper">
                                            <ul class="dl-menu dl-menuopen">
                                                <li>
                                                    <a href="index.html">Home</a>
                                                </li>

                                                <li>
                                                    <a href="about.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="services.html">Services</a>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row footer_item_social">
                                        <a href="{{$sitesetting->facebook}}"><i class="fa fa-facebook"></i></a>
                                        <!---<a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-vk"></i></a>
                                        <a href="#"><i class="fa fa-yelp"></i></a>-->
                                    </div>
                                    <div class="row menu_contact">
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i> <address>{{$sitesetting->address_ar}}</address></li>
                                            <li><i class="fa fa-phone"></i> Phone: {{$sitesetting->phone}}</li>
                                            <li><i class="fa fa-envelope-o"></i>{{$sitesetting->email}}</li>
                                            <li><i class="fa fa-clock-o"></i>{{$sitesetting->works_hrs}}</li>
                                            <li><i class="fa fa-clock-o"></i>{{$sitesetting->closed}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- Mobile Menu end -->
                        </div>
                    </div>
                </div>
                <!-- Header bottom end -->
            </div>
        </header>
        <!-- HEADER end -->
        <!-- Header slideshow start -->
