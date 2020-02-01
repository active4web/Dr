<?php
	foreach($site_info as $siteinfo)
	foreach($site_setting as $sitesetting)
    foreach($service_details as $prod)

	global $lang;
	if( isset($this->session->get_userdata('lang')['lang']) ){
    $lang = $this->session->get_userdata('lang')['lang'];
    }?>

<div class="header_overlay">
						<!--end navbar-->
								<!--end navbar-->
				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3><?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?></h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="<?= DIR?>" class="home"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="<?= DIR?>services"><?= lang("services");?></a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>

					</div>
		</div></div>
<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
  <div class="container">
    <div class="row">
       <div class="col-md-5 col-sm-5 col-xs-12 hidden-xs img_work pic_news">
          <img alt="<?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>" class="img-thumbnai" src="<?= base_url()?>uploads/services/<?= $prod->img;?>"   style="border-radius: 0.5em;">
       </div>
      <div class="col-md-5 col-sm-5 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center img_work pic_news">
        <img alt="<?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>" class="img-thumbnail" src="<?= base_url()?>uploads/services/<?= $prod->img;?>" style="border-radius: 0.5em;">
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12 " >
        <h3 class="hed_about  news_title"  style="padding-top:30px"><?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?></h3>
           <div class="about_p">
               <?= ( $lang == 'arabic' )?$prod->details_ar: $prod->details; ?>
            </div>

    </div>
</div>
</div>
<div class="clearfix"></div>
</div>
