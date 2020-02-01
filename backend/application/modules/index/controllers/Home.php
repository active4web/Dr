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
	

    function index() {
	
$data['site_info'] =$this->db->get_where('site_info')->result(); 
$data_conent['clients']=$this->db->order_by("id","desc")->limit(8)->get_where('clients',array("view"=>'1'))->result();
$data_conent['services']=$this->db->order_by("id","desc")->limit(12)->get_where('services',array('view'=>'1'))->result();
$data_conent['site_info'] =$this->db->get_where('site_info')->result(); 
	$this->load->view('include/head',$data );
$this->load->view('include/header',$data );
	$this->load->view('home',$data_conent);
	$this->load->view('include/clients',$data);
	$this->load->view('include/footer',$data);
	$this->load->view('include/js');	  
    }

function test() {	$this->load->view('test');}
}


