<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- css -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="adminfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- script -->
	<script src="tools/js/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<!-- <script src="tools/js/angular.min.js"></script> -->
	<title>MyPersonality - Personality test</title>
</head>
<body>
<?php
    include("topnavadmin.php");
?>
    <div class="center-block" style="margin-top:6%;">
        <div style="text-align:center; color:#ec8007; background-color:#eceadc;">
            <h1>NEW QUESTION</h1>
        </div>
        <div class="center-block">
        <form action="#" method="POST">
            <div class="form-group">
            <label>Select the Category: </label><br/>
                <select class="form-control" name="inputcategory" id="inilogikanya" multiple="multiple" size="1">
                    <h4><option value="Introvert vs Extrovert">Introvert vs Extrovert</option></h4>
                    <h4><option value="Sensing vs Intuiting">Sensing vs Intuiting</option></h4>
                    <h4><option value="Thinking vs Feeling">Thinking vs Feeling</option></h4>
                    <h4><option value="Judging vs Perceiving">Judging vs Perceiving</option></h4>
                </select>
            </div>
            <div class="form-group">
                <label for="comment">Question:</label>
                <textarea name="inputquestion" class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info">Submit</button>
        </form>
        <?php
        if(isset($_POST["submit"]))
        {
            if(!isset($_POST["inputcategory"])){
                $error = 'PLEASE SELECT THE CATEGORY';
                return $error;
            }elseif (!isset($_POST["inputquestion"])){
                    $error = 'PLEASE INPUT THE QUESTION';
                    return $error;
            }
        
         
         //Including dbconfig file.
        include 'konekmysqli2.php';
         
        $inputcategory=$_POST["inputcategory"];
        $inputquestion=$_POST["inputquestion"];
        
        $query = "INSERT INTO question_table (category, question) VALUES ('$inputcategory','$inputquestion')";
        $result = mysqli_query($db, $query);

        echo " Added Successfully ";
        
        }

        ?>
        </div>
    </div>
    
</body> 
</html>