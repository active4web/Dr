@extends('layout.insidemaster')
@section('content')

				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3>{{trans('messages.works_page')}}</h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="{{url('/')}}" class="home">{{trans('messages.home_page')}}</a></li>
							  <li class="active"><a href="#">{{trans('messages.works_page')}}</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>

        <div class="Carousel-wrapper">
					<span class="Close">
						<i class="fa fa-window-close"></i>
					</span>
					<div id="PopupCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
<?php if(count($data)>0){
foreach($data as $prod) {
?>
<div class="item">
    <img class="d-block w-100" src="{{config('global.DIR')}}/clients/<?= $prod->img?>" alt="First slide">
</div>
<?php }}?>

						</div>
						<a class="left carousel-control" href="#PopupCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#PopupCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
<ol class="carousel-indicators">
<?php if(count($data)>0){
foreach($data as $prod) {
?>
        <li data-target="#PopupCarousel" data-slide-to="<?= $prod->id;?>">
        <img class="d-block w-100" src="{{config('global.DIR')}}/clients/<?= $prod->img?>" alt="$index">
        </li>
<?php } }?>
</ol>
					</div>
				</div>
<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
    <div class="CarouselItems">
         <div class="container">
                <?php if(count($data)>0){
                foreach($data as $prod) {
                ?>
                <div class="col-md-3  col-xs-12 col-sm-4 mb-n1 worksbox">
										<div class="row main-service">
											<div class="box4">
												<div class="overlayservice"></div>
<img src="{{config('global.DIR')}}/clients/<?= $prod->img?>"  alt="@if(app()->getLocale() == 'ar'){!!$prod->title_ar!!}
               @else{!!$prod->title_eng!!}@endif" class="img_business gallery-img">
												<div class="box-content">
													<ul class="icon">
														<li><a href="#" class="fas fa-eye"></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

<?php }?>
 <div class="clearfix col-md-12"></div>
<div class="col-md-12 mb-n1 text-center">{{ $data->onEachSide(2)->links()}}</div>
<?php }else {?>
<div class="col-md-12 mb-n1 ">لا يوجد محتوى حاليا</div>
<?php }?>

        </div>
    </div>
<div class="clearfix"></div>
        </div>
<div class="clearfix"></div>
@endsection



