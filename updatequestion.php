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
    <div style="margin-top:6%;" class="center-block">
        <div style="text-align:center; color:#ec8007;    background-color:#eceadc;">
            <h1>UPDATE QUESTION</h1>
        </div>
        <div class="center-block">
        <form action="/action_page.php">
            <div class="dropdown">
            <label>Select the Category: </label><br/>
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
            <span id="selected">Chose option</span><span class="caret"></span></button>
            <ul class="dropdown-menu" >
                <li><a href="#">Introvert vs Extrovert</a></li>
                <li><a href="#">Sensing vs Intuiting</a></li>
                <li><a href="#">Thinking vs Feeling</a></li>
                <li><a href="#">Judging vs Perceiving</a></li>
            </ul>
            </div>
            <div class="form-group">
                <label for="comment">Question:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </div>
<script type="text/javascript">
  $('.dropdown-menu a').click(function(){
    $('#selected').text($(this).text());
  });
</script>    
</body>
</html>