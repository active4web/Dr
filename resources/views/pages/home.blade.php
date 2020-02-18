@extends('layout.master')
@section('content')
    <!-- Preloader Begin -->
    <?php
foreach($sitesetting as $sitesetting)
foreach($site_info as $site_data)
foreach($home_page as $homepage)
?>

<div class="overflow_hidden">
            <div class="radius_niz_mini">
                <div class="slideshow owl-carousel owl-theme">

					<!-- Start slideshow item -->
					
					@foreach($sliders as $slide)
                    <div class="item">
                        <div class="row slideshow_heding">
                            <div class="slideshow-image lozad" data-background-image="{{url('/')}}/backend/uploads/slider/{{$slide->img}}" id="slide1"></div>
                            <h4><?= $slide->title_en?></h4>
                            <div class="slideshow_info_block">{{$slide->slider_intro_eng}}</div>
                            <div class="popup"><a href="#step1" data-effect="mfp-zoom-in" class="step1 btn">Book Now</a></div>
                        </div>
					</div>
					@endforeach
                    <!-- End slideshow item -->
                    <!-- Start slideshow item -->
                    
                </div>
            </div>
        </div>
        <!--  Header slideshow end -->

        <!--  Main start -->
        <main>
            <!-- Service start -->
            <div class="row services">
                <div class="overflow_hidden">
                    <div class="radius_row_niz services_row">
                        <div class="container">
                            <div class="row row-15">
								<!-- Service item start -->
								@foreach($services as $services)
                                <div class="services_item">
                                    <span class="services_item_title">{{$services->title_eng}}</span>
                                    <span class="services_item_desc">{{$services->description_en}}</span>
                                    <img class="dental_imgIcon" src="{{url('/')}}/backend/uploads/services/{{$services->img}}" alt="">
								</div>
								@endforeach
                                <!-- Service item end -->
                           
                            </div>
                            <div class="view_servises">
                                <a href="{{url('/')}}/services" class="more">View all servises</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service end -->

            <!-- Video start -->
            <div class="row video">
                <div class="container">
                    <video id="dental_video" width="945" height="535" poster="{{url('/')}}/backend/uploads/site_setting/poster.PNG" autobuffer="true" controls>
                        <source src="{{url('/')}}/backend/uploads/site_setting/{{$homepage->home_video}}" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                    <!-- <iframe height="535" style="border:0;" class="lozad" data-src="img/final.avi" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                </div>
            </div>
            <!-- Video end -->

            <!-- Info Block start -->
            <div class="row info_blok">
                <div class="container">
                    <div class="row">
                        <!-- Open Hours start -->
                        <div class="col-2 open_hours">
                            <div class="info_blok_title">
                                <h4>Open Hours</h4>
                            </div>
                            <div class="row open_hours_content">
                                <!-- Open Hours Block start -->
                                <div class="row hours_block">
                                    <div class="open_hours_title">Saturday-Thursday</div>
                                    <div class="row open_hours_block">
                                        <div class="hours">
                                            05:00
                                            <span>pm</span>
                                        </div>
                                        <div class="minute">
                                            - 10:00
                                            <span>pm</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                                <!-- Open Hours Block start -->
                                <div class="row hours_block appointment_block">
                                    <div class="open_hours_title">Friday</div>
                                    <div class="row open_hours_block">
                                        <div class="appointment">
                                            Closed
                                        </div>
                                    </div>
                                </div>
                                <!-- Open Hours Block end -->
                            </div>
                        </div>
                        <!-- Open Hours end -->

                        <!-- Contact Us start -->
                        <div class="col-2 contact_us">
                            <div class="info_blok_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="row div_contact_us_content">
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">Phone</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_phone">{{$site_data->phone}}</div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block contact_us_block_mail">
                                    <div class="div_contact_us_title">Email</div>
                                    <div class="row div_contact_us_block">
                                        <div class="contact_us_mail"> <a href="mailto:{{$site_data->email}}">{{$site_data->email}}</a> </div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                                <!-- Contact Us Block start -->
                                <div class="row contact_us_block">
                                    <div class="div_contact_us_title">Address</div>
                                    <div class="row div_contact_us_address">
                                        <div class="div_contact_us_address_title">{{$site_data->address_ar}}</div>
                                        <div class="div_contact_u_address_title_map">
                                          <?= $site_data->map_home?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Us Block end -->
                            </div>
                        </div>
                        <!-- Contact Us end -->
                    </div>
                </div>
            </div>
            <!-- Info Block end -->

            <!-- About start -->
            <div class="container about">
                <div class="row">
                    <!-- About left col start -->
                    <div class="col-2 about_left">
                        <div class="row">
                            <h4>About Royal Dental Clinic</h4>
                            
                            <div class="about_left_text">
                                <?= $sitesetting->about;?>
                            </div>
                            <!-- Advantages start -->
                            <div class="row advantages">
                                <div class="advantages_item">
                                    <strong>12</strong>
                                    <span>years of experience</span>
                                </div>
                                <div class="advantages_item">
                                    <strong>Hundreds</strong>
                                    <span>happy clients</span>
                                </div>
                                <div class="advantages_item">
                                    <strong>15</strong>
                                    <span>awards in industry</span>
                                </div>
                            </div>
                            <!-- Advantages end -->
                        </div>
                    </div>
                    <!-- About left col end -->


                    <!-- About right col start -->
                    <div class="col-2 about_right">
                        <!-- About image start -->
                        <div class="row about_image">
                            <!-- About image left col start -->
                            <div class="col-2 about_image_left">
							@foreach($about_gallery_left as $gallery_left)
                    <img class="lozad" src="{{url('/')}}/backend/uploads/galleries/{{$gallery_left->img}}"  alt="Royal Dental Clinic" />
                                  @endforeach
                            </div>
                            <!-- About image left col end -->
                            <!-- About image right col start -->
                            <div class="col-2 about_image_right">
								@foreach($about_gallery_right as $gallery_right)
                                <img class="lozad" src="{{url('/')}}/backend/uploads/galleries/{{$gallery_right->img}}"  alt="Royal Dental Clinic" />
                                            @endforeach
							</div>
                            <!-- About image right col end -->
                        </div>
                        <!-- About image end -->
                    </div>
                    <!-- About right col end -->
                </div>
            </div>
            <!-- About end -->


            <!-- Start Dentists Tabs -->
            <div id="dentists">
                <!-- Start Dentists Tabs Container -->
                <div class="container">
                    <div class="row tabs">
                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_l row">
                            <h4>Dentists</h4>
                            <ul>
								@foreach($team as $team_date)
                          <li><a href="#tab{{$team_date->id}}">{{$team_date->title_en}}</a></li>
                               @endforeach 
                            </ul>
                        </div>
                        <!-- End Dentists Tabs Title -->
						
                        <!-- Start Dentists Tabs Title Left Col -->
                        <div class="tabs_r">
							@foreach($team as $team_data)
                            <!-- Start tab1 content -->
                            <div class="tab_content" id="tab{{$team_data->id}}">
                                <div class="row">
                                    <div class="tab_content_l col-2">
                                        <a href="" class="tab_content_name">{{$team_data->title_en}}</a>
                                        <div class="tab_content_profession">{{$team_data->description_en}}</div>
                                        <div class="tab_content_desk">
										{!!$team_data->details_en!!}
									    </div>
                                    </div>
                                    <!-- <div class="tab_content_r col-2">
                                        <a class="radius_left" href="#"><img class="lozad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="img/dentist_photo_1.png" data-srcset="img/dentist_photo_1.png, img/dentist_photo_1@2x.png 2x" alt="DiDent"
                                            /></a>
                                    </div> -->
                                </div>
                            </div>
							<!-- End tab1 content -->
							@endforeach
                            
                        </div>
                        <!-- End Dentists Tabs Title Left Col -->
                    </div>
                </div>
                <!-- End Dentists Tabs Container -->
            </div>
            <!-- End Dentists Tabs -->



            <!-- Start Recent News -->
            <div class="row news">
                <div class="container">
                    <h4>Recent News</h4>
                    <div class="row row-15">
						<!-- Start Recent News Item -->
						@foreach($news as $news_data)
                        <div class="col-3 news_item">
                            <div class="news_item_vn">
                                <a href="" class="radius_niz">
                                    <img class="lozad" src="{{url('/')}}/backend/uploads/events/{{$news_data->img}}"  alt="DiDent" />
                                </a>
                                <div class="news_item_content">
                                    <a href="" class="news_item_content_title">{{$news_data->title_en}}</a>
                                    <div class="news_item_content_date">{{$news_data->creation_date}}</div>
                                    <div class="news_item_content_desk">
                                       {!!$news_data->description_en!!}
                                    </div>
                                </div>
                            </div>
						</div>
						@endforeach
                        <!-- End Recent News Item -->
                      
                    </div>
                </div>
            </div>
            <!-- End Recent News -->
        </main>
        <!--  Main end -->
    </div>
    <!-- Wrapper End -->


@endsection
