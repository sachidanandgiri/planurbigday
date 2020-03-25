<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once APPPATH . 'core/BaseModel.php';

class UserModel extends BaseModel {

    public function check_user() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        $result = $query->row();
        //echo $this->db->last_query();
        if (count($result) > 0) {
            // user available
            $logged_user = array(
                'id' => $result->id,
                'name' => $result->name,
                'username' => $result->username
            );
            $this->session->set_userdata('loggedUser', $logged_user); //  login session variable
            return '1';
        } else {
            // user not available	
            return '0';
        }
    }

    public function register_user() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $name = $this->input->post('name');
        $lname = $this->input->post('lname');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        $result_cnt = $query->num_rows();
        if ($result_cnt > 0) {
            return '0';
        } else {
            $data_arr = array("name" => $name,
                "lname" => $lname,
                "username" => $username,
                "password" => $password);
            $this->db->insert('users', $data_arr);
            $user_id = $this->db->insert_id();
            $logged_user = array(
                'id' => $user_id,
                'name' => $name,
                'username' => $username
            );
            $this->session->set_userdata('loggedUser', $logged_user); //  Registration session variable
            return '10';
        }
    }

    public function update_user() {

        $loggedUser_arr = $this->session->userdata('loggedUser');
        $user_id = $loggedUser_arr['id'];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $lname = $this->input->post('lname');
        $phone = $this->input->post('phone');
        $image = $this->input->post('image');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $postalcode = $this->input->post('postalcode');
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);

        $query = $this->db->get();
        $result_cnt = $query->num_rows();
        if ($result_cnt == 0) {
            return '0';
        } else {
            //	print_r($user_id);
            $data_arr = array("name" => $name,
                "lname" => $lname,
                "phone" => $phone,
                "address" => $address,
                "city" => $city,
                "state" => $state,
                "postalcode" => $postalcode
            );
            $this->db->where('id', $user_id);
            $this->db->update('users', $data_arr);
            $this->session->set_userdata('updated_name', $name);
            if ($password != '') {
                $data_arr = array("name" => $name,
                    "password" => md5($password)
                );
                $this->db->where('id', $user_id);
                $this->db->update('users', $data_arr);
            }
            if ($_FILES['image']['name'] != '') {
                $image = 'image';
                $this->upload_user_image($user_id, $image);
            }
            return 1;
        }
    }

    public function upload_user_image($id, $image) {
        $config['upload_path'] = 'image/users';
        $config['allowed_types'] = 'jepg|jpg|png';
        $config['max_size'] = '3072';
        //$config['overwrite']	= TRUE;
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $image;
        $config['encrypt_name'] = TRUE;

        //$this->upload->initialize($config);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($image)) {
            //Here error display
            print_r($this->upload->display_errors());
            exit;
        } else {
            $upload_data = $this->upload->data();
            //update resume in database
            $uploaded_data = array(
                'image' => $upload_data['file_name']
            );
            $this->db->where('id', $id);
            $this->db->update('users', $uploaded_data);
            //echo  $this->db->last_query();
            return true;
        }
    }

    public function user_details() {
        $loggedUser_arr = $this->session->userdata('loggedUser');
        $user_id = $loggedUser_arr['id'];
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        return $result = $query->row();
    }

    public function matchOldPassword($user_id) {
        $query = $this->db->where('id', $user_id)
                ->get('users');
        if ($query->num_rows() > 0) {
            return $query->row();
        }
    }

    public function updatepassword($newPassword, $user_id) {

        $data = array('password' => md5($newPassword));
        // print_r($user_id); exit;
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
        return true;
    }

}

//  class end	