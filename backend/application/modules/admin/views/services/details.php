<?php
//session_start();
ob_start();
if(!isset($_SESSION['admin_name'])||$_SESSION['admin_name']==""){ 
header("Location:".base_url()."admin/login"); 
}
else{
$id_admin=$_SESSION['id_admin'];
$admin_name=$_SESSION['admin_name'];
$last_login=$_SESSION['last_login'];
$curt='services';
}
foreach($data as $data)
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
<title>تعديل خدمة</title>

<?php include ("design/inc/header.php");?>
<script type="text/javascript" src="<?= base_url();?>design/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?= base_url();?>design/ckfinder/ckfinder.js"></script>
</head>
<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
		<!-- BEGIN HEADER -->
		<?php include ("design/inc/topbar.php");?>
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
							<a href="<?=$url.'admin';?>"><?=lang('admin_panel');?></a>
							<i class="fa fa-circle"></i>
						</li>
						<li>
							<a href="<?=$url.'admin/services/';?>">الخدمات </a> 
							<i class="fa fa-circle"></i>
						</li>
						<li>
							<span>تعديل خدمة</span>
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
															<i class="fa fa-gift"></i>تعديل خدمة</div>
													</div>
													<?php //print_r($now);?>
													<div class="portlet light bordered form-fit">
														<div class="portlet-body form">
															<!-- BEGIN FORM-->
															
			<form action="<?php echo $url?>admin/services/edit_action" class="form-horizontal form-bordered"
															 method="post"   enctype="multipart/form-data">
			 <input name="id"  value="<?= $data->id;?>"  type="hidden">												    
																<div class="form-body">
																	

															<div class="form-group">
															<div class="col-md-1"></div>

															<div class="col-md-10" style="text-align:center">
															<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width:200px; height:150px;">
															<img src="<?=$url;?>uploads/services/<?php echo $data->img;?>" alt="" />
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width:200px;height:150px;">
															</div>
															<div>
															<span class="btn default btn-file">
															<span class="fileinput-new">صورة الخدمة<?=get_img_size("img_service");?></span>  
															<span class="fileinput-exists"> تغيير </span>
															<input type="file" name="file"> </span>
															<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
															</div>
															</div></div>

															<div class="col-md-1"></div>

															</div>		

																	<div class="form-group">
																	<div class="col-md-1"></div>
																		<div class="col-md-10">
																		<span class="help-block"> عنوان الخدمة </span>
																			<input name="title" id="title" value="<?= $data->title_ar;?>"  type="text" placeholder="عنوان الخدمة" class="form-control" required>
																			
																		</div>
																		<div class="col-md-1"></div>
																	</div>																	
																	
																	<div class="form-group">
																	<div class="col-md-1"></div>
																		<div class="col-md-10">
																		<span class="help-block" style="float:left">Service title</span>
																			<input name="title_eng" id="title" value="<?= $data->title_eng;?>"  type="text" placeholder="Service title" class="form-control" required style="text-align:left">
																			
																		</div>
																		<div class="col-md-1"></div>
																	</div>			
																	
																	<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block" style="float:right">وصف مختصر عن الخدمة (أقصى 120 حرفا)</span>
<textarea class="form-control autosizeme" maxlength='120'  placeholder="وصف مختصر عن الخدمة"
data-autosize-on="true" style="overflow: hidden;    text-align: right; height:60px;resize:none" name="small_desc" required><?= $data->description_ar;?>
</textarea>															</div>
<div class="col-md-1"></div>
</div>

<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block" style="float:left;direction:ltr">Small description about service (max 120 character)</span>
<textarea class="form-control autosizeme" maxlength='120'  placeholder="Small description about service"
data-autosize-on="true" style="overflow: hidden;text-align: left; height:60px;resize:none" name="small_desc_en" required> <?= $data->description_en;?>
</textarea>	
</div>
<div class="col-md-1"></div>
</div>

<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:center">
<span class="help-block"></span>الوصف</span>

<textarea name="desc_ar" id="contents"><?=$data->details_ar;?></textarea>
</div>
<div class="col-md-1"></div>
</div>

<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:center">
<span class="help-block"></span>Details</span>

<textarea name="desc_en" id="contents_en"><?=$data->details;?></textarea>

</div>
<div class="col-md-1"></div>
</div>


																	
																	<div class="form-actions">
																		<div class="row">
																			<div class="col-md-offset-3 col-md-9">
																				<button type="submit" class="btn green">
																					<i class="fa fa-check"></i>إرسال</button>
																				<button type="button" class="btn default cancelbutton">إلغاء</button>
																			</div>
																		</div>
																	</div>
																</div>
														</form>
														<!-- END FORM-->
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
        window.location.assign("<?=DIR?>admin/services/");
    });
});
</script>


<script type="text/javascript">
	//CKEDITOR.replace('description');
	var editor = CKEDITOR.replace( 'contents' );
	var editor = CKEDITOR.replace( 'contents_en' );
	CKFinder.setupCKEditor( editor );
</script>

</body>
</html>
