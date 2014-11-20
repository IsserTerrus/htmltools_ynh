<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Page avec un minuteur et alarme en JS" />

	<title>Minuteur et alarme - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

.main-form {
	vertical-align: middle;
}

input.text {
	border: 1px solid #C0C0C0;
	background: none repeat scroll 0% 0% #FFF;
	border-radius: 5px;
	padding: 5px;
	box-shadow: 0px 0px 3px #C0C0C0 inset;
	margin: 0px 2px;
	width: 30px;
}

.clock-ended {
	color: red;
}
.clock-ended input {
	font-weight: bold;
	color: red;
}

.clock-10s, .clock-10s input {
	text-decoration: blink;
	color: red;
}

#playPauseButtons button {
	height: 2em;
	line-height: 2em;
	width: 6em;

}

#playPauseButtons button:first-of-type() {
	display: inline;
}
#playPauseButtons button:nth-of-type(2) {
	display: none;
}

#player {
	cursor: pointer;
}

#audio_file {
	display: none;
}


	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Minuteur avec alarme</h1>
</header>


<section class="main-form">

	<p id="horloge">
		<input type="text" class="text" value="01" placeholder="01" id="h" />h
		<input type="text" class="text" value="00" placeholder="00" id="m" />m
		<input type="text" class="text" value="00" placeholder="00" id="s" />s
	</p>

	<p id="playPauseButtons">
		<button class="submit-centrer" id="buttonPlay" onclick="timer = setInterval(function () {myTimer()}, 1000); switchButtons(0, 1);">Lancer</button>
		<button class="submit-centrer" id="buttonPause" onclick="clearInterval(timer); switchButtons(1, 0); player.pause();">Pauser</button>
	</p>

	<p id="player" onclick="chooseFile();">
		<span id="musicName">Choisir une musique à vous&nbsp;?</span>
		<audio id="audio_player" loop preload="auto" src="alarm.ogg"></audio>
	</p>
	<input id="audio_file" type="file" accept="audio/*" />

</section>




<div class="notes centrer">
	<p></p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */
"use strict";

var timer;

// Dom elements
var h = document.getElementById('h');
var m = document.getElementById('m');
var s = document.getElementById('s');
var clock = document.getElementById("horloge");
var docTitle = document.title;

// Sound stuff
var player = document.getElementById('audio_player'); //'alarm.ogg'

// Sound buttons
function switchButtons(play, pause) {
	if (play == 1) document.getElementById('buttonPlay').style.display = 'inline';
	else document.getElementById('buttonPlay').style.display = 'none'

	if (pause == 1) document.getElementById('buttonPause').style.display = 'inline';
	else document.getElementById('buttonPause').style.display = 'none'
}

// Choose file
function chooseFile() {
	var evt = document.createEvent("MouseEvents"); // créer un évennement souris
	evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
	document.getElementById('audio_file').dispatchEvent(evt);
	evt.preventDefault();
}

audio_file.onchange = function(){
	var files = this.files;
	var file = URL.createObjectURL(files[0]); 
	player.src = file;
	document.getElementById('musicName').innerHTML = 'Son : '+audio_file.value.split(/(\\|\/)/g).pop();
};

function myTimer() {
	var totalSeconds = parseInt(h.value*60*60) + parseInt(m.value*60) + parseInt(s.value);

	if (totalSeconds-1 >= 0) totalSeconds--;

	var newh = Math.floor(totalSeconds / 3600);
	var newm = Math.floor((totalSeconds%3600) / 60);
	var news = totalSeconds % 60;

	h.value = newh;
	m.value = newm;
	s.value = news;


	document.title = ( (newh == 0) ? ( (newm == 0) ? news+'sec' : newm+'min' ) : newh+'h') +' - '+ docTitle;
	if (totalSeconds < 10) {
		clock.classList.add('clock-10s');
	}

	if (totalSeconds <= 0) {
		clearInterval(timer);
		player.play();
		clock.classList.add('clock-ended');
	}
}


//myTimer();
/* ]]> */
</script>

<!--
# adresse de la page : http://lehollandaisvolant.net/tout/tools/timer/
#      page créée le : 2 septembre 2014
#     mise à jour le : 5 septembre 2014
-->

</body>
</html>
