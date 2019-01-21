<?php
	session_start();
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
		<div class="center-block" style="margin-top:6%;">
	        <div style="text-align:center; color:#ec8007; background-color:#eceadc;">
	            <h1>LOGIN ADMIN</h1>
	        </div>
	        <div class="center-block">
		        <form action="prosesadmin.php" method="POST">
		            <div class="form-group">
		                <label>USERNAME: </label><br/>
		                    <input type="text" name="unadmin" id="unadmin" /><br/>
		                <label>PASSWORD: </label><br/>
		                    <input type="password" name="psadmin" id="psadmin" />
		            </div>
		            <button type="submit" name="submit" class="btn btn-info">LOGIN</button>
		        </form>
		    </div>
		</div>
	</body>
</html>