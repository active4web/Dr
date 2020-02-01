<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('data','','true');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url','text'));
        $this->load->library('lib_pagination'); 
    }

	public function gen_random_string()

{
$chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
$final_rand='';
for($i=0;$i<4; $i++) {
 $final_rand .= $chars[ rand(0,strlen($chars)-1)];
    }
return $final_rand;
}
    public function index(){
    redirect(base_url().'admin/about/show','refresh');
    }

    public function show(){
		$data['site_info']= $this->data->get_table_data('site_settings');
		$this->load->view("admin/about/show",$data); 
    }

	


	public function edit_about(){
$about_site=$this->input->post('about_site');
$about_site_en=$this->input->post('about_site_en');
$data = array('about'=>$about_site,'about_en'=>$about_site_en);
$this->db->update('site_settings',$data,array('id'=>1));
if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'about_img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"550","450");
}
		
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/about/show');	

}

	public function job_banner(){

if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'job_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1350","450");
}
		
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/jobs/banner');	

}


	public function business_banner(){

if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'business_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1350","450");
}
		
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/business/banner');	

}


	public function contact_banner(){

if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'contact_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1350","450");
}
		
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/messages/banner');	

}



public function vision(){
	$data['site_info']= $this->data->get_table_data('site_settings');
	$this->load->view("admin/about/vision",$data); 
}



public function sustainability_banner(){

if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'sustainability_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1350","450");
}
		
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/sustainability/banner');	

}






public function edit_vision(){
$about_site=$this->input->post('vision_site');
$vision_en=$this->input->post('vision_en');
$data = array('vision'=>$about_site,'vision_en'=>$vision_en);
$this->db->update('site_settings',$data,array('id'=>1));
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/about/vision');	
}




public function mission(){
	$data['site_info']= $this->data->get_table_data('site_settings');
	$this->load->view("admin/about/mission",$data); 
}




public function edit_mission(){
	$mission=$this->input->post('mission');
	$mission_en=$this->input->post('mission_en');
	$data = array('mission'=>$mission,'mission_en'=>$mission_en);
	$this->db->update('site_settings',$data,array('id'=>1));
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
		redirect('/admin/about/mission');	

}



public function goals(){
	$data['site_info']= $this->data->get_table_data('site_settings');
	$this->load->view("admin/about/goals",$data); 
}




public function edit_goals(){
	$goals=$this->input->post('goals');
	$goals_en=$this->input->post('goals_en');
	$data = array('goals'=>$goals,'goals_en'=>$goals_en);
	$this->db->update('site_settings',$data,array('id'=>1));
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
		redirect('/admin/about/goals');	

}

public function banner(){
	$data['site_info']= $this->data->get_table_data('site_settings');
	$this->load->view("admin/about/banner",$data); 
}



public function about_banner(){

	if($_FILES['file']['name']!=""){
	$file=$_FILES['file']['name'];
	$file_name="file";
	$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'about_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1920","620");
	}
			
	$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
	$this->session->mark_as_flash('msg');
	redirect('/admin/about/banner');	
	
	}


public function join_us(){
	$data['site_settings']= $this->data->get_table_data('site_settings');
	$this->load->view("admin/about/join_us",$data); 
}

public function edit_join_us(){
$name_project=$this->input->post('name_title');
$desc_ar=$this->input->post('contents');
 $id=$this->input->post('id');
$data['join_title'] = $name_project;
$data['join_details'] = $desc_ar;
$this->db->update('site_settings',$data,array("id"=>$id));


if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config_course('site_settings','uploads/site_setting/',$file,$file_name,'join_img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"360","250",$id);
}
		$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
		$this->session->mark_as_flash('msg');
		redirect('admin/about/join_us');	

}

}
