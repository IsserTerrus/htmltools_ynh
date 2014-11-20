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
<html lang="fr-fr" manifest="timo.rqrcode.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un lecteur de QR Code en Javascript et HTML. Il fonctionne avec la Webcam (avec WebRTC) et avec un fichier d’entrée." />
	<title>Lire un QRcode™ - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#main-form {
	padding: 40px 70px 20px;
}

#outputimg {
	border: none;
	display: block;
	margin: 0 auto;
}

#result {
	margin: 20px;
	padding: 10px;
	border: 1px solid silver;
	background: #eee;
	border-radius: 15px;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Décoder un QR Code™</h1>
</header>

<div id="main-form" class="main-form">
	<div id="mainbody">
		<button onclick="setimg();" class="centrer submit-centrer">À partir d’un fichier</button>
		<button onclick="setwebcam();" class="centrer submit-centrer">Avec la webcam</button>
		<!--<button onclick="seturl();" class="centrer submit-centrer">Avec une url</button>-->

		<div id="result" contenteditable style="display: none;">Le résultat sera affiché ici.</div>

		<div id="select-infile" style="display:none;">
			<img id="outputimg" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="read"/>
			Sélectionnez un fichier<br/><input type="file" onchange="handleFile(this.files)"/>
		</div>

		<div id="video-preview" style="display:none;"><video id="v" autoplay style="height: 320px;"></video></div>
	</div>
	<div id="debug"></div>
	<div class="notes centrer">
		<a href="http://www.denso-wave.com/qrcode/faqpatent-e.html">QR Code™</a> - <a href="https://github.com/LazarSoft/jsqrcode">Généré avec JS-QRcode</a>
	</div>
</div>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript" src="qrdecodecode.js"></script>

<script type="text/javascript">

var gCtx = null;
var gCanvas = null;
var imageData = null;
var c = 0;
var stype = 0;
var gUM = !1;
var v = null;

function handleFile(a) {
	var d = new FileReader;
	d.onload = function () {
		return function (a) {
			gCtx.clearRect(0, 0, gCanvas.width, gCanvas.height), qrcode.decode(a.target.result)
		}
	// read given file as base64 data.
	}(a[0]);
	d.readAsDataURL(a[0]);
}

/*
function handleUrl(a) {
	var image = new Image();  
	image.src = a;
	//alert(a);
	var can = document.createElement('canvas');
	var ctx = can.getContext('2d');
	image.onload = draw;
	function draw(){               
		ctx.drawImage(image, 0, 0);            
	}
	src = can.toDataURL();
	//alert(src);
	document.getElementById('outputimg').src = src;
}
*/

function initCanvas(a, b) {
	gCanvas = document.createElement("canvas");
	var c = a, d = b;
	gCanvas.style.width = c + "px", gCanvas.style.height = d + "px", gCanvas.width = c, gCanvas.height = d, gCtx = gCanvas.getContext("2d"), gCtx.clearRect(0, 0, c, d), imageData = gCtx.getImageData(0, 0, 320, 240)
}

function passLine(a) {
	for (var d = a.split("-"), e = 0; 320 > e; e++) {
		var f = parseInt(d[e]);
		r = 255 & f >> 16, g = 255 & f >> 8, b = 255 & f, imageData.data[c + 0] = r, imageData.data[c + 1] = g, imageData.data[c + 2] = b, imageData.data[c + 3] = 255, c += 4
	}
	if (c >= 307200) {
		c = 0, gCtx.putImageData(imageData, 0, 0);
		try {
			qrcode.decode()
		} catch (h) {
			console.log(h), setTimeout(captureToCanvas, 500)
		}
	}
}

function captureToCanvas() {
	if (stype == 1) if (gUM) {
		gCtx.drawImage(v, 0, 0);
		try {
			qrcode.decode()
		} catch (a) {
			console.log(a), setTimeout(captureToCanvas, 500)
		}
	}
}

function htmlEntities(a) {
	return (a + "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/ ?>/g, "&gt;").replace(/"/g, "&quot;");
}

function read(a) {
	document.getElementById("result").innerHTML = a
}

function isCanvasSupported() {
	var a = document.createElement("canvas");
	return !(!a.getContext || !a.getContext("2d"))
}
function error() {
	gUM = false;
}

function getStream(stream) {
	v.src = stream;
	gUM = true;
	setTimeout(captureToCanvas, 500);
}

function webkitGetStream(stream) {
	v.src = window.webkitURL.createObjectURL(stream);
	gUM = true;
	setTimeout(captureToCanvas, 500);
}

function mozGetStream(stream) {
	v.mozSrcObject = stream;
	v.play();
	gUM = true;
	setTimeout(captureToCanvas, 500);
}

function load() {
	isCanvasSupported() && window.File && window.FileReader ? (initCanvas(800, 600), qrcode.callback = read) : (document.getElementById("debug").innerHTML = 'Désolé, votre navigateur est incompatible (essayez avec Opera, Firefox ou Chromium.');
}

function setwebcam() {
	document.getElementById("select-infile").style.display= "none";
	document.getElementById("result").style.display= "block";
	document.getElementById('video-preview').style.display = 'block';
	if (document.getElementById("result").innerHTML = "", stype == 1) {
		setTimeout(captureToCanvas, 500);	
		return;
	}
	var a = navigator;

	// standard WebRTC init
	if (a.getUserMedia) {
		v = document.getElementById("v");
		a.getUserMedia({video: true, audio: false}, getStream, error);
	}

	// Webkit WebRTC init
	else if (a.webkitGetUserMedia) {
		v = document.getElementById("v");
		a.webkitGetUserMedia({video: true, audio: false}, webkitGetStream, error);
	}

	// Moz WebRTC init
	else if (a.mozGetUserMedia) {
		v = document.getElementById("v");
		a.mozGetUserMedia({video: true, audio: false}, mozGetStream, error);
	}

	//Nothing : not supported;
	else {
		document.getElementById("debug").innerHTML = "WebRTC n’est pas supporté par votre navigateur.";
		document.getElementById("video-preview").style.display= "none";
	}

	stype = 1;
	setTimeout(captureToCanvas, 100);
}


function setimg() {
	document.getElementById('video-preview').style.display = 'none';
	document.getElementById("result").style.display= "block";

	if (document.getElementById("result").innerHTML = "", stype != 2) {
		document.getElementById("select-infile").style.display= "block";
	}
}

/*function seturl() {
	if (document.getElementById("result").innerHTML = "", stype != 2) {
		document.getElementById("outdiv").innerHTML = imgurl;
	}
}*/

load();
</script>
</body>
</html>
