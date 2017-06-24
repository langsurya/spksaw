<?php
define("HOST", "localhost"); // Host database
define("USER", "root"); // Username database
define("PASSWORD", ""); // Password database
define("DATABASE", "spk_saw"); // Nama database
 
$konek = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
 
if (mysqli_connect_errno()) {
  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal"
}