<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends MX_Controller
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
		$this->load->view("admin/works/banner",$data); 
    }
    
    public function about_banner(){
    
        if($_FILES['file']['name']!=""){
        $file=$_FILES['file']['name'];
        $file_name="file";
        $config=get_img_config('site_setting','uploads/site_setting/',$file,$file_name,'works_banner','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>1),"1920","620");
        }
                
        $this->session->set_flashdata('msg', 'تم التعديل بنجاحٍ');
        $this->session->mark_as_flash('msg');
        redirect('/admin/works/banner');	
        
        }

    public function index(){
        redirect(base_url().'admin/works/show','refresh');
    }

    public function show(){
        $pg_config['sql'] = $this->data->get_sql('works','','id','DESC');
        $pg_config['per_page'] = 10;
        $data = $this->lib_pagination->create_pagination($pg_config);
        $this->load->view("admin/works/show", $data); 
    }

    public function add(){
        $this->load->view("admin/works/add"); 
    }

    public function add_action(){
        $name_project=$this->input->post('name_project');
        $title_eng=$this->input->post('title_eng');
        $desc_ar=$this->input->post('desc_ar');
        $desc_en=$this->input->post('desc_en');

        $data['title'] = $name_project;
        $data['title_en'] = $title_eng;
        $data['details'] = $desc_ar;
        $data['details_en'] = $desc_en;
        $data['creation_date'] = date("Y-m-d");

        $this->db->insert('works',$data);
		$id = $this->db->insert_id();
		

		
if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
//$config=get_img_config('products','uploads/business/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"440","350");
$config=get_img_config_course('works','uploads/works/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"450","300",$id);
}
		
        $this->session->set_flashdata('msg', 'تمت الإضافة بنجاح');
        redirect(base_url().'admin/works/show','refresh');
    }
	
	public function json($status,$msg=[]){
		$data['status'] = $status;
		$data['msg'] = $msg;
		echo json_encode($data);
	}
	


    public function delete(){
        $id_products = $this->input->get('id_products');
        $check=$this->input->post('check');
if($id_products!=""){
$img = get_this('works',['id' => $id_products],'img');
if ($img != "") {
unlink("uploads/works/$img");
}   
$ret_value=$this->data->delete_table_row('works',array('id'=>$id_products)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
            $img = get_this('works',['id' => $check[$i]],'img');
            if ($img != "") {
            unlink("uploads/works/$img");
            }               
        $ret_value=$this->data->delete_table_row('works',array('id'=>$check[$i]));    
        }
        }

        $this->session->set_flashdata('msg', 'تم الحذف بنجاح');
        redirect(base_url().'admin/works/show','refresh');
    }

    function active(){
        $id = $this->input->post("id");
        $ser = $this->db->get_where("works",array("id"=>$id,"view" => "1"))->num_rows();
        if ($ser == 1) {
            $this->db->update("works",array("view" => "0"),array("id"=>$id));
            echo "0";
        }
        if ($ser == 0) {
            $this->db->update("works",array("view" => "1"),array("id"=>$id));
            echo "1";
        } 
    }

    public function edit(){
        $id=$this->input->get('id');
        $data['data'] = $this->data->get_table_data('works',array('id'=>$id));
        $this->load->view("admin/works/edit",$data); 
    }

    function edit_action(){
 $name_project=$this->input->post('name_title');
$desc_ar=$this->input->post('contents');
$title_eng=$this->input->post('title_eng');
$details_en=$this->input->post('details_en');

 $id=$this->input->post('id');
$data['title'] = $name_project;
$data['title_en'] = $title_eng;
$data['details'] = $desc_ar;
$data['details_en'] = $details_en;
$this->db->update('works',$data,array("id"=>$id));


if($_FILES['file']['name']!=""){
$file=$_FILES['file']['name'];
$file_name="file";
$config=get_img_config_course('works','uploads/works/',$file,$file_name,'img','gif|jpg|png|jpeg',600000,600000,600000,array('id'=>$id),"450","300",$id);
}
$this->session->set_flashdata('msg', 'تم التعديل بنجاح');
redirect(base_url().'admin/works/show','refresh');
    }

}