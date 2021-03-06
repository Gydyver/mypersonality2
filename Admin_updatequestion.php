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
            <h1>UPDATE QUESTION</h1>
        </div>
        <div class="center-block">
        <form action="#" method="POST">
            <div class="form-group">
            <button type="submit" name="view" class="btn btn-succes">VIEW ALL QUESTIONS</button><br/>
            <?php
            include 'konekmysqli2.php';
             if (isset($_POST['view'])) {
                $query = 'SELECT * FROM question_table WHERE status = 1';
                $result = mysqli_query($db, $query) ;

                if (!$result) {
                    echo("Error description: " . mysqli_error($mysqli));
                } else {
                    echo "<table border='1' id='table'>
                    <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Questions</th>
                    </tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>
                            <td>" . $row['id_question'] . "</td>
                            <td>" . $row['category'] . "</td>
                            <td>" . $row['question'] . "</td>                                          
                          </tr>";
                     }
                 }
                }
            ?>
                <label>Question ID: </label><br/>
                    <input type="text" name="tfid_question" id="tfid_question" readonly/><br/>
                <label>Category: </label><br/>
                    <input type="text" name="tfcategory" id="tfcategory" readonly/>
                </div>
                <div class="form-group">
                    <label for="comment">Question:</label>
                    <textarea name="inputquestion" class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" name="update" class="btn btn-info">UPDATE</button><br/><br/>
                <?php
                    include 'konekmysqli2.php';

                    if (isset($_POST["update"])) {
                        $tfid_question = $_POST['tfid_question'];
                        $inputquestion = $_POST['inputquestion'];

                        $updatequestion = "UPDATE question_table SET question = '$inputquestion' WHERE id_question = '$tfid_question' ";
                        $result1 = mysqli_query($db, $updatequestion);
                        if(!$result1){
                            echo "salah query";
                        }
                            echo $result;
                    }
            
            ?>
        </form>
        </div>
    </div>
 
<script>
    var table =  document.getElementById('table'),rIndex;
    for(var i=0; i<table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            rIndex = this.rowIndex;
            document.getElementById("tfid_question").value = this.cells[0].innerHTML;
            document.getElementById("tfcategory").value = this.cells[1].innerHTML;
            document.getElementById("comment").value = this.cells[2].innerHTML;
        }
    }
</script>    
</body>
</html>