<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Mkegiatan');
	
		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}

	function index() {
		$this->load->model("Mkegiatan");
		$data["kegiatan"] = $this->Mkegiatan->tampil();

		$inputan = $this->input->post();
	
		if ($inputan) {
			if (!empty($_FILES['foto_kegiatan']['name'])) {
				$inputan['foto_kegiatan'] = $_FILES['foto_kegiatan'];
			} else {
				$inputan['foto_kegiatan'] = null;
			}
	
			$this->load->model('Mkegiatan');
	
			if ($this->Mkegiatan->simpan($inputan)) {
				$this->session->set_flashdata('success', 'kegiatan berhasil ditambahkan.');
				redirect('kegiatan');
			} else {
				$this->session->set_flashdata('error', 'Gagal menyimpan kegiatan. Pastikan semua input valid dan file berhasil diunggah.');
			}
		}

		$this->load->view("header");
		$this->load->view("kegiatan", $data);
		$this->load->view("footer");
	}

	function ubah() {
		$this->load->model('Mkegiatan');
		$inputan = $this->input->post();
		
		if ($inputan) {
			if (!empty($_FILES['foto_kegiatan']['name'])) {
				$inputan['foto_kegiatan'] = $_FILES['foto_kegiatan'];
			} else {
				$inputan['foto_kegiatan'] = null;
			}
	
			if ($this->Mkegiatan->ubah($inputan)) {
				$this->session->set_flashdata('success', 'kegiatan berhasil diubah.');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengubah kegiatan.');
			}
		}
		
		redirect('kegiatan', 'refresh');
	}

    function hapus($id_kegiatan) {
		echo $id_kegiatan;
		$this->load->model('Mkegiatan');
		$this->Mkegiatan->hapus($id_kegiatan);
		$this->session->set_flashdata('pesan_sukses', 'kegiatan telah terhapus');
		redirect('kegiatan','refresh');
	}
}
