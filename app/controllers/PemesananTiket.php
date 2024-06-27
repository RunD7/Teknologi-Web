<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemesananTiket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('PemesananTiket_model');
    }

    public function index()
    {
        $this->load->view('pemesananTiket');
    }

    public function submit()
    {
        log_message('debug', 'Submit method called');

        $this->form_validation->set_rules('id', 'ID', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('stasiun_keberangkatan', 'Stasiun Keberangkatan', 'required');
        $this->form_validation->set_rules('stasiun_tujuan', 'Stasiun Tujuan', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('kereta', 'Kereta', 'required');
        $this->form_validation->set_rules('tanggal_keberangkatan', 'Tanggal Keberangkatan', 'required|callback_valid_date');
        $this->form_validation->set_rules('jam_keberangkatan', 'Jam Keberangkatan', 'required');
        $this->form_validation->set_rules('jam_kedatangan', 'Jam Kedatangan', 'required');
        $this->form_validation->set_rules('jumlah_tiket', 'Jumlah Tiket', 'required|numeric|greater_than[0]');
        $this->form_validation->set_rules('total_harga', 'Total Harga', 'required|numeric|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pemesanan_tiket');
        } else {
            $data = array(
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'stasiun_keberangkatan' => $this->input->post('stasiun_keberangkatan'),
                'stasiun_tujuan' => $this->input->post('stasiun_tujuan'),
                'kelas' => $this->input->post('kelas'),
                'kereta' => $this->input->post('kereta'),
                'tanggal_keberangkatan' => $this->input->post('tanggal_keberangkatan'),
                'jam_keberangkatan' => $this->input->post('jam_keberangkatan'),
                'jam_kedatangan' => $this->input->post('jam_kedatangan'),
                'jumlah_tiket' => $this->input->post('jumlah_tiket'),
                'total_harga' => $this->input->post('total_harga')
            );

            $result = $this->PemesananTiket_model->submit_data($data);
            if ($result) {
                redirect('cetak_tiket/' . $result);
            } else {
                echo "Gagal memproses pesanan.";
            }
        }
    }

    public function valid_date($str)
    {
        if (!strtotime($str)) {
            $this->form_validation->set_message('valid_date', 'Format tanggal keberangkatan tidak valid.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
