<?php include 'header.php' ?>
<!-- End header header -->
<!-- Left Sidebar  -->
<?php include'leftSideBar.php' ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<style>
    .section_form_com{
        border: 2px solid yellow;
        background: #510311;
        /* color: black; */
        padding: 10px;
    }
    label{
        color: white;
    }
    input[type="radio"]{
        color: white;
    }
</style>
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit Question&Answer</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <!-- /# row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Add New Questions & Answers</h4>

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" name="reg" method="POST" action="<?php echo base_url("updateQueandans") ?>">
                                <div class="dynamic_add_section">
                                    <div class="row form_section_row_0">
                                        <div class=" col-sm-11 form_section_0 section_form_com">
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Sub Category</label>
                                                    <input type="hidden" name="id" value="<?php echo $question['id'] ?>">
                                                    <div class="col-sm-4">
                                                        <select name="sub_category_id_0" id="sub_category_id_0"  class="form-control subcategory_com">
                                                            <option value="">Select</option>
                                                            <?php foreach ($subCatList as $key => $value) { ?>
                                                                <option value="<?php echo $value['id'] ?>" <?php if ($value['id'] == $question['sub_category_id']) echo 'selected="selected"'; ?> ><?php echo $value['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span id="sub_category_error_0" class="error"></span>

                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Question</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="question_0" name="question_0" value="<?php echo $question['question'] ?>" class="form-control question_com"  >
                                                        <span class="question_error_0 error" ></span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                <div class="form-group has-success">
                                                                                <div class="row">
                                                                                    
                                                                                </div>
                                                                            </div>-->
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Choose an Option </label>
                                                    <div class="col-sm-4">
                                                        <fieldset id="group2" style="color: white">
                                                            <input type="radio" <?php if ((int) $question['is_multiple_ans'] == 0) echo 'checked="checked"'; ?> style="color: white" name="is_multiple_ans_0" onclick="checkIsMultiple(0)" class="is_multiple_ans_0" value="0">Single
                                                            <input type="radio" <?php if ((int) $question['is_multiple_ans'] == 1) echo 'checked="checked"'; ?> style="color: white" name="is_multiple_ans_0" onclick="checkIsMultiple(0)" class="is_multiple_ans_0" value="1">Multiple

                                                        </fieldset>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <label class="col-sm-2 control-label single_andCOm_0" style="color: white;">Answer</label>
                                                    <div class="col-sm-4 single_andCOm_0" >
                                                        <input type="text" id="answer_0" name="answer_0" value="<?php echo $question['answer'] ?>"class="form-control"  >
                                                        <span class="answer_error_0 error" ></span> 
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group has-success multiple_ans_com_0" style="display: none">
                                                <div class="row"><div class="col-sm-2"></div><div class="col-sm-10 "><span class="multiple_ans_error_0 error"></span></div></div>
                                                <div class="row">

                                                    <label class="col-sm-2 control-label" style="color: white">Answer One</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer1_0" name="answer1_0"  value="<?php echo $answer['answer1'] ?>" class="form-control"  >
                                                        <span class="answer1_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" <?php if ((int) $answer['cur_answer'] == 1) echo 'checked="checked"'; ?> value="1">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Two</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer2_0" name="answer2_0" value="<?php echo $answer['answer2'] ?>" class="form-control"  >
                                                        <span class="answer2_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" <?php if ((int) $answer['cur_answer'] == 2) echo 'checked="checked"'; ?>  value="2">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Three</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer3_0" name="answer3_0" value="<?php echo $answer['answer3'] ?>" class="form-control"  >
                                                        <span class="answer3_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" <?php if ((int) $answer['cur_answer'] == 3) echo 'checked="checked"'; ?> value="3">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Four</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer4_0" name="answer4_0" value="<?php echo $answer['answer4'] ?>" class="form-control"  >
                                                        <span class="answer4_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" <?php if ((int) $answer['cur_answer'] == 4) echo 'checked="checked"'; ?> value="4">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Description</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="description_0" name="description_0" value="<?php echo $question['description'] ?>" class="form-control"  >
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Status</label>
                                                    <div class="col-sm-4">
                                                        <select name="status_0" class="form-control">

                                                            <option value="1" <?php if ((int) $question['status'] == 1) echo 'selected="selected"'; ?>>Active</option>
                                                            <option value="0" <?php if ((int) $question['status'] == 0) echo 'selected="selected"'; ?>>InActive</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                                <div class="form-group has-warning" style="margin-top: 10px">
                                    <div class="row">
                                        <label class="col-sm-3 control-label" style="color: white"></label>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-info req-save-update-btn">Update</button>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="<?php echo base_url('getQueAndAnsList') ?>" class="btn btn-warning ">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="final_total_dataSize" id="final_total_dataSize" value="1">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# column -->


            <!-- /# column -->
        </div>
        <!-- /# row -->


        </form>
    </div>
</div>
</div>
<!-- /# card -->
</div>
<!-- /# column -->
</div>
<!-- /# row -->

<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<?php include'footer.php' ?>    


<script>
    $(document).ready(function () {
<?php if ((int) $question['is_multiple_ans'] == 0) { ?>
            $('.single_andCOm_0').show();
            $('.multiple_ans_com_0').hide();
<?php } ?>
<?php if ((int) $question['is_multiple_ans'] == 1) { ?>
            $('.multiple_ans_com_0').show();
            $('.single_andCOm_0').hide();
<?php } ?>
    });
    function minusCheckData(i) {
        $('.form_section_row_' + i).remove();
    }

    function checkIsMultiple(i) {
        var val = $('input[name=is_multiple_ans_' + i + ']:checked').val();
        if (val == 1) {
            $('.multiple_ans_com_' + i).show();
            $('.single_andCOm_' + i).hide();
        }
        if (val == 0) {
            $('.multiple_ans_com_' + i).hide();
            $('.single_andCOm_' + i).show();
        }
    }
    $(function () {
        var flag1 = flag2 = flag3 = flag4 = flag5 = true;
        $('.req-save-update-btn').on('click', function (e) {
            e.preventDefault();
            $('.subcategory_com').each(function (i, v) {
                var id = v.id;
                id = id.replace("sub_category_id_", "");
                id = $.trim(id);

                if (v.value == '') {
                    $('#sub_category_error_' + id).text('Please Select The sub category section.');
                    flag1 = false;
                } else {
                    $('#sub_category_error_' + id).text('');
                    flag1 = true;
                }
                if ($('#question_' + id).val() == '') {
                    $('.question_error_' + id).text('Please Input the question text here.');
                    flag2 = false;
                } else {
                    $('.question_error_' + id).text('');
                    flag2 = true;
                }

                var val = $('input[name=is_multiple_ans_' + id + ']:checked').val();
                if (val == 1) {
                    var i;
                    for (i = 1; i < 5; i++) {
                        if ($('#answer' + i + '_' + id).val() == '') {
                            $('.answer' + i + '_error_' + id).text('Please iput this answer filed.');
                            flag3 = false;
                        } else {
                            $('.answer' + i + '_error_' + id).text('');
                            flag3 = true;
                        }
                    }

                    if ($('input[name="multiple_ans_' + id + '"]:checked').val()) {
                        $('.multiple_ans_error_' + id).text('');
                        flag4 = true;
                    } else {
                        $('.multiple_ans_error_' + id).text('You need to checked radio button to select the right answer from these 4 Answer');
                        flag4 = false;
                    }




                }
                if (val == 0) {
                    if ($('#answer_' + id).val() == '') {
                        $('.answer_error_' + id).text('Please Input Your Answer Filed.');
                        flag5 = false;
                    } else {
                        $('.answer_error_' + id).text('');
                        flag5 = true;
                    }
                }
            });
            if (flag1 && flag2 && flag3 && flag4 && flag5) {
                $("form[name='reg']").submit();

            }
        })

    });

</script>