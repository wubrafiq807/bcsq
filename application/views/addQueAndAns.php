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
                <li class="breadcrumb-item active">Add Question&Answer</li>
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
                            <form class="form-horizontal" name="reg" method="POST" action="<?php echo base_url("saveQueAndAns") ?>">
                                <div class="dynamic_add_section">
                                    <div class="row form_section_row_0">
                                        <div class=" col-sm-11 form_section_0 section_form_com">
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Sub Category</label>
                                                    <div class="col-sm-4">
                                                        <select name="sub_category_id_0" id="sub_category_id_0"  class="form-control subcategory_com">
                                                            <option value="">Select</option>
                                                            <?php foreach ($subCatList as $key => $value) { ?>
                                                                <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <span id="sub_category_error_0" class="error"></span>

                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Question</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="question_0" name="question_0" class="form-control question_com"  >
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
                                                            <input type="radio" checked="checked" style="color: white" name="is_multiple_ans_0" onclick="checkIsMultiple(0)" class="is_multiple_ans_0" value="0">Single
                                                            <input type="radio"  style="color: white" name="is_multiple_ans_0" onclick="checkIsMultiple(0)" class="is_multiple_ans_0" value="1">Multiple

                                                        </fieldset>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <label class="col-sm-2 control-label single_andCOm_0" style="color: white;">Answer</label>
                                                    <div class="col-sm-4 single_andCOm_0" >
                                                        <input type="text" id="answer_0" name="answer_0" class="form-control"  >
                                                        <span class="answer_error_0 error" ></span> 
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group has-success multiple_ans_com_0" style="display: none">
                                                <div class="row"><div class="col-sm-2"></div><div class="col-sm-10 "><span class="multiple_ans_error_0 error"></span></div></div>
                                                <div class="row">

                                                    <label class="col-sm-2 control-label" style="color: white">Answer One</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer1_0" name="answer1_0" class="form-control"  >
                                                        <span class="answer1_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Two</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer2_0" name="answer2_0" class="form-control"  >
                                                        <span class="answer2_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Three</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer3_0" name="answer3_0" class="form-control"  >
                                                        <span class="answer3_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Four</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer4_0" name="answer4_0" class="form-control"  >
                                                        <span class="answer4_error_0 error" ></span> 
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Description</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="description_0" name="description_0" class="form-control"  >
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Status</label>
                                                    <div class="col-sm-4">
                                                        <select name="status_0" class="form-control">

                                                            <option value="1" >Active</option>
                                                            <option value="0" >InActive</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <button class="form-control btn btn-success" onclick="addNewQuestion()" type="button">+</button>
                                    </div>
                                </div>


                                <div class="form-group has-warning">
                                    <div class="row">
                                        <label class="col-sm-3 control-label" style="color: white"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info req-save-update-btn">Save</button>
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
    var count = 0;
    function addNewQuestion() {
        count++;
        var html = '';
        html += ' <div class="row form_section_row_' + count + '">';
        html += '    <div class=" col-sm-11 form_section_' + count + ' section_form_com">';
        html += '     <div class="form-group has-success">';
        html += '   <div class="row">';
        html += '   <label class="col-sm-2 control-label" style="color: white">Sub Category</label>';
        html += '   <div class="col-sm-4">';
        html += '     <select name="sub_category_id_' + count + '" id="sub_category_id_' + count + '"  class="form-control subcategory_com">';
        html += '      <option value="">Select</option>';
<?php foreach ($subCatList as $key => $value) { ?>
            html += '     <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>';
<?php } ?>
        html += '    </select>';
        html += '<span id="sub_category_error_' + count + '" class="error" ></span>';
        
        html += ' </div>';
        html += '  <label class="col-sm-2 control-label" style="color: white">Question</label>';
        html += '  <div class="col-sm-4">';
        html += '    <input type="text" id="question_' + count + '" name="question_' + count + '" class="form-control" >';
        html += ' <span class="question_error_' + count + ' error" ></span> ';
        html += ' </div>';
        html += '    </div>';
        html += '   </div>';
        
        html += '     <div class="form-group has-success">';
        html += '  <div class="row">';
        html += '   <label class="col-sm-2 control-label" style="color: white">Choose an Option </label>';
        html += '   <div class="col-sm-4">';
        html += '   <fieldset id="group2" style="color: white">';
        html += '    <input type="radio" checked="checked" onclick="checkIsMultiple(' + count + ')" style="color: white" name="is_multiple_ans_' + count + '" class="is_multiple_ans_' + count + '" value="0">Single';
        html += '    <input type="radio" onclick="checkIsMultiple(' + count + ')" style="color: white" name="is_multiple_ans_' + count + '" class="is_multiple_ans_' + count + '" value="1">Multiple';
        
        html += '  </fieldset>';
        html += ' </div>';
        html += '    <div>';
        
        html += ' </div>';
        html += '   <label class="col-sm-2 control-label single_andCOm_' + count + '" style="color: white;">Answer</label>';
        html += '   <div class="col-sm-4 single_andCOm_' + count + '" >';
        html += '    <input type="text" id="answer_' + count + '" name="answer_' + count + '" class="form-control"  >';
        html += '<span class="answer_error_' + count + ' error" ></span> ';
        html += '  </div>';
        html += '  </div>';
        html += '  </div>';
        
        
        html += '  <div class="form-group has-success multiple_ans_com_' + count + '" style="display: none">';
        html += '<div class="row"><div class="col-sm-2"></div><div class="col-sm-10 "><span class="multiple_ans_error_' + count + ' error"></span></div></div>';
        html += '   <div class="row">';
        
        html += '   <label class="col-sm-2 control-label" style="color: white">Answer One</label>';
        html += '   <div class="col-sm-3">';
        html += '    <input type="text" id="answer1_' + count + '" name="answer1_' + count + '" class="form-control"  >';
        html += '<span class="answer1_error_' + count + ' error" ></span>';
        html += '    </div>';
        
        html += '   <div class="col-sm-1">';
        html += '      <input type="radio" name="multiple_ans_' + count + '" value="1">';
        html += '  </div>';
        html += '  <label class="col-sm-2 control-label" style="color: white">Answer Two</label>';
        html += ' <div class="col-sm-3">';
        html += '    <input type="text" id="answer2_' + count + '" name="answer2_' + count + '" class="form-control"  >';
        html += '<span class="answer2_error_' + count + ' error" ></span>';
        html += '  </div>';
        
        html += ' <div class="col-sm-1">';
        html += '     <input type="radio" name="multiple_ans_' + count + '" value="1">';
        html += '  </div>';
        
        html += ' </div>';
        html += ' <div class="row">';
        html += '   <label class="col-sm-2 control-label" style="color: white">Answer Three</label>';
        html += '   <div class="col-sm-3">';
        html += '       <input type="text" id="answer3_' + count + '" name="answer3_' + count + '" class="form-control"  >';
        html += '<span class="answer3_error_' + count + ' error" ></span>';
        html += '    </div>';
        
        html += '     <div class="col-sm-1">';
        html += '       <input type="radio" name="multiple_ans_' + count + '" value="1">';
        html += '  </div>';
        html += '  <label class="col-sm-2 control-label" style="color: white">Answer Four</label>';
        html += '  <div class="col-sm-3">';
        html += '    <input type="text" id="answer4_' + count + '" name="answer4_' + count + '" class="form-control"  >';
        html += '<span class="answer4_error_' + count + ' error" ></span>';
        html += '  </div>';
        
        html += ' <div class="col-sm-1">';
        html += '     <input type="radio" name="multiple_ans_' + count + '" value="1">';
        html += ' </div>';
        
        html += ' </div>';
        html += '  </div>';
        
        html += ' <div class="form-group has-success">';
        html += '    <div class="row">';
        html += '    <label class="col-sm-2 control-label" style="color: white">Description</label>';
        html += '    <div class="col-sm-4">';
        html += '    <input type="text" id="description_'+count+'" name="description_'+count+'" class="form-control"  >';
        html += '    </div>';
        html += ' <label class="col-sm-2 control-label" style="color: white">Status</label>';
        html += '  <div class="col-sm-4">';
        html += '   <select name="status_' + count + '" id="status_' + count + '" class="form-control">';
        
        html += '   <option value="1" >Active</option>';
        html += '  <option value="0" >InActive</option>';
        html += '  </select>';
        
        html += '  </div>';
        html += '    </div>';
        html += ' </div>';
        
        html += '  </div>';
        html += '  <div class="col-sm-1" id="btn_minus_' + count + '">';
        html += '   <button class="btn btn-danger" onclick="minusCheckData(' + count + ')" type="button">-</button>';
        html += '</div>';
        html += '  </div>';
        $('.dynamic_add_section').append(html);
        $('#final_total_dataSize').val(count);
    }
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