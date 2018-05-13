<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->model("User_model");
       $this->load->library('session');
    }

    public function authenticate() {
        $result= $this->User_model->loginfunctioncheck($_POST);
        if ($result) {
            $this->session->set_userdata('user_session',$result);
            redirect(base_url());
        }else{
            $this->session->set_flashdata('loginFailed', 'Email or Password Does Not Match');
            redirect(base_url('login'));
        }
       
    }
    
    public function logout() {
        $this->session->unset_userdata('user_session');
        redirect(base_url('login'));
    }

}
