<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/BaseController.php';
//User controller manages the user records
class User extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('HomeModel');
        $this->load->model('CartModel');
    }

    public function index() {
        if (!$this->session->userdata('loggedUser')) {
            $this->global['pageTitle'] = 'Plan Your Big Day';

            $this->load->view('template/header', $this->global);
            $this->load->view('login');
            $this->load->view('template/footer');
        } else {
            redirect('user/dashboard');
        }
    }

    public function dashboard() {

        if ($this->session->userdata('loggedUser')) {
            $this->load->model('UserModel');
            $this->global['pageTitle'] = ' My Account';

            $this->load->view('template/header', $this->global);
            $loggedUser_arr = $this->session->userdata('loggedUser');
            $user_id = $loggedUser_arr['id'];
            $user_details = $this->UserModel->user_details();
            $data['row'] = $user_details;
            /* $order_details = $this->Cart_model->order_details();
              $data['order_details'] = $order_details; */
            $this->load->view('dashboard', $data);
            $this->load->view('template/footer');
        } else {
            redirect('home');
        }
    }

    public function login() {
        //print_r($_POST); die;
        $ck = $this->UserModel->check_user();
        //print_r($ck); exit;
        if ($ck == 0) {
            $this->session->set_flashdata('feedback', "Wrong Email ID or Password");
            $this->session->set_flashdata('feedback_class', 'alert-danger');
            redirect('user');
        } else {
            $this->session->set_flashdata('feedback', "Your Are Successfully Loggedin");
            $this->session->set_flashdata('feedback_class', 'alert-success');
            redirect('user/dashboard');
        }
    }

    public function register() {   //print_r($_POST); die;
        $ck = $this->UserModel->register_user();
        //echo $ck; 
        if ($ck == 0) {
            $this->session->set_flashdata('feedback1', "User Already Registered");
            $this->session->set_flashdata('feedback_class1', 'alert-danger');
            redirect('user');
        } else {
            $this->session->set_flashdata('feedback', "Your Are Successfully Registered");
            $this->session->set_flashdata('feedback_class', 'alert-success');
            redirect('user/dashboard');
        }
    }

    public function logout() {

        $tmp['loggedUser'] = null;
        $tmp['updated_name'] = null;
        $this->session->set_userdata($tmp);

        if (!$this->session->userdata('loggedUser')) {

            redirect('home');
        } else {
            redirect('home');
        }
    }

    public function updateuser() {

        $ck = $this->UserModel->update_user();
        $this->session->set_flashdata('feedback', "Profile Updated Sucessfully");
        $this->session->set_flashdata('feedback_class', 'alert-success');
        redirect('user/userprofile');
    }

    public function userprofile() {

        if ($this->session->userdata('loggedUser')) {
            $this->global['pageTitle'] = ' My Account';

            $this->load->view('template/header', $this->global);
            $loggedUser_arr = $this->session->userdata('loggedUser');
            $user_id = $loggedUser_arr['id'];
            $user_details = $this->UserModel->user_details();
            $data['row'] = $user_details;
            /* $order_details = $this->Cart_model->order_details();
              $data['order_details'] = $order_details; */
            $this->load->view('profile', $data);
            $this->load->view('template/footer');
        } else {
            redirect('home');
        }
    }

    public function loadChangePass() {
        $this->global['pageTitle'] = 'Change Password';

        $this->load->view('template/header', $this->global);
        $this->load->view('changePassword');
        $this->load->view('template/footer');
    }

    function changePassword() {
        if ($this->session->userdata('loggedUser')) {
            $loggedUser_arr = $this->session->userdata('loggedUser');
            $user_id = $loggedUser_arr['id'];
            $this->load->library('form_validation');
            $this->form_validation->set_rules('oldPassword', 'Old password', 'required|max_length[20]');
            $this->form_validation->set_rules('newPassword', 'New password', 'required|max_length[20]');
            $this->form_validation->set_rules('cNewPassword', 'Confirm new password', 'required|max_length[20]');

            if ($this->form_validation->run() == FALSE) {
                $this->loadChangePass();
            } else {

                $oldPassword = $this->input->post('oldPassword');
                $newPassword = $this->input->post('newPassword');
                $cNewPassword = $this->input->post('cNewPassword');
                $pass = $this->UserModel->matchOldPassword($user_id);
                //print_r($pass); exit;
                if ($pass->password == md5($oldPassword)) {
                    if ($newPassword == $cNewPassword) {

                        if ($this->UserModel->updatepassword($newPassword, $user_id)) {
                            /* echo 'password updated Sucessfully'; */

                            $this->session->set_flashdata('feedback', "password updated Sucessfully");
                            $this->session->set_flashdata('feedback_class', 'alert-success');
                            return redirect('user/changePassword');
                        } else {
                            /* echo 'Failed update password'; */

                            /* $messge = array('message' => 'Failed update password','class' => 'alert alert-danger fade in');
                              $this->session->set_flashdata($messge); */
                            $this->session->set_flashdata('feedback', "Failed update password");
                            $this->session->set_flashdata('feedback_class', 'alert-danger');
                            return redirect('user/changePassword');
                        }
                    } else {
                        /* echo 'New Password and confirm Password is not matching'; */

                        /* $messge = array('message' => 'New Password and confirm Password is not matching.','class' => 'alert alert-danger fade in');
                          $this->session->set_flashdata($messge); */
                        $this->session->set_flashdata('feedback', "New Password and confirm Password is not matching");
                        $this->session->set_flashdata('feedback_class', 'alert-danger');
                        return redirect('user/changePassword');
                    }
                } else {
                    /* echo 'Sorry Current Password is not matching'; */

                    /* $messge = array('message' => 'Sorry Current Password is not matching','class' => 'alert alert-danger fade in');
                      $this->session->set_flashdata($messge); */
                    $this->session->set_flashdata('feedback', "Sorry Current Password is not matching");
                    $this->session->set_flashdata('feedback_class', 'alert-danger');
                    return redirect('user/changePassword');
                }
            }
        } else {

            redirect('home');
        }
    }

}
