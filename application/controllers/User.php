<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
        $this->load->helper(array('form', 'url'));
	}

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }
    public function list()
    {
        $data['user'] = $this->m_user->tampil_data_user()->result();
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('user/data', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['position'] = $this->m_user->ambil_data_position()->result();
        $data['status'] = $this->m_user->ambil_data_status()->result();
        $data['kode_user']= $this->m_user->CreateCode();
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('user/add', $data);
        $this->load->view('templates/footer');
    }
    function add_user(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $fullname = $this->input->post('fullname');
        $email_address = $this->input->post('email_address');
        $id_position = $this->input->post('position');
        $id_status = $this->input->post('status');
        $photo = $this->_uploadImage($id);
 
		$data = array(
			'id_User' => $id,
			'user_Name' => $username,
			'pass_Word' => $password,
            'full_Name' => $fullname,
            'email_Address' => $email_address,
            'id_Position' => $id_position,
            'id_Status' => $id_status,
            'profile_Photo' => $photo,
			);
		$this->m_user->input_data($data,'user');
        redirect('user/list');
	}
    
    function _uploadImage($id)
    {
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $id;
    $config['overwrite']			= true;
    $config['max_size']             = 4096; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);
 
    if ( ! $this->upload->do_upload('gambar')){
        $error = array('error' => $this->upload->display_errors());
    }else{
        $data = array('upload_data' => $this->upload->data());
        return $data['upload_data']['file_name'];
    }
    }

    public function edit($id)
    {
		$data['user'] = $this->m_user->edit_data($id,'user')->result();
        $data['position'] = $this->m_user->ambil_data_position()->result();
        $data['status'] = $this->m_user->ambil_data_status()->result();
        $this->load->view('templates/header',);
        $this->load->view('templates/sidebar');
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }
    function edit_user(){
        $id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $fullname = $this->input->post('fullname');
        $email_address = $this->input->post('email_address');
        $id_position = $this->input->post('position');
        $id_status = $this->input->post('status');
        if (!empty($_FILES["gambar"]["name"])) {
            $photo = $this->_uploadImage($id);
        } else {
            $photo = $this->input->post('old_image');
        }
    
        $data = array(
            'id_User' => $id,
			'user_Name' => $username,
			'pass_Word' => $password,
            'full_Name' => $fullname,
            'email_Address' => $email_address,
            'id_Position' => $id_position,
            'id_Status' => $id_status,
            'profile_Photo' => $photo,
        );
    
        $where = array(
            'id_User' => $id
        );
    
        $this->m_user->update_data($where,$data,'user');
        redirect('user/list');
    }
    function delete($id){
        $data = $this->db->get_where('user', ['id_User' => $id])->row_array();
		unlink(APPPATH.'../assets/img/'.$data['profile_Photo']);
        $where = array('id_User' => $id);
        $this->m_user->hapus_data($where,'user');
        redirect('user/list');
    }
    
}
