
<?php
foreach($site_info as $site_info)
foreach($home_page as $home_page)
foreach($site_setting as $site_setting)
global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
$lang = $this->session->get_userdata('lang')['lang'];
}else{
$lang = 'arabic';
}
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
<?php foreach($sliders as $sliders){?>
							<figure  style="position: relative;">
								<img src="<?= base_url()?>uploads/slider/<?= $sliders->img;?>" alt="">
								<div class="slider_overlay"></div>
								<figcaption class="card-body">
                                <?= ( $lang == 'arabic' )?$sliders->title: $sliders->title_en ; ?>
									</figcaption>
							</figure>
<?php }?>
						</div>

			<div class="wrapper"  style="margin-top:30px;padding-bottom:1%">
				<div class="container">
					<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
									<div class="pic" style="margin-top:0px;">
											<img class="img-responsive " src="<?= base_url()?>uploads/site_setting/<?= $home_page->slider_background;?>" style="border-radius: 0.4em;">
											</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											<li class="nav-item active abou">
											  <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">
													<span style="display: block"><img src="<?= base_url()?>uploads/site_setting/about_active.jpg"  class="tab-img img-tab-about"></span>
													<span style="display: block"><?= lang("about_us");?></span>

											  </a>
											</li>
											<li class="nav-item vis">
											  <a class="nav-link" id="pills-vision-tab" data-toggle="pill" href="#pills-vision" role="tab" aria-controls="pills-vision" aria-selected="false">
													<span style="display: block"><img  src="<?= base_url()?>uploads/site_setting/vision_no_active.png" class="tab-img img-tab-vision"></span>
												<?= lang("Vision");?></a>
											</li>
											<li class="nav-item mess">
											  <a class="nav-link" id="pills-message-tab" data-toggle="pill" href="#pills-message" role="tab" aria-controls="pills-message" aria-selected="false">
													<span style="display: block"><img src="<?= base_url()?>uploads/site_setting/mission_no_active.png"  class="tab-img img-tab-message"></span>
												<?= lang("message");?></a>
											</li>
											<li class="nav-item goal">
													<a class="nav-link" id="pills-goals-tab" data-toggle="pill" href="#pills-goals" role="tab" aria-controls="pills-goals" aria-selected="false">
															<span style="display: block"><img  class="tab-img img-tab-goals" src="<?= base_url()?>uploads/site_setting/goals_no_active.png"></span>
														<?= lang("Goals");?></a>
												  </li>
										  </ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade  active in" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">

<div class="row">

<div class="col-md-12"><p class="p"> <?= ( $lang == 'arabic' )?$home_page->home_about: $home_page->home_about_en ; ?>
</p></div>

</div>

		</div>

<div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">

		<div class="row">

				<div class="col-md-12"><p class="p">
    <?= ( $lang == 'arabic' )?$home_page->home_vision: $home_page->home_vision_en ; ?>
				</p></div>

				</div>
</div>
<div class="tab-pane fade" id="pills-message" role="tabpanel" aria-labelledby="pills-message-tab">
		<div class="row">

				<div class="col-md-12"><p class="p">
            <?= ( $lang == 'arabic' )?$home_page->home_mission: $home_page->home_mission_en ; ?>
				</p></div>

				</div>
</div>
<div class="tab-pane fade" id="pills-goals" role="tabpanel" aria-labelledby="pills-goals-tab">
		<div class="row">

				<div class="col-md-12"><p class="p">
                <?= ( $lang == 'arabic' )?$home_page->home_goals: $home_page->home_goals_en ; ?>
				</p></div>

				</div>

</div>
</div>
					</div>

</div>
				</div>
			<div class="clearfix"></div>
			</div>

		<!-------------------------------------------------------------------------------------->

<div class="wrapper"  style="margin-top:0px;padding-bottom:1%">
	<div class="container" style="direction: ltr">
			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			  <h3 class="hed_about" ><?= lang("services");?> <p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
			</div>
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">

<div class="owl-carousel owl-theme" id="owl-demo">
<?php
foreach($services as $services){
?>
	<div class="item item-home">
				<div class="box_4">
					<div class="thumbnail thumbnail_events">
								<div class="overlaybox"></div>
<img src="<?= base_url()?>uploads/services/<?= $services->img;?>" alt="<?= ( $lang == 'arabic' )?$services->title_ar: $services->title_eng ; ?>" class="rounded float-left img_business_events">
							<div class="box-content">
								<ul class="icon">
									<li><a href="<?= base_url();?>services/details/<?= $services->id?>" class="fas fa-external-link-alt"></a></li>
								</ul>
							</div>
					</div>
				</div>
		<div class="caption_events">
			<a href="#" class="hp_link">
			  <p class="title_events_home">  <?= ( $lang == 'arabic' )?$services->title_ar: $services->title_eng ; ?></p>
			    <p class="description_events mm1">
                <?= ( $lang == 'arabic' )?$services->description_ar: $services->description_en ; ?>
			    </p>
			</a>
        </div>

    </div>
<?php }?>



			  </div>

		</div>
    </div>
</div>
<!----معرض الاعمال-->
<div class="wrapper"  style="margin-top:0px;padding-bottom:1%">
	<div class="container" style="direction: ltr">
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			<h3 class="hed_about" ><?= lang("clients");?><p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">

				<div id="owl-demo-1" class="owl-carousel">


<?php foreach($clients as $clients){?>
					<div class="item item-gallery">

								<div class="box_5">
									<div class="thumbnail thumbnail_events">
												<div class="overlayboxgallery"></div>
										<img src="<?= base_url()?>uploads/clients/<?= $clients->img?>" class="galleryimg">
											<div class="box-content">
												<ul class="icon">
													<li><a href="service_details.html" class="fas fa-eye"></a></li>
												</ul>
											</div>
									</div>
								</div>
					</div>
<?php }?>


				</div>

		</div>

	</div>
</div>

<!---###########-->

<!----احدث الاخبار -->
<div class="wrapper"  style="margin-top:0px;padding-bottom:3%">
	<div class="container" style="direction: ltr">
		<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
			<h3 class="hed_about" ><?= lang("last_news");?><p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">

					<div id="owl-demo-2" class="owl-carousel">
<?php
foreach($events as $events){
?>
						<div class="item newshome">
								<div class="col-md-12 mb-n1 btr" style="padding-right:0px;padding-left:0px">
										<a href="#" class="hp_link">
										<div class="thumbnail thumbnail_events">
				<img src="<?= base_url()?>uploads/events/<?= $events->img?>" class="rounded float-left img_business_events">
											<span class="date"><?= $events->special_date?></span>
										</div>
									</a><div class="caption_events"><a href="#" class="hp_link">
											<p class="title_events">
                                            <?= ( $lang == 'arabic' )?$events->title: $events->title_en; ?></p>
											<p class="description_events">
                                            <?= ( $lang == 'arabic' )?$events->description_ar: $events->description_en ; ?>
											</p>
											</a><p class="p-news">
                                        <a href="<?= base_url();?>news/details/<?=  $events->id;?>" class="hp_link"></a><a href="#" class="news-link"><?= lang("read_more");?></a></p>
												</div>
									</div>
						</div>
<?php }?>

					</div>

			</div>
		</div>
	</div>

<!---###########-->


				</div>

<div class="clearfix"></div>
