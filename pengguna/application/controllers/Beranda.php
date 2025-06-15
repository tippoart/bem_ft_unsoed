<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
        $this->load->model("Mkegiatan");
        $this->load->model("Mmedia");
		$data["kegiatan"] = $this->Mkegiatan->tampil();
		$data["majalah"] = $this->Mmedia->tampil();

		$this->load->view('header');
		$this->load->view('beranda', $data);
		$this->load->view('footer');
	}
}
