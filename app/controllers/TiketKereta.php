<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TiketKereta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->load->view("dashboard");
    }
    public function dashboard()
    {
        $this->load->view("dashboard");
    }
    public function jadwalkereta()
    {
        $this->load->view("jadwalkereta");
    }
    public function pemesanantiket()
    {
        $this->load->view("pemesanantiket");
    }
    public function about()
    {
        $this->load->view("about");
    }
}
