    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="User.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- script -->
    <script src="tools/js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <!-- <script src="tools/js/angular.min.js"></script> -->
    <title>MyPersonality - Personality test</title>
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
		echo "<script> alert('wrong password!'); </script>";
		echo "<center><a href='adminlogin.php'><input type='button' class='btn btn-danger' value='back'></input></a></center>";
		// header('location:adminlogin.php');
	}
?>