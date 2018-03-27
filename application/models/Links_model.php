<?php
class Links_model extends CI_Model{
	public function __construct(){
		//  create a new model that extends from CI_Model and load the database library.
		$this->load->database();
	}

	public function get_links(){
		$query = $this->db->get('enlaces');
		return $query->result_array();
		
	}
	

}

 ?>