@extends('layout.insidemaster')
@section('content')

				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>
                @if(app()->getLocale() == 'ar'){!!$prod->title!!}
               @else{!!$prod->title_en!!}
               @endif</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="{{url('/')}}/news">{{trans('messages.news_page')}}</a></li>
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
            <!--------------------------Start Row1--------------->
    <div class="col-md-5 col-sm-5 col-xs-12 hidden-xs img_work pic_news">
    <img alt="@if(app()->getLocale() == 'ar'){!!$prod->title!!} @else{!!$prod->title_en!!} @endif" class="img-thumbnai" src="{{config('global.DIR')}}/events/{{$prod->img}}"   style="border-radius: 0.5em;">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center img_work pic_news">
        <img alt="@if(app()->getLocale() == 'ar'){!!$prod->title!!} @else{!!$prod->title_en!!} @endif" class="img-thumbnail" src="{{config('global.DIR')}}/events/{{$prod->img}}" style="border-radius: 0.5em;">
    </div>
<div class="col-md-7 col-sm-7 col-xs-12 " >
    <h3 class="hed_about  news_title"  style="margin-top: 40px;">
    @if(app()->getLocale() == 'ar'){!!$prod->title!!}
     @else{!!$prod->title_en!!}
      @endif</h3>
            <div class="date_news">
            @if(app()->getLocale() == 'ar'){{$prod->special_date}}
             @else{{$prod->special_date_en}}
             @endif
             </div>
        <div class="about_p">
        <p class="servivce_description" style="padding-bottom:0px">
        @if(app()->getLocale() == 'ar'){!!$prod->details!!}
        @else{!!$prod->details_en!!}
        @endif
        </p></div>
<div class="col-md-12"  style="text-align: center">
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook" ></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_facebook_messenger"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
        </div>
    </div>
</div>
<!---------------2Row---------------->
    <!---------------------------3Row----------------------------->
        <!---------------------------4Row------------------------------>
            <!--------------------------5Row-------------------------------->
            <div class="row">
                    <div class="col-md-12">
                        </div>
</div>
<!---------------------------6Row-------------------------------->
</div>

<div class="clearfix"></div>
</div>
        @endsection
