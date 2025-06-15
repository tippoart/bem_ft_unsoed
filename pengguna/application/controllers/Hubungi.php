<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mhubungi');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('hubungi');
        $this->load->view('footer');
    }

    public function kirim()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email        = $this->input->post('email');
        $subjek       = $this->input->post('subjek');
        $pesan        = $this->input->post('pesan');

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('subjek', 'Subjek', 'required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('hubungi');
            $this->load->view('footer');
        } else {
            $data = [
                'nama_lengkap' => $nama_lengkap,
                'email'        => $email,
                'subjek'       => $subjek,
                'pesan'        => $pesan
            ];

            $this->Mhubungi->simpan_saran($data);

            $this->session->set_flashdata('success', 'Pesan Anda berhasil dikirim.');
            redirect('hubungi');
        }
    }
}
