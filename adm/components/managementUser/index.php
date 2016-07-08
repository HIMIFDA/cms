<?php
include './components/_partials/header/index.php';
include './components/_partials/sidebar/index.php';
$qUsers = "SELECT u.full_name, u.email, u.id, u.username, s.status FROM users u
        INNER JOIN statuses s ON u.id_status=s.id
        ORDER BY full_name ASC";
$queryUsers = mysqli_query($connect, $qUsers)or die(mysqli_error($connect));
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Management user
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Management User</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <a href="index.php?component=management-user-add" class="btn btn-primary">Add User</a><br><br>

    <!-- notification -->
    <?php
    if (isset($_GET['message'])) {
      if ($_GET['message'] === 'add-success') { ?>
      
      <div class="alert alert-success">
        <strong>Success!</strong> Successfully add new user.
      </div> 

    <?php
      }
    }
    ?>

    <!-- Small boxes (Stat box) -->
    <div class="row">

      <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Email</th>
              <th>Full Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while($list = mysqli_fetch_array($queryUsers)){
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $list['username']; ?></td>
                  <td><?php echo $list['email']; ?></td>
                  <td><?php echo $list['full_name']; ?></td>
                  <td><?php echo $list['status']; ?></td>
                  <td><a href="actions/deleteUser.php?id=<?php echo $list['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
              <?php
              $no++;
              }
              ?>
          </tbody>
      </table>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include './components/_partials/footer/index.php';
?>