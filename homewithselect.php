<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- css -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="tes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- script -->
	<script src="tools/js/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<!-- <script src="tools/js/angular.min.js"></script> -->
	<title>MyPersonality - Personality test</title>
</head>
<body>
<?php
    include("konekmysqli.php");

    $sql = "SELECT the_question FROM question";

    if ($result = mysqli_query($db, $sql)){
        while ($row = mysqli_fetch_row($result)) 
        {
            printf ("%s(%s)\n",$row[0],$row[1]);
        }
        echo "<span>".mysqli_free_result($result)."</span>";
    }

?>
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
        <hr>
        <div class="thequestion">
            <form action="namadanemail.php" method="POST">
            <center><label style="font-family: Good Feeling Sans Demo;">Name: </label><input type="text" name="nama"/></center>
            <div class="Q">
                <p class="Q1">You find it difficult to introduce yourself to other people.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q1" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q1" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q1" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q1" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q1" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q2">You often get so lost in thoughts that you ignore or forget your surroundings.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q2" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q2" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q2" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q2" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q2" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q3">You try to respond to your e-mails as soon as possible and cannot stand a messy inbox.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q3" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q3" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q3" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q3" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q3" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q4">You find it easy to stay relaxed even when there is some pressure.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q4" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q4" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q4" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q4" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q4" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q5">You do not usually initiate conversations.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q5" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q5" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q5" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q5" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q5" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q6">You rarely do something just out of sheer curiosity.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q6" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q6" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q6" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q6" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q6" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q7">You feel superior to other people.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q7" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q7" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q7" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q7" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q7" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q8">Being organized is more important to you than being adaptable.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q8" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q8" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q8" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q8" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q8" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q9">you are usually highly motivated and energetic.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q9" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q9" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q9" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q9" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q9" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <div class="Q">
                <p class="Q10">winning debate matters less to you than making sure no one gets upset.</p>
                <p class="agree">Agree</p>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q10" checked value="1"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q10" checked value="2"/> 
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q10" checked value="3"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q10" checked value="4"/>
                </label>
                <label class="radio-inline">
                    <input type="radio" class="form-check-label" name="q10" checked value="5"/>
                </label>
                <p class="agree">Disagree</p>
            </div>
            <input type="submit" name="submit" value="SEE THE RESULT"/>
        </div>	
        </form>
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