<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{

    public function datainvoiceout()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/datainvoiceout');
        $this->load->view('templates/footer');
    }
    public function editinvoiceout()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/editinvoiceout');
        $this->load->view('templates/footer');
    }
    public function datainvoicein()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/datainvoicein');
        $this->load->view('templates/footer');
    }
    public function addrow()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/addrow');
        $this->load->view('templates/footer');
    }
    public function editaddrow()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/editaddrow');
        $this->load->view('templates/footer');
    }

    public function invoiceout()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('finance/invoiceout');
        $this->load->view('templates/footer');
    }
}
