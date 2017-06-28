<?php 
include '../inc/config.php';

// ambil nama tabel yang datanya ingin di hapus
$tabel = $_GET['data'];
// ambil id data yang akan di hapus
$id = $_GET['id'];

if (isset($_GET['data'])) {
	if ($_GET['data']==='tbl_kriteria') {

		$query = "DELETE FROM $tabel WHERE id=$id";
		$result = mysqli_query($konek, $query);
		if ($result) {
			echo "<script>
									alert('Data kriteria berhasil dihapus');
									document.location='kriteria.php';
								</script>";
		}

	}elseif ($_GET['data']==='tbl_pembobotan') {

		$query = "DELETE FROM $tabel WHERE id=$id";
		$result = mysqli_query($konek, $query);
		if ($result) {
			echo "<script>
									alert('Data pembobotan berhasil dihapus');
									document.location='pembobotan.php';
								</script>";
		}

	}else{
		echo 'Tabel ' . $_GET['data'] . " Tidak Ada.. ";
		echo "<a href=index.php >Home</a>";
	}
}
