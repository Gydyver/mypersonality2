<?php
    session_start();
    include("konekmysqli2.php");
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    // buat naro kodingan retrieve * yang user_email nya sama dengan email yang dimasukin. tujuannya buat nyari email sudah ada di database atau belum
    $sql = "SELECT * FROM user_table WHERE user_email = '$email'";
    // buat ngejalanin query di atas
    $query = mysqli_query($db,$sql);
    // ngambil datanya ada atau tidak??
    $numrows = mysqli_num_rows($query);
    // kalo ada
    if ($numrows > 0) {
        // buat ngambil data satu row yang ada
       $row = mysqli_fetch_row($numrows);
       $sq2 = "SELECT id_user FROM user_table WHERE user_email = '$email'";
       $query = mysqli_query($db,$sq2);
       // buat masukin id yang di dapet dari select diatas ke session
       $_SESSION['userid'] = $query;
       //lempar ke halaman result
       header('location:Result.php');
    }else{
        // buat masukin ke session
        $_SESSION['username'] = $name;
        $_SESSION['useremail'] = $email;
        //lempar ke halaman pertanyaan
        header('location:User_Home.php');
    }

        
   //     $_SESSION['userid'] = mysql_fetch_row($query);
   //     header('location:User_Home.php');
   // } else {
   //   if(!$name ||!$email) {
   //     echo "<div align='center'> There is an empty one! <a href='SignUp.php'>Back</a>";

   //   } else {
   //     $data = "INSERT INTO user_table(user_name,user_email) VALUES ('$name', '$email')";
   //     $simpan = mysqli_query($db, $data);
   //     if($simpan) {
   //       echo "<div align='center'>Sign Up success!, please <a href='login.php'>Login</a></div>";
   //     } else {
   //       echo "<div align='center'>Process failed!</div>";
   //     }
   //   }
   // }

    //INI LOGIN WOY
           // session_start();
           // require_once("konekmysqli2.php");
           // $username = $_POST['fullname'];
           // $email = $_POST['email'];   
           // $sql = "SELECT * FROM user_table WHERE user_email = '$email'";
           // $query = $dbname->query($sql);
           // $hasil = $query->fetch_assoc();
           // if($query->num_rows == 0) {
           //   echo "<div align='center'>Username hasn't been registered! <a href='login.php'>Back</a></div>";
           // } else {
           //   if($password <> $hasil['password']) {
           //     echo "<div align='center'>Incorrect Password! <a href='login.php'><br>Back</a></div>";
           //   } else {
           //     $_SESSION['username'] = $hasil['username'];
           //     header('location:index.php');
           //   }
           // }    

        // if(isset($_POST["insert"]))
        // {
        //     if(!isset($_POST["fullname"])){
        //         $error = 'PLEASE INPUT YOUR NAME';
        //         return $error;
        //     }elseif (!isset($_POST["email"])){
        //             $error = 'PLEASE INPUT YOUR EMAIL';
        //             return $error;
        //     }
    
        // //Including dbconfig file.
        // include 'konekmysqli2.php';

        // $inputname=$_POST["fullname"];
        // $inputemail=$_POST["email"];

        // $query = "SELECT user_email FROM user_table where user_email = '".$inputemail."'";
        // $result = mysqli_query($db, $query);
        // if($result){
        //     while ($row = mysqli_fetch_row($result)) {
        //         if (isset($inputemail->user_email)) {
        //             echo "ada";
        //         }else{
        //              $query = "INSERT INTO user_table (user_email,user_name) VALUES ('$inputemail','$inputname')";
        //              $result = mysqli_query($db, $query);
  
        //              echo " Added Successfully ";
                        
        //              }
        //         }
        //     }
        // }
        
         //Including dbconfig file.
        // include 'konekmysqli2.php';
         
        // $inputname=$_POST["fullname"];
        // $inputemail=$_POST["email"];
        


       

        // ?>