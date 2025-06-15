<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailKegiatan extends CI_Controller {

    public function index($id_kegiatan = null)
    {
        $this->load->model("Mkegiatan");

        if (!$id_kegiatan) {
            show_404(); // Jika ID tidak ada, tampilkan halaman 404
        }

        $data["kegiatan"] = $this->Mkegiatan->tampil($id_kegiatan);

        if (!$data["kegiatan"]) {
            show_404(); // Jika data tidak ditemukan di database, tampilkan 404
        }

        $this->load->view('header');
        $this->load->view('detail_kegiatan', $data);
        $this->load->view('footer');
    }
}
