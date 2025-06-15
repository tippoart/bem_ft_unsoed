<?php 

class Mhubungi extends CI_Model
{
    public function simpan_saran($data)
    {
        return $this->db->insert('saran', $data);
    }
}
?>