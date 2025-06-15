<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{

    public function index()
    {
        $this->load->model("Mmedia");
        $data["majalah"] = $this->Mmedia->tampil();

        $this->load->view('header');
        $this->load->view('media', $data);
        $this->load->view('footer');
    }

    function KajianTeknik()
    {
        $this->load->view('header');
        $this->load->view('kajianteknik');
        $this->load->view('footer');
    }
}
