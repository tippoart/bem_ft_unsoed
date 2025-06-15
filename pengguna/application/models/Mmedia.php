<?php 

class Mmedia extends CI_Model
{
    function tampil($id_majalah = null)
    {
        if ($id_majalah) {
            $this->db->where("id_majalah", $id_majalah);
        }
        $q = $this->db->get("majalah");

        return $id_majalah ? $q->row_array() : $q->result_array();
    }

    function get_majalah_by_id($id_majalah)
    {
        return $this->db->get_where("majalah", ["id_majalah" => $id_majalah])->row_array();
    }
}

 ?>