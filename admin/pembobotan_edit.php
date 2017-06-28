<?php 
include_once '../layouts/head.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_pembobotan WHERE id=".$id;
  $result = mysqli_query($konek, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
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
        Pembobotan
        <small>Edit Pembobotan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="pembobotan.php">Pembobotan</a></li>
        <li class="active">Edit Pembobotan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pembobotan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="kriteria">Nama Bobot</label>
                  <input type="text" name="nama_bobot" class="form-control" id="kriteria" placeholder="Enter Kriteria" value="<?=$row['nama_bobot']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="nilai">Nilai</label>
                  <input type="text" name="nilai" class="form-control" id="nilai" placeholder="Enter Nilai" value="<?=$row['nilai']?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Update</button>
                <button class='btn btn-danger' onclick="self.history.back()" type='button'><i class="fa fa-arrow-left"></i> Batal</button>
              </div>
            </form>
            <?php
              if(isset($_POST['update'])){
                $id = $_GET['id'];
                $nama_bobot = $_POST['nama_bobot'];
                $nilai = $_POST['nilai'];
                $query = "UPDATE tbl_pembobotan SET nama_bobot='$nama_bobot', nilai='$nilai' WHERE id='$id'";
                $result = mysqli_query($konek, $query);
                if ($result) {
                  echo "<script>window.alert('Data Pembobotan berhasil diubah');
                        window.location=(href='pembobotan.php')</script>";
                }else{
                  echo "Error updating record: " . mysqli_error($konek);
                }
              }
               mysqli_close($konek);
              ?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    
    <!-- /.content -->
  </div>

		<?php include_once '../layouts/copyright.php'; ?>
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- Page script js-->
	<?php include_once '../layouts/footer.php'; ?>
	<!-- code JS -->
</body>
</html>