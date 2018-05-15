<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategorySubController extends CI_Controller {

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

    public function addSubCategory() {
        $this->checkLogin();
        $data['categoryList'] = $this->Common_model->getTableAllData("category");
        $this->load->view('addSubCategory', $data);
    }

    public function saveSubCategory() {
        $this->checkLogin();
        if (isset($_POST['id'])) {
            $data = array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'category_id' => $_POST['category_id'],
                'modified_date' => date('Y-m-d H:i:s'),
                'modified_by' => $_SESSION['user_session']['id'],
                'status' => $_POST['status'],
            );
            $this->Common_model->updateFromArray('subcategory', $data, array('id' => $_POST['id']));
            $this->session->set_flashdata('message', "Category Updated By You.");
        } else {
            $data = array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'created_date' => date('Y-m-d H:i:s'),
                'category_id' => $_POST['category_id'],
                'created_by' => $_SESSION['user_session']['id'],
                'status' => $_POST['status'],
            );
            $this->Common_model->saveTableDataByArray('subcategory', $data);
            $this->session->set_flashdata('message', "New Category Created By You.");
        }
        redirect(base_url('getSubCatList'));
    }

    public function checkUniqSubCategory() {
        $this->checkLogin();
        $result = $this->Common_model->getTableDataByArray('subcategory', $_POST);
        if ($result) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function getSubCatList() {
        $this->checkLogin();
        $data = array(
            'status!=' => 2,
        );
        $result = $this->Common_model->getTableDataByArray('subcategory', $data);
        $final_result['subCategoryList'] = array();
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
                $modifiedByName = $modifiedBy['full_name'];
                $modifiedByDate = $value['modified_date'];
            } else {
                $modifiedByName = "No Modified Yet";
                $modifiedByDate = "No Modified Yet";
            }
            $final_result['subCategoryList'][] = array(
                'id' => $value['id'],
                'name' => $value['name'],
                'description' => trim($value['description']),
                'created_by' => $createdBy['full_name'],
                'created_date' => $value['created_date'],
                'modified_date' => $modifiedByDate,
                'modified_by' => $modifiedByName,
                'status' => $status,
            );
        }
        $this->load->view('subCategoryList', $final_result);
    }

    public function editSubCategory() {
        $data['subCategory'] = $modifiedBy = $this->Common_model->getTableDataByArrayRow('subcategory', array('id' => $_GET['id']));
        $data['edit'] = TRUE;
        $data['categoryList'] = $this->Common_model->getTableAllData("category");

        $this->load->view('addSubCategory', $data);
    }

    public function deleteSubCategory() {
        $this->checkLogin();
        $data = array(
            'status' => 2,
        );
        $this->Common_model->updateFromArray('subcategory', $data, array('id' => $_GET['id']));

        $this->session->set_flashdata('message', "Sub Category Deleted By You.");
        redirect(base_url('getSubCatList'));
    }

}
