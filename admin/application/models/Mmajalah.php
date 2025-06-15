<?php 
/**
 * 
 */
class Mmajalah extends CI_Model
{
	
	function tampil()
	{
		$q = $this->db->get("majalah");
		$d = $q->result_array();
		return $d;
	}
	
	function simpan($inputan) {
        $config['upload_path'] = $this->config->item("assets_majalah");
        $config['allowed_types'] = 'gif|jpg|png';
    
        $this->load->library('upload', $config);
    
        if (isset($_FILES['cover']) && $_FILES['cover']['name'] !== '') {
            if ($this->upload->do_upload('cover')) {
                $inputan['cover'] = $this->upload->data('file_name');
            } else {
                log_message('error', 'Upload error: ' . $this->upload->display_errors());
                return false;
            }
        } else {
            $inputan['cover'] = null;
        }
    
        log_message('debug', 'Data yang akan disimpan: ' . print_r($inputan, true));
    
        if ($this->db->insert('majalah', $inputan)) {
            log_message('debug', 'Data majalah berhasil disimpan.');
            return true;
        } else {
            log_message('error', 'Gagal menyimpan data ke database: ' . $this->db->last_query());
            return false;
        }
    }

    function ubah($inputan) {
        $id_majalah = $inputan['id_majalah'];
    
        $this->db->where('id_majalah', $id_majalah);
        $majalah_lama = $this->db->get('majalah')->row_array();
    
        $data = [
            'judul_majalah' => !empty($inputan['judul_majalah']) ? $inputan['judul_majalah'] : $majalah_lama['judul_majalah'],
            'link' => !empty($inputan['link']) ? $inputan['link'] : $majalah_lama['link']
        ];
    
        if (isset($inputan['cover']) && $inputan['cover'] !== null) {
            $config['upload_path'] = $this->config->item("assets_majalah");
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
    
            $this->load->library('upload', $config);
            $_FILES['cover'] = $inputan['cover'];
    
            if ($this->upload->do_upload('cover')) {
                $data['cover'] = $this->upload->data('file_name');
            } else {
                log_message('error', 'Upload error: ' . $this->upload->display_errors());
                return false;
            }
        }
    
        $this->db->where('id_majalah', $id_majalah);
        return $this->db->update('majalah', $data);
    }
    
    
    

    function hapus($id_majalah) {
		$this->db->where('id_majalah', $id_majalah);
		$this->db->delete('majalah');
	}
}
 ?>