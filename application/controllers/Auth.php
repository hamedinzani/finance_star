<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_user");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if($this->input->post()){
            $this->m_user->doLogin();
        } else {redirect(site_url('auth/login'));}

    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('auth/login'));
    }
    
    public function login()
    {
        $this->load->view('templates/auth_header.php');
        $this->load->view('auth/login.php');
        $this->load->view('templates/auth_footer.php');
    }
}
