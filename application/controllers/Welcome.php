<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Harap isi bidang email!',
            'valid_email' => 'Email tidak valid!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Harap isi bidang password!',
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/nav');
            $this->load->view('index');
            $this->load->view('templates/footer');
        } else {
            //validasi sukses
            $this->login();
        }
    }

    public function admin()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Harap isi bidang email!',
            'valid_email' => 'Email tidak valid!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Harap isi bidang password!',
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('admin/login');
        } else {
            //validasi sukses
            $this->adminlogin();
        }
    }

    public function publisher()
    {
        $this->form_validation->set_rules('email2', 'Email', 'trim|required|valid_email', [
            'required' => 'Harap isi bidang email!',
            'valid_email' => 'Email tidak valid!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|required', [
            'required' => 'Harap isi bidang password!',
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('publisher/login');
        } else {
            //validasi sukses
            $this->publisherlogin();
        }
    }

    private function publisherlogin()
    {
        $email = $this->input->post('email2');
        $password = $this->input->post('password2');

        $user = $this->db->get_where('publisher', ['email_publisher' => $email])->row_array();

        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [

                    'email' => $user['email_publisher'],
                    'nama' => $user['nama_publisher'],

                ];
                $this->session->set_userdata($data);
                redirect(base_url('publisher/index'));
            } else {

                $this->session->set_flashdata('fail-pass', 'Gagal!');
                redirect(base_url('welcome/publisher'));
            }
        } else {

            $this->session->set_flashdata('fail-login', 'Gagal!');
            redirect(base_url('welcome/publisher'));
        }
    }

    private function adminlogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email_admin' => $email])->row_array();

        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [

                    'email' => $user['email_admin'],
                    'nama' => $user['nama_admin'],

                ];
                $this->session->set_userdata($data);
                redirect(base_url('admin'));
            } else {

                $this->session->set_flashdata('fail-pass', 'Gagal!');
                redirect(base_url('welcome/admin'));
            }
        } else {

            $this->session->set_flashdata('fail-login', 'Gagal!');
            redirect(base_url('welcome/admin'));
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //user ada
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                    ];

                    $this->session->set_userdata($data);
                    redirect(base_url('user'));
                } else {
                    $this->session->set_flashdata('fail-pass', 'Gagal!');
                    redirect(base_url('welcome'));
                }
            } else {
                $this->session->set_flashdata('fail-email', 'Gagal!');
                redirect(base_url('welcome'));
            }
        } else {
            $this->session->set_flashdata('fail-login', 'Gagal!');
            redirect(base_url('welcome'));
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[5]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Username terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[retype_password]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('retype_password', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time(),
                'inacash' => 0,
            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time(),
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);


            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome'));
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => '',
            'smtp_pass' => '',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->email->initialize($config);

        $data = array(
            'name' => 'syauqi',
            'link' => ' ' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '"',
        );

        $this->email->from('gameinadeveloper@gmail.com', 'GameINA');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $link =
                $this->email->subject('Verifikasi Akun');
            // $this->email->message('Click untuk verifikasi :
            // <a href="' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '">activate</a>');
            $body = $this->load->view('templates/email-template.php', $data, true);
            $this->email->message($body);
        } else {
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    private function _sendEmailPublisher($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'gameinadeveloper@gmail.com',
            'smtp_pass' => '123syauqy123',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->email->initialize($config);

        $data = array(
            'link' => ' ' . base_url() . 'welcome/verifypub?email_publisher=' . $this->input->post('email_publisher') . '& token' . urlencode($token) . '"',
        );

        $this->email->from('gameinadeveloper@gmail.com', 'GameINA');
        $this->email->to($this->input->post('email_publisher'));

        if ($type == 'verifypub') {
            $link =
                $this->email->subject('Verifikasi Akun');
            // $this->email->message('Click untuk verifikasi :
            // <a href="' . base_url() . 'welcome/verify?email=' . $this->input->post('email') . '& token' . urlencode($token) . '">activate</a>');
            $body = $this->load->view('templates/email-template.php', $data, true);
            $this->email->message($body);
        } else {
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die();
        }
    }

    public function publisheregist()
    {
        $this->form_validation->set_rules('nama_publisher', 'Nama', 'required|trim|min_length[5]', [
            'required' => 'Harap isi kolom username.',
            'min_length' => 'Username terlalu pendek.',
        ]);
        $this->form_validation->set_rules('nama_perusahaan', 'Perusahaan', 'required|trim|min_length[4]', [
            'required' => 'Harap isi kolom Perusahaan.',
            'min_length' => 'Nama terlalu pendek.',
        ]);
        $this->form_validation->set_rules('email_publisher', 'Email', 'required|trim|valid_email|is_unique[publisher.email_publisher]', [
            'is_unique' => 'Email ini telah digunakan!',
            'required' => 'Harap isi kolom email.',
            'valid_email' => 'Masukan email yang valid.',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[rpassword]', [
            'required' => 'Harap isi kolom Password.',
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek',
        ]);
        $this->form_validation->set_rules('rpassword', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('publisher/login');
        } else {
            $email = $this->input->post('email_publisher', true);
            $data = [
                'nama_publisher' => htmlspecialchars($this->input->post('nama_publisher', true)),
                'nama_perusahaan' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
                'email_publisher' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time(),

            ];

            //siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time(),
            ];

            $this->db->insert('publisher', $data);
            $this->db->insert('user_token', $user_token);


            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('welcome/publisher'));
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token => $token'])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('success-verify', 'Bserhasil!');
                    redirect(base_url('welcome'));
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('fail-token-expired', 'gagal');
                    redirect(base_url('welcome'));
                }
            } else {
                $this->session->set_flashdata('fail-token', 'gagal');
                redirect(base_url('welcome'));
            }
        } else {
            $this->session->set_flashdata('fail-verify', 'gagal');
            redirect(base_url('welcome'));
        }
    }

    public function verifypub()
    {
        $email = $this->input->get('email_publisher');
        $token = $this->input->get('token');

        $user = $this->db->get_where('publisher', ['email_publisher' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token => $token'])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email_publisher', $email);
                    $this->db->update('publisher');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('success-verify', 'Berhasil!');
                    redirect(base_url('welcome/publisher'));
                } else {
                    $this->db->delete('publisher', ['email_publisher' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('fail-token-expired', 'gagal');
                    redirect(base_url('welcome'));
                }
            } else {
                $this->session->set_flashdata('fail-token', 'gagal');
                redirect(base_url('welcome'));
            }
        } else {
            $this->session->set_flashdata('fail-verify', 'gagal');
            redirect(base_url('welcome'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('success-logout', 'Berhasil!');
        redirect(base_url('welcome'));
    }

    public function email()
    {
        $this->load->view('templates/email-template');
    }
}
