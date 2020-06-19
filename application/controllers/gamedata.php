<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gamedata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function add_game()
    {
        $gambar = $_FILES['image']['name'];
        $data = [
            'id_game' => htmlspecialchars($this->input->post('id_game', true)),
            'nama_game' => htmlspecialchars($this->input->post('nama_game', true)),
            'id_publisher' => htmlspecialchars($this->input->post('id_publisher', true)),
            'nama_publisher' => htmlspecialchars($this->input->post('nama_publisher', true)),
            'deskripsi_produk' => htmlspecialchars($this->input->post('deskripsi_produk', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),

        ];

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/games_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['game']['gambar_game'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/game_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('gambar_game', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $this->db->insert('game', $data);

        $this->session->set_flashdata('success-reg', 'Berhasil!');
        redirect(base_url('admin/game_data'));
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/games_picture';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 4096; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    public function add_free_games()
    {
        $upload_image = $_FILES['image']['name'];
        $upload_html = $_FILES['link_game']['name'];
        $data = [
            'id_game' => htmlspecialchars($this->input->post('id_game', true)),
            'nama_game' => htmlspecialchars($this->input->post('nama_game', true)),
            'deskripsi_game' => htmlspecialchars($this->input->post('deskripsi_game', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),

        ];

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/img';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {

            $gambar = $this->upload->data('file_name');
            $this->db->set('gambar_game', $gambar);
        } else {
            echo $this->upload->display_errors();
        }

        $config2['allowed_types'] = 'html';
        $config2['max_size'] = '4096';
        $config2['upload_path'] = './assets/games';

        $this->load->library('upload', $config2);
        //berhasil
        if ($this->upload->do_upload('link_game')) {

            $link = $this->upload->data('file_name');
            $this->db->set('link_game', $link);
        } else {
            echo $this->upload->display_errors();
        }

        $this->db->insert('playgames', $data);

        $this->session->set_flashdata('success-add', 'Berhasil!');
        redirect(base_url('admin/free_games'));
    }

    public function add_game_publisher()
    {
        $gambar = $_FILES['image']['name'];
        $data = [
            'id_game' => htmlspecialchars($this->input->post('id_game', true)),
            'nama_game' => htmlspecialchars($this->input->post('nama_game', true)),
            'id_publisher' => htmlspecialchars($this->input->post('id_publisher', true)),
            'nama_publisher' => htmlspecialchars($this->input->post('nama_publisher', true)),
            'deskripsi_produk' => htmlspecialchars($this->input->post('deskripsi_produk', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),

        ];

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/games_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['game']['gambar_game'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/game_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('gambar_game', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $this->db->insert('game', $data);

        $this->session->set_flashdata('success-reg', 'Berhasil!');
        redirect(base_url('publisher/index'));
    }
}
