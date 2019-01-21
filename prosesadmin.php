<?php
	session_start();
	$username = $_POST['unadmin'];
	$password = $_POST['psadmin'];

	if ($username == "admin" && $password == "admin") {
		$_SESSION['admin'] = $username;
		header('location:Admin_Home.php');
		echo $username;
		echo $password;
	} else {
		echo "Username dan Password yang anda masukan salah, silahkan coba lagi!";
		header('location:adminlogin.php');
	}
?>