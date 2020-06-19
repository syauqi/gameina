<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publisher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('publisher', ['email_publisher' =>
        $this->session->userdata('email_publisher')])->row_array();

        $this->load->view('publisher/index');
    }

    public function add_game()
    {
        $data['user'] = $this->db->get_where('publisher', ['email_publisher' =>
        $this->session->userdata('email_publisher')])->row_array();

        // $data['user'] = $this->m_user->tampil_data()->result();
        $this->load->view('publisher/add_game', $data);
    }
}
