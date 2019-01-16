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
    <div class="personalitycover">
        <img src="img/ISTJ.svg">
        <h1><center>ISTJ Personality (“The Logistician”)</center></h1>
        <blockquote>
            <p><i>My observation is that whenever one person is found adequate to the discharge of a duty... it is worse executed by two persons, and scarcely done at all if three or more are employed therein.</i></p>
            <footer>George Washington</footer>
        </blockquote>
    </div>
    <div class="personalityinfo">
        <p>The ISTJ personality type is thought to be the most abundant, making up around 13% of the population. Their defining characteristics of integrity, practical logic and tireless dedication to duty make ISTJs a vital core to many families, as well as organizations that uphold traditions, rules and standards, such as law offices, regulatory bodies and military. People with the ISTJ personality type enjoy taking responsibility for their actions, and take pride in the work they do – when working towards a goal, ISTJs hold back none of their time and energy completing each relevant task with accuracy and patience.</p>
        <div class="scene">
            <img alt="ISTJ personality" src="img/ISTJ2.svg" alt="ISTJ personality">
        </div>
        <br>
        <p>ISTJs don’t make many assumptions, preferring instead to analyze their surroundings, check their facts and arrive at practical courses of action. ISTJ personalities are no-nonsense, and when they’ve made a decision, they will relay the facts necessary to achieve their goal, expecting others to grasp the situation immediately and take action. ISTJs have little tolerance for indecisiveness, but lose patience even more quickly if their chosen course is challenged with impractical theories, especially if they ignore key details – if challenges becomes time-consuming debates, ISTJs can become noticeably angry as deadlines tick nearer.</p>
        <h2>Associate With Those of Good Quality if You Esteem Your Reputation...</h2>
        <p>When ISTJs say they are going to get something done, they do it, meeting their obligations no matter the personal cost, and they are baffled by people who don’t hold their own word in the same respect. Combining laziness and dishonesty is the quickest way to get on ISTJs’ bad side. Consequently, people with the ISTJ personality type often prefer to work alone, or at least have their authority clearly established by hierarchy, where they can set and achieve their goals without debate or worry over other’s reliability.</p>
        <p>ISTJs have sharp, fact-based minds, and prefer autonomy and self-sufficiency to reliance on someone or something. Dependency on others is often seen by ISTJs as a weakness, and their passion for duty, dependability and impeccable personal integrity forbid falling into such a trap.</p>
        <p>This sense of personal integrity is core to ISTJs, and goes beyond their own minds – ISTJ personalities adhere to established rules and guidelines regardless of cost, reporting their own mistakes and telling the truth even when the consequences for doing so could be disastrous. To ISTJs, honesty is far more important than emotional considerations, and their blunt approach leaves others with the false impression that ISTJs are cold, or even robotic. People with this type may struggle to express emotion or affection outwardly, but the suggestion that they don’t feel, or worse have no personality at all, is deeply hurtful.</p>
        <h2>...For It Is Better to Be Alone Than in Bad Company</h2>
        <p>ISTJs’ dedication is an excellent quality, allowing them to accomplish much, but it is also a core weakness that less scrupulous individuals take advantage of. ISTJs seek stability and security, considering it their duty to maintain a smooth operation, and they may find that their coworkers and significant others shift their responsibilities onto them, knowing that they will always take up the slack. ISTJs tend to keep their opinions to themselves and let the facts do the talking, but it can be a long time before observable evidence tells the whole story.</p>
        <p>ISTJs need to remember to take care of themselves – their stubborn dedication to stability and efficiency can compromise those goals in the long term as others lean ever-harder on them, creating an emotional strain that can go unexpressed for years, only finally coming out after it’s too late to fix. If they can find coworkers and spouses who genuinely appreciate and complement their qualities, who enjoy the brightness, clarity and dependability that they offer, ISTJs will find that their stabilizing role is a tremendously satisfying one, knowing that they are part of a system that works.</p>
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
// window.onscroll = function() {stickynav()};

// var topnavbar = document.getElementById("myTopnav");
// var sticky = topnavbar.offsetTop;

// function stickynav() {
// 	if (window.pageYOffset >= sticky) {
//     topnavbar.classList.add("sticky");
//  	} else {
//     topnavbar.classList.remove("sticky");
//   	}
// }
    
$(window).scroll(function () {
if ($(window).scrollTop() >= 50) {
$('.topnav').css('background','transparent');
} else {
$('.topnav').css('background','transparent');
}
});

function myFunctionn() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</html>