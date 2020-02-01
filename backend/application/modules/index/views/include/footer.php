<footer>
<?php foreach($site_info as $siteinfo)
global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
	$lang = $this->session->get_userdata('lang')['lang'];
	}else{
	$lang = 'arabic';
	}
?>
				<footer>
				 <div class="overlay">
					<div class="container">
					<a href="#" class="scrollTop button" style="display: block;" id="elevator_item">
						<i class="fa fa-arrow-up" style="color:#fff;"></i></a>
                         <div class="row">
							<div class="col-md-3 col-xs-12 text-right">
								<a class="" href="index.html">
		<img class="img-responsive right-block" src="<?= base_url();?>uploads/site_setting/<?= ( $lang == 'arabic' )?$siteinfo->footer_log: $siteinfo->footer_log_en ; ?>" style=""></a>
									<div class="sochal pull-right mt-50">
		<a href="<?= $siteinfo->instagram?>" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
		<a href="<?= $siteinfo->twitter?>" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
										<a href="<?= $siteinfo->facebook?>" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
									</div>
							</div>




							<div class="col-md-1  col-xs-12"></div>

							<div class="col-md-4  col-xs-12">
									<h4><?= lang("important_Links");?></h4>
										<div class="qanon">
<div class="col-md-5 col-xs-12">
<li><a href="<?= base_url();?>"><i class="fas fa-external-link-alt"></i><?= lang("home_page");?></a></li>
<li><a href="<?= base_url();?>about"><i class="fas fa-external-link-alt"></i><?= lang("about_page")?></a></li>
<li><a href="<?= base_url();?>services/lisiting"><i class="fas fa-external-link-alt"></i><?= lang("services")?></a></li>
</div>
<div class="col-md-7 col-xs-12">
<li><a href="<?= base_url();?>works/lisiting"><i class="fas fa-external-link-alt"></i><?= lang("clients")?></a></li>
<li><a href="<?= base_url();?>news/lisiting"><i class="fas fa-external-link-alt"></i><?= lang("works")?></a></li>
<li><a href="<?= base_url();?>contact"><i class="fas fa-external-link-alt"></i><?= lang("contact_page")?></a></li>
</div>
</div>
</div>
   <div class="col-md-4  col-xs-12">
		<h4><?= lang("contact_Information");?></h4>
			<div>
				<li><i class="fas fa-phone foot_contact"></i><?= $siteinfo->phone?></li>
				<li><i class="fa fa-envelope foot_contact"></i><?= $siteinfo->email?></li>
				<li><i class="fas fa-map-marker-alt foot_contact"></i>
                <?= ( $lang == 'arabic' )?$siteinfo->address_ar: $siteinfo->address_eng ; ?>
                </li>
			</div>
	</div>
</div>




					</div></div>
					<div class="coppy text-center">
							<div class="container">
								<h5 class="" style="font-size:13px;"><?= lang("copy_right_foot");?><a href="">
                                <?= lang("copy_comp");?></a></h5>
								</div>
						</div>
				</footer>
