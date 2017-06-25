<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Metode SAW</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Font Awesome online -->
<<<<<<< HEAD
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> -->
  <!-- Font Awesome offline-->
  <link rel="stylesheet" href="../ui/font-awesome-4.7.0/css/font-awesome.min.css">
=======
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Font Awesome offline-->
  <!-- <link rel="stylesheet" href="../ui/font-awesome-4.7.0/css/font-awesome.min.css"> -->
>>>>>>> 5eba066555539e48a16e3753ba235e6a27ff166d

  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="../ui/ionicons-2.0.1/css/ionicons.min.css">
<<<<<<< HEAD
  <!-- DataTables -->
  <link rel="stylesheet" href="../ui/plugins/datatables/dataTables.bootstrap.css">
=======

>>>>>>> 5eba066555539e48a16e3753ba235e6a27ff166d
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../ui/plugins/daterangepicker/daterangepicker.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../ui/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../ui/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../ui/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../ui/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../ui/plugins/select2/select2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../ui/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../ui/plugins/iCheck/square/blue.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../ui/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../ui/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../ui/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../ui/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<<<<<<< HEAD
=======
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

>>>>>>> 5eba066555539e48a16e3753ba235e6a27ff166d
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  //redirect ke halaman login
  header('location:../');
}
?>