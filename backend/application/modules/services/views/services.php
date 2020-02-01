<?php
	foreach($site_info as $siteinfo)
	foreach($site_setting as $sitesetting)

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
								<h3><?= lang("services");?></h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="<?= base_url()?>" class="home"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="#"><?= lang("services");?></a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>
        </div></div>
<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
   <div class="container">
<?php if($result_amount>0){
foreach($results as $prod) {
?>
      <div class="col-md-4  col-xs-12 col-sm-6 mb-n1 mainbox">
          <div class="row main-box">
               <div class="box4">
                  <div class="overlaybox"></div>
                      <img src="<?= base_url()?>uploads/services/<?= $prod->img;?>" class="rounded float-left img_business" alt="<?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>">
                         <div class="box-content">
                            <ul class="icon">
                               <li><a href="<?= base_url();?>services/details/<?= $prod->id?>" class="fas fa-external-link-alt"></a></li>
                            </ul>
                    </div>

                    </div>

            <div class="panel panel-default">
              <div class="panel-heading"><?= ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?></div>
                    <p class="desc-services"><?= ( $lang == 'arabic' )?mb_substr($prod->description_ar,0,120): mb_substr($prod->description_en,0,120) ; ?>
                    </p>
                </div>
             </div>
            </div>
<?php }?>
<div class="clearfix col-md-12"></div>
 <div class="col-md-12" style="text-align:center;min-height:40px"><?php foreach($links as $link){?><?php echo $link;?><?php } ?></div>
<?php } else {?>
<div class="col-md-12" style="text-align:center"><?= lang("no_data");?></div>
<?php }?>
    </div>
            <div class="clearfix"></div>
        </div>


    <div class="clearfix"></div>
