<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="mypersonality";

    $db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
	die("Gagal terhubung dengan database".mysqli_connect_error());
}
?>