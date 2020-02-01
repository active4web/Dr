</head>
<?php
foreach($site_info as $sitesetting)

?>

<body>
<div class="header home ">
<div class="overlay-home ">
<div style="border-bottom:1px solid #cccccc4a;">
                    <div class="container">
									<div class="row" style="margin-left: 0px;margin-right:0px;">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            {{trans('messages.lang')}}
											  <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											  <li><a href="{{ url('locale/ar') }}">{{trans('messages.ar_lang')}}</a></li>
											  <li><a href="{{ url('locale/en') }}">{{trans('messages.en_lang')}}</a></li>
											</ul>
										  </div>

											<div class="sochal">
													<a href=""><i class="fab fa-instagram fa-lg inst"></i></a>
													<a href=""><i class="fab fa-twitter fa-lg"></i></a>
													<a href=""><i class="fab fa-facebook-f fa-lg"></i></a>
												</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12"  style="text-align:center">
										<div class="cont">
														<li><i class="fa fa-envelope"></i>{{$sitesetting->email}}</li>
														<li class="top_header_link">|</li>
														<li><i class="fas fa-phone-alt"></i>{{$sitesetting->phone}}</li>
													</div>
										</div>
									</div>
								</div>

                                </div>
					 <!--start navbar-->
						<nav class="navbar navbar-inverse "  role="navigation" id="nav-b">
                        <div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#axit-nav" aria-expanded="false">
									 <span class="sr-only">Toggle navigation</span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
								   </button>
									<a class="navbar-brand" href="{{url('/')}}"><img class="img-responsive center-block"
                                    src="{{url('/')}}/backend/uploads/site_setting/@if(app()->getLocale() == 'ar'){!!$sitesetting->logo!!} @else{!!$sitesetting->logo_en!!}@endif">

                                    </a>
								</div>

    <div class="collapse navbar-collapse" id="axit-nav">
            <ul class="nav navbar-nav navbar-left">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{url('/')}}">{{trans('messages.home_page')}}</a></li>
                <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{url('/')}}/about">{{trans('messages.about_page')}}</a></li>
                <li class="<?php if(Request::segment(1)=="services"||Request::segment(1)=="details"){?>active <?php }?>"><a href="{{url('/')}}/services">{{trans('messages.service_page')}}</a></li>
                <li class="{{ (request()->is('works')) ? 'active' : '' }}"><a href="{{url('/')}}/works">{{trans('messages.works_page')}}</a></li>
                <li class="<?php if(Request::segment(1)=="news"||Request::segment(1)=="news-details"){?>active <?php }?>"><a href="{{url('/')}}/news">{{trans('messages.news_page')}}</a></li>
                <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{url('/')}}/contact">{{trans('messages.contact_page')}}</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->

						 </nav>
 <div style="overflow-x: hidden; background-image:url('{{url('/')}}/backend/uploads/site_setting/header.jpg');position: relative;    background-size: 100% 100%;;"  class="header home top abo">
<div class="header_overlay">
