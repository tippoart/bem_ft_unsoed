<?php 
class Msaran extends CI_Model
{
	
	function tampil()
	{
		$q = $this->db->get("saran");
		$d = $q->result_array();
		return $d;
	}

    function hapus($id_saran) {
		$this->db->where('id_saran', $id_saran);
		$this->db->delete('saran');
	}
}
 ?>