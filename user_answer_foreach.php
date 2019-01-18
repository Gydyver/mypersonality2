<?php
 include("koneksi.php");


if(isset($_POST['submit'])){
        $jawaban = $row['id_question'];
        $answer = $_POST[$jawaban];

        foreach($answer as $user_answer)
        {
        $query = "INSERT INTO answer_table (answer) VALUES ($user_answer)";
        $result = mysqli_query($db, $query);
        }

?>