<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Category <span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('addCategory') ?>">Add Category</a></li>
                        <li><a href="<?php echo base_url("getCatList") ?>">Category List</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Sub Category <span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('addSubCategory') ?>">Add Sub Category</a></li>
                        <li><a href="<?php echo base_url("getSubCatList") ?>">Sub Category List</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Questions and Answer <span class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url('addQuestionAndAnswer') ?>">Add Que&Ans</a></li>
                        <li><a href="<?php echo base_url("getQueAndAnsList") ?>">Que&Ans List</a></li>

                    </ul>
                </li>
                <?php if ($this->session->userdata('user_session')['user_role'] == 1 || $this->session->userdata('user_session')['is_userCreation_permit'] == 1) { ?>
                    <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Users Management <span class="label label-rouded label-primary pull-right">2</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo base_url('addUsers') ?>">Create User</a></li>
                            <li><a href="<?php echo base_url("getUserList") ?>">User List</a></li>

                        </ul>
                    </li>
                <?php } ?>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
