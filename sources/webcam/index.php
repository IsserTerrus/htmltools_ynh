<?php
if (extension_loaded('zlib')) {
	ob_end_clean();
	ob_start("ob_gzhandler");
}
else {
	ob_start("ob_gzhandler");
}
?>
<!DOCTYPE html>
<html lang="fr-fr" manifest="timo.webcam.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Une page HTML5 qui prend des photos avec votre webcam" />
	<title>Prendre une photo avec la webcam - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#basic-stream {
	max-width: 480px;
	max-height: 360px;
	width: 98%;
	
	background-color: gray;
}

#capture {
	width: 250px;
}
	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Prendre une photo avec la webcam</h1>
</header>

<section id="main-form" class="main-form">
	<video id="basic-stream" onplay="controlVideo('start')" controls="true"></video>
	<p id="fail-msg"></p>
	<button onclick="snapshot();" id="capture" class="centrer submit-centrer" style="visibility:hidden;">Prendre une photo</button>
	<div id="screenshots"></div>
	<p class="notes">Cette page utilise HTML5, Web RTC et une webcam.<br/><span style="font-size: 80%">Aucun image n’est envoyée ou conservée sur le réseau.</span></p>
</section>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */

/*
 *   Shows the video
 * + allow begin and stoping the flow
 * + detects brwoser capability (moz/webkit/normal).
 *
*/
var localStream = null;
var video = document.getElementById('basic-stream');

function fail(error) {
	if (error == 'unsuported') {
		document.getElementById("fail-msg").innerHTML = 'Page non supportée dans votre navigateur.';
	}
	else {
		document.getElementById("fail-msg").innerHTML = 'Vous avez refusé l’accès à la caméra ou il n’y a pas de caméra.';
	}
}

function getStream(stream) {
	video.src = stream;
	localStream = stream;
}

function webkitGetStream(stream) {
	video.src = window.webkitURL.createObjectURL(stream);
	localStream = stream;
}

function mozGetStream(stream) {
	video.mozSrcObject = stream;
	localStream = stream;
	video.play();
}

/*
 * navigator.getUserMedia() : supported in Opera yet. Webkit & Moz uses prefixes
 * first argument : "video" or/and "audio" : type of stream
 * seconth argument : the function to run when success (typicaly: start streaming
 *   and redirects it on video.src
 * third argument : the function to run on fail.
 *
*/

function controlVideo(videoEvent) {
	var video = document.getElementById('basic-stream');
	// start video capture and send it to <video> element.
	// if this is not the first clic, the embed player only pauses it.
	if (localStream == null && videoEvent == 'start') {
		// normal implementation (Opera, Opera mobile)
		if (navigator.getUserMedia) {
			navigator.getUserMedia('video', getStream, fail);
			// show snapshot button
			document.getElementById('capture').style.visibility = 'visible';
		// webkit implementation (Chrome)
		} else if (navigator.webkitGetUserMedia) {
			navigator.webkitGetUserMedia({video:true}, webkitGetStream, fail);
			document.getElementById('capture').style.visibility = 'visible';
		// moz implementation (Firefox 18+, Firefox Android)
		} else if (navigator.mozGetUserMedia) {
			navigator.mozGetUserMedia({video:true}, mozGetStream, fail);
			document.getElementById('capture').style.visibility = 'visible';
		}
		else {
			fail('unsuported');
		}
	}
}


/* If navigator does not support UserMedia, shows a message. */
function onloadpage() {
	if (!(navigator.getUserMedia) && !(navigator.webkitGetUserMedia) && !(navigator.mozGetUserMedia )) {
		fail('unsuported');
	}
}
onloadpage();


/*
 * This is for the screen shot.
 * It takes a picture and place it in an "img" element.
 * 
*/

function snapshot() {
	// canvas to work with and make the image
	var canvas = document.createElement('canvas'), context;
	var context = canvas.getContext('2d');
	// list of the snapshots
	var listImgs = document.getElementById('screenshots');
	// the outside link
	var a = listImgs.appendChild(document.createElement("a"));
		var time = new Date;
		a.download="photo-"+(time.getTime()/1000)+".png";
		a.href = "#";
		a.addEventListener('click', function(){a.href = img.src;}, false);

	// the new image
	var img = a.appendChild(document.createElement("img"));

	// insert it before the others
	listImgs.insertBefore(a, listImgs.getElementsByTagName("a")[0]);

	canvas.width = video.videoWidth;
	canvas.height = video.videoHeight;
	img.height = video.videoHeight;
	img.width = video.videoWidth;

	// 'if' tests if canvas created using the dimentions
	// of the video. If video hasn’t been started yet, dimensins are 0x0
	// and snapshots are impossible.
	if (0 != canvas.width*canvas.height) {
		context.drawImage(video, 0, 0);
		img.src = canvas.toDataURL('image/webp');
	}
}

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/webcam/
#      page créée le : 12 mars 2013
#     mise à jour le : 04 avril 2013

-->
</body>
</html>

