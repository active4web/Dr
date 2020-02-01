<?php 
	foreach($site_info as $siteinfo)
	foreach($site_setting as $sitesetting)
	foreach($works_details as $prod)
	global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
$lang = $this->session->get_userdata('lang')['lang'];
}else{
$lang = 'arabic';
}
	?>
	 <link href="<?= base_url();?>assets/css/effects.min.css" rel="stylesheet" type="text/css">
	<style>
	.header.top{background: url(<?= DIR_DES_STYLE?>site_setting/<?= $sitesetting->works_banner?>)no-repeat center;position: relative;background-size: cover;}
	</style>

<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-12" style="text-align: center" >
							<div class="title">
								<h3><?php echo ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?></h3>
							</div>
						</div>
						<div class="col-md-12"  style="text-align: center">
							<ol class="breadcrumb text-center">
							  <li><a href="<?= DIR?>"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="<?= DIR?>works/lisiting"><?= lang("works");?></a></li>
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
	<div class="col-md-5 col-sm-5 col-xs-12 hidden-xs img_work">
	<img alt="<?php echo ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>" class="img-thumbnail" src="<?= DIR_DES_STYLE;?>works/<?= $prod->img;?>">
	</div>	
	<div class="col-md-6 col-sm-6 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center img_work">
		<img alt="<?php echo ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>" class="img-thumbnail" src="<?= DIR_DES_STYLE;?>works/<?= $prod->img;?>">
	</div>
<div class="col-md-7 col-sm-7 col-xs-12 " >
		<div class="about_p">
		<p class="servivce_description"><?php echo ( $lang == 'arabic' )?$prod->details: $prod->details_en ; ?>
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
<div class="row">
<div class="col-md-12">
</div>
</div>
<!---------------------------6Row-------------------------------->
</div>
<div class="clearfix"></div>
</div>
				