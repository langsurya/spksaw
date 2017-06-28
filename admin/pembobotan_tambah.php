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
        Pembobotan
        <small>Tambah Pembobotan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="pembobotan.php">Pembobotan</a></li>
        <li class="active">Tambah Pembobotan</li>
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
              <h3 class="box-title">Tambah Pembobotan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="pembobotan">Nama Pembobotan</label>
                  <input type="text" name="nama_bobot" class="form-control" id="pembobotan" placeholder="Enter Pembobotan">
                </div>
                <div class="form-group col-md-6">
                  <label for="nilai">Nilai</label>
                  <input type="text" name="nilai" class="form-control" id="nilai" placeholder="Enter Nilai">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                <button class='btn btn-danger' onclick="self.history.back()" type='button'><i class="fa fa-arrow-left"></i> Batal</button>
              </div>
            </form>
            <?php
              if(isset($_POST['simpan'])){

                  $cek_data = mysqli_num_rows(mysqli_query($konek,"SELECT nama_bobot FROM tbl_pembobotan WHERE nama_bobot='$_POST[nama_bobot]'"));
                  if ($cek_data > 0){
                      echo "<script>window.alert('Data pembobotan sudah ada! Mohon ulangi.');
                              window.location=(href='pembobotan_tambah.php')</script>";
                } else {
                      $sql = "INSERT INTO tbl_pembobotan VALUES('','$_POST[nama_bobot]','$_POST[nilai]')";
                      $query = mysqli_query($konek,$sql);
                      if($query) {
                      echo "<script>window.alert('Data pembobotan berhasil ditambah');
                              window.location=(href='pembobotan.php')</script>";
                      }
                  }
              }
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
	
</body>
</html>