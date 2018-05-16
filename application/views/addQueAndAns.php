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
                                                        <select name="category_id" class="form-control">
                                                            <option value="">Select</option>
                                                            <?php foreach ($subCatList as $key => $value) { ?>
                                                                <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>
                                                            <?php } ?>
                                                        </select>

                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Question</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" id="name" name="name" class="form-control" value="<?php if (isset($category['name'])) echo $category['name']; ?>" >
                                                        <span class="name_valid_err" style="color: red"></span> <input
                                                            type="hidden" value="0" id="nameAlready">
                                                        <input
                                                            type="hidden" id="name_update"
                                                            value="" />
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
                                                        <input type="text" id="answer" name="answer" class="form-control"  >
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group has-success multiple_ans_com_0" style="display: none">
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Answer One</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer" name="answer1" class="form-control"  >
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Two</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer" name="answer2" class="form-control"  >
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Three</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer" name="answer3" class="form-control"  >
                                                    </div>

                                                    <div class="col-sm-1">
                                                        <input type="radio" name="multiple_ans_0" value="1">
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Answer Four</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" id="answer" name="answer4" class="form-control"  >
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
                                                        <input type="text" id="description" name="description" class="form-control"  >
                                                    </div>
                                                    <label class="col-sm-2 control-label" style="color: white">Status</label>
                                                    <div class="col-sm-4">
                                                        <select name="status" class="form-control">
                                                            <option value="">Select</option>
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
                                            <?php if (isset($edit) && $edit) { ?>
                                                <input type="hidden" name="id" value="<?php echo $category['id'] ?>">
                                                <button type="submit"  class="btn btn-info req-save-update-btn">Update</button>
                                            <?php } else { ?>
                                                <button type="submit" class="btn btn-info req-save-update-btn">Save</button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>


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
html +=' <div class="row form_section_row_'+count+'">';
                                    html +='    <div class=" col-sm-11 form_section_'+count+' section_form_com">';
                                       html +='     <div class="form-group has-success">';
                                             html +='   <div class="row">';
                                                 html +='   <label class="col-sm-2 control-label" style="color: white">Sub Category</label>';
                                                 html +='   <div class="col-sm-4">';
                                                   html +='     <select name="category_id" class="form-control">';
                                                      html +='      <option value="">Select</option>';
                                                            <?php foreach ($subCatList as $key => $value) { ?>
                                                           html +='     <option value="<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></option>';
                                                            <?php } ?>
                                                    html +='    </select>';

                                                   html +=' </div>';
                                                  html +='  <label class="col-sm-2 control-label" style="color: white">Question</label>';
                                                  html +='  <div class="col-sm-4">';
                                                    html +='    <input type="text" id="name" name="name" class="form-control" value="<?php if (isset($category['name'])) echo $category['name']; ?>" >';
                                                     html +='   <span class="name_valid_err" style="color: red"></span> <input';
                                                       html +='     type="hidden" value="0" id="nameAlready">';
                                                       html +=' <input';
                                                       html +='     type="hidden" id="name_update"';
                                                       html +='     value="" />';
                                                   html +=' </div>';
                                            html +='    </div>';
                                         html +='   </div>';
                                          
                                       html +='     <div class="form-group has-success">';
                                              html +='  <div class="row">';
                                                 html +='   <label class="col-sm-2 control-label" style="color: white">Choose an Option </label>';
                                                 html +='   <div class="col-sm-4">';
                                                     html +='   <fieldset id="group2" style="color: white">';
                                                        html +='    <input type="radio" checked="checked" onclick="checkIsMultiple('+count+')" style="color: white" name="is_multiple_ans_'+count+'" class="is_multiple_ans_'+count+'" value="0">Single';
                                                        html +='    <input type="radio" onclick="checkIsMultiple('+count+')" style="color: white" name="is_multiple_ans_'+count+'" class="is_multiple_ans_'+count+'" value="1">Multiple';

                                                      html +='  </fieldset>';
                                                   html +=' </div>';
                                                html +='    <div>';

                                                   html +=' </div>';
                                                 html +='   <label class="col-sm-2 control-label single_andCOm_'+count+'" style="color: white;">Answer</label>';
                                                 html +='   <div class="col-sm-4 single_andCOm_'+count+'" >';
                                                    html +='    <input type="text" id="answer" name="answer" class="form-control"  >';
                                                  html +='  </div>';
                                              html +='  </div>';
                                          html +='  </div>';


                                          html +='  <div class="form-group has-success multiple_ans_com_'+count+'" style="display: none">';
                                             html +='   <div class="row">';
                                                 html +='   <label class="col-sm-2 control-label" style="color: white">Answer One</label>';
                                                 html +='   <div class="col-sm-3">';
                                                    html +='    <input type="text" id="answer" name="answer1" class="form-control"  >';
                                                html +='    </div>';

                                                 html +='   <div class="col-sm-1">';
                                                  html +='      <input type="radio" name="multiple_ans_'+count+'" value="1">';
                                                  html +='  </div>';
                                                  html +='  <label class="col-sm-2 control-label" style="color: white">Answer Two</label>';
                                                   html +=' <div class="col-sm-3">';
                                                    html +='    <input type="text" id="answer" name="answer2" class="form-control"  >';
                                                  html +='  </div>';

                                                   html +=' <div class="col-sm-1">';
                                                   html +='     <input type="radio" name="multiple_ans_'+count+'" value="1">';
                                                  html +='  </div>';

                                               html +=' </div>';
                                               html +=' <div class="row">';
                                                 html +='   <label class="col-sm-2 control-label" style="color: white">Answer Three</label>';
                                                 html +='   <div class="col-sm-3">';
                                                 html +='       <input type="text" id="answer" name="answer3" class="form-control"  >';
                                                html +='    </div>';

                                               html +='     <div class="col-sm-1">';
                                                 html +='       <input type="radio" name="multiple_ans_'+count+'" value="1">';
                                                  html +='  </div>';
                                                  html +='  <label class="col-sm-2 control-label" style="color: white">Answer Four</label>';
                                                  html +='  <div class="col-sm-3">';
                                                    html +='    <input type="text" id="answer" name="answer4" class="form-control"  >';
                                                  html +='  </div>';

                                                   html +=' <div class="col-sm-1">';
                                                   html +='     <input type="radio" name="multiple_ans_'+count+'" value="1">';
                                                   html +=' </div>';

                                               html +=' </div>';
                                          html +='  </div>';

                                           html +=' <div class="form-group has-success">';
                                            html +='    <div class="row">';
                                                html +='    <label class="col-sm-2 control-label" style="color: white">Description</label>';
                                                html +='    <div class="col-sm-4">';
                                                    html +='    <input type="text" id="description" name="description" class="form-control"  >';
                                                html +='    </div>';
                                                   html +=' <label class="col-sm-2 control-label" style="color: white">Status</label>';
                                                  html +='  <div class="col-sm-4">';
                                                     html +='   <select name="status" class="form-control">';
                                                         html +='   <option value="">Select</option>';
                                                         html +='   <option value="1" >Active</option>';
                                                          html +='  <option value="0" >InActive</option>';
                                                      html +='  </select>';

                                                  html +='  </div>';
                                            html +='    </div>';
                                           html +=' </div>';

                                      html +='  </div>';
                                      html +='  <div class="col-sm-1" id="btn_minus_'+count+'">';
                                         html +='   <button class="btn btn-danger" onclick="minusCheckData('+count+')" type="button">-</button>';
                                      html +='</div>';
                                  html +='  </div>';
        $('.dynamic_add_section').append(html);
    }
    function minusCheckData(i){
        $('.form_section_row_'+i).remove();
    }
    function checkIsMultiple(i){
        var val = $('input[name=is_multiple_ans_'+i+']:checked').val();
            if (val == 1) {
                $('.multiple_ans_com_'+i).show();
                $('.single_andCOm_'+i).hide();
            }
            if (val == 0) {
                $('.multiple_ans_com_'+i).hide();
                $('.single_andCOm_'+i).show();
            }
    }
    $(function () {
        
        
        $('#name')
                .on(
                        "change",
                        function () {
                            if ($('#name_update').val() != $('#name').val()) {
                                jQuery
                                        .ajax({
                                            type: "POST",
                                            url: "<?php echo base_url("checkUniqCategory") ?>",
                                            dataType: 'json',
                                            data: {
                                                name: $('#name').val()
                                            },
                                            success: function (res) {
                                                console.log(res.status);
                                                if (res.status) {
                                                    $('#nameAlready').val(1);
                                                    $(".name_valid_err")
                                                            .text(
                                                                    "Category Already in Use.");
                                                } else {
                                                    $(".name_valid_err")
                                                            .text("");
                                                    $('#nameAlready').val(0);
                                                }
                                            }
                                        });
                            } else {
                                $(".name_valid_err").text("");
                                $('#nameAlready').val(0);
                            }
                        });

        $('.req-save-update-btn')
                .on(
                        "click",
                        function (e) {

                            if ($('#nameAlready').val() == 1) {
                                e.preventDefault();
                                $(".name_valid_err").text(
                                        "Category Already in Use.");
                            } else {
                                $(".name_valid_err").text("");
                            }


                        });

        $("form[name='reg']").validate({
            // Specify validation rules
            rules: {

                name: "required",
                status: "required",

            },

            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

</script>