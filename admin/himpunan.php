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
        Data Himpunan
        <!-- <small>Pt. </small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Himpunan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Himpunan</h3>
              <a href="himpunan_tambah.php" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">#</th>
                  <th>Nama Kriteria</th>
                  <th>Nama Himpunan</th>
                  <th>Nilai</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                $kriteria=mysqli_query($konek, "SELECT tbl_himpunan.*, tbl_kriteria.nama_kriteria, tbl_kriteria.id as id_k  FROM tbl_himpunan, tbl_kriteria WHERE tbl_himpunan.id_kriteria=tbl_kriteria.id order by tbl_kriteria.id asc");
                while ($data = mysqli_fetch_array($kriteria)) { ?>
                <tr>
                  <td><?=$no++?></td>
                  <td><?=$data['nama_kriteria']?></td>
                  <td><?=$data['namahimpunan']?></td>
                  <td><?=$data['nilai']?></td>
                  <td><?=$data['keterangan']?></td>
                  <td>
                    <a href="himpunan_edit.php?id=<?php echo $data['id']; ?>"><i class='fa fa-edit'></i>
                    </a>
                    <a href="proses.php?aksi=hapus&data=tbl_himpunan&id=<?php echo $data['id']; ?>"><i class='fa fa-eraser'></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
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