<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CartModel extends CI_Model {

    public function update_cart($rowid, $qty, $price, $amount) {
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty,
            'price' => $price,
            'amount' => $amount
        );

        $this->cart->update($data);
    }

    public function insert_customer($data) {   //print_r($_POST); exit;
        $loggedUser_arr = $this->session->userdata('loggedUser');
        $user_id = $loggedUser_arr['id'];
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        $result = $query->row();
        if (!empty($result)) {
            $c_id = $result->customer_id;
            $this->db->where('customer_id', $c_id);
            $this->db->update('customers', $data);
        } else {
            $this->db->insert('customers', $data);
            $c_id = $this->db->insert_id();
        }
        return (isset($c_id)) ? $c_id : FALSE;
    }

    public function insert_order($data) {
        //print_r($data); exit;
        $this->db->insert('orders', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function insert_order_detail($data) {
        //print_r($data); exit;
        $this->db->insert('order_detail', $data);
    }

    public function order_details() {
       // echo"1";
        $loggedUser_arr = $this->session->userdata('loggedUser');
        $user_id = $loggedUser_arr['id'];
        $this->db->select('*');
        $this->db->from('customers c');
        $this->db->join('orders o', 'c.customer_id = o.customer_id', 'INNER');
        $this->db->join('order_detail d','o.order_id = d.order_id','INNER');
        $this->db->join('product p','d.product_id = p.id','INNER');
        $this->db->where('c.user_id',$user_id); 
        $query = $this->db->get();
        //print_r($query->resul1t()); exit;
        return $result = $query->result();
    }
    
    
    
    
    public function store_details() {
        
        $this->db->select('*');
        $this->db->from('store');
        $this->db->group_by('store_pincode');
        $query = $this->db->get();
	//print_r($query->resul1t()); exit;
	return $result = $query->result();
    }
    
    
    public function storename_details() {
        $store_pincode = $this->input->post('store_pincode');
        $this->db->select('*');
        $this->db->from('store');
        $this->db->where('store_pincode', $store_pincode);
        $query = $this->db->get();
	//print_r($query->resul1t()); exit;
	return $result = $query->result();
    }
}
