<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- css -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="tes.css">
	<!-- script -->
	<script src="tools/js/jquery.min.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<!-- <script src="tools/js/angular.min.js"></script> -->
	<title>MyPersonality - Personality test</title>
</head>
<body>
<!-- form -->
<div id="page1">
	<div class="column fpimg">
        <img src="img/image1.svg" alt="The Personalities"/>
    </div>
    <div class="column fptext">
        <div class="fptext1">
			<p class="word1">WELCOME TO</p>
			<p class="word2">MyPersonality</p>
		</div>
		<div class="fptext2">
			<p class="intro">Take your Personality Test and get a 'freakishly accurate' description of who you are.</p>
            <!-- <a href="#"><button class="btn btn-info fpbtn" title="take the test!">Take The Test</button></a> -->
            <a href="" class="btn btn-info fpbtn" title="take the test!" data-toggle="modal" data-target="#add_data_modal">Take The Test</a>
			<p class="review">“let's see the incredible of you.”</p>
        </div>
        <div class="fpicon">
            <a href="#"><img class="fb" src="icon/001-facebook.png" title="MyPersonality - Personality Online Test"></a>
            <a href="#"><img class="tw" src="icon/002-twitter.png" title="mypersonality_id"></a>
			<a href="#"><img class="email" src="icon/envelope.png" title="help@mypersonality.id"></a>
		</div>
    </div>

    <!-- LOGIN POP UP -->
    <div id="add_data_modal" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">                
                <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;">&times;</button>
                <p class="word2">MyPersonality</p>
                <h2 class="modal-title font-weight-bold" style="font-family: Good Feeling Sans Demo;">know yourself, know your best way</h2>
            </div>
            <div class="modal-body">
            <form id="insert_form" action="namadanemail.php" method="POST">
                    <label style="font-family: Good Feeling Sans Demo;">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" title="only allowed the alphabet without space." style="margin: 3%; width: 500px;"/>
                    <label style="font-family: Good Feeling Sans Demo;">E-Mail:</label>
                    <input type="email" name="emaill" id="email" title="ex email : emailname@hostname.com" class="form-control validate" style="margin: 3%; width: 500px;"/>
                    <input type="submit" name="insert" id="insert" value="insert" class="btn btn-success"/>
            </form>
            </div>
            <div class="modal-footer">
                <button id="button" class="btn btn-default" data-dismiss="modal">Close<i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
</div>

    
</div>
</body>
<script>
$(document).ready(function(){

    $('#insert_form').on('submit', function(event){
        event.preventDefault();
        if ($('#fullname').val() == '')
        {
            alert("Full name is required");
        }
        else if($('#email').vall() == '')
        {
            alert("Email is required");
        }
        else
        {
            $.ajax({
                url:"namadanemail.php",
                method:"POST",
                data:$('#insert_form').serialize(),
                success:function(data)
                {
                    $('#insert_form')[0].reset();
                    $('#add_data_modal').modal('hide');
                }
            });
        }
    });
});
</script>
</html>