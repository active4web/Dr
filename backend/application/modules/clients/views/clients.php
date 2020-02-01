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
	<style>
	.header.top{background: url(<?= DIR_DES_STYLE?>site_setting/<?= $sitesetting->clients_banner?>)no-repeat center;position: relative;background-size: cover;}
	</style>

<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-12" style="text-align: center" >
							<div class="title">
								<h3><?= lang("clients");?></h3>
							</div>
						</div>
						<div class="col-md-12"  style="text-align: center">
							<ol class="breadcrumb text-center">
							  <li><a href="<?= DIR?>"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="#"><?= lang("clients");?></a></li>
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
					<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center;margin-bottom:3%">
							<h3 class="servivce_title" ><?= lang("intro_clients");?>  
									<p class="bordbott" style="margin-left:auto;margin-right:auto"></p></h3>
							</div>	
							<div class="col-md-12 col-sm-12 col-xs-12 " style="text-align:center">
									<div class="our-clints">
						<?php if($result_amount>0){
						foreach($results as $prod) {
						?>
					<div class="col-md-2 col-sm-4 col-xs-6" style="margin-bottom:2%;">
					<?php
							if($prod->link!=""&&$prod->link!="#"){
							?>
					<a href="<?= $prod->link;?>" target="_blank">
<img class="img-thumbnail" src="<?= DIR_DES_STYLE;?>clients/<?= $prod->img;?>" 
						alt="<?php echo ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>" title="<?php echo ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ;?>" style="height:59px" >
					</a>
							<?php } else {?>
<img class="img-thumbnail" src="<?= DIR_DES_STYLE;?>clients/<?= $prod->img;?>" 
						alt="<?php echo ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ; ?>" title="<?php echo ( $lang == 'arabic' )?$prod->title_ar: $prod->title_eng ;?>" style="height:59px">

							<?php }?>
					
						</div>
						<?php } ?>
<div class="col-md-12" style="text-align:center;min-height:140px"><?php foreach($links as $link){?><?php echo $link;?><?php } ?></div>
					<?php } else {?>
							<div class="col-md-12"><?= lang("no_data");?></div>				
						<?php 
						}
						?>
				
									</div>
								</div>
									</div>
						
			</div>
			<div class="clearfix"></div>
		</div>



	<div class="clearfix"></div>