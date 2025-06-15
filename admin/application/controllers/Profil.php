<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct() {
		parent::__construct();
	
		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}
	
	function index() {
        $data['username'] = $this->session->userdata('username');
        $data['nama'] = $this->session->userdata('nama');
        $data['email'] = $this->session->userdata('email');

		$this->load->view("header");
		$this->load->view("profil", $data);
		$this->load->view("footer");
	}
}
