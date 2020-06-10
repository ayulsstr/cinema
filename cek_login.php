<?php
$konek = mysqli_connect("localhost","root","","cinema21");

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($konek,"select * from pengguna where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek or set_error_handler ("custom_error") > 0){
    session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index_cinema.php");
}else{
	header("location:index.php");
}
?>