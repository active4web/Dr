<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('admin', get_lang() );
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('data','','true');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url','text'));
        $this->load->library('lib_pagination');
        $this->load->library('CKEditor');
        $this->load->library('CKFinder');
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../design/ckfinder/');      
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
        redirect(base_url().'admin/pages/show','refresh');
    }
    
    

    public function show(){
        $pg_config['sql'] = $this->data->get_sql('pages',array("key_txt!="=>"terms"),'id','DESC');
        $pg_config['per_page'] = 10;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/pages/show", $data); 
    }


       public function add(){
        $this->load->view("admin/pages/add"); 
    }

    public function add_action(){
        $title=$this->input->post('title');
        $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');
        $data['flag'] = $user_type;
        $data['key_txt'] = "Pages";
        $data['title'] = $title;
        $data['content'] = $content;
        $data['active'] = '0';
        $this->db->insert('pages',$data);
 
        $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
        redirect(base_url().'admin/pages/show','refresh');
    }


public function introductory(){
	$data['site_info']= $this->data->get_table_data('home_pages');
	$this->load->view("admin/home/steps",$data); 
    }
    public function home_video(){
        $data['site_info']= $this->data->get_table_data('home_pages');
        $this->load->view("admin/home/home_video",$data); 
        }
    

public function home_intro(){
	$data['site_info']= $this->data->get_table_data('home_pages');
	$this->load->view("admin/home/home_intro",$data); 
	}


    

public function edit_video(){
$home_video=$this->input->post('home_video');
$data = array('home_video'=>$home_video);
$this->db->update('home_pages',$data,array('id'=>1));
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/pages/home_video');	

}
public function edit_steps(){
$title=$this->input->post('title');
$title_en=$this->input->post('title_en');
$breif_txt_ar=$this->input->post('breif_txt_ar');
$breif_txt_eng=$this->input->post('breif_txt_eng');
		$data = array('title'=>$title,'title_eng'=>$title_en,'breif_txt_ar'=>$breif_txt_ar,'breif_txt_eng'=>$breif_txt_eng);
		$this->db->update('home_pages',$data,array('id'=>1));

$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/pages/introductory');	

    
    
    
}




	public function edit_about(){
		$home_about=$this->input->post('home_about');
        $home_about_en=$this->input->post('home_about_en');
        $home_vision=$this->input->post('home_vision');
        $home_vision_en=$this->input->post('home_vision_en');
        $home_mission=$this->input->post('home_mission');
        $home_mission_en=$this->input->post('home_mission_en');
        $home_goals=$this->input->post('home_goals');
        $home_goals_en=$this->input->post('home_goals_en');
        
		$data = array('home_about'=>$home_about,'home_about_en'=>$home_about_en,'home_vision'=>$home_vision,'home_vision_en'=>$home_vision_en,'home_mission'=>$home_mission,'home_mission_en'=>$home_mission_en,'home_goals'=>$home_goals,'home_goals_en'=>$home_goals_en);
		$this->db->update('home_pages',$data,array('id'=>1));

			$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
			$this->session->mark_as_flash('msg');
			redirect('/admin/pages/home_intro');	
}


public function home_background(){
	$data['site_info']= $this->data->get_table_data('home_pages');
	$this->load->view("admin/home/home_background",$data); 
	}


public function edit_slider_img(){
if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config('home_pages','uploads/site_setting/',$file,$file_name,'slider_background','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),'1920','1080');
}
$this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
$this->session->mark_as_flash('msg');
redirect('/admin/pages/home_background');	
	}

    public function delete(){
        $id_pages = $this->input->get('id_pages');
        $check=$this->input->post('check');

        if($id_pages!=""){
        $ret_value=$this->data->delete_table_row('pages',array('id'=>$id_pages)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
        $ret_value=$this->data->delete_table_row('pages',array('id'=>$check[$i]));    
        }
        }

        $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
        redirect(base_url().'admin/pages/show','refresh');
    }


    
    function active(){
        $id = $this->input->post("id");
        $ser = $this->db->get_where("pages",array("id"=>$id,"active" => "1"))->num_rows();
        if ($ser == 1) {
            $this->db->update("pages",array("active" => "0"),array("id"=>$id));
            echo "0";
        }
        if ($ser == 0) {
            $this->db->update("pages",array("active" => "1"),array("id"=>$id));
            echo "1";
        } 
    }

    public function edit(){
        $id=$this->input->get('id');
        $data['data'] = $this->data->get_table_data('pages',array('id'=>$id));
        $this->load->view("admin/pages/edit",$data); 
    }

    function edit_action(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');
         $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');

        $data['title'] = $title;
        $data['content'] = $content;
        if($user_type!=""){
        $data['flag'] = $user_type;
        }

        $re=$this->data->edit_table_id('pages',array('id'=>$id),$data);
        $this->session->set_flashdata('msg', 'Success Edited');
        redirect(base_url().'admin/pages/show','refresh');
    }
    
