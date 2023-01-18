<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <img src="<?php echo base_url()?>assets/dist/img/bvr.jpg" width="210">
        </div>
      </form> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Aldila Hilman</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url()?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Projects</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url() ?>project/addProject"><i class="fa fa-plus"></i> Add Projects</a></li>
            <li><a href="<?= base_url() ?>project"><i class="fa fa-list-ul"></i> List Projects</a></li>
          </ul>
        </li> 

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Master Employee</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url() ?>employee/addEmployee"><i class="fa fa-user-plus"></i> Add Employee</a></li>
            <li class="active"><a href="<?= base_url() ?>employee"><i class="fa fa-users"></i> List Employee</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url()?>paymentreport">
            <i class="fa fa-list-alt"></i> <span>Payment Report (Open)</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url()?>paymentreport/getClosed">
            <i class="fa fa-table"></i> <span>Payment Report (Closed)</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Employee
        <small>edit selected Employee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Master Employee</a></li>
        <li class="active">Edit Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- <div class="box"> -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Employee Form</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-header -->
            <!-- form start -->
            <?php
              foreach ($employee->result() as $employee) { 
            ?>
            <form id="example" name="example" class="form-horizontal" action="<?php echo base_url()?>employee/updateEmployeeDb" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Email</label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="ID" name="id" value="<?php echo $employee->id; ?>">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="userid" value="<?php echo $employee->userid; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Password" name="password" value="<?php echo $employee->password; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Employee Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="name" value="<?php echo $employee->name; ?>">
                  </div>
                </div> 

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Position</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" style="width: 100%;" name="position">
                      <?php
                        if($employee->position == "Administrator"){
                      ?>
                        <option selected="selected">Administrator</option>
                        <option>Director</option>
                        <option>Bussines Development Manager</option>
                        <option>SAP Consultant</option>
                      <?php
                        } elseif($employee->position == "Director"){
                      ?>
                        <option>Administrator</option>
                        <option selected="selected">Director</option>
                        <option>Bussines Development Manager</option>
                        <option>SAP Consultant</option>
                      <?php
                        } elseif($employee->position == "Bussines Development Manager"){
                      ?>
                        <option>Administrator</option>
                        <option>Director</option>
                        <option selected="selected">Bussines Development Manager</option>
                        <option>SAP Consultant</option>
                      <?php
                        } elseif($employee->position == "SAP Consultant"){
                      ?>
                        <option>Administrator</option>
                        <option>Director</option>
                        <option>Bussines Development Manager</option>
                        <option selected="selected">SAP Consultant</option>
                      <?php
                        } 
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Profile Photo</label>
                  <div class="col-sm-10">
                    <input type="file" id="exampleInputFile" name="attach">
                    <p class="help-block">Browse your photo here.</p>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <a href="<?= base_url() ?>employee"><button type="button" class="btn btn-default pull-right">Cancel</button></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            </div>
            <!-- /.box-body -->
          

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    }
  ?>