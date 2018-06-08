<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array("User_model" => "User_model", "Common_model" => "Common_model"));
        $this->load->library('session');
    }

    public function checkLogin() {
        if (!$this->session->has_userdata('user_session')) {
            redirect(base_url('login'));
        }
    }

    public function authenticate() {
        $result = $this->User_model->loginfunctioncheck($_POST);
        if ($result) {
            $this->session->set_userdata('user_session', $result);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('loginFailed', 'Email or Password Does Not Match');
            redirect(base_url('login'));
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_session');
        redirect(base_url('login'));
    }

    public function userProfile() {
        $this->checkLogin();
        $data['userInfo'] = $this->Common_model->getResuqltByQuery('select * from users where id="' . $this->session->userdata('user_session')['id'] . '"');
        
        $this->load->view('userProfile', $data);
    }

    public function checkUniqEmail() {
        $this->checkLogin();
        $result = $this->Common_model->getTableDataByArray('users', $_POST);
        if ($result) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function updateUserInfo() {
        $this->checkLogin();
        $data = array(
            'email' => $_POST['email'],
            'full_name' => $_POST['full_name'],
            'phone' => $_POST['phone'],
        );
        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $data = array_merge($data, array('password' => md5($_POST['password'])));
        }
        //move_uploaded_file($filename, $destination);
        $this->Common_model->updateFromArray('users', $data, array('id' => $this->session->userdata('user_session')['id']));
        
        $this->session->set_flashdata('message','You Profile Information Hass Been Updated.');
        redirect(base_url('userProfiles'));
    }

}
