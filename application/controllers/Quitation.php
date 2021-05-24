<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quitation extends CI_Controller
{

    public function data()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('quitation/data');
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('quitation/add');
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('quitation/edit');
        $this->load->view('templates/footer');
    }
    public function addrow()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('quitation/addrow');
        $this->load->view('templates/footer');
    }
}
