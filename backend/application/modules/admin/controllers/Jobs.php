<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('data','','true');
        $this->load->model('paging','','true');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url','text'));
		$this->load->library('lib_pagination');
		  $this->lang->load('admin', get_lang() );
    }
	
	

    public function index(){
		redirect(base_url().'admin/jobs/job_type','refresh');
    }

    public function job_type(){
		$where = "";
        $pg_config['sql'] = $this->data->get_sql('jobs',$where,'id','DESC');
        $pg_config['per_page'] = 30;
        $data = $this->lib_pagination->create_pagination($pg_config);
		$this->load->view("admin/jobs/job_type", $data); 
	
    }

    
    
	
	public function add(){
        $this->load->view("admin/jobs/add"); 
    }

	public function details(){
		$id=$this->input->get('id');
		$data['services_type']=$this->db->get_where("jobs",array('id'=>$id))->result();
        $this->load->view("admin/jobs/details",$data); 
	}
	
    public function add_action(){
        $title=$this->input->post('title');
		$data['title'] = $title;
	     $this->db->insert('jobs',$data);
$id = $this->db->insert_id();
if($id!=""){
    echo 1;
	}
else {
echo 0;
}

}
public function edit_action(){
	$update_date=date("Y-m-d h:i:s");
	$title=$this->input->post('title');
	$id=$this->input->post('id');
	$data_service['title'] = $title;
	$data['id_service'] =$id;
	 $this->db->update('jobs',$data_service,array('id'=>$id));
echo 1;

}

	




	public function delete(){
        $id_notifications = $this->input->get('id_notifications');
        $check=$this->input->post('check');

        if($id_notifications!=""){
        $ret_value=$this->data->delete_table_row('jobs',array('id'=>$id_notifications)); 
        }
     
        if(isset($check) && $check!=""){  
        $check=$this->input->post('check');
        $length=count($check);
        for($i=0;$i<$length;$i++){
        $ret_value=$this->data->delete_table_row('jobs',array('id'=>$check[$i]));   
        }
        }
		$this->session->set_flashdata('msg', 'تم الحذف بنجاح');
		$this->session->mark_as_flash('msg');
		redirect(base_url().'admin/jobs','refresh');


    }
	
	


	function check_view_countries(){
        $id = $this->input->post("id");
        $ser = $this->db->get_where("jobs",array("id"=>$id,"view" => "1"))->num_rows();
        if ($ser == 1) {
            $this->db->update("jobs",array("view" => "0"),array("id"=>$id));
            echo "0";
        }
        if ($ser == 0) {
            $this->db->update("jobs",array("view" => "1"),array("id"=>$id));
            echo "1";
        } 
    }
    

 public function banner(){
		$data['site_info']= $this->data->get_table_data('site_setting');
		$this->load->view("admin/jobs/banner",$data); 
    }

    
}




