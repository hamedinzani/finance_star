<?php

class M_inv_in extends CI_Model
{

    function tampil_data_inv()
    {
        $this->db->select('*');
        $this->db->from('invoice_in po');
        $this->db->join('invoice_in_item i', 'po.no_invoice=i.no_invoice');
        $this->db->group_by('po.no_invoice');
        return $query = $this->db->get();
    }

    function tampil_data_inv_out()
    {
        $this->db->select('*');
        $this->db->from('invoice_out po');
        $this->db->join('invoice_item_spq i', 'po.no_invoice=i.no_invoice');
        $this->db->group_by('po.no_invoice');
        return $query = $this->db->get();
    }

    function ambil_data_po_w($where1)
    {
        $this->db->select('*');
        $this->db->from('purchase_order po');
        $this->db->join('po_item_wordbase i', 'po.no_Po=i.no_Po');
        $this->db->where('po.is_inv', $where1);
        return $query = $this->db->get();
    }

    function ambil_data_po_i($where1)
    {
        $this->db->select('*');
        $this->db->from('purchase_order po');
        $this->db->join('po_item_itembase i', 'po.no_Po=i.no_Po');
        $this->db->where('po.is_inv', $where1);
        $this->db->group_by('po.no_Po');
        return $query = $this->db->get();
    }

    function ambil_data_po_item($where)
    {
        $this->db->select('*');
        $this->db->from('purchase_order po');
        $this->db->join('po_item_itembase i', 'po.no_Po=i.no_Po', 'left');
        $this->db->where('po.no_Po', $where);
        return $query = $this->db->get();
    }

    function ambil_data_po_word($where)
    {
        $this->db->select('*');
        $this->db->from('purchase_order po');
        $this->db->join('po_item_wordbase i', 'po.no_Po=i.no_Po', 'left');
        $this->db->where('po.no_Po', $where);
        return $query = $this->db->get();
    }

    function ambil_data_qi($where){
		$this->db->select('*');
        $this->db->from('invoice_in po');
        $this->db->join('invoice_in_item i', 'po.no_invoice=i.no_invoice');
        $this->db->where('po.no_invoice', $where);
		return $query = $this->db->get();
	}

    function ambil_data_qi_out($where){
		$this->db->select('*');
        $this->db->from('invoice_out po');
        $this->db->join('invoice_item_spq i', 'po.no_invoice=i.no_invoice');
        $this->db->where('po.no_invoice', $where);
		return $query = $this->db->get();
	}

    public function CreateCode(){
        $userdata = $this->session->userdata('user_logged');
        $level = $userdata->id_Status;
        $this->db->select('RIGHT(invoice_in.no_invoice,6) as no_inv', FALSE);
        $this->db->order_by('no_inv', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('invoice_in');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->no_inv) + 1;
        } else {
            $kode = 1;
        }
        $year = date("Y");
        $month = date("m");
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        if ($level == "3") {
            $kodetampil = "SQJAK-" . $batas . "-" . $month . "-" . $year;
        } else if ($level == "4") {
            $kodetampil = "SQM-" . $batas . "-" . $month . "-" . $year;
        } else if ($level == "6") {
            $kodetampil = "KEB-" . $batas . "-" . $month . "-" . $year;
        } else {
            $kodetampil = "STJAK-" . $batas . "-" . $year;
        }
        return $kodetampil;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function ambil_data_position()
    {
        return $query = $this->db->get('position_item');
    }
    function edit_data($where, $table)
    {
        $this->db->select('*');
        $this->db->from('invoice_in po');
        $this->db->join('invoice_in_item i', 'po.no_invoice=i.no_invoice');
        $this->db->where('po.no_invoice', $where);
        $this->db->group_by('po.no_invoice');
        return $query = $this->db->get();
    }
    function edit_data_out($where, $table)
    {
        $this->db->select('*');
        $this->db->from('invoice_out po');
        $this->db->join('invoice_item_spq i', 'po.no_invoice=i.no_invoice');
        $this->db->where('po.no_invoice', $where);
        $this->db->group_by('po.no_invoice');
        return $query = $this->db->get();
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
