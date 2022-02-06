<?php

class M_Jawaban extends CI_Model
{
	public function getjawabandimensi($dimensi) 
	{
		$query = "SELECT jawaban,
		CASE jawaban
		WHEN 'A' THEN Count(jawaban)*1 
		WHEN 'B' THEN COUNT(jawaban)*2 
		WHEN 'C' THEN COUNT(jawaban)*3 
		WHEN 'D' THEN COUNT(jawaban)*4 
		WHEN 'E' THEN COUNT(jawaban)*5 
		END as jumlah
		FROM jawaban,tbkuesioner
		WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
		(tbkuesioner.id_dimensi='$id_dimensi')
		GROUP BY jawaban";

		return $this->db->query($query)->result_array();
	}

	public function getkuisioner()

	{
		$query = "SELECT * FROM tbkuisioner order by id_kuesioner";

		return $this->db->query($query)->result_array();

	}


	public function hapusjawaban($session_id)
	{
		$query = "DELETE FROM jawaban where username='$session_id'";

		return $this->db->query($query)->result_array();
	}

	public function tambahjawaban($session_id)
	{
		$query = "INSERT into jawaban (id_kuesioner,jawaban,username) values ('$nomor','$jawaban','session_id')";

		return $this->db->query($query)->result_array();
	
	}

}