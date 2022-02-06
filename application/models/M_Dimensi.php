<?php

class M_Dimensi extends CI_Model
{
	public function getbobotdimensi($dimensi) 
	{
		$query = "SELECT dimensi,bobot FROM tbdimensi WHERE id_dimensi-$dimensi";

		return $this->db->query($query)->result_array();
	}

	public function getdimensi()

	{
		$query = "SELECT * FROM tbdimensi";

		return $this->db->query($query)->result_array();

	}

	public function tambahdimensi($dimensi,$bobot)
	{
		$query = 'INSERT into tbdimensi (dimensi,bobot) values ('$dimensi',$bobot)';

		return $this->db->query($query)->result_array();
	}

	public function hapusdimensi($id)

	{
		$this->db->where("id_dimensi", $id);
		$this->db->delete('tbdimensi');
	}

	public function updatedimensi($id, $data)

	{
		$this->db->where("id_dimensi", $id);
		$this->db->delete('tbdimensi',$data);
	}	

	public function getdimensisingle($id)
	{
		return $this->db->get_where('tbdimensi', array('id_dimensi'=> $id))->result_array();
	}

}