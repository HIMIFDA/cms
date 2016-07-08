<?php
include './components/_partials/header/index.php';
include './components/_partials/sidebar/index.php';
$qStatuses = "SELECT * FROM statuses ORDER BY status ASC";
$queryStatuses = mysqli_query($connect, $qStatuses)or die(mysqli_error($connect));
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Management User
      <small>Add User</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Management User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <a href="index.php?component=management-user" class="btn btn-danger"> <= Back</a><br><br>

    <!-- Small boxes (Stat box) -->
    <div class="row">

      <div class="col-md-10">

        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Add User</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="POST" action="actions/addUser.php">
            <div class="box-body">

              <div class="form-group">
                <label for="inputFullName" class="col-sm-2 control-label">Full name</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputFullName" placeholder="Full Name" name="full_name">
                </div>
              </div>

              <div class="form-group">
                <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
              </div>

              <div class="form-group">
                <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                </div>
              </div>

              <div class="form-group">
                <label for="inputLevel" class="col-sm-2 control-label">Level</label>

                <div class="col-sm-10">
                  <select class="form-control" name="id_level">
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">User</option>
                  </select>
                </div>

              </div>

              <div class="form-group">
                <label for="inputStatus" class="col-sm-2 control-label">Status</label>

                <div class="col-sm-10">
                  <select class="form-control" name="id_status">
                    <?php
                      while($listStatuses = mysqli_fetch_array($queryStatuses)){
                    ?>
                        <option value="<?php echo $listStatuses['id']; ?>"><?php echo $listStatuses['status']; ?></option>
                    <?php
                      }
                    ?>

                  </select>
                </div>
                
              </div>

              <div class="form-group">
                <label for="inputYear" class="col-sm-2 control-label">Year</label>

                <div class="col-sm-10">
                  <select class="form-control" name="year">
                    
                    <?php
                      $date = date('Y-m-d');
                      $getYear = substr($date, 0, 4);
                      for($year = 2003; $year <= $getYear; $year++){
                      ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>  
                      <?php
                      }
                    ?>

                  </select>
                </div>
                
              </div>

              <div class="form-group">
                <label for="inputAvatar" class="col-sm-2 control-label">Avatar</label>

                <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputAvatar" name="avatar">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Quote</label>

                <div class="col-sm-10">
                  <textarea class="form-control" name="quote"></textarea>
                </div>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box -->

      </div>

    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include './components/_partials/footer/index.php';
?>