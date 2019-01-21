<?php
    session_start();
    if(empty($_SESSION['admin'])) {
        header('location:adminlogin.php'); 
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- css -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- script -->
	<script src="tools/js/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<!-- <script src="tools/js/angular.min.js"></script> -->
	<title>MyPersonality - Personality test</title>
</head>
<body>
<?php
include('topnavadmin.php');
?>
      <div style="background-color: snow;">
      <div class="column fpimg">
        <!-- <img src="img/image1.svg" alt="The Personalities"/> -->
        <img src="img/infp-mediator.svg"/>
      </div>
      <div class="text">
      <div class="column fptext">
          <div class="fptext1">
            <p class="word1">WELCOME TO</p>
            <p class="word2">MyPersonality</p>
          </div>
      </div>
      </div>
    </div>
      <center><p class="hello">"Hello, Admin !"</p></center>
</body>
<script type="text/javascript">
      /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>
</html>