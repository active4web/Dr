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
$curt='intro';
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
							<span class="active">مقدمة تعريفة</span>
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
																$home_about = $result->home_about;
																$home_about_en = $result->home_about_en;
																$home_vision = $result->home_vision;
																$home_vision_en = $result->home_vision_en;
																$home_mission = $result->home_mission;
																$home_mission_en = $result->home_mission_en;
																$home_goals = $result->home_goals;
																$home_goals_en = $result->home_goals_en;

															}
														?>
														<div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="<?php echo $url?>admin/pages/edit_about" class="form-horizontal form-bordered"
															 method="post" enctype="multipart/form-data">
																<div class="form-body">
																	

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">من نحن</span>
<textarea name="home_about" id="home_about"  style="height:80px; resize:none" class="form-control"><?=$home_about;?></textarea>
<!-- <?php //echo $this->ckeditor->editor("description","description");?> -->
</div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">about</span>
<textarea   id="team_title_eng" name="home_about_en" class="form-control" style="height:80px; resize:none"><?=$home_about_en?></textarea>
</div>
<div class="col-md-2"></div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">رؤيتنا</span>
<textarea name="home_vision" id="home_vision" class="form-control" style="height:80px; resize:none"><?=$home_vision;?></textarea>
<!-- <?php //echo $this->ckeditor->editor("description","description");?> -->
</div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">Vision</span>
<textarea   id="team_title_eng" name="home_vision_en" class="form-control" style="height:80px; resize:none"><?=$home_vision_en?></textarea>
</div>
<div class="col-md-2"></div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">رسالتنا</span>
<textarea name="home_mission" id="home_mission" class="form-control" style="height:80px; resize:none"><?=$home_mission;?></textarea>
<!-- <?php //echo $this->ckeditor->editor("description","description");?> -->
</div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">Message</span>
<textarea   id="home_mission_en" name="home_mission_en" class="form-control" style="height:80px; resize:none"><?=$home_mission_en?></textarea>
</div>
<div class="col-md-2"></div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">اهدافنا</span>
<textarea name="home_goals" id="home_goals" class="form-control" style="height:80px; resize:none"><?=$home_goals;?></textarea>
<!-- <?php //echo $this->ckeditor->editor("description","description");?> -->
</div>
</div>

<div class="form-group">
<div class="col-md-12" style="text-align:center">
<span class="help-block">Goals</span>
<textarea   id="home_goals_en" name="home_goals_en" class="form-control" style="height:80px; resize:none"><?=$home_goals_en?></textarea>
</div>
<div class="col-md-2"></div>
</div>



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
<script>
$(document).ready(function(e) {
    $(".cancelbutton").click(function(e) {
        window.location.assign("show");
    });
});
</script>
<script type="text/javascript">
	//CKEDITOR.replace('description');
	var about_site_ar = CKEDITOR.replace('about_site_ar');
	var team_title_eng = CKEDITOR.replace('team_title_eng');
	CKFinder.setupCKEditor(about_site);
	CKFinder.setupCKEditor(team_title_eng);
</script>
</body>
</html>
