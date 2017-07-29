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
        Tambah Klasifikasi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="himpunan.php"> Klasifikasi</a></li>
        <li class="active">Tambah Klasifikasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Masukan data Klasifikasi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form action="proses.php?aksi=tambah&data=klasifikasi" method="POST">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pelamar</label>
                  <select name="id_pelamar" class="form-control select2" style="width: 100%;">
                  <?php 
                  $query = "SELECT * FROM tbl_pelamar
                            WHERE id NOT IN (SELECT id_pelamar FROM tbl_klasifikasi)";
                  $result = mysqli_query($konek,$query);
                  while ($dataP = mysqli_fetch_array($result))
                  {
                    echo "<option value='".$dataP['id']."'>".$dataP['nama']."</option>";
                  }
                  ?>
                  </select>
                </div>

                <?php 
                $queryK = "SELECT * FROM tbl_kriteria";
                $resultK = mysqli_query($konek,$queryK);
                while ($dataK = mysqli_fetch_array($resultK)) {?>
                  <div class="form-group">
                    <label><?=$dataK['nama_kriteria']?></label>
                    <select name="nama_kriteria<?=$dataK['id']?>" class="form-control select2" style="width: 100%;">
                    <?php 
                    $queryKH = "SELECT tbl_kriteria.id idK, tbl_kriteria.nama_kriteria, tbl_himpunan.* 
                      FROM tbl_himpunan RIGHT JOIN tbl_kriteria ON tbl_himpunan.id_kriteria=tbl_kriteria.id WHERE tbl_himpunan.id_kriteria=".$dataK['id'];
                    $resultKH = mysqli_query($konek,$queryKH);
                    while ($dataKH = mysqli_fetch_array($resultKH)) {?>
                      <option value="<?=$dataKH['nilai']?>"><?=$dataKH['namahimpunan']. " (".$dataKH['nilai'].")"?></option>
                    <?php }?>                      
                    </select>
                  </div>
                <?php } ?>

              </div>
              <!-- /.col -->
            </div>
            <a class="btn btn-danger" href="klasifikasi.php"><span class="fa fa-arrow-left"></span> Back</a>
            <button class="btn btn-primary pull-right" type="submit"> <span class="fa fa-save"></span> Submit</button>
            <!-- /.row -->
          </div>          
        </form>
        <!-- /.box-body -->
        <!-- <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div> -->
      </div>
      <!-- /.box -->

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
	   //Initialize Select2 Elements
	   $(".select2").select2();

	   //Datemask dd/mm/yyyy
	   $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
	   //Datemask2 mm/dd/yyyy
	   $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
	   //Money Euro
	   $("[data-mask]").inputmask();

	   //Date range picker
	   $('#reservation').daterangepicker();
	   //Date range picker with time picker
	   $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
	   //Date range as a button
	   $('#daterange-btn').daterangepicker(
	       {
	         ranges: {
	           'Today': [moment(), moment()],
	           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	           'This Month': [moment().startOf('month'), moment().endOf('month')],
	           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	         },
	         startDate: moment().subtract(29, 'days'),
	         endDate: moment()
	       },
	       function (start, end) {
	         $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	       }
	   );

	   //Date picker
	   $('#datepicker').datepicker({
	     autoclose: true
	   });

	   //iCheck for checkbox and radio inputs
	   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	     checkboxClass: 'icheckbox_minimal-blue',
	     radioClass: 'iradio_minimal-blue'
	   });
	   //Red color scheme for iCheck
	   $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	     checkboxClass: 'icheckbox_minimal-red',
	     radioClass: 'iradio_minimal-red'
	   });
	   //Flat red color scheme for iCheck
	   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
	     checkboxClass: 'icheckbox_flat-green',
	     radioClass: 'iradio_flat-green'
	   });

	   //Colorpicker
	   $(".my-colorpicker1").colorpicker();
	   //color picker with addon
	   $(".my-colorpicker2").colorpicker();

	   //Timepicker
	   $(".timepicker").timepicker({
	     showInputs: false
	   });
	 });
	</script>
</body>
</html>