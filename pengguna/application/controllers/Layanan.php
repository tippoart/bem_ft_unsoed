<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{

    public function index()
    {
        // $this->load->model("Mlayanan");
        // $data["layanan"] = $this->Mlayanan->tampil();

        $this->load->view('header');
        $this->load->view('layanan');
        $this->load->view('footer');
    }
}
