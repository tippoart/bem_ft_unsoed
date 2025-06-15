<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
        $this->load->model("Mkegiatan");
		$data["kegiatan"] = $this->Mkegiatan->tampil();

		$this->load->view('header');
		$this->load->view('kegiatan', $data);
		$this->load->view('footer');
	}
}