<?php
	foreach($site_info as $siteinfo)
	foreach($site_setting as $sitesetting)
	global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
$lang = $this->session->get_userdata('lang')['lang'];
}else{
$lang = 'arabic';
}
	?>

<div class="header_overlay">
<div class="container main_breadcrumb">
	<div class="row">
		<div class="col-md-6 col-xs-5 col-sm-5 text-right">
			<div class="title">
				<h3><?= lang("clients");?></h3>
			</div>
		</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="<?= DIR?>" class="home"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="#"><?= lang("clients");?></a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
        </div>	</div>


        <div class="Carousel-wrapper">
					<span class="Close">
						<i class="fa fa-window-close"></i>
					</span>
					<div id="PopupCarousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
<?php if($result_amount>0){
foreach($results as $prod) {
?>
							<div class="item">
								<img class="d-block w-100" src="<?= base_url()?>uploads/clients/<?= $prod->img?>" alt="First slide">
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
<?php if($result_amount>0){
foreach($results as $prod) {
?>
								<li data-target="#PopupCarousel" data-slide-to="<?= $prod->id;?>">
										<img class="d-block w-100" src="<?= base_url()?>uploads/clients/<?= $prod->img?>" alt="$index">
									</li>
<?php } }?>
						</ol>
					</div>
				</div>

                <div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
					<div class="CarouselItems">
						<div class="container">
<?php if($result_amount>0){
foreach($results as $prod) {
?>
								<div class="col-md-3  col-xs-12 col-sm-4 mb-n1 worksbox">
										<div class="row main-service">
											<div class="box4">
												<div class="overlayservice"></div>
                                                <img src="<?= base_url()?>uploads/clients/<?= $prod->img?>"
                                                alt="<?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>" class="img_business gallery-img">
												<div class="box-content">
													<ul class="icon">
														<li><a href="#" class="fas fa-eye"></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>




<?php }?>

 </div>
                        <div class="clearfix col-md-12"></div>
 <div class="col-md-12" style="text-align:center;min-height:40px"><?php foreach($links as $link){?><?php echo $link;?><?php } ?></div>
<?php } else {?>
<div class="col-md-12" style="text-align:center"><?= lang("no_data");?></div>
<?php }?>
    </div>
            <div class="clearfix"></div>
        </div>
					</div>

						<div class="clearfix"></div>
					</div>




