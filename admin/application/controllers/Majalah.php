<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class majalah extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Mmajalah');
	
		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}

	function index() {
		$this->load->model("Mmajalah");
		$data["majalah"] = $this->Mmajalah->tampil();

		$inputan = $this->input->post();
	
		if ($inputan) {
			if (!empty($_FILES['cover']['name'])) {
				$inputan['cover'] = $_FILES['cover'];
			} else {
				$inputan['cover'] = null;
			}
	
			$this->load->model('Mmajalah');
	
			if ($this->Mmajalah->simpan($inputan)) {
				$this->session->set_flashdata('success', 'majalah berhasil ditambahkan.');
				redirect('majalah');
			} else {
				$this->session->set_flashdata('error', 'Gagal menyimpan majalah. Pastikan semua input valid dan file berhasil diunggah.');
			}
		}

		$this->load->view("header");
		$this->load->view("majalah", $data);
		$this->load->view("footer");
	}

	function ubah() {
		$this->load->model('Mmajalah');
		$inputan = $this->input->post();
	
		if ($inputan) {
			if (!empty($_FILES['cover']['name'])) {
				$inputan['cover'] = $_FILES['cover'];
			} else {
				$inputan['cover'] = null;
			}
	
			if ($this->Mmajalah->ubah($inputan)) {
				$this->session->set_flashdata('success', 'Majalah berhasil diubah.');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengubah majalah.');
			}
		}
	
		redirect('majalah', 'refresh');
	}
	

    function hapus($id_majalah) {
		echo $id_majalah;
		$this->load->model('Mmajalah');
		$this->Mmajalah->hapus($id_majalah);
		$this->session->set_flashdata('pesan_sukses', 'majalah telah terhapus');
		redirect('majalah','refresh');
	}
}
