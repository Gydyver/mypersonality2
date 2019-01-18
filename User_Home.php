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
        </div>
        <hr>
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
            <input type='radio' class='form-check-label' name=".$row['id_question']." value='1'/>
        </label>
        <label class='radio-inline'><span>NO</span>
            <input type='radio' class='form-check-label' name=".$row['id_question']." value='2'/>
        </label>
        ";
    }

?>
<br/>
<br/>
<button type="submit" name="submitjawaban" class="btn btn-info" data-toggle="modal" data-target="#result">submit</button>
<?php

if(isset($_POST['submitjawaban'])){
    while ($row = mysqli_fetch_array($result)) {
        $jawaban = $row['id_question'];
        $answer = $_POST['id_question'];
    
        foreach($answer as $user_answer)
        {
        $query = "INSERT INTO answer_table (id_answer,id_user,id_question,answer) VALUES ('1','$jawaban',$user_answer)";
        $result = mysqli_query($db, $query);
        }
        echo "berhasil ambil jawaban";
    }
// if(isset($_POST['submit'])){
//     $jawaban = $row['id_question'];
//     $answer = $_POST[$jawaban];

//     foreach($answer as $user_answer)
//     {
//     $query = "INSERT INTO answer_table (id_answer,id_user,id_question,answer) VALUES ('1','$jawaban',$user_answer)";
//     $result = mysqli_query($db, $query);
//     }
//     echo "berhasil ambil jawaban";
// }else{
//     echo "belum bisa ngambil jawaban";
 }

?>
    <div id="result1" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">                
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">&times;</button>
                    <p class="word2">MyPersonality</p>
                    <h2 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">I S T J</h2>
                    <h3 class="modal-title" style="font-family: Good Feeling Sans Demo;">The Logitician</h3>
                </div>
                <div class="modal-body">
                    <center><img src="img/istj-logistician.svg" width="50%" /></center>
                </div>
                <div class="modal-footer">
                    <a href="frame_istj.php"><button id="button" class="btn btn-default">See the details<i class="fa fa-paper-plane-o ml-1"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <div id="result2" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">                
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">&times;</button>
                    <p class="word2">MyPersonality</p>
                    <h2 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">I S T J</h2>
                    <h3 class="modal-title" style="font-family: Good Feeling Sans Demo;">The Mediator</h3>
                </div>
                <div class="modal-body">
                    <center><img src="img/istj-logistician.svg" width="50%" /></center>
                </div>
                <div class="modal-footer">
                    <a href="frame_istj.php"><button id="button" class="btn btn-default">See the details<i class="fa fa-paper-plane-o ml-1"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    </div>
<?php
    include('footer.php');
?> 

</body>
<script>

</script>
</html>