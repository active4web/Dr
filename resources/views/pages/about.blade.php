@extends('layout.insidemaster')
@section('content')
<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>{{trans('messages.about_page')}}</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="#">{{trans('messages.about_page')}}</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>


<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">


						<div class="container">

							<div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
								<div class="pic">
								<img class="img-responsive" src="{{config('global.DIR')}}/site_setting/{{$sitesettings->about_img}}
" style="border-radius: 0.4em;">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center">
									<div class="pic">
								<img class="img-responsive " src="{{config('global.DIR')}}/site_setting/{{$sitesettings->about_img}}" style="border-radius: 0.4em;">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 about_margin" >
								<h3 class="hed_about" > {{trans("messages.about_page")}}
		                      <p class="bordbott"></p>
								</h3>
								<div class="about_p" style="padding-bottom:45px">
								<p class="about_p" >
                                @if(app()->getLocale() == 'ar'){!!$sitesettings->about!!}
                                @else{!!$sitesettings->about_en!!}
                                @endif
                                </p>

							</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>


		<div class="wrapper"  style="margin-top:30px">


				<div class="container">
						<div class="row">



<div class="col-md-4 col-sm-4 col-xs-12" >
<div class="row mt-30"  style="margin: 0px -10px">
<div class="col-md-12 vision_about">
<div class="col-md-12 text-center"><img src="{{config('global.DIR')}}/site_setting/vision.png" style="width:48px;margin-top:30px"></div>
<div class="col-md-12 text-center">	<h3 class="title_vision" >{{trans("messages.vision")}}</h3></div>
<div class="col-md-12"><p class="description_vision">

    @if(app()->getLocale() == 'ar'){!!$sitesettings->vision!!}
    @else{!!$sitesettings->vision_en!!}
    @endif
     </p></div>
</div>
</div>

</div>



<div class="col-md-4 col-sm-4 col-xs-12" >
<div class="row; "  style="margin: 0px -10px">
<div class="col-md-12 vision_about">
<div class="col-md-12 text-center"><img src="{{config('global.DIR')}}/site_setting/mission.png" style="width:48px;margin-top:30px"></div>
<div class="col-md-12 text-center">	<h3 class="title_mission" >{{trans("messages.message")}}</h3></div>
<div class="col-md-12"><p class="description_mission">
    @if(app()->getLocale() == 'ar'){!!$sitesettings->mission!!}
    @else{!!$sitesettings->mission_en!!}
    @endif

      </p></div>
</div>
</div>

</div>

<div class="col-md-4 col-sm-4 col-xs-12" >
<div class="row mt-30" style="margin: 0px -10px">
<div class="col-md-12 vision_about">
<div class="col-md-12 text-center"><img src="{{config('global.DIR')}}/site_setting/goals.png" style="width:48px;margin-top:30px"></div>
<div class="col-md-12 text-center">	<h3 class="title_mission" >{{trans("messages.Goals")}}</h3></div>
<div class="col-md-12"><p class="description_mission">

@if(app()->getLocale() == 'ar'){!!$sitesettings->goals!!}
    @else{!!$sitesettings->goals_en!!}
    @endif
</p></div>
</div>
</div>

</div>


				</div>
				</div>
				<div class="clearfix"></div>
			</div>




@endsection
