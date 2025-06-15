<?php 
/**
 * 
 */
class Mkegiatan extends CI_Model
{
	
	function tampil()
	{
		$q = $this->db->get("kegiatan");
		$d = $q->result_array();
		return $d;
	}
	
	function simpan($inputan) {
        $config['upload_path'] = $this->config->item("assets_kegiatan");
        $config['allowed_types'] = 'gif|jpg|png';
    
        $this->load->library('upload', $config);
    
        if (isset($inputan['foto_kegiatan']) && $inputan['foto_kegiatan'] !== null) {
            $_FILES['foto_kegiatan'] = $inputan['foto_kegiatan'];
    
            if ($this->upload->do_upload('foto_kegiatan')) {
                $inputan['foto_kegiatan'] = $this->upload->data('file_name');
            } else {
                log_message('error', 'Upload error: ' . $this->upload->display_errors());
                return false;
            }
        } else {
            $inputan['foto_kegiatan'] = null;
        }
    
        if ($this->db->insert('kegiatan', $inputan)) {
            log_message('debug', 'Data kegiatan berhasil disimpan: ' . print_r($inputan, true));
            return true;
        } else {
            log_message('error', 'Gagal menyimpan data ke database: ' . $this->db->last_query());
            return false;
        }
    }


    function ubah($inputan) {
        $id_kegiatan = $inputan['id_kegiatan'];
    
        $data = [
            'judul_kegiatan' => $inputan['judul_kegiatan'],
            'deskripsi_kegiatan' => $inputan['deskripsi_kegiatan']
        ];
    
        if (isset($inputan['foto_kegiatan']) && $inputan['foto_kegiatan'] !== null) {
            $config['upload_path'] = $this->config->item("assets_kegiatan");
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
    
            $this->load->library('upload', $config);
            $_FILES['foto_kegiatan'] = $inputan['foto_kegiatan'];
    
            if ($this->upload->do_upload('foto_kegiatan')) {
                $data['foto_kegiatan'] = $this->upload->data('file_name');
            } else {
                log_message('error', 'Upload error: ' . $this->upload->display_errors());
                return false;
            }
        }
    
        $this->db->where('id_kegiatan', $id_kegiatan);
        if ($this->db->update('kegiatan', $data)) {
            log_message('debug', 'Data kegiatan berhasil diubah: ' . print_r($data, true));
            return true;
        } else {
            log_message('error', 'Gagal mengubah data kegiatan: ' . $this->db->last_query());
            return false;
        }
    }
    

    function hapus($id_kegiatan) {
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->delete('kegiatan');
	}
}
 ?>