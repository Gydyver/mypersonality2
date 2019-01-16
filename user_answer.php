<?php
 include("koneksi.php");

//  mysql_select_db("mypersonality");

 if(isset($_POST['submit'])){
        $usernama = $_POST['nama'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];

        $sql = "INSERT INTO user (name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES (:nama, :q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10)";
        $stat = $conn->prepare($sql);
        $stat -> execute(array(':nama'=>$usernama,
                            ':q1'=>$q1,
                            ':q2'=>$q2,
                            ':q3'=>$q3,
                            ':q4'=>$q4,
                            ':q5'=>$q5,
                            ':q6'=>$q6,
                            ':q7'=>$q7,
                            ':q8'=>$q8,
                            ':q9'=>$q9,
                            ':q10'=>$q10));
                            };
?>