        <!-- BEGIN SIDEBAR -->
        <?php
       $color_key=get_table_filed("system_setting",array("key_txt"=>"main_color"),"txt_value");
        ?>
        <style>
        .page-sidebar .page-sidebar-menu>li.active.open>a, .page-sideba r .page-sidebar-menu>li.active>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active>a {
    background: #<?= $color_key ?>;
    color: #fff;
}
.page-sidebar .page-sidebar-menu>li.active>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active>a {
    border-right: 3px solid #<?= $color_key ?> !important;
    margin-right: -3px;
    padding-right: 15px;
}
.page-sidebar .page-sidebar-menu>li.active.open>a, .page-sideba r .page-sidebar-menu>li.active>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.active>a {
    background: #<?= $color_key ?> !important;
    color: #fff;
}     
.page-sidebar .page-sidebar-menu>li.open>a, .page-sidebar .page-sidebar-menu>li:hover>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li.open>a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu>li:hover>a {
    background: #<?= $color_key ?> !important;;
    color: #fff;
} 
        </style>
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start <?php if($curt=='home'){echo'active open';}?>">
                        <a href="<?=$url;?>admin" class="nav-link ">
                            <i class="icon-home"></i>
                                        <span class="title">لوحة التحكم</span>
                                        <span class="selected"></span>
                                    </a>
                    </li>
                    <?php
                        $home_messages=$this->db->get_where("home_messages",array("view"=>'0'))->result();
                        $users_message=$this->db->get_where("messages",array("view"=>'0'))->result();

                    ?>
	<li class="nav-item start <?php if($curt=='setting'){echo'active open';}?>">
						<a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
								<span class="title">الاعدادات 
								</span>
                                <span class="arrow"></span>
                            </a>
							<ul class="sub-menu">
                                <li class="nav-item  <?php if($curt=='setting'){echo'active open';}?>">
                              
                                    <a href="<?=base_url()?>admin/setting" class="nav-link ">
                                           <i class="icon-settings"></i>
                                        <span class="title">الاعدادات</span>
                                    </a>
                                </li>
						
<li class="nav-item start <?php if($curt=='translate'){echo'active open';}?>">
<a href="<?=$url;?>admin/translate" class="nav-link ">
<i class="icon-note"></i>
<span class="title">الترجمة</span>
<span class="selected"></span>
</a></li>
							
                                  
                            </ul>
                    </li>
                    
                    

                      
<li class="nav-item start <?php if($curt=='team_work'){echo'active open';}?>">
<a href="<?=$url;?>admin/team_work" class="nav-link ">
<i class="icon-users"></i>
<span class="title">المشرفين</span>
<span class="selected"></span>
</a>
</li>
				
<li class="nav-item start <?php if($curt=="slider"||$curt=='homepage'||$curt=='intro'||$curt=='introductory'){echo'active open';}?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="icon-home"></i>
<span class="title">الصفحة الرئيسية</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">

<li class="nav-item <?php if($curt=='slider'){echo'active open';}?>">
<a href="<?=base_url()?>admin/slider_home" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">الاسليدر</span>
</a>
</li>


<li class="nav-item <?php if($curt=='introductory'){echo'active open';}?>">
<a href="<?=base_url()?>admin/pages/home_background" class="nav-link ">
<i class="icon-note"></i>
<span class="title">البنر التعريفى</span>
</a>
</li>


<li class="nav-item <?php if($curt=='intro'){echo'active open';}?>">
<a href="<?=base_url()?>admin/pages/home_intro" class="nav-link ">
<i class="fa fa-comment"></i>
<span class="title">المقدمة</span>
</a>
</li>

</ul>
</li>
				
