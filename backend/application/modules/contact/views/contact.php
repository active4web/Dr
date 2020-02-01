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
    <style>iframe{width:100%;height:350px}</style>
		<div class="header_overlay">
				<div class="container main_breadcrumb">
					<div class="row">
						<div class="col-md-6 col-xs-5 col-sm-5 text-right">
							<div class="title">
								<h3><?= lang("contact_page");?></h3>
							</div>
						</div>
						<div class="col-md-6 col-xs-7 col-sm-7" >
							<ol class="breadcrumb text-left">
							  <li class=""><a href="<?= DIR?>" class="home"><?= lang("home_page");?></a></li>
							  <li class="active"><a href="#"><?= lang("contact_page");?> </a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
					</div>
		</div>
</div>

<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">
<div class="container">
   <div class="row">
<div class="col-md-5 col-sm-5 col-xs-12 ">
   <div class="col-md-12">
	    <h3 class="servivce_title" > <?= lang("Connect_now");?> <p class=""></p></h3>
        <p> <?lang("we_communicate");?></p>
	</div>
<form class="col-md-12" action="#" id="myform">
					<input type="hidden" name="mass_type" value="2">
        <div class="col-md-12">
            <input class="form-control input-lg" id="name" type="text" name="fullname" placeholder="<?= lang("name_contact");?>">
        </div>
        <div class="col-md-12">
            <input class="form-control input-lg" id="phone" type="text" name="phone" placeholder="<?= lang("phone_contact");?>">
        </div>
        <div class="col-md-12">
            <input class="form-control input-lg" id="email" type="text" name="email" placeholder="<?= lang("mail_contact");?>">
        </div>
        <div class="col-md-12">
                <textarea class="form-control input-lg" id="message" name="message" placeholder="<?= lang("message_contact");?>"></textarea>
        </div>
        <div class="col-md-12">
        <button class="contact-btn send_txt" type="button"><?= lang("established_Send");?></button>
        </div>

</form>
</div>
<div class="col-md-1 col-sm-1 col-xs-12 "></div>
	<div class="col-md-6 col-sm-6 col-xs-12">
<div class="contact mt-50">
<?= $siteinfo->map?>
<div class="info">
    <li><div><?= lang("contact_address");?>:</div><p>
        <?= ( $lang == 'arabic' )?$siteinfo->address_ar: $siteinfo->address_eng ; ?> </p> </li>
	<li><div><?= lang("phone_contact");?>:</div><p><?= $siteinfo->phone?></p></li>
	<li><div><?= lang("mail_contact");?>:</div><p><?= $siteinfo->email?></p></li>
</div>
</div>
    </div>
    </div>
 </div>

						<div class="clearfix"></div>
					</div></div>


