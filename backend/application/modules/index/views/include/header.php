</head>
<body>
<?php
global $lang;
if( isset($this->session->get_userdata('lang')['lang']) ){
	$lang = $this->session->get_userdata('lang')['lang'];
	}else{
	$lang = 'arabic';
    }

$day_d=date('d');
		$month_d=date('m');
		$year_d=date('Y');
		$ip=$this->input->ip_address();
		$customer_id = $this->data->get_table_row('visitings',array('ip'=>$ip,'day_t'=>$day_d,'month_d'=>$month_d,'year_d'=>$year_d),'id');
		if($customer_id!=""){
		$visit_num = $this->data->get_table_row('visitings',array('ip'=>$ip,'day_t'=>$day_d,'month_d'=>$month_d,'year_d'=>$year_d),'visit_num');
		$data['visit_num']=$visit_num+1;

		$this->db->update('visitings',$data,array('ip'=>$ip,'day_t'=>$day_d,'month_d'=>$month_d,'year_d'=>$year_d));
		}
		else {
		$data['ip']=$ip;
		$data['day_t']=$day_d;
		$data['month_d']=$month_d;
		$data['year_d']=$year_d;
		$data['visit_num']=1;
		$data['date']=$year_d."-".$month_d."-".$day_d;;
		$this->db->insert('visitings',$data);
		}

$curt = $this->uri->segment(3);
$main_curt=$this->uri->segment(1);
$controller_curt=$this->uri->segment(2);
$curt_id = $this->uri->segment(4);
$this->session->set_userdata(array('curt' => $curt));
$this->session->set_userdata(array('curt_id' => $curt_id));
//echo "dfgfdg".$main_curt;
  foreach($site_info as $site_info)
?>


<div style="overflow-x: hidden;">
				<div class="header home ">
					<div class="overlay-home ">
					<div style="border-bottom:1px solid #cccccc4a;">
							<div class="container">
									<div class="row header_row" style="margin-left: 0px;margin-right:0px;">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="dropdown">
											<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <?= lang("langauge");?>
											  <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											  <li><a href="<?= DIR?>home/lang_site/ar/"><?= lang("arabic");?></a></li>
											  <li><a href="<?= DIR?>home/lang_site/en/"><?= lang("english");?></a></li>
											</ul>
										  </div>

											<div class="sochal">
							<a href="<?= $site_info->instagram?>"  target="_blank"><i class="fab fa-instagram fa-lg inst"></i></a>
							<a href="<?= $site_info->twitter?>" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
							<a href="<?= $site_info->facebook?>" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
												</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12"  style="text-align:center">
										<div class="cont">
														<li><i class="fa fa-envelope"></i><?= $site_info->email?></li>
														<li class="top_header_link">|</li>
														<li><i class="fas fa-phone-alt"></i><?= $site_info->phone?></li>
													</div>
										</div>
									</div>
								</div>
					</div>



					 <!--start navbar-->

						<nav class="navbar navbar-inverse "  role="navigation" id="nav-b">
							<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#axit-nav" aria-expanded="false">
									 <span class="sr-only">Toggle navigation</span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
								   </button>
									<a class="navbar-brand" href="<?= base_url()?>"><img class="img-responsive center-block" src="<?= base_url();?>uploads/site_setting/<?= ( $lang == 'arabic' )?$site_info->logo: $site_info->logo_en ; ?>"></a>
								</div>

								<div class="collapse navbar-collapse" id="axit-nav">
										<ul class="nav navbar-nav navbar-left">
	<li class="<?php if($main_curt == ""){ echo 'active'; } ?>"><a href="<?= base_url();?>"><?= lang("home_page")?></a></li>
	<li class="<?php if($main_curt == "about"){ echo 'active'; } ?>"><a href="<?= base_url();?>about"><?= lang("about_page")?></a></li>
	<li class="<?php if($main_curt == "services"){ echo 'active'; } ?>"><a href="<?= base_url();?>services/lisiting"><?= lang("services")?></a></li>
	<li class="<?php if($main_curt == "works"){ echo 'active'; } ?>"> <a href="<?= base_url();?>works/lisiting"><?= lang("clients")?></a></li>
	<li class="<?php if($main_curt == "news"){ echo 'active'; } ?>"> <a href="<?= base_url();?>news/lisiting"><?= lang("works")?></a></li>
	<li  class="<?php if($main_curt == "contact"){ echo 'active'; } ?>"><a href="<?= base_url();?>contact"><?= lang("contact_page")?></a></li>
										</ul>

									 </div><!-- /.navbar-collapse -->

							</div><!-- /.container-fluid -->

						 </nav>
					</div>
					</div>
