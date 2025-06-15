<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabinet extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('profilkabinet');
		$this->load->view('footer');
	}
}
