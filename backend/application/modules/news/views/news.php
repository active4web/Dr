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
					<h3><?= lang("works");?></h3>
				</div>
			</div>
		<div class="col-md-6 col-xs-7 col-sm-7" >
			<ol class="breadcrumb text-left">
				<li class=""><a href="<?= DIR?>" class="home"><?= lang("home_page");?></a></li>
				<li class="active"><a href="#"><?= lang("works");?></a></li>
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
      <div class="row" style="margin:0px">
         <div class="col-md-12" style="padding: 35px;">
            <div class="row" style="margin:0px">
<?php if($result_amount>0){
foreach($results as $prod) {
?>
	           <div class="col-md-4  col-xs-12 col-sm-6 mb-n1 btr" style="padding-right:5px;padding-left:5px">
		        <a href="<?= base_url();?>news/details/<?=  $prod->id;?>" class="hp_link">
			        <div class="thumbnail thumbnail_events">
				       <img src="<?= base_url()?>uploads/events/<?= $prod->img;?>" class="rounded float-left img_business_events" alt="<?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>">
					      <span class="date"><?= ( $lang == 'arabic' )?$prod->special_date: $prod->special_date_en ; ?> </span>
			        </div>
	            <div class="caption_events">
                    <p class="title_events">  <?= ( $lang == 'arabic' )?$prod->title: $prod->title_en ; ?>  </p>
			          <p class="description_events"><?= ( $lang == 'arabic' )?mb_substr($prod->description_ar,0,120): mb_substr($prod->description_en,0,120) ; ?>
			          </p>
		             <p class="p-news"><a href="<?= base_url();?>news/details/<?=  $prod->id;?>"  class="news-link"><?= lang("read_more");?></a></p>
	            </div>
	        	</a>
	          </div>

              <?php }?>
<div class="clearfix col-md-12"></div>
 <div class="col-md-12" style="text-align:center;min-height:40px"><?php foreach($links as $link){?><?php echo $link;?><?php } ?></div>
<?php } else {?>
<div class="col-md-12" style="text-align:center"><?= lang("no_data");?></div>
<?php }?>

			</div>
          </div>
       </div>
    </div>
<div class="clearfix"></div>
		</div>
