<?php
foreach($site_info as $sitesetting)

if(app()->getLocale() == 'ar'){$footimg=$sitesetting->footer_log;}
else {$footimg=$sitesetting->footer_log_en;}

?>
	<footer>
				 <div class="overlay">
					<div class="container">
					<a href="#" class="scrollTop button" style="display: block;" id="elevator_item">
						<i class="fa fa-arrow-up" style="color:#fff;"></i></a>
                         <div class="row">
							<div class="col-md-3 col-xs-12 text-right">
								<a class="" href="index.html">
									<img class="img-responsive right-block" src="{{url('/')}}/backend/uploads/site_setting/{{$footimg}}"
                                    </a>
									<div class="sochal pull-right mt-50">
										<a href="{{$sitesetting->instagram}}"  target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
										<a href="{{$sitesetting->twitter}}"    target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="{{$sitesetting->facebook}}"   target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
									</div>
							</div>




							<div class="col-md-1  col-xs-12"></div>

							<div class="col-md-4  col-xs-12">
									<h4>{!!trans('messages.important_link')!!}</h4>
										<div class="qanon">
<div class="col-md-5 col-xs-12">
<li><a href="{{url('/')}}"><i class="fas fa-external-link-alt"></i>{!!trans('messages.home_page')!!}</a></li>
<li><a href="{{url('/')}}/about"><i class="fas fa-external-link-alt"></i>{!!trans('messages.about_page')!!}</a></li>
<li><a href="{{url('/')}}/services"><i class="fas fa-external-link-alt"></i>{!!trans('messages.service_page')!!}</a></li>
</div>
<div class="col-md-7 col-xs-12">
<li><a href="{{url('/')}}/works"><i class="fas fa-external-link-alt"></i>{!!trans('messages.works_page')!!}</a></li>
<li><a href="{{url('/')}}/news"><i class="fas fa-external-link-alt"></i>{!!trans('messages.news_page')!!}</a></li>
<li><a href="{{url('/')}}/contact"><i class="fas fa-external-link-alt"></i>{!!trans('messages.contact_page')!!}</a></li>
</div>
</div>
</div>
   <div class="col-md-4  col-xs-12">
		<h4>{!!trans('messages.contact_Information')!!}</h4>
			<div>
				<li><i class="fas fa-phone foot_contact"></i>{{$sitesetting->phone}}</li>
				<li><i class="fa fa-envelope foot_contact"></i>{{$sitesetting->email}}</li>
				<li><i class="fas fa-map-marker-alt foot_contact"></i>
                @if(app()->getLocale() == 'ar'){{$sitesetting->address_ar}}
                @else {{$sitesetting->address_eng}}
                @endif
                </li>
			</div>
	</div>
</div>




					</div></div>
					<div class="coppy text-center">
							<div class="container">
								<h5 class="" style="font-size:13px;">{!!trans('messages.copy_right_foot')!!}
                                <a href="">{!!trans('messages.copy_comp')!!}</a></h5>
								</div>
						</div>
				</footer>
  <script src="{{url('/')}}/resources/them/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/resources/them/js/main.js"></script>
    <script type="text/javascript" src="{{url('/')}}/resources/them/toastr/toastr.min.js"></script>
    <link href="{{url('/')}}/resources/them/toastr/toastr.min.css" rel="stylesheet">
@if(session()->has('msg'))
<script>
$(document).ready(function(e) {
	toastr.info("{{ session()->get('msg') }}",  {timeOut: 5000})
});
</script>
@endif
