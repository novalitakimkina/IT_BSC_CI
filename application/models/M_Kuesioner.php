<?php
class M_Kuesioner extends CI_Model
{
	public function getkuisioner(){
	$query = "Select * from tbkuesioner order by id_kuesioner";
	return $this->db->query($query)->result_array();
		}
}