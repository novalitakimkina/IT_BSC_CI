<?php
class M_Pertanyaan extends CI_Model
{
	public function getpertanyaan(){
	$query = "Select * from tbkuesioner";
	return $this->db->query($query)->result_array();
		}

	public function tambahpertanyaan ($pertanyaan,id_dimensi,variabel,$pila,$pilb,$pilc,$pild)
	{

	$query = "INSERT INTO tbkuesioner (pertanyaan,id_dimensi,variabel,pila,pilb,pilc,pild,pile) values ('pertanyaan',$iddimensi,'$variabel','$pila','$pilb','$pilc','$pild','$pile')";
	return $this->db->query($query);	
	}

	public function hapuspertanyaan($id)

	{
		$this->db->where("id_kuesioner", $id);
		$this->db->delete('tbkuesioner');
	}

	public function updatepertanyaan($id, $data)

	{
		$this->db->where("id_kuesioner", $id);
		$this->db->delete('tbkuesioner',$data);
	}	

	public function getpertanyaansingle($id)
	{
		return $this->db->get_where('tbkuesioner', array('id_kuesioner'=> $id))->result_array();
	}

}