@extends('layout.master')
@section('content')
    <!-- Preloader Begin -->
    <?php
foreach($sitesetting as $sitesetting)
foreach($site_info as $site_data)
foreach($home_page as $homepage)
?>

<style>
.slide{
	position: relative !important;
	z-index: 0 !important;
}
.text{color: #fff;
    bottom: 20px;
    z-index: 9999999999999;
    position: absolute;
    right: 20px;
	font-size:18px;
	line-height: 30px;

}
.slider_overlay{
	background-color:rgba(25, 24, 24, 0.6);
    padding-bottom: 0%;
    padding-top: 6px;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
}
</style>

<div class="header-slider"  style="direction: ltr">
@foreach($sliders as $slid)
							<figure  style="position: relative;">
								<img src="{{url('/')}}/backend/uploads/slider/{{$slid->img}}" alt="">
                                <div class="slider_overlay"></div>

								<figcaption class="card-body">
@if(app()->getLocale() == 'ar')
    {!!$slid->title!!}
@else
    {!!$slid->title_en!!}
@endif;
									</figcaption>
							</figure>

@endforeach
						</div>

			<div class="wrapper"  style="margin-top:30px;padding-bottom:1%">
				<div class="container">
					<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
									<div class="pic" style="margin-top:0px;">
											<img class="img-responsive " src="{{url('/')}}/backend/uploads/site_setting/{{$homepage->slider_background}}" style="border-radius: 0.4em;">
											</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											<li class="nav-item active abou">
											  <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">
													<span style="display: block"><img src="{{url('/')}}/backend/uploads/site_setting/about_active.jpg"  class="tab-img img-tab-about"></span>
													<span style="display: block">{{@trans('messages.about')}}</span>

											  </a>
											</li>
											<li class="nav-item vis">
											  <a class="nav-link" id="pills-vision-tab" data-toggle="pill" href="#pills-vision" role="tab" aria-controls="pills-vision" aria-selected="false">
													<span style="display: block"><img  src="{{url('/')}}/backend/uploads/site_setting/vision_no_active.png" class="tab-img img-tab-vision"></span>
                                                    {{@trans('messages.vision')}}</a>
											</li>
											<li class="nav-item mess">
											  <a class="nav-link" id="pills-message-tab" data-toggle="pill" href="#pills-message" role="tab" aria-controls="pills-message" aria-selected="false">
													<span style="display: block"><img src="{{url('/')}}/backend/uploads/site_setting/mission_no_active.png"  class="tab-img img-tab-message"></span>
                                                    {{@trans('messages.message')}}</a>
											</li>
											<li class="nav-item goal">
													<a class="nav-link" id="pills-goals-tab" data-toggle="pill" href="#pills-goals" role="tab" aria-controls="pills-goals" aria-selected="false">
															<span style="display: block"><img  class="tab-img img-tab-goals" src="{{url('/')}}/backend/uploads/site_setting/goals_no_active.png"></span>
                                                            {{@trans('messages.goals')}}</a>
												  </li>
										  </ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade  active in" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">

<div class="row">

<div class="col-md-12"><p class="p">
@if(app()->getLocale() == 'ar')
    {!!$homepage->home_about!!}
@else
    {!!$homepage->home_about_en!!}
@endif;

</p></div>

</div>

		</div>

<div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">

		<div class="row">

				<div class="col-md-12"><p class="p">
@if(app()->getLocale() == 'ar')
    {!!$homepage->home_vision!!}
@else
    {!!$homepage->home_vision_en!!}
@endif;
				</p></div>

				</div>
</div>
<div class="tab-pane fade" id="pills-message" role="tabpanel" aria-labelledby="pills-message-tab">
		<div class="row">

				<div class="col-md-12"><p class="p">
@if(app()->getLocale() == 'ar')
    {!!$homepage->home_mission!!}
@else
    {!!$homepage->home_mission_en!!}
@endif;
				</p></div>

				</div>
</div>
<div class="tab-pane fade" id="pills-goals" role="tabpanel" aria-labelledby="pills-goals-tab">
		<div class="row">
<div class="col-md-12"><p class="p">
@if(app()->getLocale() == 'ar')
    {!!$homepage->home_goals!!}
