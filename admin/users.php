<?php 
include_once '../layouts/head.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php 
			include_once '../layouts/header.php';
  	include_once '../layouts/sidebar.php';
		?>
		<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Users
        <small>Pt. </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Users</h3>
              <a href="users_tambah.php" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Users</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th width="10px">#</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no=0;
                  $users=mysqli_query($konek, "SELECT * FROM tbl_users");
                  while ($data = mysqli_fetch_array($users)) { ?>
                    <tr align="center">
                      <td><?php echo $no=$no+1; ?></td>
                      <td><?php print($data['full_name']); ?></td>
                      <td><?php print($data['username']); ?></td>
                      <td><?php print($data['email']); ?></td>
                      <td>
                        <a href="users_edit.php?id=<?=$data['id']?>"><i class="fa fa-edit"></i></a> <a href="hapus.php?data=tbl_users&id=<?=$data['id']?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    
    <!-- /.content -->
  </div>

		<?php include_once '../layouts/copyright.php'; ?>
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- Page script js-->
	<?php include_once '../layouts/footer.php'; ?>
	<script>
	 $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
	</script>
</body>
</html>