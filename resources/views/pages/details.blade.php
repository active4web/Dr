@extends('layout.insidemaster')
@section('content')

				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>
                @if(app()->getLocale() == 'ar'){!!$data_main->title_ar!!}
               @else{!!$data_main->title_eng!!}
               @endif</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="{{url('/')}}/services">{{trans('messages.services')}}</a></li>
							</ol>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
					</div>
		</div>

<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
  <div class="container">
    <div class="row">
       <div class="col-md-5 col-sm-5 col-xs-12 hidden-xs img_work pic_news">
          <img alt="@if(app()->getLocale() == 'ar'){!!$data_main->title_ar!!} @else{!!$data_main->title_eng!!}@endif" class="img-thumbnai" src="{{config('global.DIR')}}/services/{{$data_main->img}}"   style="border-radius: 0.5em;">
       </div>
      <div class="col-md-5 col-sm-5 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center img_work pic_news">
        <img alt="@if(app()->getLocale() == 'ar'){!!$data_main->title_ar!!} @else{!!$data_main->title_eng!!}@endif" class="img-thumbnail" src="{{config('global.DIR')}}/services/{{$data_main->img}}" style="border-radius: 0.5em;">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12 " >
        <h3 class="hed_about  news_title"  style="padding-top:30px">@if(app()->getLocale() == 'ar'){!!$data_main->title_ar!!} @else{!!$data_main->title_eng!!}@endif</h3>
           <div class="about_p">@if(app()->getLocale() == 'ar'){!!$data_main->details_ar!!} @else{!!$data_main->details!!}@endif
            </div>

    </div>
</div>
</div>
<div class="clearfix"></div>
</div>

        @endsection
