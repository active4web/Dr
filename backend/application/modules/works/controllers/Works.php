<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author https://www.roytuts.com
 */
class Works extends MX_Controller {

    function __construct() {

		parent::__construct();
        $this->lang->load('main_lang', get_lang() );
        $this->db->order_by('id', 'DESC');
		$this->load->library('session');
		$this->load->library('pagination');
        if( isset($this->session->get_userdata('lang')['lang']) ){
        $lang = $this->session->get_userdata('lang')['lang'];
        }else{
        $lang = 'arabic';
        }
        $dir = ( $lang == 'arabic' )? 'left' : 'right' ;
		define( "LANGU" , $lang );
		$this->load->model('data','','true');
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


    function index() {
        redirect(DIR."works/lisiting");
    }
function lisiting() {
		global $lang;
		if( isset($this->session->get_userdata('lang')['lang']) ){
			$lang = $this->session->get_userdata('lang')['lang'];
			}else{
			$lang = 'arabic';
			}
        $tables = "clients";
        $config['base_url'] = base_url().'works/lisiting/';
        $config['total_rows'] = $this->data->record_count($tables,array('view'=>'1'),'','id','desc');
        $config['per_page'] =32;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['last_link'] = '»»';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_link'] = '««';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
       // $config['suffix'] = '?' . http_build_query($_GET, '', "&");
       // $config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page =0;
        }
        $rs = $this->db->get($tables);
        if($rs->num_rows() == 0):
        $data["results"] = array();
        $data["links"] = array();
        $datahead['site_info'] =$this->db->get_where('site_infos')->result();
        $datahead['site_setting'] =$this->db->get_where('site_settings')->result();
        $data['siteinfo']=$this->db->get_where('site_infos')->result();
        $data['site_setting']=$this->db->get_where('site_settings')->result();
		$datahead['lang'] =$lang;
		$data['lang'] =$lang;
		$data['result_amount'] =$this->db->get_where('clients',array('view'=>'1'))->result();
        else:
        $data["results"] = $this->data->view_all_data($tables, array('view'=>'1'), $config["per_page"], $page,'id','desc');
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links);
		$datahead['site_info'] =$this->db->get_where('site_infos')->result();
        $data['siteinfo']=$this->db->get_where('site_infos')->result();
        $data['site_setting']=$this->db->get_where('site_settings')->result();
        $datahead['site_setting']=$this->db->get_where('site_settings')->result();
		$datahead['lang'] =$lang;
		$data['lang'] =$lang;
		$data['result_amount'] =$this->db->get_where('clients',array('view'=>'1'))->result();
		endif;
$this->load->view('index/include/insidehead',$datahead);
$this->load->view('index/include/lightboxcss',$datahead);
$this->load->view('index/include/innerheader',$datahead);
$this->load->view('works',$data);
$this->load->view('index/include/footer',$datahead);
$this->load->view('index/include/insidejs');
$this->load->view('index/include/lightbox');
    }


}

/* End of file Site.php */
/* Location: ./application/modules/site/controllers/site.php */
