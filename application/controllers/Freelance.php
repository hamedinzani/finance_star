<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Freelance extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_po');
        $this->load->model('m_quotation');
        $this->load->model('m_inv_in');
        if($this->m_user->isNotLogin()) redirect(site_url('auth/login'));
        $this->load->helper(array('form', 'url'));
    }

    public function dashboard()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/dashboard');
        $this->load->view('templates/footer');
    }
    public function invoice()
    {
        $data['kode_inv']= $this->m_inv_in->CreateCode();
        $data['po'] = $this->m_inv_in->ambil_data_po_w(0)->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('freelance/invoice',$data);
        $this->load->view('templates/footer', [
            'load' => ['addq_2.js','add_inv_in.js']
           ]);
    }
    function add_inv_word()
    {
        $no_inv = $this->input->post('noinv');
        $no_po = $this->input->post('status');
        $no_rek = $this->input->post('cn');
        $cabang_bank= $this->input->post('pm');
        $mitra_name = $this->input->post('ps');
        $address = $this->input->post('address');
        $dp = $this->input->post('dp');
        $inv_date= $this->input->post('invoicedate');
        $due_date = $this->input->post('duedate');
        $email = $this->input->post('email');
        $npwp = $this->input->post('ce');
        $public_notes = $this->input->post('public_notes');
        $terms = $this->input->post('regards');
        $footer = $this->input->post('footer');
        $signature = $this->input->post('signature');
        $total_cost = $this->input->post('total');
        $grand_total = $this->input->post('grand');
        $tipe = $this->input->post('tipe');
        $jobdesc = $_POST['jobdesc'];
        $volume = $_POST['volume'];
        $price = $_POST['price'];
        $cost = $_POST['cost'];

        $data = array(
            'no_invoice' => $no_inv,
            'no_Po' => $no_po,
            'no_rekening' => $pm_email,
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
            'tipe' => $tipe,
            'tipe_Po' => $tipe_po,
            'rate' => $rate
			);
		$this->m_po->input_data($data,'purchase_order');
        if(!empty($jobdesc)){
            for($a = 0; $a < count($jobdesc); $a++){
                if(!empty($jobdesc[$a])){
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
        $dat2 = array(
			'is_Q' => 1,
			);
            $where = array(
                'no_Quotation' => $no_quitation,
            );
        $this->m_quotation->update_data($where,$dat2,'quotation');
        redirect('purchase/data');
    }
    public function tampilkanData($id)
    {
        $data = $this->m_inv_in->ambil_data_po_word($id)->result();
        echo json_encode($data);
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
