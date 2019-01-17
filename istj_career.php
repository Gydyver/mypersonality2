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
    <div class="personalitycover">
        <h1><center>Logistician Careers</center></h1>
    </div>
    <div class="personalityinfo">
    <p>While many personality types may be comfortable with flexible work as consultants and sole proprietors, Logisticians are much more focused on building long-term, stable careers. That’s not to say that Logisticians can’t do that sort of work – many find themselves thinking about what’s on the other side of those cubical walls – but what they crave is dependability, and that is reflected in their choice of work perhaps more so than in any other part of their lives.</p>
        <div class="scene">
            <img alt="ISTJ personality" src="img/ISTJ_career.svg" alt="ISTJ personality">
        </div>
        <br>
        <ul class="personalityinfo">
            <h2>Have No Other View Than to Promote the Public Good</h2>
            <p>The facts support this, as the most common careers among people with the Logistician personality type revolve around institutions of respected tradition, authority, security, and established consistency. Careers as military officers, lawyers, judges, police officers and detectives are all very popular among Logisticians. This makes sense, as they not only offer the stability that Logisticians seek, but are in line with their principles and conservatism, establishing clear societal roles.</p>
            <p>Logisticians of course aren’t limited to these organizations – there are many other roles that utilize their reliability, objectivity and sharp eyes. When facts and logic are out of place, Logistician personalities swoop in as the accountants, auditors, data analysts, financial managers, business administrators and even doctors that identify, report and correct the issues at hand.</p>
            <p>Most of these careers have Logisticians working alone, which is usually their preference, but when teams are necessary, they are best defined by clearly outlined roles, responsibilities and work environments.</p>
            <div class="description-pullout">Nothing is quite so challenging for Logisticians as ongoing debates about who is responsible for what, resulting in work that’s shoddily assembled – or worse, incomplete.</div>
            <p>Logisticians have strong opinions about how things should be done, and if things are shuffled too often, people with this personality type can become surprisingly vocal about their opposition. It’s important for Logisticians to remember that even the most traditional and stable career paths can and need to change as time goes by. It is much better to accept this with grace than to develop reputations of being enemies of new ideas.</p>
            <h2>Business Discourse Should Be Short and Comprehensive</h2>
            <p>Logisticians may also struggle with the increasingly open and social requirements of modern work life. Being somewhat bad at sensing others feelings, Logisticians’ “just the facts” attitude can be downright alienating when it comes to more sensitive personality types. This applies not just to coworkers but to customers as well – service positions like retail sales and waiting tables, as well as more emotionally demanding careers such as psychiatry are, generally speaking, a terrible fit.</p>
            <p>The ideal career paths feature a trend: they place facts above feelings and allow Logisticians to uphold the hard standards that are the backbone of society. Rules are the basis for everything people take for granted about modern life, from the social contract that smooths relationships, to the laws that protect peoples’ most basic safety, to the constitutions and treaties that govern nations. People with the Logistician personality type take on roles as the defenders of these ideas, in big ways and small, and are rightfully proud of it.</p>
        </ul>
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