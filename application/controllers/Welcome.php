<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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

    public function index() {
        $this->checkLogin();
        $category = $this->Common_model->getResuqltByQuery('select count(id) as totalCategory from category');
        $subCategory = $this->Common_model->getResuqltByQuery('select count(id) as totalSubCat from subcategory');
        $totalQuestion = $this->Common_model->getResuqltByQuery('select count(id) as totalQuestion from question');
        $data['cat'] = $category;
        $data['subcat'] = $subCategory;
        $data['totalQue'] = $totalQuestion;
        $this->load->view('index',$data);
    }

    public function login() {
        $this->load->view('loginpage');
    }

}
