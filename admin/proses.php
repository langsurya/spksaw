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
	}elseif ($_GET['data']==='klasifikasi') {
		$queryK = "SELECT * FROM tbl_kriteria";
  $resultK = mysqli_query($konek,$queryK);
  $idP = $_POST['id_pelamar'];

  $sql = "INSERT INTO tbl_klasifikasi (id_pelamar, c1, c2, c3, c4, c5)
		VALUES ('$idP' ";
	  while ($dataK = mysqli_fetch_array($resultK)) {
	  	$sql .=	",".$_POST["nama_kriteria$dataK[id]"];
	  }
		$sql .= ")";
		# jika insert data berhasil maka akan mengembalikan halaman ke himpunan data
		if ($konek->query($sql) === TRUE) {
		    echo "<script>window.alert('Data Klasifikasi berhasil ditambah');
		         window.location=(href='klasifikasi.php')</script>";
		} else {
		    echo "Error: " . $sql . "<br>" . $konek->error;
		}
		echo $sql;
	}
	// aksi update data
}elseif ($_GET['aksi']==='update') {
	// jika value data adalah pelamar maka lakukan proses update data pelamar
	if ($_GET['data']==='pelamar') {
		$id = $_GET['id'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$status_kawin = $_POST['status_kawin'];
		$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$query = "UPDATE tbl_pelamar SET nama='$nama', jk='$jk', agama='$agama', status_kawin='$status_kawin', pendidikan_terakhir='$pendidikan_terakhir', email='$email', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";
		$result = mysqli_query($konek, $query);
   if ($result) {
     echo "<script>window.alert('Data Pelamar berhasil diubah');
           window.location=(href='pelamar_edit.php?id=$id')</script>";
   }else{
     echo "Error updating record: " . mysqli_error($konek);
   }

	}elseif ($_GET['data']==='himpunan') {
		$id_kriteria = $_POST['id_kriteria'];
		$namahimpunan = $_POST['namahimpunan'];
		$nilai = $_POST['nilai'];
		$keterangan = $_POST['keterangan'];
		$id = $_POST['id'];

		$query = "UPDATE tbl_himpunan SET id_kriteria='$id_kriteria', namahimpunan='$namahimpunan', nilai='$nilai', keterangan='$keterangan' WHERE id='$id'";
		$result = mysqli_query($konek, $query);
   if ($result) {
     echo "<script>window.alert('Data Himpunan berhasil diubah');
           window.location=(href='himpunan_edit.php?id=$id')</script>";
   }else{
     echo "Error updating record: " . mysqli_error($konek);
   }

	}
}

$konek->close();
?>
