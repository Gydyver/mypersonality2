<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="User.css">
<script src="tools/js/jquery.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
<script>
	var history_api = typeof history.pushState !== 'undefined'

// The previous page asks that it not be returned to
if ( location.hash == '#no-back' ) {
  // Push "#no-back" onto the history, making it the most recent "page"
  if ( history_api ) history.pushState(null, '', '#stay')
  else location.hash = '#stay'

  // When the back button is pressed, it will harmlessly change the url
  // hash from "#stay" to "#no-back", which triggers this function
  window.onhashchange = function() {
    // User tried to go back; warn user, rinse and repeat
    if ( location.hash == '#no-back' ) {
      alert("You shall not pass!")
      if ( history_api ) history.pushState(null, '', '#stay')
      else location.hash = '#stay'
    }
  }
}
</script>

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

        $query2 ="SELECT category FROM question_table WHERE id_question = '".$key."'";
        $result2 = mysqli_query($db, $query2);

        $query3 ="SELECT answer FROM answer_table WHERE id_question = '".$key."' && id_user = '".$last_id."'";
        $result3 = mysqli_query($db, $query3);

        $row = mysqli_fetch_row($result2);
        $row2 = mysqli_fetch_row($result3);
        // print_r($row);
        // die();
        // print_r($row2);
        // die();

        if($row[0] == "Introvert vs Extrovert"){
        	if ($row2[0] == 1) {
        		$introvert = $introvert +1;
        	}elseif($row2[0] == 2){
        		$extrovert = $extrovert + 1;
        	}	
        }elseif($row[0] == "Sensing vs Intuiting"){
        	if ($row2[0] == 1) {
        		$sensing = $sensing +1;
        	}elseif($row2[0] == 2){
        		$intuiting = $intuiting + 1;
        	}
        }elseif($row[0] == "Thinking vs Feeling"){
        	if ($row2[0] == 1) {
        		$thinking = $thinking +1;
        	}elseif($row2[0] == 2){
        		$feeling = $feeling + 1;
        	}
        }elseif($row[0] == "Judging vs Perceiving"){
        	if ($row2[0] == 1) {
        		$judging = $judging +1;
        	}elseif($row2[0] == 2){
        		$perceiving = $perceiving + 1;
        	}
		}
	$HasilAkhir = "";
	if($introvert >$extrovert){
		$HasilAkhir = $HasilAkhir."I";
	}
	else{
		$HasilAkhir = $HasilAkhir."E";
	};
	if($sensing >$intuiting){
		$HasilAkhir = $HasilAkhir."S";
	}
	else{
		$HasilAkhir = $HasilAkhir."N";
	};
	if($thinking >$feeling){
		$HasilAkhir = $HasilAkhir."T";
	}
	else{
		$HasilAkhir = $HasilAkhir."F";
	};
	if($judging >$perceiving){
		$HasilAkhir = $HasilAkhir."J";
	}
	else{
		$HasilAkhir = $HasilAkhir."P";
	};
}
// echo $HasilAkhir;
?>
<!--  php didalam script supaya bisa pake $(document).ready(function() sekali,
	pake echo untuk kodingan yang sebenernya js karna dengan pake echo di php, secara gak langsung dia akan ngeprint kodingannya. 
	kodingannya akan ketempel di js nya deh -->
<script>
	$(document).ready(function(){
		
		var str = "<?php echo $HasilAkhir ?>"
			if(str == "ISTJ" ){
				$('#ISTJModal').modal('show');
			}else if (str == "ESTJ" ) {
				$('#ESTJModal').modal('show');
			}else if (str == "INTJ" ) {
				$('#INTJModal').modal('show');
			}else if (str == "ENTJ" ) {
				$('#ENTJModal').modal('show');
			}else if (str == "ISFJ" ) {
				$('#ISFJModal').modal('show');
			}else if (str == "ESFJ" ) {
				$('#ESFJModal').modal('show');
			}else if (str == "INFJ" ) {
				$('#INFJModal').modal('show');
			}else if (str == "ENFJ" ) {
				$('#ENFJModal').modal('show');
			}else if (str == "ISTP" ) {
				$('#ISTPModal').modal('show');
			}else if (str == "ESTP" ) {
				$('#ESTPModal').modal('show');
			}else if ( str == "INTP" ) {
				$('#INTPModal').modal('show');
			}else if (str == "ENTP" ) {
				$('#ENTPModal').modal('show');
			}else if (str == "ISFP" ) {
				$('#ISFPModal').modal('show');
			}else if (str == "ESFP" ) {
				$('#ESFPModal').modal('show');
			}else if (str == "INFP" ) {
				$('#INFPModal').modal('show');
			}else if (str == "ENFP" ) {
				$('#ENFPModal').modal('show');
			}

			// echo "jawaban berhasil disimpan";
});		
</script>
<!-- ini buat pop up -->
    <div id="ISTJModal" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">                
                    <a href="Logout.php"><button type="button" class="btn btn-default" style="float:right;">close</button></a>
                    <p class="word2">MyPersonality</p>
                    <h3 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">I S T J</h3>
                    <h4 class="modal-title" style="font-family: Good Feeling Sans Demo;">The Logitician</h4>
                </div>
                <div class="modal-body">
                    <center><img src="img/istj-logistician.svg" width="50%" /></center>
                </div>
                <div class="modal-footer">
                    <a href="frame_istj.php"><button id="button" class="btn btn-default">see the details<i class="fa fa-paper-plane-o ml-1"></i></button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- ini buat pop up -->
    <div id="INFPModal" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">                
					<a href="Logout.php"><button type="button" class="btn btn-default" style="float:right;">&times;</button></a>
                    <p class="word2">MyPersonality</p>
                    <h3 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">I N F P</h3>
                    <h4 class="modal-title" style="font-family: Good Feeling Sans Demo;">The Mediator</h4>
                </div>
                <div class="modal-body">
                    <center><img src="img/infp-mediator.svg" width="50%" /></center>
                </div>
                <div class="modal-footer">
                    <a href="frame_istj.php"><button id="button" class="btn btn-default">see the details<i class="fa fa-paper-plane-o ml-1"></i></button></a>
                </div>
            </div>
        </div>
    </div>

        <!-- ini buat pop up -->
    <div id="ESTJModal" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">                
					<a href=Logout.php"><button type="button" class="btn btn-default" style="float:right;">&times;</button></a>
                    <p class="word2">MyPersonality</p>
                    <h3 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">E S T J</h3>
                    <h4 class="modal-title" style="font-family: Good Feeling Sans Demo;">The Executive</h4>
                </div>
                <div class="modal-body">
                    <center><img src="img/estj-executive.svg" width="50%" /></center>
                </div>
                <div class="modal-footer">
                    <a href="frame_estj.php"><button id="button" class="btn btn-default">see the details<i class="fa fa-paper-plane-o ml-1"></i></button></a>
                </div>
            </div>
        </div>
    </div>