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
                  <input type="text" name="nama_kriteria" class="form-control" id="kriteria" placeholder="Enter Kriteria">
                </div>
                <div class="form-group col-md-6">
                  <label for="atribut">Atribut</label>
                  <select name="atribut" class="form-control">
                    <option value="benefit">Benefit</option>
                    <option value="cost">Cost</option>
                  </select>
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

                  $cek_data = mysqli_num_rows(mysqli_query($konek,"SELECT nama_kriteria FROM tbl_kriteria WHERE nama_kriteria='$_POST[nama_kriteria]'"));
                  if ($cek_data > 0){
                      echo "<script>window.alert('Data kriteria sudah ada! Mohon ulangi.');
                              window.location=(href='kriteria_tambah.php')</script>";
                } else {
                      $sql = "INSERT INTO tbl_kriteria VALUES('','$_POST[nama_kriteria]','$_POST[atribut]')";
                      $query = mysqli_query($konek,$sql);
                      if($query) {
                      echo "<script>window.alert('Data kriteria berhasil ditambah');
                              window.location=(href='kriteria.php')</script>";
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