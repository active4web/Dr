<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MX_Controller{
    public function __construct(){
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
        $this->load->library('image_lib');	    
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
    redirect(base_url().'admin/clients/customers','refresh');
    }
 public function customers(){
        $pg_config['sql'] = $this->data->get_sql('clients','','id','DESC');
        $pg_config['per_page'] = 50;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/clients/customers", $data); 
    }

 public function add_clients(){
        $this->load->view("admin/clients/add_clients"); 
    }



    public function clients_action(){
		$title_ar=$this->input->post('title_ar');
		$title_eng=$this->input->post('title_eng');
		$link=$this->input->post('link');
		$data['link'] = $link;
         $data['title_eng'] = $title_eng;
        $data['title_ar'] = $title_ar;
        $this->db->insert('clients',$data);
        $id = $this->db->insert_id();
    if($_FILES['file']['name']!=""){
        $file=$_FILES['file']['name'];
        $file_name="file";
        //$config=get_img_config('clients','uploads/clients/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"200","80");
        $config=get_img_config_course('clients','uploads/clients/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"600","400",$id);
            }
        $this->session->set_flashdata('msg', 'تم الاضافة بنجاح');
       redirect(base_url().'admin/clients/','refresh');
    }



    public function delete_clients(){
        $id_blog = $this->input->get('id_type');
        $check=$this->input->post('check');
if($id_blog!=""){
$img_right = $this->data->get_table_row('clients',array('id'=>$id_blog),'img'); 
unlink("uploads/clients/$img_right");	
 $ret_value=$this->data->delete_table_row('clients',array('id'=>$id_blog)); 
}
if(isset($check) && $check!=""){  
$check=$this->input->post('check');
$length=count($check);
for($i=0;$i<$length;$i++){
$img_right = $this->data->get_table_row('clients',array('id'=>$check[$i]),'img'); 
unlink("uploads/clients/$img_right");	
$ret_value=$this->data->delete_table_row('clients',array('id'=>$check[$i]));    
 }
  }
 $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
  redirect(base_url().'admin/clients/','refresh');
  }



    function check_view_clients(){
        $id = $this->input->post("id");
        $ser = $this->db->get_where("clients",array("id"=>$id,"view" => "1"))->num_rows();
        if ($ser == 1) {
            $this->db->update("clients",array("view" => "0"),array("id"=>$id));
            echo "0";
        }
        if ($ser == 0) {
            $this->db->update("clients",array("view" => "1"),array("id"=>$id));
            echo "1";
        } 

    }



    public function update_clients(){
        $id=$this->input->get('id_type');
        $data['data'] = $this->data->get_table_data('clients',array('id'=>$id));
        $this->load->view("admin/clients/update_clients",$data); 
    }



    function edit_action(){
		$title_ar=$this->input->post('title_ar');
		$title_eng=$this->input->post('title_eng');
		$id = $this->input->post('id');
		$link=$this->input->post('link');
		$data['link'] = $link;
        $data['title_eng'] = $title_eng;
        $data['title_ar'] = $title_ar;
		$this->data->edit_table_id('clients',array('id'=>$id),$data);
   
        if($_FILES['file']['name']!=""){
            $file=$_FILES['file']['name'];
            $file_name="file";
            $config=get_img_config('clients','uploads/clients/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"200","200");

                }
        $this->session->set_flashdata('msg', 'تم التعديل بنجاح');
        redirect(base_url().'admin/clients/','refresh');
    }
    
    public function banner(){
        $data['site_info']= $this->data->get_table_data('site_setting');
        $this->load->view("admin/clients/banner",$data); 
    }
    
    
    
    public function about_banner(){
    
        if($_FILES['file']['name']!=""){
        $file=$_FILES['file']['name'];
        $file_name="file";
        $config=get_img_config('site_setting','uploads/site_setting/',$file,$file_name,'clients_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1920","620");
        }
                
        $this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
        $this->session->mark_as_flash('msg');
        redirect('/admin/clients/banner');	
        
        }
    

}

