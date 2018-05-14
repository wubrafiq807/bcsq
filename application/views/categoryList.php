<?php include 'header.php' ?>
<!-- End header header -->
<!-- Left Sidebar  -->
<?php include'leftSideBar.php' ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active"> Category List</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <!-- /# row --><div class="row" >

            <div class="col-sm-12">
                <?php if ($this->session->flashdata('message')) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('message') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Category Details</h4>

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Modification Date</th>
                                        <th>Modified By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categoryList as $category) { ?>
                                        <tr>
                                            <td><?php echo $category['name'] ?></td>
                                            <td><?php echo trim($category['description']) ?></td>
                                            <td><?php echo trim($category['created_date']) ?></td>
                                            <td><?php echo trim($category['created_by']) ?></td>
                                            <td><?php echo trim($category['modified_date']) ?></td>
                                            <td><?php echo trim($category['modified_by']) ?></td>
                                            <td><?php echo trim($category['status']) ?></td>
                                            <td>
                                                <a href="<?php echo base_url("editCategory?id=" . $category['id']) ?>" style="width: 72px;height: 45px;text-align: center;padding-top: 12px;margin: 4px;" class="btn btn-info">Edit</a>  
                                                <a href="<?php echo base_url("deleteCategory?id=" . $category['id']) ?>" style="width: 72px;height: 45px;text-align: center;padding-top: 12px;margin: 4px;" onclick="validateForm('<?php echo base_url("deleteCategory?id=" . $category['id']) ?>')"  class="btn btn-danger">Delete</a>   
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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
        $('#myTable').DataTable();


    });
    function validateForm(url) {
        event.preventDefault(); // prevent form submit
        var form = document.forms["myForm"]; // storing the form
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
                .then((willDelete) => {
                    if (willDelete) {
                       window.location.href = url;
                    } else {
                        swal("Your imaginary data is safe!");
                    }
                });
    }
</script>