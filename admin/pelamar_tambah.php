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
        Tambah Pelamar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Tambah Pelamar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Masukan data pelamar</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>No Pelamar</label>
                <input type="text" class="form-control" name="no">
              </div>
              <div class="form-group">
                <label>Nama Pelamar</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <input type="text" class="form-control" name="agama">
              </div>
              <div class="form-group">
                <label>Alamat Pelamar</label>
                <input type="text" class="form-control" name="">
              </div>
              <div class="form-group">
                <label>No Telp</label>
                <input type="text" class="form-control" name="no_telp">
              </div>
              <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name="status">
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Lulusan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option value="SMA">SMA/SMK</option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>IPK</label>
                <input type="text" class="form-control" name="ipk">
              </div>
            </div>
            <!-- /.col -->
          </div>

          <a  class="btn btn-danger" href="pelamar.php"><span class="fa fa-arrow-left"></span> Back</a>
          <button class="btn btn-primary pull-right" type="submit"> <span class="fa fa-save"></span> Submit</button>
          <!-- /.row -->
        </div>
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