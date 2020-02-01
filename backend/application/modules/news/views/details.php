<?php
	foreach($site_info as $siteinfo)
	foreach($site_setting as $sitesetting)
	foreach($news_details as $prod)
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
				<h3><?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?></h3>
			</div>
		</div>
	<div class="col-md-6 col-xs-7 col-sm-7" >
		<ol class="breadcrumb text-left">
			<li class=""><a href="<?= DIR;?>" class="home"><?= lang("home_page");?></a></li>
			<li class="active"><a href="<?= DIR?>news"><?= lang("works");?></a></li>
		</ol>
	</div>
</div>
</div>
<div class="clearfix"></div>
</div></div></div>


<div class="wrapper"  style="margin-top:30px;padding-bottom:3%">





<div class="container">

        <div class="row">
            <!--------------------------Start Row1--------------->
    <div class="col-md-5 col-sm-5 col-xs-12 hidden-xs img_work pic_news">
    <img alt="<?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>" class="img-thumbnai" src="<?= base_url()?>uploads/events/<?= $prod->img;?>"   style="border-radius: 0.5em;">
    </div>
    <div class="col-md-5 col-sm-5 col-xs-12 hidden-md hidden-lg hidden-sm pic1 text-center img_work pic_news">
        <img alt="<?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>" class="img-thumbnail" src="<?= base_url()?>uploads/events/<?= $prod->img;?>" style="border-radius: 0.5em;">
    </div>
<div class="col-md-7 col-sm-7 col-xs-12 " >
    <h3 class="hed_about  news_title"  style="margin-top: 40px;"><?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?></h3>
            <div class="date_news"><?= ( $lang == 'arabic' )?$prod->special_date: $prod->special_date_en ; ?></div>
        <div class="about_p">
        <p class="servivce_description" style="padding-bottom:0px"><?= ( $lang == 'arabic' )?$prod->details: $prod->details_en ; ?>
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
<!---------------2Row---------------->
    <!---------------------------3Row----------------------------->
        <!---------------------------4Row------------------------------>
            <!--------------------------5Row-------------------------------->
            <div class="row">
                    <div class="col-md-12">
                        </div>
</div>
<!---------------------------6Row-------------------------------->
</div>

<div class="clearfix"></div>

</div>


