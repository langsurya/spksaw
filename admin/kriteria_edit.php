<?php 
include_once '../layouts/head.php';
if (isset($_GET['edit_kriteria'])) {
  $id = $_GET['edit_kriteria'];
  $query = "SELECT * FROM tbl_kriteria WHERE id=".$id;
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
        Kriteria
        <small>Tambah Kriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="kriteria.php">Kriteria</a></li>
        <li class="active">Tambah Kriteria</li>
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
              <h3 class="box-title">Tambah Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label for="kriteria">Nama Kriteria</label>
                  <input type="text" name="nama_kriteria" class="form-control" id="kriteria" placeholder="Enter Kriteria" value="<?=$row['nama_kriteria']?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="atribut">Atribut</label>
                  <select name="atribut" class="form-control">
                    <option> Pilih Atribut</option>
                    <option value="benefit" <?=($row['atribut']=='benefit') ? 'selected' : ''; ?>>Benefit</option>
                    <option value="cost" <?=($row['atribut']=='cost') ? 'selected' : ''; ?>>Cost</option>
                  </select>
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
                $id = $_GET['edit_kriteria'];
                $nama_kriteria = $_POST['nama_kriteria'];
                $atribut = $_POST['atribut'];
                $query = "UPDATE tbl_kriteria SET nama_kriteria='$nama_kriteria', atribut='$atribut' WHERE id='$id'";
                $result = mysqli_query($konek, $query);
                if ($result) {
                  echo "<script>window.alert('Data Kriteria berhasil diubah');
                        window.location=(href='kriteria.php')</script>";
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