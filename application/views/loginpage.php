<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>images/favicon.png">
        <title>Login</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url("css/") ?>helper.css" rel="stylesheet">
        <link href="<?php echo base_url("css/") ?>style.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
        <!--[if lt IE 9]>
        <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        
        <style>
            
            .error{
                color: red;
            }
        </style>
    </head>

    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
            </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">

            <div class="page-wrapper">
                <!-- Bread crumb -->

                <!-- End Bread crumb -->
                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->

                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">

                                <div class="card-body">
                                    <div class="input-states">
                                        <form class="form-horizontal" name="reg" method="POST" action="<?php echo base_url("authenticate") ?>">
                                            <div class="form-group has-danger">
                                                <div class="row" style="margin-top: 5px;">
                                                    <label class="col-sm-3 control-label"> </label>
                                                    <div class="col-sm-9">
                                                        <?php if($this->session->flashdata('loginFailed')){?>
                                                       <div class="alert alert-danger" role="alert">
                                                       <?php echo $this->session->flashdata('loginFailed')?>
                                                    </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <div class="row" >
                                                    <label class="col-sm-3 control-label"> Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="email" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group has-success">
                                                <div class="row">
                                                    <label class="col-sm-3 control-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" name="password" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group has-error has-feedback">
                                                <div class="row">
                                                    <div class="col-sm-9">

                                                        <button type="submit" style="margin-left: 250px" class="btn btn-info">Login</button>
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
<?php include 'footer.php';?>


<script>

$(function(){
    
   $("form[name='reg']").validate({
			// Specify validation rules
			rules : {
				// The key name on the left side is the name attribute
				// of an input field. Validation rules are defined
				// on the right side
				email : {                                    
                                    required : true,
					email : true
                                },
				password : "required",
				
				

			},

			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler : function(form) {
				form.submit();
			}
		});
});

</script>