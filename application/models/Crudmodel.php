<?php

if( ! defined("BASEPATH")) exit("No direct script access allow"); 

class Crudmodel extends CI_Model{

	public function savedate($data){
		$this->db->insert('crud_table', $data);
	}
	
	public function select_all(){
		$query = $this->db->query("select * from crud_table");
		return $query->result();
	}
	
	public function displayrecordsById($id){
		$query = $this->db->query("select * from crud_table where id=$id");
		return $query->result();
	}
	
	public function update_records($data){
		$this->db->update('crud_table', $data);
	}
	
}

?>