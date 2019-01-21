<?php
   session_start();
   if(empty($_SESSION['useremail'])) {
        header('location:mypersonality.php'); 
    }
   // require_once("konekmysqli2.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="User.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- script -->
    <script src="tools/js/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <!-- <script src="tools/js/angular.min.js"></script> -->
    <title>MyPersonality - Personality test</title>
</head>
<body>
<?php
include('topnavigation.php');
?>
    <div class="therules">
        <div class="titletypes">
                <center><p><h2>ATTENTION</h2></p></center>
        </div>
        <div class="row rules">
            <div class="col-md-3 col-xs-12">
                <div class="ruleimg">
                    <img title="timer" src="img/timer.png">
                </div>
                <div class="ruletext"><p>Answer the questions in 15 minutes</p></div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="ruleimg">
                    <img title="timer" src="img/honest-icon.png">
                </div>
                <div class="ruletext"><p>Please answer honestly, even when you do not like the answer.</p></div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="ruleimg">
                    <img title="timer" src="img/fulfill-icon.png">
                </div>
                <div class="ruletext"><p>and do not left any questions with no answer</p></div>
            </div>
        </div><br/><br/>
        
    </div>
<center><form action="prosesuser.php" method="POST">
<?php
    include("konekmysqli2.php");

    $query = "SELECT * FROM question_table WHERE status = 1";
    $result = mysqli_query($db, $query);
    if(!$result){
        echo "salah query";
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<br/><br/><span style='font-family:good feeling sans demo;font-size:17px;'>". $row['question']."</span>";
        echo "<br/>";
        echo "
        <label class='radio-inline' style='margin-left:-1%;font-family:good feeling sans demo; font-weight:bold; color: forestgreen;font-size:17px;'>YES</label><input type='radio' style='margin-left:5px;'class='form-check-label' name= 'answer[".$row['id_question']."]' checked autocomplete='off' value='1'/>
        <input type='radio' style='margin-left:2%;margin-right:-1%;'class='form-check-label' name= 'answer[".$row['id_question']."]' checked autocomplete='off' value='2'/><label class='radio-inline' style='font-family:good feeling sans demo; font-weight:bold; color: firebrick;font-size:17px;'>NO</label>
        ";
    }
?>
    <br/><br/>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
</form></center>
<?php
include('footer.php');
?>  

</body>
<script>

</script>
</html>