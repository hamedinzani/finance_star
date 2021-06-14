<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_po');
        if ($this->m_user->isNotLogin()) redirect(site_url('auth/login'));
        $this->load->helper(array('form', 'url'));
    }

    public function data()
    {
        $data['po'] = $this->m_po->tampil_data_po_word()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/data', $data);
        $this->load->view('templates/footer');
    }
    public function dataitem()
    {
        $data['po'] = $this->m_po->tampil_data_po_item()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/dataitem', $data);
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
        $data['kode_po'] = $this->m_po->CreateCode();
        $data['q'] = $this->m_po->ambil_data_q(1, 0)->result();
        $data['position'] = $this->m_user->ambil_data_position()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/itembase', $data);
        $this->load->view('templates/footer', [
            'load' => ['addq.js', 'editq.js']
        ]);
    }
    function add_po_item()
    {
        $no_po = $this->input->post('nopo');
        $resource_name = $this->input->post('rn');
        $mobile_phone = $this->input->post('pm');
        $project_name = $this->input->post('pn');
        $pm_name = $this->input->post('cn');
        $res_email = $this->input->post('ps');
        $date = $this->input->post('tgl');
        $no_quitation = $this->input->post('status');
        $pm_email = $this->input->post('pme');
        $res_status = $this->input->post('rs');
        $public_notes = $this->input->post('public_notes');
        $regards = $this->input->post('regards');
        $footer = $this->input->post('footer');
        $address_resource = $this->input->post('address_resource');
        $grand_total = $this->input->post('grand');
        $jobdesc = $_POST['jobdesc'];
        $volume = $_POST['volume'];
        $unit = $_POST['unit'];
        $price = $_POST['price'];
        $cost = $_POST['cost'];

        $data = array(
            'no_Po' => $no_po,
            'nama_Pm' => $pm_name,
            'email_pm' => $pm_email,
            'resource_Name' => $resource_name,
            'resource_Email' => $res_email,
            'resource_Status' => $res_status,
            'project_Name' => $project_name,
            'mobile_Phone' => $mobile_phone,
            'date' => $date,
            'id_quotation' => $no_quitation,
            'public_Notes' => $public_notes,
            'regards' => $regards,
            'footer' => $footer,
            'address_Resource' => $address_resource,
            'grand_Total' => $grand_total,
        );
        $this->m_po->input_data($data, 'purchase_order');
        if (!empty($jobdesc)) {
            for ($a = 0; $a < count($jobdesc); $a++) {
                if (!empty($jobdesc[$a])) {
                    $data = array(
                        'no_Po' => $no_po,
                        'task' => $jobdesc[$a],
                        'qty' => $volume[$a],
                        'unit' => $unit[$a],
                        'rate' => $price[$a],
                        'amount' => $cost[$a],
                    );
                    $this->m_po->input_data($data, 'po_item_itembase');
                }
            }
        }
        redirect('purchase/dataitem');
    }
    public function tampilkanData($id)
    {
        $data = $this->m_po->ambil_data_qi($id)->result();
        echo json_encode($data);
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

    public function edititembase($id)
    {
        $data['po'] = $this->m_po->edit_data($id, 'purchase_order')->result();
        $data['pi'] = $this->m_po->ambil_data_po_item($id)->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('purchase/edititembase', $data);
        $this->load->view('templates/footer', [
            'load' => ['addq.js']
        ]);
    }
    public function print()
    {


        // $data['qi'] = $this->m_quotation->ambil_data_q($id)->result();
        // $data['quotation'] = $this->m_quotation->getAll($id)->result();
        $this->load->view('purchase/print/poibm');
    }
}
