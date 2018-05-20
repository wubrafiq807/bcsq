<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

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

    public function getApi() {
        $json = '{ "method":"GET","action":"getallcategory"}';
        $json = '{ "method":"GET","action":"getAllSubCat"}';
         $json = '{ "method":"GET","action":"getAllQue"}';
          $json = '{ "method":"GET","action":"getAllAns"}';
       // $data = json_decode($json);
     
        $response;
        switch ($_POST['methodType']) {
            case "GET":
                $response = $this->getallcategory($_POST);
                break;

            default:
                $response=array('error'=>'invalid request.');
                break;
        }
        echo json_encode($response);
    }

    private function getallcategory($data) {
        
        if ((isset($data['methodType']) && $data['methodType'] == 'GET') && (isset($data['actionTypp']) && $data['actionTypp'] == 'getallcategory')) {
            return $this->Common_model->getTableAllData('category');
        } else if ((isset($data['methodType']) && $data['methodType'] == 'GET') && (isset($data['actionTypp']) && $data['actionTypp'] == 'getAllSubCat')) {
            return $this->Common_model->getTableAllData('subcategory');
        } else if ((isset($data['methodType']) && $data['methodType'] == 'GET') && (isset($data['actionTypp']) && $data['actionTypp'] == 'getAllQue')) {
            return $this->Common_model->getTableAllData('question');
        } else if ((isset($data['methodType']) && $data['methodType'] == 'GET') && (isset($data['actionTypp']) && $data['actionTypp'] == 'getAllAns')) {
            return $this->Common_model->getTableAllData('answer');
        } else {
            return array('error' => 'Invalid request.');
        }
    }

}
