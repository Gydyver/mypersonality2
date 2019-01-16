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
        <img src="img/INFP.svg">
        <h1><center>INFP Personality (“The Mediator”)</center></h1>
        <blockquote>
            <p><i>All that is gold does not glitter; not all those who wander are lost; the old that is strong does not wither; deep roots are not reached by the frost.</i></p>
            <footer>J. R. R. Tolkien</footer>
        </blockquote>
    </div>
    <div class="personalityinfo">
        <p>Being a part of the Diplomat personality group, INFPs are guided by their principles, rather than by logic (Analysts), excitement (Explorers), or practicality (Sentinels). When deciding how to move forward, they will look to honor, beauty, morality and virtue – INFPs are led by the purity of their intent, not rewards and punishments. People who share the INFP personality type are proud of this quality, and rightly so, but not everyone understands the drive behind these feelings, and it can lead to isolation.</p>
        <div class="scene">
            <img alt="INFP personality" src="img/INFP2.svg" alt="ISTJ personality">
        </div>
        <br>
        <h2>We Know What We Are, but Know Not What We May Be</h2>
        <p>At their best, these qualities enable INFPs to communicate deeply with others, easily speaking in metaphors and parables, and understanding and creating symbols to share their ideas. The strength of this intuitive communication style lends itself well to creative works, and it comes as no surprise that many famous INFPs are poets, writers and actors. Understanding themselves and their place in the world is important to INFPs, and they explore these ideas by projecting themselves into their work.</p>
        <blockquote>
            <p>INFPs have a talent for self-expression, revealing their beauty and their secrets through metaphors and fictional characters.</p>
        </blockquote>
        <p>INFPs’ ability with language doesn’t stop with their native tongue, either – as with most people who share the Diplomat personality types, they are considered gifted when it comes to learning a second (or third!) language. Their gift for communication also lends itself well to INFPs’ desire for harmony, a recurring theme with Diplomats, and helps them to move forward as they find their calling.</p>
        <h2>Listen to Many People, but Talk to Few</h2>
        <p>Unlike their Extraverted cousins though, INFPs will focus their attention on just a few people, a single worthy cause – spread too thinly, they’ll run out of energy, and even become dejected and overwhelmed by all the bad in the world that they can’t fix. This is a sad sight for INFPs’ friends, who will come to depend on their rosy outlook.</p>
        <p>If they are not careful, INFPs can lose themselves in their quest for good and neglect the day-to-day upkeep that life demands. INFPs often drift into deep thought, enjoying contemplating the hypothetical and the philosophical more than any other personality type. Left unchecked, INFPs may start to lose touch, withdrawing into "hermit mode", and it can take a great deal of energy from their friends or partner to bring them back to the real world.</p>
        <p>Luckily, like the flowers in spring, INFP’s affection, creativity, altruism and idealism will always come back, rewarding them and those they love perhaps not with logic and utility, but with a world view that inspires compassion, kindness and beauty wherever they go.</p>
    </div>
   <div class="footer">
       <div>
            <div class="footer-icons col-md-6 col-xs-10">
                <a href="#"><img src="icon/002-twitter.png">mypersonality</a>
                <a href="#"><img src="icon/001-facebook.png">MyPersonality ID</a>
                <a href="#"><img src="icon/envelope.png">help@myprs.id</a>
            </div>
            <div class="copyright">
                <center><p>Copyright &#169; 2018 Personality Pshycology Online Test Inc. All right reserved</p></center></p>
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