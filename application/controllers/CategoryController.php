<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller {

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

    public function addCategory() {
        $this->checkLogin();
        $this->load->view('addCategory');
    }

    public function saveCategory() {
        $this->checkLogin();
        if (isset($_POST['id'])) {
            $data = array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'modified_date' => date('Y-m-d H:i:s'),
                'modified_by' => $_SESSION['user_session']['id'],
                'status' => $_POST['status'],
            );
            $this->Common_model->updateFromArray('category', $data, array('id' => $_POST['id']));
            $this->session->set_flashdata('message', "Category Updated By You.");
        } else {
            $data = array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'created_date' => date('Y-m-d H:i:s'),
                'created_by' => $_SESSION['user_session']['id'],
                'status' => $_POST['status'],
            );
            $this->Common_model->saveTableDataByArray('category', $data);
            $this->session->set_flashdata('message', "New Category Created By You.");
        }
        redirect(base_url('getCatList'));
    }

    public function checkUniqCategory() {
        $this->checkLogin();
        $result = $this->Common_model->getTableDataByArray('category', $_POST);
        if ($result) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function getCatList() {
        $this->checkLogin();
        $data = array(
            'status!=' => 2,
        );
        $result = $this->Common_model->getTableDataByArray('category', $data);

        foreach ($result as $key => $value) {
            $createdBy = $this->Common_model->getTableDataByArrayRow('users', array('id' => $value['created_by']));
            $modifiedBy = $this->Common_model->getTableDataByArrayRow('users', array('id' => $value['modified_by']));
            $status = '';
            $modifiedByName = '';
            $modifiedByDate = '';
            if ($value['status'] == 1) {
                $status = "Active";
            }
            if ($value['status'] == 0) {
                $status = "Inactive";
            }
            if ($modifiedBy) {
                $modifiedByName = $value['modified_by'];
                $modifiedByDate = $value['modified_date'];
            } else {
                $modifiedByName = "No Modified Yet";
                $modifiedByDate = "No Modified Yet";
            }
            $final_result['categoryList'][] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                'description' => trim($value['description']),
                'created_by' => $createdBy['full_name'],
                'created_date' => $value['created_date'],
                'modified_date' => $modifiedByDate,
                'modified_by' => $modifiedByName,
                'status' => $status
            );
        }
        $this->load->view('categoryList', $final_result);
    }

    public function editCategory() {
        $data['category'] = $modifiedBy = $this->Common_model->getTableDataByArrayRow('category', array('id' => $_GET['id']));
        $data['edit'] = TRUE;
        $this->load->view('addCategory', $data);
    }

    public function deleteCategory() {
        $this->checkLogin();
        $data = array(
            'status' => 2,
        );
        $this->Common_model->updateFromArray('category', $data, array('id' => $_GET['id']));
        
        $this->session->set_flashdata('message', "Category Deleted By You.");
        redirect(base_url('getCatList'));
    }

}
