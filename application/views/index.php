<?php include 'header.php'?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
		<?php include'leftSideBar.php'?>
         <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Input States</h4>

                            </div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal">
                                        <div class="form-group has-success">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with success</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with warning</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-error">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with error</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-success has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with success</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                    <span class="ti-check form-control-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-warning has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with warning</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                    <span class="ti-alert form-control-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-error has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with error</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                    <span class="ti-close form-control-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-default has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input with icon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control">
                                                    <span class="ti-user form-control-feedback"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-success has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input group with success</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="ti-user"></i></span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <span class="ti-check form-control-feedback"></span>
                                                    <span class="sr-only">(success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-warning has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input group with warning</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="ti-user"></i></span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <span class="ti-alert form-control-feedback"></span>
                                                    <span class="sr-only">(warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-error has-feedback">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Input group with error</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="ti-user"></i></span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <span class="ti-close form-control-feedback"></span>
                                                    <span class="sr-only">(error)</span>
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
           <?php include'footer.php'?>