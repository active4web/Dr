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
<link rel="stylesheet" href="<?= base_url();?>design/lightbox2-master/dist/css/lightbox.min.css" type="text/css" media="screen" />
<script src="<?= base_url();;?>design/lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>
<head>
<meta charset="utf-8">
<title>الأعمال</title>
<?php include ("design/inc/header.php");?>
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
				<!-- BEGIN CONTENT BODY -->
				<div class="page-content">
					<!-- BEGIN PAGE BREADCRUMB -->
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="<?=$url.'admin';?>">لوحة التحكم</a>
							<i class="fa fa-circle"></i>
						</li>
				
						<li>
							<span class="active">الأعمال</span>
						</li>
					</ul>
					<!-- END PAGE BREADCRUMB -->

					<!-- Start Table Data -->
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption font-dark">
										<i class="icon-settings font-dark"></i>
										<span class="caption-subject bold uppercase">الاعمال</span>
									</div>
								</div>
								<span class="portlet-body">
									<div class="table-toolbar">
										<div class="row">
											<div class="col-md-6">
												<div class="btn-group">
													<button id="sample_editable_1_2_new" class="btn sbold green addbutton"> إضافة
														<i class="fa fa-plus"></i>
													</button>
												</div>
												<?php if($result_amount>0){?>
													<div class="btn-group">
														<button id="sample_editable_1_2_new" class="btn sbold red delbutton"> حذف مجموعة
															<i class="fa fa-remove"></i>
														</button>
													</div>
												<?php }?>
											</div>
										</div>
									</div>
									<?php if(!empty($results)){?>
									<form action="<?=$url?>admin/works/delete" method="POST" id="form">
									<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1_2">
										<thead>
											<tr>
												<th>
													<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
														<input id="checkAll" type="checkbox" class="group-checkable" data-set="#sample_1_2 .checkboxes" />
														<span></span>
													</label>
												</th>
<?php
if(get_table_filed('backend_option',array('key_txt'=>'works_img'),"val")==1){
?> 
												<th>الصورة الأولى</th>
												<?php
}if(get_table_filed('backend_option',array('key_txt'=>'works_img1'),"val")==1){
?> 
												<th>الصورة الثانية</th>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_title'),"val")==1){
?> 
												<th>العنوان</th>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_title_eng'),"val")==1){
?> 
												<th>Title</th>
<?php }?>

												<th>تاريخ الأضافة</th>
												<th>الحالة</th>
												<th> العمليات </th>
											</tr>
										</thead>
										<tfoot>
											<tr>
											<?php
if(get_table_filed('backend_option',array('key_txt'=>'works_img'),"val")==1){
?> 
												<th></th>
												<?php
}if(get_table_filed('backend_option',array('key_txt'=>'works_img1'),"val")==1){
?> 
												<th> </th>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_title'),"val")==1){
?> 
												<th></th>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_title_eng'),"val")==1){
?> 
												<th></th>
<?php }?>
												<th> </th>
												<th> </th>
												<th> </th>
												<th> </th>
											</tr>
										</tfoot>
										<tbody>
                                        <?php
                                            foreach($results as $data) {
                                                
                                                	$active=$data->view;
												switch($active){
													case 0:
													  $active="<span class='label label-sm label-danger'>غير مفعل</span>";
													  break;
													case 1:
													  $active="<span class='label label-sm label-success'>مفعل</span>";
													  break;
													default:
													  break; 
												}
												$image=$data->img;
												$img=$url."uploads/works/".$image; 
												$image1=$data->img1;
												$img1=$url."uploads/works/".$image1; 
                                        ?>
											<tr class="odd gradeX">
												<td>
													<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
														<input name="check[]" type="checkbox" class="checkboxes" value="<?=$data->id;?>" />
														<span></span>
													</label>
												</td>
												<?php
if(get_table_filed('backend_option',array('key_txt'=>'works_img'),"val")==1){
?> 	
<td><a title="view image" class="example-image-link" href="<?php echo $img;?>" data-lightbox="example-1">الصورة</a></td>
<?php
} if(get_table_filed('backend_option',array('key_txt'=>'works_img1'),"val")==1){
?> 	
<td><a title="view image" class="example-image-link" href="<?php echo $img1;?>" data-lightbox="example-1">الصورة</a></td>
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'works_title'),"val")==1){
?> 	
	<td><?= mb_substr($data->title,0,30);?></td>
<?php
  } if(get_table_filed('backend_option',array('key_txt'=>'works_title_eng'),"val")==1){
?> 	
<td><?= mb_substr($data->title_en,0,30);?></td>
  <?php }?>		
												<td> <?=date(date("Y-d-m"),strtotime($data->creation_date));?> </td>

											  <td>
												<a data-id="<?=$data->id;?>" class="btn btn-xs purple edit" style="padding: 1px 0px;"><i class="fa fa-edit"></i>
												<span class="code_actvation-<?php echo $data->id;?>"><?php echo $active;?></span>
												</a>
												</td>
												<td>
													<div class="btn-group">
														<button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> العمليات
															<i class="fa fa-angle-down"></i>
														</button>
														<ul class="dropdown-menu pull-left" role="menu">
															<!--<li><a href="javascript:;"><i class="fa fa-eye"></i> Details </a></li>-->
															<li><a href="<?=$url?>admin/works/edit?id=<?=$data->id;?>"><i class="fa fa-pencil"></i> تعديل </a></li>
															<li><a href="<?=$url?>admin/works/delete?id_products=<?=$data->id;?>"><i class="fa fa-remove"></i> حذف </a></li>

														</ul>
													</div>
												</td>
											</tr>
                                            <?php }?>
										</tbody>
									</table>
									</form>
									<?php }else{?>
									<center><span class="caption-subject font-red bold uppercase"><?=lang('no_data');?></span></center>
									<?php }?>
								<div class="row">
                                    <div class="col-md-5 col-sm-5">
									<br>
                                        <div class="dataTables_info" id="sample_1_2_info" role="status" aria-live="polite">
                                        <ul class="nav nav-pills">
                                            <li>
                                            <a href="javascript:;"> مجموع السجلات :
                                                <span class="badge badge-success pull-right"> <?php echo $result_amount; ?> </span>
                                            </a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div style="text-align: right;" class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_2_paginate">
                                            <ul class="pagination" style="visibility: visible;">
                                                <?php echo $pagination; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
								</div>
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
						</div>
					</div>
					<!-- END Table Data-->

				</div>
				<!-- END CONTENT -->
		</div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php include ("design/inc/footer.php");?>
        <!-- END FOOTER -->

        <?php include ("design/inc/footer_js.php");?>
