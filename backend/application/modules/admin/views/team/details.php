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
$curt='team';
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
<title>تعديل</title>

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
							<a href="<?=$url.'admin/team/';?>">فريق العمل</a> 
							<i class="fa fa-circle"></i>
						</li>
						<li>
							<span>تعديل</span>
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
															<i class="fa fa-gift"></i>تعديل</div>
													</div>
													<?php //print_r($now);?>
													<div class="portlet light bordered form-fit">
														<div class="portlet-body form">
															<!-- BEGIN FORM-->
															
			<form action="<?php echo $url?>admin/team/edit_action" class="form-horizontal form-bordered"
															 method="post"   enctype="multipart/form-data">
			 <input name="id"  value="<?= $data->id;?>"  type="hidden">												    
																<div class="form-body">
																	
<?php
if(get_table_filed('backend_option',array('key_txt'=>'team_img'),"val")==1){
?>	
															<div class="form-group">
															<div class="col-md-1"></div>

															<div class="col-md-10" style="text-align:center">
															<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width:200px; height:150px;">
															<img src="<?=$url;?>uploads/events/<?php echo $data->img;?>" alt="" />
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="width:200px;height:150px;">
															</div>
															<div>
															<span class="btn default btn-file">
															<span class="fileinput-new">الصورة<?=get_img_size("img_service");?></span>  
															<span class="fileinput-exists"> تغيير </span>
															<input type="file" name="file"> </span>
															<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
															</div>
															</div></div>

															<div class="col-md-1"></div>

															</div>		
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_title'),"val")==1){
?>
																	<div class="form-group">
																	<div class="col-md-1"></div>
																		<div class="col-md-10">
																		<span class="help-block"> العنوان  </span>
																			<input name="title" id="title" value="<?= $data->title;?>"  type="text" placeholder="العنوان" class="form-control" required>
																			
																		</div>
																		<div class="col-md-1"></div>
																	</div>																	
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_title_en'),"val")==1){
?>																	
																	<div class="form-group">
																	<div class="col-md-1"></div>
																		<div class="col-md-10">
																		<span class="help-block" style="float:left">Title</span>
<input name="title_eng" id="title" value="<?= $data->title_en;?>"  type="text" placeholder="Title" class="form-control" required style="text-align:left;direction:ltr;">
																			
																		</div>
																		<div class="col-md-1"></div>
																	</div>			
																	
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_small_desc'),"val")==1){
?> 
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block" style="float:right">وصف مختصر (أقصى 120 حرفا)</span>
<textarea class="form-control autosizeme" maxlength='120'  placeholder="وصف مختصر "
data-autosize-on="true" style="overflow: hidden;direction:rtl;text-align: right; height:60px;resize:none" name="small_desc" required><?= $data->description_ar;?>
</textarea>															</div>
<div class="col-md-1"></div>
</div>
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_small_desc_en'),"val")==1){
?> 
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block" style="float:left;direction:ltr">Small description  (max 120 character)</span>
<textarea class="form-control autosizeme" maxlength='120'  placeholder="Small description about service"
data-autosize-on="true" style="overflow:direction:rtl;hidden;text-align: left; height:60px;resize:none" name="small_desc_en" required> <?= $data->description_en;?>
</textarea>	
</div>
<div class="col-md-1"></div>
</div>
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_desc_ar'),"val")==1){
?> 
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:center">
<span class="help-block"></span>الوصف</span>

<textarea name="desc_ar" id="contents"><?=$data->details;?></textarea>
</div>
<div class="col-md-1"></div>
</div>
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_desc_en'),"val")==1){
?>
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:center">
<span class="help-block"></span>Details</span>

<textarea name="desc_en" id="contents_en"><?=$data->details_en;?></textarea>

</div>
<div class="col-md-1"></div>
</div>
  <?php }?>
																	
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

<?php
   if(get_table_filed('backend_option',array('key_txt'=>'team_desc_en'),"val")==1){
?>
<script type="text/javascript">
	//CKEDITOR.replace('description');
	var editor = CKEDITOR.replace( 'contents' );
	CKFinder.setupCKEditor( editor );
</script>

<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'team_desc_en'),"val")==1){
?>
<script type="text/javascript">
	var editor = CKEDITOR.replace( 'contents_en' );
	CKFinder.setupCKEditor( editor );
</script>
<?php }?>
</body>
</html>
