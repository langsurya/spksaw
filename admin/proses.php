<?php 
include '../inc/config.php';

if ($_GET['aksi']='pelamar') {
	$idP 		= $_POST['id_pelamar'];
	$nama 	=  $_POST['nama'];
	$jk 			= $_POST['jk'];
	$agama	= $_POST['agama'];
	$alamat	= $_POST['alamat'];
	$no_telp	= $_POST['no_telp'];
	$status_kawin = $_POST['status_kawin'];
	$pendidikan_terakhir	= $_POST['pendidikan_terakhir'];

$sql = "INSERT INTO tbl_pelamar (id_pelamar, nama, jk, agama, alamat, no_telp, status_kawin, pendidikan_terakhir)
VALUES ('$idP', '$nama', '$jk', '$agama', '$alamat', '$no_telp', '$status_kawin', '$pendidikan_terakhir')";

if ($konek->query($sql) === TRUE) {
    echo "<script>window.alert('Data kriteria berhasil ditambah');
         window.location=(href='pelamar.php')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $konek->error;
}

$konek->close();
}
?>