<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{

    public function data()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/data');
        $this->load->view('templates/footer');
    }
    public function dataitem()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/dataitem');
        $this->load->view('templates/footer');
    }
    public function addword()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/wordbase');
        $this->load->view('templates/footer');
    }
    public function additem()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/itembase');
        $this->load->view('templates/footer');
    }
    public function addrow()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/addrow');
        $this->load->view('templates/footer');
    }
    public function dashboard()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/dashboard');
        $this->load->view('templates/footer');
    }
    public function editwordbase()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/editwordbase');
        $this->load->view('templates/footer');
    }

    public function edititembase()
    {
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/edititembase');
        $this->load->view('templates/footer');
    }
}
