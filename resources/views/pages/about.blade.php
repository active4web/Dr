@extends('layout.master')
@section('content')
		<!--  Main start -->
		<?php
foreach($sitesetting as $sitesetting)
foreach($site_info as $site_data)
?>
        <main class="aboutus">
            <!-- About start -->
            <div class="container about">
                <div class="row">
                    <!-- About left col start -->
                    <div class="col-2 about_left">
                        <div class="row">
                            <h1>Royal Dental Clinic</h1>
                            
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

            <!-- Video start -->

            <!-- Video end -->

            <!-- Why We Are start -->
            <div class="row why_we_are">
                <div class="container">
                    <h4>Why We Are the Best</h4>

                    <div class="row why_we_are_content">
                        <div class="row">
							@foreach($Whyus as $Whyus_data)
                            <!-- Why We Are item start -->
                            <div class="col-3 why_we_are_item">
                                <div class="why_we_are_item_icon">
                                    <img src="{{url('/')}}/backend/uploads/why_us/{{$Whyus_data->img}}" class="dental_about_icon" alt="Royal Dental Clinic">
                                </div>
                                <div class="why_we_are_item_title">{{$Whyus_data->title_en}}</div>
                                <div class="why_we_are_item_text"> {{$Whyus_data->description_en}}</div>
                            </div>
							<!-- Why We Are item end -->
							@endforeach
                           
                        </div>
                        
                    </div>

                </div>
            </div>
            <!-- Why We Are end -->



            <!-- Gets start -->
            <div class="row gets">
                <div class="container">
                    <h4>
                        <i class="fa fa-quote-left "></i> {{$sitesetting->our_works_title_en}}
                    </h4>
                    <!-- Gets text start -->
                    <div class="col-1-60 gets_text">
{!!$sitesetting->our_works_txt_en!!}
				</div>
                    <!-- Gets text end -->
                    <!-- Gets advantages start -->
                    <div class="col-1-40 advantages">
                        <div class="row advantages_item">
                            <strong>100%</strong>
                            <span>Guaranteed</span>
                        </div>
                        <div class="row advantages_item">
                            <strong>17</strong>
                            <span>Insurance options</span>
                        </div>
                    </div>
                    <!-- Gets advantages end -->
                </div>
            </div>
            <!-- Gets end -->
        </main>
        <!--  Main end -->
    </div>
    <!-- Wrapper End -->

@endsection
