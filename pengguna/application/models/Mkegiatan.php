<?php 
class Mkegiatan extends CI_Model
{
    function tampil($id_kegiatan = null)
    {
        if ($id_kegiatan) {
            $this->db->where("id_kegiatan", $id_kegiatan);
        }
        $this->db->order_by("id_kegiatan", "DESC");
        $q = $this->db->get("kegiatan");

        return $id_kegiatan ? $q->row_array() : $q->result_array();
    }

    function get_kegiatan_by_id($id_kegiatan)
    {
        return $this->db->get_where("kegiatan", ["id_kegiatan" => $id_kegiatan])->row_array();
    }
}
?>