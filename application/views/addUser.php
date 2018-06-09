
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
                <li class="breadcrumb-item active">Add New User</li>
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
                        <h4>Create New User</h4>

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" name="reg" method="POST" action="<?php echo base_url("createUser") ?>" enctype="multipart/form-data">
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">User Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="username" name="username" class="form-control" value="<?php if (isset($userInfo['email'])) echo $userInfo['email']; ?>" >
                                            <span class="username_valid_err" style="color: red"></span> <input
                                                type="hidden" value="0" id="usernameAlready">

                                        </div>
                                        <label class="col-sm-2 control-label">Email Address</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="email" name="email" class="form-control" value="<?php if (isset($userInfo['email'])) echo $userInfo['email']; ?>" >
                                            <span class="email_valid_err" style="color: red"></span> <input
                                                type="hidden" value="0" id="emailAlready">
                                            <input
                                                type="hidden" id="email_update"
                                                value="<?php if (isset($userInfo['email'])) echo $userInfo['email']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--                                <div class="form-group has-success">
                                                                    <div class="row">
                                                                       
                                                                    </div>
                                                                </div>-->
                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">Full Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="full_name" name="full_name" class="form-control" value="<?php if (isset($userInfo['full_name'])) echo trim($userInfo['full_name']); ?>" >
                                        </div>

                                        <label class="col-sm-2 control-label">Phone Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" id="phone" name="phone" class="form-control" value="<?php if (isset($userInfo['phone'])) echo trim($userInfo['phone']); ?>" >
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" id="password" name="password" class="form-control"  >
                                        </div>
                                        <label class="col-sm-2 control-label">Confirm Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" id="password_confirm" name="password_confirm" class="form-control"  >
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">User Management permission</label>

                                        <div class="col-sm-1">
                                            <input type="checkbox" name="is_userCreation_permit" class="form-control">
                                        </div>
                                        <label class="col-sm-2 control-label">Category Management permission</label>

                                        <div class="col-sm-1">
                                            <input type="checkbox" name="is_cat_permit" class="form-control" >
                                        </div>
                                        <label class="col-sm-2 control-label"> Sub Category Management permission</label>

                                        <div class="col-sm-1">
                                            <input type="checkbox" name="is_subcat_permit" class="form-control" >
                                        </div>
                                        <label class="col-sm-2 control-label">Que&&Ans Management permission</label>

                                        <div class="col-sm-1">
                                            <input type="checkbox" name="is_que_permit" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group has-success">
                                    <div class="row">
                                        <label class="col-sm-2 control-label">Profile Picture</label>

                                        <div class="col-sm-4">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <label class="col-sm-2 control-label">Select User Type</label>

                                        <div class="col-sm-4">
                                            <select class="form-control" name="user_role">
                                                <option value="">----------------------</option>
                                                <option value="2">Admin User</option>
                                                <option value="3">General User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <div class="row">
                                        
                                        <label class="col-sm-2 control-label">Status</label>

                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                                
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <div class="row">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-info req-save-update-btn">Create New User</button>
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
        $('#username')
                .on(
                        "change",
                        function () {
                            jQuery
                                    .ajax({
                                        type: "POST",
                                        url: "<?php echo base_url("checkUniqUserName") ?>",
                                        dataType: 'json',
                                        data: {
                                            username: $('#username').val()
                                        },
                                        success: function (res) {
                                            console.log(res.status);
                                            if (res.status) {
                                                $('#usernameAlready').val(1);
                                                $(".username_valid_err")
                                                        .text(
                                                                "User Name Already in Use.");
                                            } else {
                                                $(".username_valid_err")
                                                        .text("");
                                                $('#usernameAlready').val(0);
                                            }
                                        }
                                    });
                        });
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
                            if ($('#usernameAlready').val() == 1) {
                                e.preventDefault();
                                $(".username_valid_err").text(
                                        "Username Already in Use.");
                            } else {
                                $(".username_valid_err").text("");
                            }


                        });

        $("form[name='reg']").validate({
            // Specify validation rules
            rules: {

                email: "required",
                full_name: "required",
                phone: "required",
                status: "required",
                username: "required",
                user_role: "required",
                password: {
                    minlength: 5,
                    required: true
                },
                password_confirm: {
                    minlength: 5,
                    equalTo: "#password"
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