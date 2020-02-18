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
		$this->lang->load('admin', get_lang() );

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


/********************Gallery******************** */

public function about_gallery(){
	$pg_config['sql'] = $this->data->get_sql('about_galleries','','id','DESC');
	$pg_config['per_page'] =15;
	$data = $this->lib_pagination->create_pagination($pg_config);
	$this->load->view("admin/about/about_gallery", $data); 
	}
  
  
	 public function add_slider(){
  $this->data = array(
  'num_admin'=> $this->data->get_table_data('admin'),
  'site_info'=> $this->data->get_table_data('site_infos'));
  $this->load->view('admin/about/add_slider',$this->data);
	}
  
  public function slider_action(){
  
  $slider_title=$this->input->post("slider_title");
  $slider_title_en=$this->input->post("slider_title_en");
  $location=$this->input->post("location");
  $data['title'] =$slider_title;
  $data['title_en'] = $slider_title_en;
  $data['location'] = $location;
  $data['created_at'] = date("Y-m-d");
  $this->db->insert('about_galleries',$data);
  $id = $this->db->insert_id();      
  
  if($_FILES['file']['name']!=""){
  $file=$_FILES['file']['name'];
  $file_name="file";
  get_img_config('about_galleries','uploads/galleries/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"240","240");
  }    
  
  
  $this->session->set_flashdata('msg', 'تم الاضافة بنجاح');
  redirect(base_url().'admin/about/about_gallery','refresh');
  }
   
	public function check_view_slider(){
	$id = $this->input->post("id");
	$ser = $this->db->get_where("about_galleries",array("id"=>$id,"view" => "1"))->num_rows();
	if ($ser == 1) {
	$this->db->update("about_galleries",array("view" => "0"),array("id"=>$id));
	echo "0";
	}
	if ($ser == 0) {
	$this->db->update("about_galleries",array("view" => "1"),array("id"=>$id));
	echo "1";
		  }      
	  } 
  
  public function delete_slider(){
  $product_id = $this->input->get('id_type');
  $check=$this->input->post('check');
  if($product_id!=""){
  $img = get_this('about_galleries',['id' => $product_id],'img');
  if ($img != "") {
  unlink("uploads/galleries/$img");
  }
  $ret_value=$this->data->delete_table_row('about_galleries',array('id'=>$product_id));
  }
  if(isset($check)&&$check!=""){  
	  
	$check=$this->input->post('check');
	$length=count($check);
	for($i=0;$i<$length;$i++){
		$img = get_this('about_galleries',['id' => $check[$i]],'img');
  if ($img != "") {
  unlink("uploads/galleries/$img");
  }
  $ret_value=$this->data->delete_table_row('about_galleries',array('id'=>$check[$i]));     
   }
   }
   $this->load->helper('url');
   $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
   $this->session->mark_as_flash('msg');
   redirect('/admin/about/about_gallery', 'refresh');
	}
	
	  public function update_slider(){
		  $id_slider=$this->input->get('id_type');
  $this->data = array(
  'num_admin'=> $this->data->get_table_data('admin'),
  'site_info'=> $this->data->get_table_data('site_infos'),
  'silder_data'=> $this->data->get_table_data('about_galleries',array('id'=>$id_slider)));
  
  $this->load->view('admin/about/update_slider',$this->data);
	} 
	
	
   public function updateslider_action(){
  $id=$this->input->post('id');
  $slider_title=$this->input->post("slider_title");
  $slider_title_en=$this->input->post("slider_title_en");
  $location=$this->input->post("location");
  $data['title'] =$slider_title;
  $data['title_en'] = $slider_title_en;
  if($location!=""){
	$data['location'] = $location;
  }

  $this->db->update('about_galleries',$data,array('id'=>$id));
  
  
  if($_FILES['file']['name']!=""){
	
  $img = get_this('about_galleries',['id' => $id],'img');
  if ($img != "") {
  unlink("uploads/galleries/$img");
  }
  
  $file=$_FILES['file']['name'];
  $file_name="file";
  $config=get_img_config('about_galleries','uploads/galleries/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"240","240");
  }  
  $this->session->set_flashdata('msg', 'تم التعديل بنجاح');
  redirect(base_url().'admin/about/about_gallery','refresh');
	}

/**********************************END GALLERY***************************************
 * **************************************************************************/


/*************************************Why us************************************/
public function why_best(){
	$pg_config['sql'] = $this->data->get_sql('tab_why_us','','id','DESC');
	$pg_config['per_page'] =15;
	$data = $this->lib_pagination->create_pagination($pg_config);
	$this->load->view("admin/about/why_best", $data); 
	}


/**********************************END Why us*********************************************/



public function add_why_us(){
	$this->data = array(
	'num_admin'=> $this->data->get_table_data('admin'),
	'site_info'=> $this->data->get_table_data('site_infos'));
	$this->load->view('admin/about/add_why_us',$this->data);
	  }
	
	public function why_us_action(){
	
	$slider_title=$this->input->post("slider_title");
	$slider_title_en=$this->input->post("slider_title_en");
	$description=$this->input->post("description");
	$description_en=$this->input->post("description_en");

	$data['title'] =$slider_title;
	$data['title_en'] = $slider_title_en;
	$data['description'] = $description;
	$data['description_en'] = $description_en;
	$data['created_at'] = date("Y-m-d");
	$this->db->insert('tab_why_us',$data);
	$id = $this->db->insert_id();      
	
	if($_FILES['file']['name']!=""){
	$file=$_FILES['file']['name'];
	$file_name="file";
	get_img_config('tab_why_us','uploads/why_us/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"100","100");
	}    
	
	
	$this->session->set_flashdata('msg', 'تم الاضافة بنجاح');
	redirect(base_url().'admin/about/why_best','refresh');
	}


	public function check_view_why_us(){
		$id = $this->input->post("id");
		$ser = $this->db->get_where("tab_why_us",array("id"=>$id,"view" => "1"))->num_rows();
		if ($ser == 1) {
		$this->db->update("tab_why_us",array("view" => "0"),array("id"=>$id));
		echo "0";
		}
		if ($ser == 0) {
		$this->db->update("tab_why_us",array("view" => "1"),array("id"=>$id));
		echo "1";
			  }      
		  }


		  

		  public function update_why_us(){
			$id_slider=$this->input->get('id_type');
	$this->data = array(
	'num_admin'=> $this->data->get_table_data('admin'),
	'site_info'=> $this->data->get_table_data('site_infos'),
	'silder_data'=> $this->data->get_table_data('tab_why_us',array('id'=>$id_slider)));
	
	$this->load->view('admin/about/update_why_us',$this->data);
	  } 
	  
	  
	 public function updatewhyus_action(){
	$id=$this->input->post('id');
	$slider_title=$this->input->post("slider_title");
	$slider_title_en=$this->input->post("slider_title_en");
	$description=$this->input->post("description");
	$description_en=$this->input->post("description_en");

	$data['title'] =$slider_title;
	$data['title_en'] = $slider_title_en;
	$data['description'] = $description;
	$data['description_en'] = $description_en;	
	$this->db->update('tab_why_us',$data,array('id'=>$id));
	
	
	if($_FILES['file']['name']!=""){
	  
	$img = get_this('tab_why_us',['id' => $id],'img');
	if ($img != "") {
	unlink("uploads/why_us/$img");
	}
	
	$file=$_FILES['file']['name'];
	$file_name="file";
	$config=get_img_config('tab_why_us','uploads/why_us/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"100","100");
	}  
	$this->session->set_flashdata('msg', 'تم التعديل بنجاح');
	redirect(base_url().'admin/about/why_best','refresh');
	  }


	  public function delete_why_us(){
		$product_id = $this->input->get('id_type');
		$check=$this->input->post('check');
		if($product_id!=""){
		$img = get_this('tab_why_us',['id' => $product_id],'img');
		if ($img != "") {
		unlink("uploads/why_us/$img");
		}
		$ret_value=$this->data->delete_table_row('tab_why_us',array('id'=>$product_id));
		}
		if(isset($check)&&$check!=""){  
			
		  $check=$this->input->post('check');
		  $length=count($check);
		  for($i=0;$i<$length;$i++){
			  $img = get_this('tab_why_us',['id' => $check[$i]],'img');
		if ($img != "") {
		unlink("uploads/why_us/$img");
		}
		$ret_value=$this->data->delete_table_row('tab_why_us',array('id'=>$check[$i]));     
		 }
		 }
		 $this->load->helper('url');
		 $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
		 $this->session->mark_as_flash('msg');
		 redirect('/admin/about/why_best', 'refresh');
		  }


		  /**************************END Why us*****************************/



		  public function our_Works(){
			$data['site_info']= $this->data->get_table_data('site_settings');
			$this->load->view("admin/about/our_Works",$data); 
		}
		
		
		
		
		public function edit_our_Works(){
			$our_works_title=$this->input->post('our_works_title');
			$our_works_title_en=$this->input->post('our_works_title_en');
			$our_works_txt=$this->input->post('our_works_txt');
			$our_works_txt_en=$this->input->post('our_works_txt_en');
			$data = array('our_works_title'=>$our_works_title,'our_works_title_en'=>$our_works_title_en,'our_works_txt'=>$our_works_txt,'our_works_txt_en'=>$our_works_txt_en);
			$this->db->update('site_settings',$data,array('id'=>1));
			if($_FILES['file']['name']!=""){
	  
				$img = get_this('site_settings',['id' => $id],'our_works_img');
				if ($img != "") {
				unlink("uploads/site_setting/$img");
				}
				
				$file=$_FILES['file']['name'];
				$file_name="file";
				$config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'our_works_img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"500","500");
				} 

		$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
		$this->session->mark_as_flash('msg');
				redirect('/admin/about/our_Works');	
		
		}
		
		

}
