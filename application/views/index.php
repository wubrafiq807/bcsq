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
                    <div class="col-lg-6 " style="text-align: center">
                        <div class="card">
                            <div class="card-title">
                                <h4>Total Number of Category</h4>

                            </div>
                            <div class="card-body">
                                <div class="input-states" >
                                    <a href="<?php echo base_url('getCatList')?>" class="btn btn-xl btn-info">
                                         <?php echo $cat['totalCategory']?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" style="text-align: center">
                        <div class="card">
                            <div class="card-title">
                                <h4>Total Number of Sub Category</h4>

                            </div>
                            <div class="card-body">
                                <div class="input-states" >
                                    <a href="<?php echo base_url('getSubCatList')?>" class="btn btn-xl btn-info">
                                         <?php echo $subcat['totalSubCat']?>
                                    </a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->

                    
                    <!-- /# column -->
                </div>
                <div class="row">
                    <div class="col-lg-12" style="text-align: center">
                        <div class="card">
                            <div class="card-title">
                                <h4>Total Number of Que&&Ans</h4>

                            </div>
                            <div class="card-body">
                                <div class="input-states" >
                                    <a href="<?php echo base_url('getQueAndAnsList')?>" class="btn btn-xl btn-info">
                                         <?php echo $totalQue['totalQuestion']?>
                                    </a>
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