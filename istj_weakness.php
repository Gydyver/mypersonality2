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
        <h1><center>Logistician Strengths and Weaknesses</center></h1>
    </div>
    <div class="personalityinfo">
        <p>The ISTJ personality type is thought to be the most abundant, making up around 13% of the population. Their defining characteristics of integrity, practical logic and tireless dedication to duty make ISTJs a vital core to many families, as well as organizations that uphold traditions, rules and standards, such as law offices, regulatory bodies and military. People with the ISTJ personality type enjoy taking responsibility for their actions, and take pride in the work they do – when working towards a goal, ISTJs hold back none of their time and energy completing each relevant task with accuracy and patience.</p>
        <div class="scene">
            <img alt="ISTJ personality" src="img/ISTJ_strengths.svg" alt="ISTJ personality">
        </div>
        <div class="personalitycover">
            <h1>Logistician Strengths</h1>
        </div>
        <br>
        <ul class="personalityinfo">
            <li><p><strong>Honest and Direct</strong> – Integrity is the heart of the Logistician personality type. Emotional manipulation, mind games and reassuring lies all run counter to Logisticians’ preference for managing the reality of the situations they encounter with plain and simple honesty.</p></li>
            <li><p><strong>Strong-willed and Dutiful</strong> – Logisticians embody that integrity in their actions too, working hard and staying focused on their goals. Patient and determined, people with the Logistician personality type meet their obligations, period.</p></li>
            <li><p><strong>Very Responsible</strong> – Logisticians’ word is a promise, and a promise means everything. Logisticians would rather run themselves into the ground with extra days and lost sleep than fail to deliver the results they said they would. Loyalty is a strong sentiment for Logistician personalities, and they fulfill their duties to the people and organizations they’ve committed themselves to.</p></li>
            <li><p><strong>Calm and Practical</strong> – None of their promises would mean much if Logisticians lost their tempers and broke down at every sign of hardship – they keep their feet on the ground and make clear, rational decisions. Peoples’ preferences are a factor to consider in this process, and Logisticians work to make the best use of individual qualities, but these decisions are made with effectiveness in mind more so than empathy. The same applies to criticisms, for others and themselves.</p></li>
            <li><p><strong>Create and Enforce Order</strong> – The primary goal of any Logistician is to be effective in what they’ve chosen to do, and they believe that this is accomplished best when everyone involved knows exactly what is going on and why. Unclear guidelines and people who break established rules undermine this effort, and are rarely tolerated by Logisticians. Structure and rules foster dependability; chaos creates unforeseen setbacks and missed deadlines.</p></li>
            <li><p><strong>Jacks-of-all-trades</strong> – Much like Analyst personality types, Logisticians are proud repositories of knowledge, though the emphasis is more on facts and statistics than concepts and underlying principles. This allows Logisticians to apply themselves to a variety of situations, picking up and applying new data and grasping the details of challenging situations as a matter of course.</p></li>
        </ul>
        </div>
        <div class="scene">
            <img alt="ISTJ personality" src="img/ISTJ_weaknesses.svg" alt="ISTJ personality">
        </div>
        <div class="personalitycover">
            <h1>Logistician Weaknesses</h1>
        </div>
        <br>
        <ul class="personalityinfo">
            <li><p><strong>Stubborn</strong> – The facts are the facts, and Logisticians tend to resist any new idea that isn’t supported by them. This factual decision-making process also makes it difficult for people with the Logistician personality type to accept that they were wrong about something – but anyone can miss a detail, even them.</p></li>
            <li><p><strong>Insensitive</strong> – While not intentionally harsh, Logisticians often hurt more sensitive types’ feelings by the simple mantra that honesty is the best policy. Logistician personalities may take emotions into consideration, but really only so far as to determine the most effective way to say what needs to be said.</p></li>
            <li><p><strong>Always by the Book</strong> – Logisticians believe that things work best with clearly defined rules, but this makes them reluctant to bend those rules or try new things, even when the downside is minimal. Truly unstructured environments leave Logisticians all but paralyzed.</p></li>
            <li><p><strong>Judgmental</strong> – Opinions are opinions and facts are facts, and Logisticians are unlikely to respect people who disagree with those facts, or especially those who remain willfully ignorant of them.</p></li>
            <li><p><strong>Often Unreasonably Blame Themselves</strong> – All this can combine to make Logisticians believe they are the only ones who can see projects through reliably. As they load themselves with extra work and responsibilities, turning away good intentions and helpful ideas, Logisticians sooner or later hit a tipping point where they simply can’t deliver. Since they’ve heaped the responsibility on themselves, Logisticians then believe the responsibility for failure is theirs alone to bear.</p></li>
        </ul>
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