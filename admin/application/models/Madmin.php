<?php 
class Madmin extends CI_Model
{
    
    function login($inputan)
    {
        $username = $inputan['username'];
        $password = $inputan['password'];
        $password = sha1($password);

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array();

        if (!empty($cekadmin)) {
            $this->session->set_userdata("id_admin", $cekadmin["id_admin"]);
            $this->session->set_userdata("username", $cekadmin["username"]);
            $this->session->set_userdata("nama", $cekadmin["nama"]);
            $this->session->set_userdata("email", $cekadmin["email"]);
            return "ada";
        } else {
            return "gak ada";
        }
    }

    function ubah($inputan, $id_admin) {
        if (!empty($inputan["password"])) {
            $inputan['password'] = sha1($inputan['password']);
        } else {
            unset($inputan['password']);
        }

        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $inputan);

        //dapatkan data yang baru
        $this->db->where('id_admin', $id_admin);
        $q = $this->db->get('admin');
        $cekadmin = $q->row_array();

        //buat tiket baru
        $this->session->set_userdata("id_admin", $cekadmin["id_admin"]);
        $this->session->set_userdata("username", $cekadmin["username"]);
        $this->session->set_userdata("nama", $cekadmin["nama"]);
    }
}
 ?>