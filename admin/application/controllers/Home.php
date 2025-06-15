<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
	
		if (!$this->session->userdata("id_admin")) {
			redirect('/','refresh');
		}
	}
	
	function index() {
		$this->load->view("header");
		$this->load->view("beranda");
		$this->load->view("footer");
	}
}