<li class="nav-item start <?php if($curt=='goals'||$curt=='about_us'||$curt=='vision'||$curt=='mission'||$curt=='banner_about'){echo'active open';}?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="icon-info"></i>
<span class="title">من نحن</span>
<span class="arrow"></span>
</a>
<ul class="sub-menu">
<?php
if(get_table_filed('backend_option',array('key_txt'=>'banner_about'),"val")==1){
?>
<li class="nav-item <?php if($curt=='banner_about'){echo'active open';}?>">
<a href="<?=base_url()?>admin/about/banner" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">بنر من نحن</span>
</a>
</li>
<?php
}if(get_table_filed('backend_option',array('key_txt'=>'about_us'),"val")==1){
?>
<li class="nav-item <?php if($curt=='about_us'){echo'active open';}?>">
<a href="<?=base_url()?>admin/about/show" class="nav-link ">
<i class="icon-note"></i>
<span class="title">من نحن</span>
</a>
</li>

<?php
}if(get_table_filed('backend_option',array('key_txt'=>'vision'),"val")==1){
?>
<li class="nav-item <?php if($curt=='vision'){echo'active open';}?>">
<a href="<?=base_url()?>admin/about/vision" class="nav-link ">
<i class="icon-note"></i>
<span class="title">رؤيتنا</span>
</a>
</li>

<?php
}if(get_table_filed('backend_option',array('key_txt'=>'mission'),"val")==1){
?>
<li class="nav-item <?php if($curt=='mission'){echo'active open';}?>">
<a href="<?=base_url()?>admin/about/mission" class="nav-link ">
<i class="icon-note"></i>
<span class="title">رسالتنا</span>
</a>
</li>
<?php
}if(get_table_filed('backend_option',array('key_txt'=>'goals'),"val")==1){
?>
<li class="nav-item <?php if($curt=='goals'){echo'active open';}?>">
<a href="<?=base_url()?>admin/about/goals" class="nav-link ">
<i class="icon-note"></i>
<span class="title">الأهداف</span>
</a>
</li>
<?php }?>
</ul>
</li>
                    
 
 
