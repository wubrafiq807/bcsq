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
        $data['subCatList'] = $this->Common_model->getTableDataByArray('subcategory', array('status=' => 1));
        $this->load->view('addQueAndAns', $data);
    }

    public function saveQueAndAns() {

        for ($i = 0; $i <= (int) $_POST['final_total_dataSize']; $i++) {
            $data = array(
                'created_date' => date('Y-m-d H:i:s'),
                'created_by' => $_SESSION['user_session']['id'],
            );
            if (isset($_POST['sub_category_id_' . $i])) {
                $near = array(
                    'sub_category_id' => $_POST['sub_category_id_' . $i],
                    'question' => $_POST['question_' . $i],
                    'description' => $_POST['description_' . $i],
                    'is_multiple_ans' => $_POST['is_multiple_ans_' . $i],
                    'status' => $_POST['status_' . $i]
                );
                $data = array_merge_recursive($data, $near);
                if ((int) $_POST['is_multiple_ans_' . $i] == 0) {
                    $data = array_merge($data, array('answer' => $_POST['answer_' . $i]));
                }
                $quesion_id = $this->Common_model->saveTableDataByArray('question', $data);
                $answerArray = array(
                    'created_date' => date('Y-m-d H:i:s'),
                    'created_by' => $_SESSION['user_session']['id'],
                );
                if ((int) $_POST['is_multiple_ans_' . $i] == 1) {
                    $newAnsArray = array(
                        'question_id' => (int) $quesion_id,
                        'answer1' => $_POST['answer1_' . $i],
                        'answer2' => $_POST['answer2_' . $i],
                        'answer3' => $_POST['answer3_' . $i],
                        'answer4' => $_POST['answer4_' . $i],
                        'cur_answer' => $_POST['multiple_ans_' . $i]
                    );
                    $answerArray = array_merge($answerArray, $newAnsArray);
                    $this->Common_model->saveTableDataByArray('answer', $answerArray);
                }
            }
        }
    }

    public function getQueAndAnsList() {

        $this->checkLogin();
        $data = array(
            'status!=' => 2,
        );
        $result = $this->Common_model->getTableDataByArray('question', $data);
        $final_result['questionList'] = array();
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
            $final_result['questionList'][] = array(
                'id' => $value['id'],
                'question' => $value['question'],
                'description' => trim($value['description']),
                'created_by' => $createdBy['full_name'],
                'created_date' => $value['created_date'],
                'modified_date' => $modifiedByDate,
                'modified_by' => $modifiedByName,
                'status' => $status,
                'is_multiple_ans' => $value['is_multiple_ans']
            );
        }

        $this->load->view('questionList', $final_result);
    }

    public function deleteQuestion() {
        $this->checkLogin();
        $data = array(
            'status' => 2,
        );
        $this->Common_model->updateFromArray('question', $data, array('id' => $_GET['id']));

        $this->session->set_flashdata('message', "One Question has been  Deleted By You.");
        redirect(base_url('getQueAndAnsList'));
    }

    public function editQuestion() {
        $data['question'] = $modifiedBy = $this->Common_model->getTableDataByArrayRow('question', array('id' => $_GET['id']));
        $data['edit'] = TRUE;
        $data['answer'] = $modifiedBy = $this->Common_model->getTableDataByArrayRow('answer', array('question_id' => $_GET['id']));
        $data['subCatList'] = $this->Common_model->getTableAllData("subcategory");
//        echo '<pre>';
//        print_r($data);
//        exit;
        $this->load->view('editQueAndAns', $data);
    }

    public function updateQueandans() {
        $data = array(
            'modified_date' => date('Y-m-d H:i:s'),
            'modified_by' => $_SESSION['user_session']['id'],
        );
        if (isset($_POST['sub_category_id_0'])) {
            $near = array(
                'sub_category_id' => $_POST['sub_category_id_0'],
                'question' => $_POST['question_0'],
                'description' => $_POST['description_0'],
                'is_multiple_ans' => $_POST['is_multiple_ans_0'],
                'status' => $_POST['status_0']
            );
            $data = array_merge_recursive($data, $near);
            if ((int) $_POST['is_multiple_ans_0'] == 0) {
                $data = array_merge($data, array('answer' => $_POST['answer_0']));
            }

            $this->Common_model->updateFromArray('question', $data, array('id' => $_POST['id']));
            $answerArray = array(
                'modified_date' => date('Y-m-d H:i:s'),
                'modified_by' => $_SESSION['user_session']['id'],
            );
            if ((int) $_POST['is_multiple_ans_0'] == 1) {
                $newAnsArray = array(
                    'question_id' => (int) $_POST['id'],
                    'answer1' => $_POST['answer1_0'],
                    'answer2' => $_POST['answer2_0'],
                    'answer3' => $_POST['answer3_0'],
                    'answer4' => $_POST['answer4_0'],
                    'cur_answer' => $_POST['multiple_ans_0']
                );
                $answerArrayUpdate = array_merge($answerArray, $newAnsArray);
                $isdata = $this->Common_model->getTableDataByArrayRow('answer', array('question_id' => $_POST['id']));

                if (!$isdata) {
                    $answerArraycrea = array(
                        'created_date' => date('Y-m-d H:i:s'),
                        'created_by' => $_SESSION['user_session']['id'],
                    );
                    $createdarra = array_merge($answerArraycrea, $newAnsArray);
                    $this->Common_model->saveTableDataByArray('answer', $answerArrayUpdate);
                } else {
                    $this->Common_model->updateFromArray('answer', $answerArrayUpdate, array('question_id' => $_POST['id']));
                }
            }
        }
        $this->session->set_flashdata('message', "One Question has been  Modified By You.");
        redirect(base_url('getQueAndAnsList'));
    }

}
