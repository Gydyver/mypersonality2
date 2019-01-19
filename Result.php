<?php
	session_start();
	session_destroy();
	echo "ini halaman gagal";
	header('location:mypersonality.php')
?>