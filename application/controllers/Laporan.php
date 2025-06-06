<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
    }

    // Tampilkan form laporan
    public function index() {
        $this->load->view('laporan/laporan_form');
    }

    // Proses hasil laporan
    public function hasil() {
        $dari = $this->input->post('tanggal_dari');
        $sampai = $this->input->post('tanggal_sampai');

        $data['laporan'] = $this->Pasien_model->get_laporan_pasien($dari, $sampai);
        $data['dari'] = $dari;
        $data['sampai'] = $sampai;

        $this->load->view('laporan/laporan_hasil', $data);
    }
}