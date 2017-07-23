<?php 
include '../inc/config.php';
#set data id dan data tabel
// aksi hapus data
if ($_GET['aksi']==='hapus') {
	// hapus data pelamar
	$table = $_GET['data'];
	$id = $_GET['id'];
	if ($_GET['data']==='tbl_pelamar') {
		
		$query = "DELETE FROM $table WHERE id=$id";
		$result = mysqli_query($konek, $query);
		if ($result) {
			echo "<script>
									alert('Data Pelamar berhasil dihapus');
									document.location='pelamar.php';
								</script>";
		}
		// hapus data himpunan
	}elseif ($_GET['data']==='tbl_himpunan') {
		$query = "DELETE FROM $table WHERE id=$id";
		$result = mysqli_query($konek, $query);
		if ($result) {
			echo "<script>
									alert('Data Himpunan berhasil dihapus');
									document.location='himpunan.php';
								</script>";
		}
	}
	// aksi tambah data
}elseif ($_GET['aksi']==='tambah') {
	if ($_GET['data']==='pelamar') {
		$idP 		= $_POST['id_pelamar'];
		$nama 	=  $_POST['nama'];
		$jk 			= $_POST['jk'];
		$agama	= $_POST['agama'];
		$alamat	= $_POST['alamat'];
		$email	= $_POST['email'];
		$no_telp	= $_POST['no_telp'];
		$status_kawin = $_POST['status_kawin'];
		$pendidikan_terakhir	= $_POST['pendidikan_terakhir'];

		$sql = "INSERT INTO tbl_pelamar (id_pelamar, nama, jk, agama, alamat, email, no_telp, status_kawin, pendidikan_terakhir)
		VALUES ('$idP', '$nama', '$jk', '$agama', '$alamat', '$email', '$no_telp', '$status_kawin', '$pendidikan_terakhir')";

		if ($konek->query($sql) === TRUE) {
		    echo "<script>window.alert('Data kriteria berhasil ditambah');
		         window.location=(href='pelamar.php')</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $konek->error;
		}

	}elseif ($_GET['data']==='himpunan') {
		$id_kriteria = $_POST['id_kriteria'];
		$namahimpunan = $_POST['namahimpunan'];
		$nilai = $_POST['nilai'];
		$keterangan = $_POST['keterangan'];

		$sql = "INSERT INTO tbl_himpunan (id_kriteria, namahimpunan, nilai, keterangan)
		VALUES ('$id_kriteria', '$namahimpunan', '$nilai', '$keterangan')";
		# jika insert data berhasil maka akan mengembalikan halaman ke himpunan data
		if ($konek->query($sql) === TRUE) {
		    echo "<script>window.alert('Data Himpunan berhasil ditambah');
		         window.location=(href='himpunan.php')</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $konek->error;
		}
	}
	// aksi update data
}elseif ($_GET['aksi']==='update') {
	// jika value data adalah pelamarmaka lakukan proses update data pelamar
	if ($_GET['data']==='pelamar') {
		$id = $_GET['id'];
	}
}

$konek->close();
?>
