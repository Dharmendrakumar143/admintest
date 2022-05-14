<?php
defined("BASEPATH") or exit("No direct script access allow");

class Crudcontroller extends CI_Controller{

	public function index(){
		$this->load->database();
		$this->load->model('Crudmodel');
		$this->load->view('insert');
		$this->load->helper("url");
	
	//$data['result'] = $this->Crudmodel->savedate();
	 
	//$this->load->view("insert",$data); 	
	
	if(isset($_POST['save']))
		{
			$fname=$_REQUEST['first_name'];
			$lname=$_REQUEST['last_name'];
			$father_name=$_REQUEST['father_name'];
			$data = array(
			"first_name"=>$fname,
			"last_name"=>$lname,
			"father_name"=>$father_name
			);			
			$this->Crudmodel->savedate($data);
		
		}
	}
	
	
	public function select(){
		$this->load->database();
		$this->load->model('Crudmodel');
		$this->load->helper("url");
		$data['result']=$this->Crudmodel->select_all();	
		$this->load->view('select',$data);
	}
	
	public function update(){
		
		$this->load->database();
		$this->load->model('Crudmodel');
		$this->load->helper("url");
		
		
		$id=$this->input->get('id');
		$result['data']=$this->Crudmodel->displayrecordsById($id);
		
		$this->load->view('update_record',$result);
	
		/* if($this->input->post('update'))
		{
		{
			$fname=$_REQUEST['first_name'];
			$lname=$_REQUEST['last_name'];
			$father_name=$_REQUEST['father_name'];
			$data = array(
			"first_name"=>$fname,
			"last_name"=>$lname,
			"father_name"=>$father_name
			);			
			//$this->Crudmodel->savedate($data);		
		$this->Crudmodel->update_records($data);
		//echo "Date updated successfully !”;
		} */
 
	
	}
	
	
	
}

?>