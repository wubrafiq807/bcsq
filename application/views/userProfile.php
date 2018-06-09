
<?php

include 'header.php'

?>
<!-- End header header -->
<!-- Left Sidebar  -->
<?php include'leftSideBar.php' ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->

<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">User</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
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
                        <h4>User Details</h4>

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" name="reg" method="POST" action="<?php echo base_url("updateUserInfo") ?>" enctype="multipart/form-data">
                                <?php if($this->session->flashdata('message')){?>
                                <div class="form-group has-success" >
                                    <div class="row">
                                        <label class="col-sm-3"></label>
                                        <div class="col-sm-9">
                                            
                                            <div class="alert alert-success">
                                                <?php echo $this->session->flashdata('message')?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="email" name="email" class="form-control" value="<?php if (isset($userInfo['email'])) echo $userInfo['email']; ?>" >
                                            <span class="email_valid_err" style="color: red"></span> <input
                                                type="hidden" value="0" id="emailAlready">
                                            <input
                                                type="hidden" id="email_update"
                                                value="<?php if (isset($userInfo['email'])) echo $userInfo['email']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="full_name" name="full_name" class="form-control" value="<?php if (isset($userInfo['full_name'])) echo trim($userInfo['full_name']); ?>" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="phone" name="phone" class="form-control" value="<?php if (isset($userInfo['phone'])) echo trim($userInfo['phone']); ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password" name="password" class="form-control"  >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password_confirm" name="password_confirm" class="form-control"  >
                                        </div>
                                    </div>
                                </div>

                                
                                
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Profile Picture</label>
                                        <div class="col-sm-2">
                                            <?php if(empty($userInfo['image'])&& $userInfo['gender']==1){?>
                                            <img src="<?php echo base_url('images/avatar/2.jpg')?>" width="150" height="160">
                                            <?php }?>
                                            <?php if(empty($userInfo['image'])&& $userInfo['gender']==2){?>
                                            <img src="<?php echo base_url('images/avatar/7.jpg')?>" width="150" height="160">
                                            <?php }?>
                                            <?php if(!empty($userInfo['image'])){?>
                                            <img src="<?php echo base_url('images/users/'.$userInfo['image'].'')?>" width="150" height="160">
                                            <?php }?>
                                        </div>
                                        <div class="col-sm-7">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group has-warning">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info req-save-update-btn">Update User Info</button>
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

    $(function () {
        $('#email')
                .on(
                        "change",
                        function () {
                            if ($('#email_update').val() != $('#email').val()) {
                                jQuery
                                        .ajax({
                                            type: "POST",
                                            url: "<?php echo base_url("checkUniqEmail") ?>",
                                            dataType: 'json',
                                            data: {
                                                email: $('#email').val()
                                            },
                                            success: function (res) {
                                                console.log(res.status);
                                                if (res.status) {
                                                    $('#emailAlready').val(1);
                                                    $(".email_valid_err")
                                                            .text(
                                                                    "Email Already in Use.");
                                                } else {
                                                    $(".email_valid_err")
                                                            .text("");
                                                    $('#emailAlready').val(0);
                                                }
                                            }
                                        });
                            } else {
                                $(".email_valid_err").text("");
                                $('#emailAlready').val(0);
                            }
                        });

        $('.req-save-update-btn')
                .on(
                        "click",
                        function (e) {

                            if ($('#emailAlready').val() == 1) {
                                e.preventDefault();
                                $(".email_valid_err").text(
                                        "Email Address Already in Use.");
                            } else {
                                $(".email_valid_err").text("");
                            }


                        });

        $("form[name='reg']").validate({
            // Specify validation rules
            rules: {

                email:"required",
                full_name: "required",
                phone: "required",
                status: "required",
                password : {
                    minlength : 5
                },
                password_confirm : {
                    minlength : 5,
                    equalTo : "#password"
                }

            },

            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function (form) {
                form.submit();
            }
        });
    });

</script>