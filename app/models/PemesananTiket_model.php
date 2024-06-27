<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemesananTiket_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function submit_data($data)
    {
        $this->db->insert('pesankereta', $data);
        return $this->db->insert_id();
    }
}
