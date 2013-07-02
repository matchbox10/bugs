<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bug Spray</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="scripts/bs.js"></script>
<link href="css/bug_spray.css" rel="stylesheet" type="text/css" />
<link rel="icon" 
      type="image/png" 
      href="images/bacteria_1.png">
<style>
body {
	background-color:#FFFFC6;
	background-image:url('images/bg.jpg');
}
.catch-bug {
	width:20px;
	cursor:crosshair;
	position:absolute;
	display:none;
}

</style>

<script> 

$(document).ready(function() {
	$('.start-button').bind('click', function() { 
		initgame(1);
	});
	

	
});

</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

</head>

<body>
<div id="bug-wrapper">
<h1 class="title bug-shadow">Bug Spray</h1>
<div class="menu">
<ul>
<li>
<a href='#'>Bathroom</a>
</li>
<li>
<a href='#'>Bedroom</a>
</li>
<li>
<a href='#'>Kitchen</a>
</li>
</ul>
<div class="timer bug-shadow">
<span class="time-txt">Timer : <span><strong>30</strong></span> Seconds</a></span>
</div>

<div class="score bug-shadow">
<span class="score-txt">Score: <span><strong>0</strong></span></a></span>
</div>

</div>
<div class="game-area bug-shadow">
  <div class="game-menu">
    <img class="bugs" src="images/bacteria_0.png"  alt="Bug 1" />
    <img class="bugs" src="images/bacteria_1.png"  alt="Bug 2" />
    <img class="bugs" src="images/bacteria_2.png"  alt="Bug 3" />
    <a class="start-button" href="#"><img src="images/start.png" width="222" height="86" alt="start game" /></a>
    </div>
      <div class="game-main">
    </div>
     <div class="game-win bug-shadow">
      	<h2>Congratulations! You have reached level <span>2</span></h2>
        <p>You scored <span class="my-score"><strong>0</strong></span></p>
        <p>You need to score <span class="to-score"><strong>0</strong></span> to reach next round</p>
        <a class="continue" href="#">Play Next Round</a>
     </div>
      <div class="game-end bug-shadow">
      	<h2>GAME OVER</h2>
        <p>You scored <span class="my-score"><strong>0</strong></span></p>
        <p>You reached Level <span class="my-level"><strong>0</strong></span></p>
        <div class="fin"><a href="https://twitter.com/intent/tweet?button_hashtag=germ&text=I%20just%20scored%2067%20on%20bugsprayer" class="twitter-hashtag-button" data-size="large" data-related="matchbox10">Tweet #germ</a></div>
        <a href="main.php">Play Again</a>
    </div>
<div class="scenario">
  <img src="images/bathroom.jpg" />
</div>
</div>
<p class="instructions">Kill as many germs as you can in 30 seconds</p>
</div>
</body>
</html>