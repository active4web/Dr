<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class About extends MX_Controller {
  function __construct() {

		parent::__construct();
        $this->load->library('session');
		$this->load->model('data','','true');
		@date_default_timezone_set('Asia/Riyadh');
		$this->lang->load('main_lang', get_lang() );
        $this->db->order_by('id', 'DESC');

        if( isset($this->session->get_userdata('lang')['lang']) ){
        $lang = $this->session->get_userdata('lang')['lang'];
        }else{
        $lang = 'arabic';
        }
        $dir = ( $lang == 'arabic' )? 'left' : 'right' ;
		define( "LANGU" , $lang );
    }


    public function lang_site( $lang = null ){
        $main_curt =$_SESSION['main_curt'];
        $controller_curt =$_SESSION['controller_curt'];
    $curt_sub =$_SESSION['curt'];
    $curt_id =$_SESSION['curt_id'];


            if( $lang == 'ar' ){
                $newdata = array(
                'lang'  => 'arabic'
                );
                $this->session->set_userdata($newdata);
            }else{
                $newdata = array(
                'lang'  => 'english'
                );
                $this->session->set_userdata($newdata);
            }
    //echo  $curt_sub;
    if($curt_sub!=""){
    redirect(DIR.$main_curt."/".$controller_curt."/".$curt_sub);
    }
    else {
    redirect(DIR.$main_curt."/".$controller_curt);
    }
        }



    public function index(){
      $data['site_info'] =$this->db->get_where('site_infos')->result();
      $data['site_setting'] =$this->db->get_where('site_settings')->result();


$this->load->view("index/include/insidehead",$data );
$this->load->view("index/include/innerheader",$data );
$this->load->view('about',$data);
$this->load->view('index/include/footer',$data);
$this->load->view('index/include/insidejs');
}









}


