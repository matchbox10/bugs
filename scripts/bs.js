// JavaScript Document
var ttlTime = 30;
var ttlBugs = ttlTime * 5;
var bacCount = 0;
var roundSuccess = 20;
var timer;
var bacteriaTimer;
function startcounter(level) {
	var counter = 100;
	$('.game-main').fadeIn(500, function() {
		showbacteria(counter,level);
		});
}

function countdown(time,level) {
	var continueRound = roundSuccess * level;
	if(time > -1) {
	timer = window.setTimeout(function() {
		$('.time-txt > span').html('<strong>' + time +'</strong>');
		time = time - 1;
		countdown(time,level);
	}, 1000) ;
	
	} else {
		$('.game-main').fadeOut(100, function() {
			var total = parseInt($('.score-txt > span').text());
			if(total > continueRound || total == continueRound) {
				nextGame(total,level)
			} else {
				finishedGame(total,level);
			}
			});
	} 
}

function finishedGame(total,level) {
	$('.game-end').fadeIn();
	$('.game-end p span.my-score').html('<strong>'+total+'</strong>');
	$('.game-end p span.my-level').html('<strong>'+level+'</strong>');
	$('.game-end div.fin').html('<a href="https://twitter.com/intent/tweet?button_hashtag=germ&text=I%20just%20scored%20' + total + '%20on%20bugsprayer" class="twitter-hashtag-button fin" data-size="large" data-related="matchbox10">Tweet #germ</a>');
}

function showbacteria(counter,level) {
	var bugNumber = 0 + Math.floor(Math.random() * 3);
	var leftNumber = 10 + Math.floor(Math.random() * 90);
	var topNumber = 10 + Math.floor(Math.random() * 700);
	var correctLeft = leftNumber + 2;
	var timeToClick = (1500 - (level * 100));
	var bugCounter = ttlBugs * level;
	//alert(timeToClick);
	if(bacCount < bugCounter) {
	bacteriaTimer = window.setTimeout(function() {
		
		$('.game-main').append('<img class="catch-bug this-bug_' + bacCount +'" src="images/bacteria_'+ bugNumber +'.png"  alt="Bug 1" killed="0"/>');
		$('.this-bug_' + bacCount).css({'top': topNumber +'px', 'left': leftNumber + '%'}).fadeIn(250).animate({width:'50px'},500).delay(timeToClick).fadeOut(250);

			$('.this-bug_' + bacCount).bind('click', function() { 
			if($(this).attr('killed') == "0") {
				var score = parseInt($('.score-txt > span').text()) + 1;
				$('.score-txt > span').text(score);
				$(this).stop().attr('src','images/splat.gif').attr('killed',"1").css('z-index','0').delay(300).fadeOut();	
			}
	});
	bacCount++;
		showbacteria(counter,level);
}, 200);
} 
}

function nextGame(total,level) {
	var timer;
	var bacteriaTimer;
	window.clearTimeout(bacteriaTimer);
	window.clearTimeout(timer);
	var nextLevel = level + 1;
	var toGet = roundSuccess * nextLevel;
	$('.game-win').fadeIn();
	$('.game-win h2 span').html('<strong>'+nextLevel+'</strong>');
	$('.game-win p span.my-score').html('<strong>'+total+'</strong>');
	$('.game-win p span.to-score').html('<strong>'+toGet+'</strong>');
	$('.continue').bind('click',function() {
		$('.game-win').fadeOut(1000,function() {
			$('.catch-bug').remove();
			initgame(nextLevel);
		});
	});
	
}

function initgame(level) { 
	var menus = $('game-menu').size();
	for (i = 0; i < menus; i++) {
	$('.game-menu :nth-child(' + i +')').delay(400).fadeOut(500);
	}
		$('.game-menu').delay(500).fadeOut(500, function() {
				startcounter(level);
				countdown(30,level);
			});

}