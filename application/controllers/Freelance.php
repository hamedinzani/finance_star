<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Freelance extends CI_Controller
{

    public function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/dashboard');
        $this->load->view('templates/footer');
    }
    public function invoice()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/invoice');
        $this->load->view('templates/footer');
    }
    public function editinvoice()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/editinvoice');
        $this->load->view('templates/footer');
    }
    public function editaddrow()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/editaddrow');
        $this->load->view('templates/footer');
    }
    public function addrow()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/addrow');
        $this->load->view('templates/footer');
    }
}
