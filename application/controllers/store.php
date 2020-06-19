<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends CI_Controller
{
    public function action()
    {
        $this->load->view('store/action');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_games');
    //     $this->load->helper('url');
    // }

    // public function index()
    // {
    //     $data['user'] = $this->m_games->tampil_data()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/index', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function fps()
    // {
    //     $data['user'] = $this->m_games->fps()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/fps', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function balapan()
    // {
    //     $data['user'] = $this->m_games->balapan()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/balapan', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function misteri()
    // {
    //     $data['user'] = $this->m_games->misteri()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/misteri', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function edukasi()
    // {
    //     $data['user'] = $this->m_games->edukasi()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/edukasi', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function olahraga()
    // {
    //     $data['user'] = $this->m_games->olahraga()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/olahraga', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function petualangan()
    // {
    //     $data['user'] = $this->m_games->petualangan()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/petualangan', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function arcade()
    // {
    //     $data['user'] = $this->m_games->arcade()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/arcade', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function aksi()
    // {
    //     $data['user'] = $this->m_games->aksi()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/aksi', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function multiplayer()
    // {
    //     $data['user'] = $this->m_games->multiplayer()->result();
    //     $this->load->view('templates/navgame');
    //     $this->load->view('games/multiplayer', $data);
    //     $this->load->view('templates/footer');
    // }
}
