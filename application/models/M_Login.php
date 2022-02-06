<?php
class M_Login extends CI_Model
{
	public function getkuisioner(){
	$query = "Select * from tbpengguna where username ='".$username."' AND password='".$password."'";
	return $this->db->query($query)->result_array();
		}
}