<script>
$(document).ready(function(e) {
	
    $(".addbutton").click(function(e) {
        window.location.assign("<?= base_url()?>admin/works/add");
    });

	$(".delbutton").click(function(e) {
        window.location.assign("<?= base_url()?>admin/works/delete");
	});
});
</script>
<script>
$(document).ready(function(e) {
    $("#checkAll").change(function(){
		$("input[type=checkbox]").not("#checkAll").each(function() {
            this.checked=!this.checked;
        });
	});
	$(".delbutton").click(function(){
		if($('input[type=checkbox]:not("#checkAll"):checked').length>0){
			$('#form').unbind('submit').submit();//renable submit
		}
	    else{
			window.stop();
			//alert("<?=lang('row_one_alert');?>");
			toastr.warning("<?=lang('row_one_alert');?>");
	}
	});
});
</script>
<?php if(isset($_SESSION['msg']) && $_SESSION['msg']!=''){?>
<script>
$(document).ready(function(e) {
	toastr.success("<?php echo $_SESSION['msg']?>");
});
</script>
<?php }?>

<script>
$(document).ready(function(e) {
$(".edit").click(function(e) {
var id = $(this).data("id");
//alert(id);
var data={id:id};
	$.ajax({
		url: '<?php echo base_url("admin/works/active") ?>',
		type: 'POST',
		data: data,				
		success: function( data ) {
		if (data == "1") {
			// alert(data);
			$(".code_actvation-"+id).html("<span class='label label-sm label-success'>مفعل</span>");
		}
		if (data == "0") {
			$(".code_actvation-"+id).html("<span class='label label-sm label-danger'>غير مفعل</span>");
		}
		}
		});
	});
});
</script>

</body>
</html>