@else
    {!!$homepage->home_goals_en!!}
@endif;
                </p></div>
        </div>

</div>
</div>
</div>

</div></div>
<div class="clearfix"></div>
			</div>

		<!-------------------------------------------------------------------------------------->

<div class="wrapper"  style="margin-top:0px;padding-bottom:1%">
	<div class="container" style="direction: ltr">
			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			  <h3 class="hed_about" > <h1>{{trans('messages.services')}}

</h1> <p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
			</div>
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">

<div class="owl-carousel owl-theme" id="owl-demo">

@foreach($services as $services)
	<div class="item item-home">
				<div class="box_4">
					<div class="thumbnail thumbnail_events">
								<div class="overlaybox"></div>
						<img src="{{url('/')}}/backend/uploads/services/{{$services->img}}" class="rounded float-left img_business_events" alt=" @if(app()->getLocale() == 'en'):{!!$services->title_ar!!}
               @else: {!!$services->title_eng!!}@endif;">
							<div class="box-content">
								<ul class="icon">
									<li><a href="{{url('/')}}/details/{!!$services->id!!}" class="fas fa-external-link-alt"></a></li>
								</ul>
							</div>
					</div>
				</div>
		<div class="caption_events">
			<a href="#" class="hp_link">
			  <p class="title_events_home">
              @if(app()->getLocale() == 'ar'){!!$services->title_ar!!}
               @else{!!$services->title_eng!!}@endif
              </p>
			    <p class="description_events mm1">
                @if(app()->getLocale() == 'ar'){!!$services->description_ar!!}
               @else{!!$services->description_en!!}@endif

			    </p>
			</a>
        </div>

    </div>
    @endforeach


			  </div>

		</div>
    </div>
</div>
<!----معرض الاعمال-->
<div class="wrapper"  style="margin-top:0px;padding-bottom:1%">
	<div class="container" style="direction: ltr">
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			<h3 class="hed_about" >{{trans('messages.works')}}<p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">

				<div id="owl-demo-1" class="owl-carousel">

                @foreach($works as $works)
					<div class="item item-gallery">
								<div class="box_5">
									<div class="thumbnail thumbnail_events">
												<div class="overlayboxgallery"></div>
										<img src="{{url('/')}}/backend/uploads/clients/{{$works->img}}" class="galleryimg">
											<div class="box-content">
												<ul class="icon">
													<li><a href="{{url('/')}}/works" class="fas fa-eye"></a></li>
												</ul>
											</div>
									</div>
								</div>

					</div>
@endforeach


				</div>

		</div>

	</div>
</div>

<!---###########-->

<!----احدث الاخبار -->
<div class="wrapper"  style="margin-top:0px;padding-bottom:3%">
	<div class="container" style="direction: ltr">
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			<h3 class="hed_about" >{{trans('messages.latest-news')}}<p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
<div id="owl-demo-2" class="owl-carousel">
@foreach($news as $news)
						<div class="item newshome">
								<div class="col-md-12 mb-n1 btr" style="padding-right:0px;padding-left:0px">
										<a href="{{url('/')}}/news-details/{!!$news->id!!}" class="hp_link">
										<div class="thumbnail thumbnail_events">
											<img src="{{url('/')}}/backend/uploads/events/{{$news->img}}" class="rounded float-left img_business_events">
											<span class="date">
                @if(app()->getLocale() == 'ar'){!!$news->special_date!!}
               @else{!!$news->special_date_en!!}@endif</span>
										</div>
									</a><div class="caption_events"><a href="#" class="hp_link">
											<p class="title_events">
               @if(app()->getLocale() == 'ar'){!!$news->title!!}
               @else{!!$news->title_en!!}@endif</p>
											<p class="description_events">
            @if(app()->getLocale() == 'ar'){!!$news->description_ar!!}
               @else{!!$news->description_en!!}@endif
											</p>
											</a><p class="p-news"><a href="{{url('/')}}/news-details/{!!$news->id!!}" class="news-link">{{trans('messages.read_more')}}</a></p>
												</div>
									</div>
						</div>
@endforeach



					</div>

			</div>
		</div>
	</div>

<!---###########-->


				</div>

<div class="clearfix"></div>

@endsection
</div></div>
