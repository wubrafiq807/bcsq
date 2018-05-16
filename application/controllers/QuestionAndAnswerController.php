<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionAndAnswerController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array("User_model" => "User_model", "Common_model" => "Common_model", "Category_model" => "Category_model"));
        $this->load->library('session');
    }

    public function checkLogin() {
        if (!$this->session->has_userdata('user_session')) {
            redirect(base_url('login'));
        }
    }

    public function addQuestionAndAnswer() {
        $this->checkLogin();
        $data['subCatList']= $this->Common_model->getTableDataByArray('subcategory',array('status='=>1));
        $this->load->view('addQueAndAns',$data);
    }

}
