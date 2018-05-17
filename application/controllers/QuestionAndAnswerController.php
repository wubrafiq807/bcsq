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
       
        for ($i = 0; $i <=(int) $_POST['final_total_dataSize']; $i++) {
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
                    $newAnsArray=array(
                        'question_id'=>(int)$quesion_id,
                        'answer1'=>$_POST['answer1_'.$i],
                        'answer2'=>$_POST['answer2_'.$i],
                        'answer3'=>$_POST['answer3_'.$i],
                        'answer4'=>$_POST['answer4_'.$i],
                        'cur_answer'=>$_POST['multiple_ans_'.$i]
                        
                    );
                    $answerArray= array_merge($answerArray, $newAnsArray);
                    $this->Common_model->saveTableDataByArray('answer', $answerArray);
                }
                
            }
        }
    }

}
