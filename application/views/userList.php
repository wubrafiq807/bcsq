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
                <li class="breadcrumb-item active"> User List</li>
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
                <?php if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error') ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>User Name</th>
                                        <th>Phone</th>
                                        <th>User Role</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Modification Date</th>
                                        <th>Modified By</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($listUser)){ foreach ($listUser as $user) { ?>
                                        <tr>
                                            <td><?php echo $user['full_name'] ?></td>
                                            <td><?php echo trim($user['email']) ?></td>
                                            <td><?php echo trim($user['username']) ?></td>
                                            <td><?php echo trim($user['phone']) ?></td>
                                            <td><?php
                                            if($user['user_role']==2){
                                                echo 'Administrator';
                                            }else{
                                                echo 'General User';
                                            }
                                            ?></td>
                                            <td><?php echo $user['created_date']?></td>
                                            <td><?php echo $user['creatorInfo']['full_name']?></td>                                            
                                            <td>
                                                
                                                <?php
                                                if($user['modified_by']){
                                                echo trim($user['modified_date']);
                                                }else{
                                                    echo 'Not Modified Yet.';
                                                }
                                                ?>
                                            
                                            </td>
                                            <td>
                                                <?php
                                                if($user['modified_by']){
                                                echo trim($user['modificatorInfo']['full_name']);
                                                }else{
                                                    echo 'Not Modified Yet.';
                                                }
                                                ?>
                                               
                                            
                                            </td>
                                            <td style="<?php if($user['status']==1){ echo 'color:green';}else{    echo 'color:red'; }?> "><?php if($user['status']==1){ echo 'Active';}else{    echo 'Inactive'; }?></td>
                                            <td>
                                                <a href="<?php echo base_url("editUser?id=" . $user['id']) ?>" style="width: 72px;height: 45px;text-align: center;padding-top: 12px;margin: 4px;" class="btn btn-info">Edit</a>  
                                                <a href="<?php echo base_url("deleteUser?id=" . $user['id']) ?>" style="width: 72px;height: 45px;text-align: center;padding-top: 12px;margin: 4px;" onclick="validateForm('<?php echo base_url("deleteUser?id=" . $user['id']) ?>')"  class="btn btn-danger">Delete</a>   
                                            </td>
                                        </tr>
                                    <?php } }?>
                                </tbody>
                            </table>
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