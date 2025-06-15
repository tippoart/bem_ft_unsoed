<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('Msaran');
	
		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}

	function index() {
		$this->load->model("Msaran");
		$data["saran"] = $this->Msaran->tampil();

		$this->load->view("header");
		$this->load->view("saran", $data);
		$this->load->view("footer");
	}

    function hapus($id_saran) {
		echo $id_saran;
		$this->load->model('Msaran');
		$this->Msaran->hapus($id_saran);
		$this->session->set_flashdata('pesan_sukses', 'saran telah terhapus');
		redirect('saran','refresh');
	}
}
