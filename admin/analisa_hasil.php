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
        Data Klasifikasi
        <small>Pt. </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Klasifikasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Analisa Hasil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th width="10px">#</th>
                  <th>Nama Pelamar/Atribut</th>
                  <?php
                  $kriteria=mysqli_query($konek, "SELECT * FROM tbl_kriteria");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                  <th><?=$data['nama_kriteria']?></th>
                  <?php }?>
                </tr>
                </thead>
                <tbody>
                <tr align="center">
                  <td>1</td>
                  <td>Bobot</td>
                  <?php
                  $kriteria=mysqli_query($konek, "SELECT * FROM tbl_kriteria");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                  <td><b><?=$_POST["bobotC$data[id]"]?></b></td>
                  <?php }?>
                </tr>
                <?php 
                  $no=0;
                  $kriteria=mysqli_query($konek, "SELECT tbl_pelamar.nama, tbl_klasifikasi.c1, tbl_klasifikasi.c2, tbl_klasifikasi.c3, tbl_klasifikasi.c4 FROM tbl_pelamar,tbl_klasifikasi WHERE tbl_pelamar.id=tbl_klasifikasi.id_pelamar");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                    <tr align="center">
                      <td><?php echo $no=$no+1; ?></td>
                      <td><?php print($data['nama']); ?></td>
                      <td><?=$data['c1']?></td>
                      <td><?=$data['c2']?></td>
                      <td><?=$data['c3']?></td>
                      <td><?=$data['c4']?></td>
                    </tr>
                  <?php }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Normalisasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr align="center">
                  <th width="10px">#</th>
                  <th>Nama Pelamar/Atribut</th>
                  <?php
                  $kriteria=mysqli_query($konek, "SELECT * FROM tbl_kriteria");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                  <th><?=$data['nama_kriteria']?></th>
                  <?php }?>
                </tr>
                </thead>
                <tbody>
                <tr align="center">
                  <td>1</td>
                  <td>Bobot</td>
                  <?php
                  $kriteria=mysqli_query($konek, "SELECT * FROM tbl_kriteria");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                  <td><b><?=$_POST["bobotC$data[id]"]?></b></td>
                  <?php }?>
                </tr>
                <?php 
                #Cari nilai maximal
                $carimax = mysqli_query($konek, "SELECT max(c1) as max1,
                                max(c2) as max2,
                                max(c3) as max3,
                                max(c4) as max4
                                FROM tbl_klasifikasi");
                $max = mysqli_fetch_array($carimax);
                # Cari nilai minimal
                $carimin = mysqli_query($konek, "SELECT min(c1) as min1,
                                min(c2) as min2,
                                min(c3) as min3,
                                min(c4) as min4
                                FROM tbl_klasifikasi");
                $min = mysqli_fetch_array($carimin);
                  $no=0;
                  $kriteria=mysqli_query($konek, "SELECT tbl_pelamar.nama, tbl_klasifikasi.c1, tbl_klasifikasi.c2, tbl_klasifikasi.c3, tbl_klasifikasi.c4 FROM tbl_pelamar,tbl_klasifikasi WHERE tbl_pelamar.id=tbl_klasifikasi.id_pelamar");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                    <tr align="center">
                      <td><?php echo $no=$no+1; ?></td>
                      <td><?php print($data['nama']); ?></td>
                      <td><?=round($data['c1']/$max['max1'],2)?></td>
                      <td><?=round($data['c2']/$max['max2'],2)?></td>
                      <td><?=round($data['c3']/$max['max3'],2)?></td>
                      <td><?=round($data['c4']/$max['max4'],2)?></td>
                    </tr>
                  <?php }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Perangkingan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px">#</th>
                  <th width="500px"><center>Nama Pelamar/Atribut</center></th>
                  <th><center>Nilai</center></th>
                </tr>
                </thead>
                <tbody>
                <tr align="center">
                <?php 
                $kriteria=mysqli_query($konek, "SELECT * FROM tbl_kriteria");
                  while ($data = mysqli_fetch_array($kriteria)) {
                   $bobotC[] = $_POST["bobotC$data[id]"];
                   
                   }
                  $no=0;
                  $kriteria=mysqli_query($konek, "SELECT tbl_pelamar.nama, tbl_klasifikasi.c1, tbl_klasifikasi.c2, tbl_klasifikasi.c3, tbl_klasifikasi.c4 FROM tbl_pelamar,tbl_klasifikasi WHERE tbl_pelamar.id=tbl_klasifikasi.id_pelamar");
                  while ($data = mysqli_fetch_array($kriteria)) { ?>
                    <tr align="center">
                      <td><?php echo $no=$no+1; ?></td>
                      <td><?php print($data['nama']); ?></td>
                      <td><?= round(
                        (($data['c1']/$max['max1'])*$bobotC[0])+
                        (($data['c2']/$max['max2'])*$bobotC[1])+
                        (($data['c3']/$max['max3'])*$bobotC[2])+
                        (($data['c4']/$max['max4'])*$bobotC[3]),2)?></td>
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