<?php
	// print_r($_POST);
	session_start();
	 include 'konekmysqli2.php';
	 $name = $_SESSION['username'];
	 $email = $_SESSION['useremail'];

	 //untuk masukin email sama nama dari session ke database
	 $query1 = "INSERT INTO user_table (user_name,user_email) VALUES('$name','$email')";
	 $result1 = mysqli_query($db,$query1);

	 //disini pake mysql_insert_id function untuk ngambil id dari data yang recently recorded
	 //buat ngecek apakah proses query insert diatas berhasil atau nggak
	 //kalo berhasil :
	 if ($db->query($result1) === TRUE) {
    		$last_id = mysqli_insert_id($db);
    		echo "New record created successfully. Last inserted ID is: " . $last_id;
	} 
	// kalo gagal :
	else {
    		echo "Error: " . $result1 . "<br>" . $db->error;
	}
	 

	 //ini untuk simpen jawaban, jangan lupa masukin id_user
	foreach($_POST['answer'] as $key => $value){
        $query = "INSERT INTO answer_table (id_user, id_question, answer) VALUES ('$last_id','$key', '$value')";
        $result = mysqli_query($db, $query);
	}
?>