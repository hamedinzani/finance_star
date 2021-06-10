<?php 

class M_po extends CI_Model{

	function tampil_data_q(){
        $this->db->select('*');
        $this->db->from('quotation q'); 
        $this->db->join('quitation_item qi', 'qi.no_Quotation=q.no_Quotation', 'left');
        $this->db->group_by('q.no_Quotation');
		return $query = $this->db->get();
	}

    function ambil_data_q($where){
		$this->db->select('*');
        $this->db->from('quitation_item qi'); 
        $this->db->join('quotation q', 'qi.no_Quotation=q.no_Quotation', 'left');
        $this->db->where('q.no_Quotation', $where);
		return $query = $this->db->get();
	}
    function ambil_data_position(){
		return $query = $this->db->get('position_item');
	}

    public function CreateCode(){
        $userdata = $this->session->userdata('user_logged');
        $level = $userdata->id_Status;
        $this->db->select('RIGHT(purchase_order.no_Po,4) as no_Po', FALSE);
        $this->db->order_by('no_Po','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('purchase_order');
            if($query->num_rows() <> 0){      
                 $data = $query->row();
                 $kode = intval($data->no_Po) + 1; 
            }
            else{      
                 $kode = 1;  
            }
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        if($level=="3"){$kodetampil = "SQ-PR".$batas;}
        else if($level=="4"){$kodetampil = "SQM-PR".$batas;}
        else if($level=="6"){$kodetampil = "KEB-PR".$batas;}
        else {$kodetampil = "ST-PR".$batas;}    
        return $kodetampil;  
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function edit_data($where,$table){		
		$this->db->select('*');
        $this->db->from('quotation q'); 
        $this->db->join('quitation_item qi', 'qi.no_Quotation=q.no_Quotation', 'left');
        $this->db->where('q.no_Quotation', $where);
        $this->db->group_by('q.no_Quotation');
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