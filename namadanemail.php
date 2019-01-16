<?php
    include("konekmysqli.php");

    // if (!empty($_POST)) 
    // {
    //     $output = '';
    //     $fullname = mysqli_real_escape_string($connect, $_POST["fullname"]);
    //     $email = mysqli_real_escape_string($connect, $_POST["email"]);

    //     $query = "INSERT INTO 'user_info' (user_name, user_mail) VALUES ('$fullname', $email)";

    //     if (mysqli_query($connect, $query)) 
    //     {
    //         $output .= "<script type='text/javascript'>
    //         window.onload=function()
    //         {
    //             alert('SUCCESFULLY CONNECTED');
    //         }";
    //     }
    //     echo $output;

    // }

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

    $sql = "INSERT INTO user (name, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) VALUES 
    ('$usernama', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10')";
    $query = mysqli_query($db, $sql);

    if ($query > 0) {
        echo "<script type='text/javascript'>alert('SUKSES DONG');</script>";
        if ($q1 == 5 && $q2 == 5)
        {
            echo "alert('ini coba')";
            // header('Location: istj.php?status=sukses');
        }else{
            echo "<script type='text/javascript'>alert('yah gagal');</script>";
        }   
    } else {
        echo "<script type='text/javascript'>alert('yah datanya belom kesimpen');</script>";
    } 

    // $sql1 = "SELECT q1, q2, q3, q4, q5, q6, q7, q8, q9, q10 FROM user";
    // $query1 = mysqli_query($db, $sql);
    // $result = mysqli_fetch_assoc($query1);

    // if ($q1 == 5 && $q2 == 5)
    // {
    //     echo "<script type='text/javascript'>alert("WAGELASEH KAMU<br/>I S T J<br/>kaya aq :)");</script>";
    //     header('Location: istj.php?status=sukses');
    // }else{
    //     echo "<script type='text/javascript'>alert("yah gagal");</script>";
    // }

    ?>
    
    
    
    
    
    
    
    

