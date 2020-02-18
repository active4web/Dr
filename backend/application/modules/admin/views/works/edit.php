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
$curt='works';
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
<title>التعديل</title>
<?php include ("design/inc/header.php");?>
<style>
.thumbnail a>img, .thumbnail>img {
    height: 110px !important;
}
</style>
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
							<a href="<?=$url.'admin/works/show/';?>">الأعمال</a>
							<i class="fa fa-circle"></i>
						</li>
						<li>
							<span class="active">التعديل</span>
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
															<i class="fa fa-gift"></i>التعديل</div>

													</div>

													<div class="portlet light bordered form-fit">
														<div class="portlet-title">
															<div class="caption"></div>
															<div class="actions"></div>
														</div>
														<?php
															foreach($data as $result){
																$id = $result->id;
																$name_title = $result->title;
																$title_en = $result->title_en;
																$details = $result->details;
																$details_en = $result->details_en;
																
																$img = $result->img;
																$img1 = $result->img1;
															}
														?>
														<div class="portlet-body form">
															<!-- BEGIN FORM-->
															<form action="<?php echo $url?>admin/works/edit_action" class="form-horizontal form-bordered" method="post" enctype="multipart/form-data">
																<div class="form-body">
																<input type="hidden" name="id" value="<?=$id;?>">
																	<div class="form-group">
																	<div class="col-md-1"></div>
																	<?php
 if(get_table_filed('backend_option',array('key_txt'=>'works_img'),"val")==1){
?> 
																	<div class="col-md-5">
																		<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																						<img src="<?=base_url();?>uploads/works/<?php echo $img?>" alt="" />
																						</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;"> </div>
																						<div>
																							<span class="btn default btn-file">
																								<span class="fileinput-new">صورة الخدمة الأولى</span>
																								<span class="fileinput-exists">تغيير</span>
																								<input type="file" name="file"> </span>
																							<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
																						</div>
																					</div>
																					<p style="color:red;direction:rtl"></p>
																		<p style="color:red;direction:rtl">عرض الصورة 1000 بيكسل</p>
																		<p style="direction:rtl">طول الصورة 600  بيكسل</p>
																		</div>

																		<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_img1'),"val")==1){
?> 
																	<div class="col-md-5" style="text-align:center">
																		<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																						<img src="<?=base_url();?>uploads/works/<?php echo $img1?>" alt="" />
																						</div>																					
																			<div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px;height: 150px;"> </div>
																						<div>
																							<span class="btn default btn-file">
																								<span class="fileinput-new">صورة الخدمة الثانية</span>
																								<span class="fileinput-exists">تغيير</span>
																								<input type="file" name="file1"> </span>
																								<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
																						</div>
																					</div>
																					<p style="color:red;direction:rtl"></p>
																		<p style="color:red;direction:rtl">عرض الصورة 1000 بيكسل</p>
																		<p style="direction:rtl">طول الصورة 600  بيكسل</p>
																	</div>
<?php }?>
<div class="col-md-1"></div>

<?php
if(get_table_filed('backend_option',array('key_txt'=>'works_title'),"val")==1){
?> 																										</div>
																	
														
																	
																	
																
																	<div class="form-group">
																		<div class="col-md-1"></div>
																		<div class="col-md-10">
																		    	<span class="help-block"> العنوان </span>
								<input value="<?=$name_title;?>"  name="name_title" type="text" placeholder="العنوان" class="form-control" required>
																			
																		</div>
																		<div class="col-md-1"></div>
																	</div>
																	<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_title_eng'),"val")==1){
?> 																	
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block" style="float:left"> title</span>
<input name="title_eng" id="title" value="<?=$title_en;?>"  type="text"  placeholder="title" class="form-control" required style="text-align:left;direction:ltr">

</div>
<div class="col-md-1"></div>
</div>	
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_details'),"val")==1){
?> 

<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10">
<span class="help-block"> المحتوي </span>
<textarea  name="contents" id="contents"><?=$details;?></textarea>
</div>
<div class="col-md-1"></div>
</div>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_details_en'),"val")==1){
?> 																	
<div class="form-group">
<div class="col-md-1"></div>
<div class="col-md-10" style="text-align:center">
<span class="help-block"></span>Details</span>
<textarea  name="details_en" id="contents_en"><?=$details_en;?></textarea>
</div>
<div class="col-md-1"></div>
</div>															
<?php }?>														
																	
<div class="form-actions">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<button type="submit" class="btn green">
<i class="fa fa-check"></i> حفظ </button>
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
	var editor = CKEDITOR.replace('contents');
	var editor_en = CKEDITOR.replace('contents_en');
	CKFinder.setupCKEditor( editor_en );
	CKFinder.setupCKEditor( editor );
</script>

</body>
</html>