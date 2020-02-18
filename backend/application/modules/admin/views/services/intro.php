<?php
$url=base_url();
ob_start();
if(!isset($_SESSION['admin_name'])||$_SESSION['admin_name']==""){ 
header("Location:$url"."admin/login"); 
}
else{
$id_admin=$_SESSION['id_admin'];
$admin_name=$_SESSION['admin_name'];
$last_login=$_SESSION['last_login'];
$curt='services';
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>تعديل </title>
<?php include ("design/inc/header.php");?>
</head>
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
	<!-- BEGIN HEADER -->
	<?php include ("design/inc/topbar.php");?>
		<script type="text/javascript" src="<?=$url?>design/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="<?=$url?>design/ckfinder/ckfinder.js"></script>
        <!-- END HEADER -->
		<!-- BEGIN HEADER & CONTENT DIVIDER -->
		<div class="clearfix"> </div>
		<!-- END HEADER & CONTENT DIVIDER -->
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <?php include ("design/inc/sidebar.php");?>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="page-content-wrapper">
				<div class="page-content" style="min-height: 1261px;">
					<!-- BEGIN PAGE HEAD-->

					<!-- END PAGE HEAD-->
					<!-- BEGIN PAGE BREADCRUMB -->
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="<?=$url.'admin';?>">لوحة التحكم</a>
							<i class="fa fa-circle"></i>
						</li>
						
						<li>
							<span class="active">مقدمة الخدمات</span>
						</li>
					</ul>
					<!-- END PAGE BREADCRUMB -->
					<!-- BEGIN PAGE BASE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<!-- PORTLET MAIN -->
								<!-- END PORTLET MAIN -->
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="col-md-12">
										<!--Start from-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_5">
												<div class="portlet box blue ">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-gift"></i> تعديل  </div>

													</div>

													<div class="portlet light bordered form-fit">
														<div class="portlet-title">
															<div class="caption"></div>
															<div class="actions"></div>
														</div>
														<?php
					foreach($site_info as $result){
					$services_intro = $result->services_intro;
					$services_img = $result->services_img;
					$services_intro_en = $result->services_intro_en;
								}
														?>
														<div class="portlet-body form">
															<!-- BEGIN FORM-->
<form action="<?php echo $url?>admin/services/edit_intro" class="form-horizontal form-bordered"
															 method="post" enctype="multipart/form-data">
																<div class="form-body">
																	
<?php
if(get_table_filed('backend_option',array('key_txt'=>'services_intro_img'),"val")==1){
?>
																<div class="form-group">
														<div class="col-md-3" style="text-align:center"></div>
                                                            <div class="col-md-6" style="text-align:center">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
																			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																				<img src="<?=base_url();?>uploads/site_setting/<?=$services_img?>" alt="" /> </div>
																			<div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;"> </div>
																			<div>
																				<span class="btn default btn-file">
																					<span class="fileinput-new">صورة  </span>
																					<span class="fileinput-exists">تغير</span>
																					<input type="file" name="file"></span>
																				<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">حذف </a>
																			</div>
																		</div>
															</div>
															<div class="col-md-3" style="text-align:center"></div>
                                                        </div>



<?php
} if(get_table_filed('backend_option',array('key_txt'=>'services_intro_ar'),"val")==1){
?>
<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block"> المحتوي </span>
<textarea  name="about_site" id="about_site"><?=$services_intro;?>
</textarea>	
</div></div>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'services_intro_en'),"val")==1){
?>
<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">Details</span>
<textarea  name="about_site_en" id="about_site_en"><?=$services_intro_en;?>
</textarea>
	</div></div>
<?php }?>											


																	<div class="form-actions">
																		<div class="row">
																			<div class="col-md-offset-3 col-md-9">
																				<button type="submit" class="btn green">
																					<i class="fa fa-check"></i> حفظ التعديل </button>
																				<button type="button" class="btn default cancelbutton">إلغاء</button>
																			</div>
																		</div>
																	</div>
															</form>
															<!-- END FORM-->
															</div>
														</div>

													</div>
													<!---END FROM-->
												</div>
											</div>
											<!-- END PROFILE CONTENT -->
										</div>
									</div>
									<!-- END PAGE BASE CONTENT -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php include ("design/inc/footer.php");?>
        <!-- END FOOTER -->

        <?php include ("design/inc/footer_js.php");?>
<?php if(isset($_SESSION['msg']) && $_SESSION['msg']!=''){?>
<script  type="text/javascript">
$(document).ready(function(e) {
 toastr.success("<?php echo $_SESSION['msg']?>");
});
</script>
<?php }?>
<?php
if(get_table_filed('backend_option',array('key_txt'=>'services_intro'),"val")==1){
?>
<script type="text/javascript">
	var about_site_en = CKEDITOR.replace( 'about_site_en' );
	CKFinder.setupCKEditor( about_site );
</script>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'services_intro_en'),"val")==1){
?>
<script type="text/javascript">
	var about_site_en = CKEDITOR.replace( 'about_site_en' );
	CKFinder.setupCKEditor( about_site_en );
</script>
<?php }?>
</body>
</html>
