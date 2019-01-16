<?php
include("konekmysqli.php");

$dropdown = $_POST['dropdown'];

$sql = "SELECT * FROM Users WHERE ID='$dropdown'";
$query = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($query)) { 
    $current_userlastname = $row['User_LastName'];
    $current_userfirstname = $row['User_FirstName'];
    $current_useremail = $row['User_Email'];
    $current_username = $row['UserName'];
    $current_userpassword = $row['UserPassword'];