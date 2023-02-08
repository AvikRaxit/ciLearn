<?php 
	class Usermodel extends CI_model
	{
	  function getUserData()
	  {
	    // $this->load->database(); // auto load to the autoload.php
		// $this->db->select('role'); // active record select query
		// $this->db->where('role', 'ROLE_USER'); // active record where clause query
	    //$result = $this->db->get("user");	// active record select all query

		// $result = $this->db->where('role', 'ROLE_USER') 
		// 				->get('user'); // Eloquent type 
		$result = $this->db->get('user');

	    // echo "<pre>";
		// print_r($result);
	    return $result->result_array();
	  }
}
?>