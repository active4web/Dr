@extends('layout.insidemaster')
@section('content')

<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>{{trans('messages.news_page')}}</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="#">{{trans('messages.news_page')}}</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>


        <div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
    <div class="container">
      <div class="row" style="margin:0px">
         <div class="col-md-12" style="padding: 35px;">
            <div class="row" style="margin:0px">
@if(count($data)>0)
@foreach($data as $prod)
	           <div class="col-md-4  col-xs-12 col-sm-6 mb-n1 btr" style="padding-right:5px;padding-left:5px">
		        <a href="{{url('/')}}/news-details/{{$prod->id}}" class="hp_link">
			        <div class="thumbnail thumbnail_events">
				       <img src="{{config('global.DIR')}}/events/{{$prod->img}}" class="rounded float-left img_business_events" alt=" @if(app()->getLocale() == 'ar'){!!$prod->title!!}@else{!!$prod->title_en!!} @endif">
					      <span class="date">
                            @if(app()->getLocale() == 'ar'){!!$prod->special_date!!}
                        @else{!!$prod->special_date_en!!}
                        @endif
                         </span>
			        </div>
	            <div class="caption_events">
                    <p class="title_events">
                    @if(app()->getLocale() == 'ar'){!!$prod->title!!}
                        @else{!!$prod->title_en!!}
                    @endif
                     </p>
			          <p class="description_events">
                      @if(app()->getLocale() == 'ar'){!!mb_substr($prod->description_ar,0,120)!!}
                        @else{!!mb_substr($prod->description_en,0,120)!!}
                    @endif

			          </p>
		             <p class="p-news"><a href="{{url('/')}}/news-details/{{$prod->id}}"  class="news-link">{{trans('messages.read_more')}}</a></p>
	            </div>
	        	</a>
	          </div>

     @endforeach
<div class="clearfix col-md-12"></div>
 <div class="col-md-12" style="text-align:center;min-height:40px">{{ $data->onEachSide(2)->links()}}</div>
@else
<div class="col-md-12" style="text-align:center"><?= lang("no_data");?></div>
@endif

			</div>
          </div>
       </div>
    </div>
<div class="clearfix"></div>
		</div>

<div class="clearfix"></div>
@endsection
</div>


