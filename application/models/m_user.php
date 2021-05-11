<?php 

class M_user extends CI_Model{
	function tampil_data_user(){
        $this->db->select('*');
        $this->db->from('user u'); 
        $this->db->join('position_item p', 'p.id=u.id_Position', 'left');
        $this->db->join('status_item s', 's.id=u.id_Status', 'left');
		return $query = $this->db->get();
	}
    function ambil_data_status(){
		return $query = $this->db->get('status_item');
	}
    function ambil_data_position(){
		return $query = $this->db->get('position_item');
	}
    public function CreateCode(){
        $this->db->select('RIGHT(user.id_User,3) as kode_user', FALSE);
        $this->db->order_by('kode_user','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('user');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->kode_user) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
        $kodetampil = "STR".$batas;
        return $kodetampil;  
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function edit_data($where,$table){		
		$this->db->select('*');
        $this->db->from('user u'); 
        $this->db->join('position_item p', 'p.id=u.id_Position', 'left');
        $this->db->join('status_item s', 's.id=u.id_Status', 'left');
        $this->db->where('id_User', $where);
		return $query = $this->db->get();
	}
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}