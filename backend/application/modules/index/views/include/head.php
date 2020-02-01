<!DOCTYPE html>
<html>
<head>
<?php
global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
	$lang = $this->session->get_userdata('lang')['lang'];
	}else{
	$lang = 'arabic';
	}
foreach($site_info as $site_info)?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="<?= DIR_DES_STYLE ?>site_setting/<?= $site_info->favicon; ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="<?=$site_info->keywords?>">
		<meta name="description" content="<?=$site_info->description?>">
		<title>
		<?php echo ( $lang == 'arabic' )?$site_info->name_site_ar: $site_info->name_site ; ?>
		</title>




  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">

  <?php if( $lang == 'arabic' ){?>
  <link href="<?= DIR ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <?php } else {?>
    <link href="<?= DIR ?>assets/css/bootstrap-en.css" rel="stylesheet" type="text/css">

  <?php }?>
  <link href="<?= DIR ?>assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="<?= DIR ?>assets/css/customs.css" rel="stylesheet" type="text/css">
  <link href="<?= DIR ?>assets/css/main.css" rel="stylesheet" type="text/css">
  <?php if( $lang == 'english' ){?>
  <link href="<?= DIR ?>assets/css/style-en.css" rel="stylesheet" type="text/css">
  <?php }?>

  <link rel="stylesheet" href="<?= DIR ?>assets/home_slider/loopslider.css">
  <link rel="stylesheet" href="<?= DIR ?>assets/home_slider/demo/default.css">

  <script src="<?= DIR ?>assets/OwlCarousel/docs/assets/vendors/jquery.min.js"></script>
  <script src="<?= DIR ?>assets/OwlCarousel/docs/assets/owlcarousel/owl.carousel.js"></script>
  <link rel="stylesheet" href="<?= DIR ?>assets/OwlCarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= DIR ?>assets/OwlCarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">


  <style>
		@import url(https://fonts.googleapis.com/earlyaccess/notosanskufiarabic.css);
		</style>
<link rel="shortcut icon" href="<?= DIR_DES_STYLE ?>site_setting/<?= $site_info->favicon;?>" type="image/x-icon" />





