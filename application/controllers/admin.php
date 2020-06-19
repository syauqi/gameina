<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $this->load->view('admin/index');
    }

    public function user_data()
    {
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_user->tampil_data()->result();
        $this->load->view('admin/user_data', $data);
    }

    public function add_game()
    {
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        // $data['user'] = $this->m_user->tampil_data()->result();
        $this->load->view('admin/add_game', $data);
    }

    public function add_free_games()
    {
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        // $data['user'] = $this->m_user->tampil_data()->result();
        $this->load->view('admin/add_free_games', $data);
    }

    public function purchase_history()
    {
        $this->load->model('m_purchase');
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_purchase->tampil_data()->result();
        $this->load->view('admin/purchase_history', $data);
    }

    public function publisher_data()
    {
        $this->load->model('m_publisher');
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_publisher->tampil_data()->result();
        $this->load->view('admin/publisher_data', $data);
    }

    public function game_data()
    {
        $this->load->model('m_gamedata');
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_gamedata->tampil_data()->result();
        $this->load->view('admin/game_data', $data);
    }

    public function free_games()
    {
        $this->load->model('m_freegames');
        $data['user'] = $this->db->get_where('admin', ['email_admin' =>
            $this->session->userdata('email')])->row_array();

        $data['user'] = $this->m_freegames->tampil_data()->result();
        $this->load->view('admin/free_games', $data);
    }

    public function user_delete($id)
    {
        $where = array('id' => $id);
        $this->m_user->hapus_data($where, 'user');
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('admin/user_data');
    }

    public function purchase_delete($id_pembayaran)
    {
        $this->load->model('m_purchase');
        $where = array('id_pembayaran' => $id_pembayaran);
        $this->m_purchase->hapus_data($where, 'pembayaran');
        $this->session->set_flashdata('purchase-delete', 'berhasil');
        redirect('admin/purchase_history');
    }

    public function publisher_delete($id_publisher)
    {
        $this->load->model('m_publisher');
        $where = array('id_publisher' => $id_publisher);
        $this->m_publisher->hapus_data($where, 'publisher');
        $this->session->set_flashdata('publisher-delete', 'berhasil');
        redirect('admin/publisher_data');
    }

    public function game_delete($id_game)
    {
        $this->load->model('m_gamedata');
        $where = array('id_game' => $id_game);
        $this->m_gamedata->hapus_data($where, 'game');
        $this->session->set_flashdata('game-delete', 'berhasil');
        redirect('admin/game_data');
    }

    public function free_games_delete($id_game)
    {
        $this->load->model('m_freegames');
        $where = array('id_game' => $id_game);
        $this->m_freegames->hapus_data($where, 'playgames');
        $this->session->set_flashdata('game-delete', 'berhasil');
        redirect('admin/free_games');
    }

    public function user_detail($id)
    {
        $this->load->model('m_user');
        $where = array('id' => $id);
        $detail = $this->m_user->user_detail($id);
        $data['detail'] = $detail;
        $this->load->view('admin/user_detail', $data);
    }

    public function publisher_detail($id_publisher)
    {
        $this->load->model('m_publisher');
        $where = array('id_publisher' => $id_publisher);
        $detail = $this->m_publisher->publisher_detail($id_publisher);
        $data['detail'] = $detail;
        $this->load->view('admin/publisher_detail', $data);
    }

    public function free_games_detail($id_game)
    {
        $this->load->model('m_freegames');
        $where = array('id_game' => $id_game);
        $detail = $this->m_freegames->free_games_detail($id_game);
        $data['detail'] = $detail;
        $this->load->view('admin/free_games_detail', $data);
    }

    public function game_detail($id_game)
    {
        $this->load->model('m_gamedata');
        $where = array('id_game' => $id_game);
        $detail = $this->m_gamedata->game_detail($id_game);
        $data['detail'] = $detail;
        $this->load->view('admin/game_detail', $data);
    }

    public function user_update($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->m_user->user_update($where, 'user')->result();
        $this->load->view('admin/user_update', $data);
    }

    public function user_edit()
    {
        $this->load->model('m_user');
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $gambar = $_FILES['image']['name'];

        $data = array(
            'nama' => $nama,
            'email' => $email,

        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/profile_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['user']['image'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/profile_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('image', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id' => $id,
        );

        $this->m_user->update_data($where, $data, 'user');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/user_data');

    }

    public function publisher_update($id_publisher)
    {
        $this->load->model('m_publisher');
        $where = array('id_publisher' => $id_publisher);
        $data['publisher'] = $this->m_publisher->publisher_update($where, 'publisher')->result();
        $this->load->view('admin/publisher_update', $data);
    }

    public function publisher_edit()
    {
        $this->load->model('m_publisher');
        $id_publisher = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $gambar = $_FILES['image']['name'];

        $data = array(
            'nama_publisher' => $nama,
            'email_publisher' => $email,

        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/profile_picture';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['publisher']['image'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/profile_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('image', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id_publisher' => $id_publisher,
        );

        $this->m_publisher->update_data($where, $data, 'publisher');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/publisher_data');

    }

    public function game_update($id_game)
    {
        $this->load->model('m_gamedata');
        $where = array('id_game' => $id_game);
        $data['game'] = $this->m_gamedata->game_update($where, 'game')->result();
        $this->load->view('admin/game_update', $data);
    }

    public function game_edit()
    {
        $this->load->model('m_gamedata');

        $id_game = $this->input->post('id');
        $nama_game = $this->input->post('nama_game');
        $id_publisher = $this->input->post('id_publisher');
        $nama_publisher = $this->input->post('nama_publisher');
        $deskripsi_produk = $this->input->post('deskripsi_produk');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $gambar = $_FILES['image']['name'];

        $data = array(

            'nama_game' => $nama_game,
            'id_publisher' => $id_publisher,
            'nama_publisher' => $nama_publisher,
            'deskripsi_produk' => $deskripsi_produk,
            'kategori' => $kategori,
            'harga' => $harga,

        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/games_picture';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $gambarLama = $data['game']['gambar_game'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/assets/games_picture/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('gambar_game', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id_game' => $id_game,
        );

        $this->m_gamedata->game_edit($where, $data, 'game');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/game_data');

    }

    public function free_games_update($id_game)
    {
        $this->load->model('m_freegames');
        $where = array('id_game' => $id_game);
        $data['game'] = $this->m_freegames->free_games_update($where, 'playgames')->result();
        $this->load->view('admin/free_games_update', $data);
    }

    public function free_games_edit()
    {
        $this->load->model('m_freegames');
        $id_games = $this->input->post('id_games');
        $nama_games = $this->input->post('nama_games');
        $deskripsi_games = $this->input->post('deskripsi_games');
        $kategori = $this->input->post('kategori');
        $gambar = $_FILES['image']['name'];

        $data = array(
            'nama_game' => $nama_games,
            'deskripsi_game' => $deskripsi_games,
            'kategori' => $kategori,

        );

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './assets/img';

        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('image')) {

            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('gambar_game', $gambarBaru);
        } else {
            echo $this->upload->display_errors();
        }

        $where = array(
            'id_game' => $id_games,
        );

        $this->m_freegames->update_data($where, $data, 'playgames');
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('admin/free_games');

    }
}