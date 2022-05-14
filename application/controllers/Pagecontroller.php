<?php
defined('BASEPATH') or exit('No direct script access allow');

class Pagecontroller Extends CI_Controller{
	
	public function index(){
	
		
		$this->load->model('Page_model');
	
		$data['result']=$this->Page_model->getpage();
		
		$this->load->helper('url');
		
		$this->load->view('home',$data);
	}


	public function about(){
		
		$this->load->model('Page_model');
		
		$data['content']=$this->Page_model->getpagetemplate();
		
		$this->load->helper('url');
		
		$this->load->view('aboutus_view',$data);
	}	

}

?>