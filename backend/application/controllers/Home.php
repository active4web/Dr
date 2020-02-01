<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Home extends MX_Controller {
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

    public function lang_site( $lang = null )
    {
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
		echo  $this->session->get_userdata($newdata);
		//echo $_GET['link'];
 redirect($_GET['link']);
    }


    function index() {

$data['site_info'] =$this->db->get_where('site_infos')->result();
$data['home_page'] =$this->db->get_where('home_pages')->result();
$data_conent['clients']=$this->db->order_by("id","desc")->limit(8)->get_where('clients',array("view"=>'1'))->result();
$data_conent['services']=$this->db->order_by("id","desc")->limit(8)->get_where('services',array('view'=>'1'))->result();
$data_conent['events']=$this->db->order_by("id","desc")->limit(8)->get_where('events',array('view'=>'1'))->result();
$data_conent['sliders']=$this->db->order_by("id","desc")->limit(8)->get_where('sliders',array('view'=>'1'))->result();

$data_conent['site_info'] =$this->db->get_where('site_infos')->result();
$data_conent['home_page'] =$this->db->get_where('home_pages')->result();
$data_conent['site_setting'] =$this->db->get_where('site_settings')->result();
	$this->load->view('index/include/head',$data );
$this->load->view('index/include/header',$data );
	$this->load->view('home',$data_conent);
	$this->load->view('index/include/footer',$data);
    $this->load->view('index/include/js');
    $this->load->view('index/include/toastr');
    }

function test() {	$this->load->view('test');}
}


