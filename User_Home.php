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
    <form action="prosesuser.php" method="POST">
<?php
    include("konekmysqli2.php");

    $query = "SELECT * FROM question_table WHERE status = 1";
    $result = mysqli_query($db, $query);
    if(!$result){
        echo "salah query";
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<br/>". $row['question'];
        echo "<br/>";
        echo "
        <label class='radio-inline'><span>YES</span>
            <input type='radio' class='form-check-label' name= 'answer[".$row['id_question']."]' checked value='1'/>
        </label>
        <label class='radio-inline'><span>NO</span>
            <input type='radio' class='form-check-label' name= 'answer[".$row['id_question']."]' checked value='2'/>
        </label>
        ";
    }
?>
    <br>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
</form>
    <div class="topnav" id="myTopnav"> 
        <p class="logo">MyPersonality</p> 
        <a href="#">ABOUT</a> 
        <a href="#">REVIEW</a>
        <a href="personalitytypes.php">PERSONALITY TYPE</a>
        <a href="#" class="btn btn-info">HOME</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
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
        </div>
        
    </div>
    
   <div class="footer">
       <div>
            <div class="footer-icons col-md-6 col-xs-10">
                <a href="#"><img src="icon/002-twitter.png">mypersonality</a>
                <a href="#"><img src="icon/001-facebook.png">MyPersonality ID</a>
                <a href="#"><img src="icon/envelope.png">help@myprs.id</a>
            </div>
            <div class="copyright">
                <center><p>Copyright &#169; 2018 MyPersonality Personality Online Test Inc. All right reserved</p></center></p>
            </div>
        </div>
   </div>  

</body>
<script>

</script>
</html>