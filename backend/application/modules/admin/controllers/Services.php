<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MX_Controller
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

 public function banner(){
		$data['site_info']= $this->data->get_table_data('site_setting');
		$this->load->view("admin/services/banner",$data); 
    }
    public function intro(){
		$data['site_info']= $this->data->get_table_data('site_settings');
		$this->load->view("admin/services/intro",$data); 
    }

    
    
    public function edit_intro(){
    
        $about_site=$this->input->post('about_site');
        $about_site_en=$this->input->post('about_site_en');
        $data['services_intro_en'] = $about_site_en;
        $data['services_intro'] = $about_site;
        $this->db->update('site_settings',$data,array("id"=>1));
        
        if($_FILES['file']['name']!=""){
        $file=$_FILES['file']['name'];
        $file_name="file";
        $config=get_img_config('site_settings','uploads/site_setting/',$file,$file_name,'services_img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"600","400");
        }
                
        $this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
        $this->session->mark_as_flash('msg');
        redirect('/admin/services/intro');	
        
        }
    
    public function about_banner(){
    
        if($_FILES['file']['name']!=""){
        $file=$_FILES['file']['name'];
        $file_name="file";
        $config=get_img_config('site_setting','uploads/site_setting/',$file,$file_name,'services_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1920","620");
        }
                
        $this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
        $this->session->mark_as_flash('msg');
        redirect('/admin/services/banner');	
        
        }

    public function index(){
        redirect(base_url().'admin/services/show','refresh');
    }

    public function show(){
        $pg_config['sql'] = $this->data->get_sql('services','','id','DESC');
        $pg_config['per_page'] = 10;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/services/show", $data); 
    }

    public function add(){
        $this->load->view("admin/services/add"); 
    }

    public function add_action(){
        $title=$this->input->post('title');
        $title_eng=$this->input->post('title_eng');
        $small_desc=$this->input->post('small_desc');
        $small_desc_en=$this->input->post('small_desc_en');
        $desc_ar=$this->input->post('desc_ar');
        $desc_en=$this->input->post('desc_en');

        $data['title_eng'] = $title_eng;
        $data['title_ar'] = $title;
        $data['details'] = $desc_en;
        $data['details_ar'] =$desc_ar;
        $data['description_ar'] = $small_desc;
        $data['description_en'] =$small_desc_en;
        $data['creation_date'] =date("Y-m-d");
        
        $this->db->insert('services',$data);
		$id = $this->db->insert_id();
		

		
if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config_course('services','uploads/services/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"400","300",$id);
}

 $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
        redirect(base_url().'admin/services/show','refresh');
    }


    public function delete(){
        $id_services = $this->input->get('id_services');
        $check=$this->input->post('check');

        if($id_services!=""){
            $img = get_this('services',['id' => $id_services],'img');
            if ($img != "") {
            unlink("uploads/services/$img");
            }
         
        $ret_value=$this->data->delete_table_row('services',array('id'=>$id_services)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
            $img = get_this('services',['id' => $check[$i]],'img');
            if ($img != "") {
            unlink("uploads/services/$img");
            }
        $ret_value=$this->data->delete_table_row('services',array('id'=>$check[$i]));    
        }
        }

        $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
        redirect(base_url().'admin/services/show','refresh');
    }

    function active(){
        $id = $this->input->post("id");
        $ser = $this->db->get_where("services",array("id"=>$id,"view" => "1"))->num_rows();
        if ($ser == 1) {
            $this->db->update("services",array("view" => "0"),array("id"=>$id));
            echo "0";
        }
        if ($ser == 0) {
            $this->db->update("services",array("view" => "1"),array("id"=>$id));
            echo "1";
        } 
    }

    public function edit(){
        $id=$this->input->get('id');
        $data['data'] = $this->data->get_table_data('services',array('id'=>$id));
        $this->load->view("admin/services/details",$data); 
    }

    function edit_action(){

 $id=$this->input->post('id');
 $title=$this->input->post('title');
 $title_eng=$this->input->post('title_eng');
 $small_desc=$this->input->post('small_desc');
 $small_desc_en=$this->input->post('small_desc_en');
 $desc_ar=$this->input->post('desc_ar');
 $desc_en=$this->input->post('desc_en');

 $data['title_eng'] = $title_eng;
 $data['title_ar'] = $title;
 $data['details'] = $desc_en;
 $data['details_ar'] =$desc_ar;
 $data['description_ar'] = $small_desc;
 $data['description_en'] =$small_desc_en;
$this->db->update('services',$data,array("id"=>$id));
if($_FILES['file']['name']!=""){
    $file=$_FILES['file']['name'];
    $file_name="file";
    $config=get_img_config_course('services','uploads/services/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"400","300",$id);
    }
$this->session->set_flashdata('msg', 'تم التعديل بنجاح');
redirect(base_url().'admin/services','refresh');
    }

}