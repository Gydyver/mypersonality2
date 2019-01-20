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
	 if ($result1) {
    		$last_id = mysqli_insert_id($db);
    		// echo "New record created successfully. Last inserted ID is: " . $last_id;
	} 
	// kalo gagal :
	else {
    		// echo "Error: " . $result1 . "<br>" . $db->error;
	}
	
	$introvert = 0;
	$extrovert = 0;
	$sensing =0;
	$intuiting =0;
	$thinking =0;
	$feeling = 0;
	$judging = 0;
	$perceiving =0;


	 // ini untuk simpen jawaban, jangan lupa masukin id_user
	foreach($_POST['answer'] as $key => $value){
        $query = "INSERT INTO answer_table (id_user, id_question, answer) VALUES ('$last_id','$key', '$value')";
        $result = mysqli_query($db, $query);

        $query2 ="SELECT category FROM question_table WHERE id =$key";
        $result2 = mysqli_query($db, $query2);

        $row = mysqli_fetch_row($result2);

        if($row = "Introvert vs Extrovert"){
        	$introvert = $introvert +1;
        }else {
        	$extrovert = $extrovert + 1;
        };

        if($row = "Sensing vs Intuiting"){
        	$sensing = $sensing +1;
        }else {
        	$intuiting = $intuiting + 1;
        };

        if($row = "Thinking vs Feeling"){
        	$thinking = $thinking +1;
        }else {
        	$ = $feeling + 1;
        };

        if($row = "Judging vs Perceiving"){
        	$ = $judging +1;
        }else {
        	$ = $perceiving + 1;
        };
	}
	$HasilAkhir = "";
	if($introvert >$extrovert){
		$HasilAkhir = ."I";
	}
	else{
		$HasilAkhir = ."E";
	}
	if($sensing >$intuiting){
		$HasilAkhir = ."S";
	}
	else{
		$HasilAkhir = ."N";
	}
	if($thinking >$feeling){
		$HasilAkhir = ."T";
	}
	else{
		$HasilAkhir = ."F";
	}
	if($judging >$perceiving){
		$HasilAkhir = ."J";
	}
	else{
		$HasilAkhir = ."P";
	}
?>
<!--  php didalam script supaya bisa pake $(document).ready(function() sekali,
	pake echo untuk kodingan yang sebenernya js karna dengan pake echo di php, secara gak langsung dia akan ngeprint kodingannya. 
	kodingannya akan ketempel di js nya deh -->
<script type="text/javascript">
	$(document).ready(function(){
<?php
	if($HasilAkhir = "ISTJ" ){
		echo "$('#ISTJModal').modal('show')";
	}elseif ($HasilAkhir = "ESTJ" ) {
		echo "$('#ESTJModal').modal('show')";
	}elseif ($HasilAkhir = "INTJ" ) {
		echo "$('#INTJModal').modal('show')";
	}elseif ($HasilAkhir = "ENTJ" ) {
		echo "$('#ENTJModal').modal('show')";
	}elseif ($HasilAkhir = "ISFJ" ) {
		echo "$('#ISFJModal').modal('show')";
	}elseif ($HasilAkhir = "ESFJ" ) {
		echo "$('#ESFJModal').modal('show')";
	}elseif ($HasilAkhir = "INFJ" ) {
		echo "$('#INFJModal').modal('show')";
	}elseif ($HasilAkhir = "ENFJ" ) {
		echo "$('#ENFJModal').modal('show')";
	}elseif ($HasilAkhir = "ISTP" ) {
		echo "$('#ISTPModal').modal('show')";
	}elseif ($HasilAkhir = "ESTP" ) {
		echo "$('#ESTPModal').modal('show')";
	}elseif ($HasilAkhir = "INTP" ) {
		echo "$('#INTPModal').modal('show')";
	}elseif ($HasilAkhir = "ENTP" ) {
		echo "$('#ENTPModal').modal('show')";
	}elseif ($HasilAkhir = "ISFP" ) {
		echo "$('#ISFPModal').modal('show')";
	}elseif ($HasilAkhir = "ESFP" ) {
		echo "$('#ESFPModal').modal('show')";
	}elseif ($HasilAkhir = "INFP" ) {
		echo "$('#INFPModal').modal('show')";
	}elseif ($HasilAkhir = "ENFP" ) {
		echo "$('#ENFPModal').modal('show')";
	}

	echo "jawaban berhasil disimpan";
	header('location:Result.php');
?>
});		
</script>