<?php
if(get_table_filed('backend_option',array('key_txt'=>'services'),"val")==1){
?>

<li class="nav-item start <?php if($curt=='services'||$curt=="banner_services"){echo'active open';}?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-certificate"></i>
<span class="title">الخدمات</span>

<span class="arrow"></span>
</a>
<ul class="sub-menu">      
<?php
if(get_table_filed('backend_option',array('key_txt'=>'banner_services'),"val")==1){
?>
<li class="nav-item <?php if($curt=='banner_services'){echo'active open';}?>">
<a href="<?=base_url()?>admin/services/banner" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">بنر الخدمات</span>
</a>
</li> 	
<?php }?>
<li class="nav-item  <?php if($curt=='business'){echo'active open';}?>">
<a href="<?=base_url()?>admin/services/" class="nav-link ">
<i class="icon-briefcase"></i>
<span class="title">الخدمات</span>
</a>
</li>
</ul>
</li>    
           
<?php }?>
<?php
if(get_table_filed('backend_option',array('key_txt'=>'clients'),"val")==1){
?>

<li class="nav-item start <?php if($curt=='clients'||$curt=="banner_clients"){echo'active open';}?>">
<a href="javascript:;" class="nav-link nav-toggle">
<i class="fa fa-photo"></i>
<span class="title">معرض الاعمال</span>

<span class="arrow"></span>
</a>
<ul class="sub-menu">      
<?php
if(get_table_filed('backend_option',array('key_txt'=>'banner_clients'),"val")==1){
?>
<li class="nav-item <?php if($curt=='banner_clients'){echo'active open';}?>">
<a href="<?=base_url()?>admin/clients/banner" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">بنر معرضنا</span>
</a>
</li> 	
<?php }?>
<li class="nav-item  <?php if($curt=='clients'){echo'active open';}?>">
<a href="<?=base_url()?>admin/clients/" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">معرض الاعمال</span>
</a>
</li>
</ul>
</li> 
<?php }?>
<?php
if(get_table_filed('backend_option',array('key_txt'=>'works'),"val")==1){
?>
        <li class="nav-item start <?php if($curt=='works'||$curt=="banner_works"){echo'active open';}?>">
        <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-briefcase"></i>
        <span class="title">الاخبار</span>

        <span class="arrow"></span>
        </a>
        <ul class="sub-menu">      
        <?php
if(get_table_filed('backend_option',array('key_txt'=>'banner_works'),"val")==1){
?>
        <li class="nav-item <?php if($curt=='banner_works'){echo'active open';}?>">
        <a href="<?=base_url()?>admin/works/banner" class="nav-link ">
        <i class="fa fa-photo"></i>
        <span class="title">بنر  الأعمال</span>
        </a>
        </li> 	
<?php }?>
        <li class="nav-item  <?php if($curt=='works'){echo'active open';}?>">
        <a href="<?=base_url()?>admin/works/" class="nav-link ">
        <i class="icon-briefcase"></i>
        <span class="title">الاخبار </span>
        </a>
        </li>     
        </ul>
        </li>  
<?php }?>
<?php
if(get_table_filed('backend_option',array('key_txt'=>'events'),"val")==1){
?>
        <li class="nav-item start <?php if($curt=='events'||$curt=="banner_events"){echo'active open';}?>">
	<a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-notes"></i>
			<span class="title">الاخبار</span>
			  
            <span class="arrow"></span>
        </a>
  	<ul class="sub-menu">      
      <?php
if(get_table_filed('backend_option',array('key_txt'=>'banner_events'),"val")==1){
?>
<li class="nav-item <?php if($curt=='banner_events'){echo'active open';}?>">
<a href="<?=base_url()?>admin/events/banner" class="nav-link ">
<i class="fa fa-photo"></i>
<span class="title">بنر الاخبار</span>
</a>
</li> 	
<?php }?>
 <li class="nav-item  <?php if($curt=='events'){echo'active open';}?>">
<a href="<?=base_url()?>admin/events/" class="nav-link ">
<i class="fa fa-notes"></i>
<span class="title">الاخبار</span>
</a>
     </li>     
     </ul>
           </li>                       
<?php }?>        
 
 					
                    
      <li class="nav-item start <?php if($curt=='messages_banner'||$curt=='messages'||$curt=='request_job'){echo'active open';}?>">
	<a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-envelope"></i>
			<span class="title">رسائل التواصل </span>
			   <span style="color:red" class="ticket_nofiy">
            <?php
            $main_home_messages=count($home_messages);
            $main_message=count($users_message);
             $total_mess=(int)$main_home_messages+(int)$main_home_messages;
            
            if($total_mess>0){echo "(".$total_mess.")"; };?></span>
            <span class="arrow"></span>
        </a>
  	<ul class="sub-menu">  
      <?php
if(get_table_filed('backend_option',array('key_txt'=>'messages_banner'),"val")==1){
?>
  		<li class="nav-item <?php if($curt=='messages_banner'){echo'active open';}?>">
							<a href="<?=base_url()?>admin/messages/banner" class="nav-link ">
                            <i class="fa fa-photo"></i>
								<span class="title">بنر التواصل</span>
							</a>
						</li>
<?php }?>
<li class="nav-item  <?php if($curt=='messages'){echo'active open';}?>">
                                    <a href="<?=base_url()?>admin/messages/messages_contact" class="nav-link ">
                                        <i class="icon-envelope"></i>
                                        <span class="title">رسائل تواصل معانا</span>
                                        <span style="color:red" class="users_message">
								    <?php if(count($users_message)>0){echo "(".count($users_message).")"; };?></span>
                                    </a>
                                </li>

                               <!--- <li class="nav-item <?php if($curt=='request_job'){echo'active open';}?>">
							<a href="<?=base_url()?>admin/messages/messages_jobs" class="nav-link ">
                            <i class="icon-envelope"></i>
								<span class="title">رسائل الرئيسية</span>
						 <span style="color:red" class="user_nofiy">
								    <?php if(count($home_messages)>0){echo "(".count($home_messages).")"; };?></span>
							</a>
						</li>--->

                   </ul>
                    </li>
                    
                            </ul>
                        </li>
                        
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
