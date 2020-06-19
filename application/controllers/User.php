<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/index');
    }

    public function action()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('store/action');
    }

    public function dreadout()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('store/dreadout');
    }

    public function bayar()
    {
        $jumlah = 100.000;

        $data = [
            'id' => '70',
            'id_game' => 10,
            'jumlah_pembayaran' => '100.000',
            'nama_user' => 'Syauqi Zaidan Khairan Khalaf',

        ];

        $inacash = '200.000';
        $email = 'zaidanline67.com';
        $bayar = 100.000;

        $this->db->set('inacash', $bayar);
        $this->db->where('email', $email);
        $this->db->update('user');

        $this->db->insert('pembayaran', $data);
        $this->session->set_flashdata('success-reg', 'Berhasil!');
        redirect(base_url('user/done'));
    }

    public function done()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('user/done');
    }
}