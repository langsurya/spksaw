<?php 
session_start();
include "inc/config.php";

echo $username = $_POST['username'];
echo $password = md5($_POST['password']); //proses enkripsi & pencocokan

$login = mysqli_query($konek,"SELECT * FROM tbl_users WHERE username='$username' and password='$password'");
$data = mysqli_fetch_array($login);

if(mysqli_num_rows($login)==1){
	$_SESSION['username']=$data['username'];
	$_SESSION['password']=$data['password'];
	$_SESSION['full_name']=$data['full_name'];

	header('location:admin/');
} else {
	header('location:login.php?error=4');
}