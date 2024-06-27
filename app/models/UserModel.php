<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_user_by_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query->row_array();
    }
    public function daftar($data)
    {
        return $this->db->insert('user', $data);
    }
}
