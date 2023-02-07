<?php 
	class Usermodel extends CI_model
	{
	  function getUserData()
	  {
	    $this->load->database();
	    $result = $this->db->query("select * from user");
	    // echo "<pre>";
	    return $result->result_array();
	  }
}
?>