/****************Terms*************************************/
 
      public function terms(){
        $pg_config['sql'] = $this->data->get_sql('pages',array("key_txt"=>"terms"),'id','DESC');
        $pg_config['per_page'] = 10;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/pages/terms", $data); 
    }

    public function add_terms(){
        $this->load->view("admin/pages/add_terms"); 
    }
 
 public function terms_action(){
        $title=$this->input->post('title');
        $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');
        $data['flag'] = $user_type;
        $data['key_txt'] = "terms";
        $data['title'] = $title;
        $data['content'] = $content;
        $data['active'] = '0';
        $this->db->insert('pages',$data);
 
        $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
        redirect(base_url().'admin/pages/terms','refresh');
    }
    
    
    public function delete_terms(){
        $id_pages = $this->input->get('id_pages');
        $check=$this->input->post('check');

        if($id_pages!=""){
        $ret_value=$this->data->delete_table_row('pages',array('id'=>$id_pages)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
        $ret_value=$this->data->delete_table_row('pages',array('id'=>$check[$i]));    
        }
        }

        $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
        redirect(base_url().'admin/pages/terms','refresh');
    }
       
    
        public function edit_terms(){
        $id=$this->input->get('id');
        $data['data'] = $this->data->get_table_data('pages',array('id'=>$id));
        $this->load->view("admin/pages/edit_terms",$data); 
    }

    function edit_terms_action(){
        $id=$this->input->post('id');
        $title=$this->input->post('title');
         $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');

        $data['title'] = $title;
        $data['content'] = $content;
        if($user_type!=""){
        $data['flag'] = $user_type;
        }

        $re=$this->data->edit_table_id('pages',array('id'=>$id),$data);
        $this->session->set_flashdata('msg', 'تم التعديلا بنجاح');
        redirect(base_url().'admin/pages/terms','refresh');
    }
    
    
/******************************************************************
********************Point Info***********************************************
*******************************************************************/
      public function point_info(){
        $pg_config['sql'] = $this->data->get_sql('points_terms','','id','DESC');
        $pg_config['per_page'] = 10;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/pages/point_info", $data); 
    }

    public function add_points_terms(){
        $this->load->view("admin/pages/add_points_terms"); 
    }
 
 public function points_terms_action(){
        $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');
        $data['user_key'] = $user_type;
        $data['content'] = $content;
        $data['creation_date']=date("Y-m-d");
        $data['view'] = '1';
        $this->db->insert('points_terms',$data);
        $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
      redirect(base_url().'admin/pages/point_info','refresh');
    }
    
    
    public function delete_points_terms(){
        $id_pages = $this->input->get('id_pages');
        $check=$this->input->post('check');

        if($id_pages!=""){
        $ret_value=$this->data->delete_table_row('points_terms',array('id'=>$id_pages)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
        $ret_value=$this->data->delete_table_row('points_terms',array('id'=>$check[$i]));    
        }
        }

        $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
        redirect(base_url().'admin/pages/point_info','refresh');
    }
       
    
        public function edit_points_terms(){
        $id=$this->input->get('id');
        $data['data'] = $this->data->get_table_data('points_terms',array('id'=>$id));
        $this->load->view("admin/pages/edit_points_terms",$data); 
    }

    function edit_points_terms_action(){
        $id=$this->input->post('id');
     $user_type=$this->input->post('user_type');
        $content=$this->input->post('content');
        $data['content'] = $content;
        if($user_type!=""){
        $data['user_key'] = $user_type;
        }

        $re=$this->data->edit_table_id('points_terms',array('id'=>$id),$data);
        $this->session->set_flashdata('msg', 'تم التعديلا بنجاح');
        redirect(base_url().'admin/pages/point_info','refresh');
    }







    
    public function xxx(){
        $title_ar="sdfsdfsdf";
        $title_en="sdfsdfsdf";
        $content_ar="sdfsdfsdf";
        $content_en="sdfsdfsdf";

        $data['title_ar'] = $title_ar;
        $data['title_en'] = $title_en;
        $data['content_ar'] = $content_ar;
        $data['content_en'] = $content_en;
        $data['active'] = '0';

        $this->db->insert('pages',$data);
 
        $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
        redirect(base_url().'admin/pages/show','refresh');
    }

}