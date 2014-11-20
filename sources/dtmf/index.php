<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Cette page permet de générer les tonalités de numéros de téléphone, utilisant les fréquences DTMF" />

	<title>Générer des tonalités DTMF - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

input.text, button.submit {
	border: 1px solid silver;
	background: white;
	border-radius: 6px;
	padding: 8px;
	box-shadow: 0 0 3px silver inset;
	margin: 0 2px;
}
input.text:focus {
	box-shadow: 0 0 3px silver inset, 0 0 2px silver;
}

input#numero {
	width: 160px;
}

button.submit {
	box-shadow: 0 0 3px silver;
	background: #FFEC85;
}

label span {
	display: none;
}

table {
	margin: 20px auto;
	border-collapse: collapse;
}


table td button {
	margin: 3px;
	height: 45px;
	width: 50px;
	border: 1px solid silver;
	border-radius: 5px;
	box-shadow: 2px 4px 0 silver;
	position: relative;
	background: #f0f0f0;
	font-size: 18px;
}

input:focus, button:focus {
	border-color: gray;
}

table td button:active {
	box-shadow: 1px 1px 1px silver;
	left: 1px;
	top: 2px;
	outline: none;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Générer des tonalités DTMF</h1>
</header>




<section id="main-form">
	<label><span>Votre numéro : </span><input type="text" id="numero" autofocus value="" placeholder="08 001 23 4 56" class="text" /></label>
	<button type="button" onclick="playSequence(); return false;" class="submit">Jouer !</button>

	<table>
		<tr>
			<td><button type="button" onclick="add('1')">1</button></td>
			<td><button type="button" onclick="add('2')">2</button></td>
			<td><button type="button" onclick="add('3')">3</button></td>
		</tr>
		<tr>
			<td><button type="button" onclick="add('4')">4</button></td>
			<td><button type="button" onclick="add('5')">5</button></td>
			<td><button type="button" onclick="add('6')">6</button></td>
		</tr>
		<tr>
			<td><button type="button" onclick="add('7')">7</button></td>
			<td><button type="button" onclick="add('8')">8</button></td>
			<td><button type="button" onclick="add('9')">9</button></td>
		</tr>
		<tr>
			<td><button type="button" onclick="add('*')">*</button></td>
			<td><button type="button" onclick="add('0')">0</button></td>
			<td><button type="button" onclick="add('#')">#</button></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="button" onclick="add(' ')">_</button></td>
			<td></td>
		</tr>
	</table>

</section>

<div class="notes centrer">
	<p>444565 46554 444565 46554 555522 54321 444565 46554<br/>12312234431231223451<br/>86 86 86 86 8687 8687 87 87 87 87 888 777 6 888 777 6 888 777 6 666 777 888777 6<br/>3334554321123322334554321123211 22312 343 12 343 12 343 334554321123211</p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */

/*
	TODO:
	‑ long sounds
	- on sound play : stylize button press :p
*/

"use strict";

var s1 = new Audio('audio/Dtmf1.ogg');
var s2 = new Audio('audio/Dtmf2.ogg');
var s3 = new Audio('audio/Dtmf3.ogg');
var s4 = new Audio('audio/Dtmf4.ogg');
var s5 = new Audio('audio/Dtmf5.ogg');
var s6 = new Audio('audio/Dtmf6.ogg');
var s7 = new Audio('audio/Dtmf7.ogg');
var s8 = new Audio('audio/Dtmf8.ogg');
var s9 = new Audio('audio/Dtmf9.ogg');
var s0 = new Audio('audio/Dtmf0.ogg');
var ss = new Audio('audio/DtmfStar.ogg');
var sS = new Audio('audio/DtmfSharp.ogg');
var sN = new Audio('audio/DtmfSilence.ogg');

var tableauSons = new Array(s0, s1, s2, s3, s4, s5, s6, s7, s8, s9, ss, sS, sN);

function playSequence() {

	var numeros = document.getElementById('numero').value.split('');
	if (numeros.length == 0) numeros = '112163 112196 11#9632 ##9696'.split('');

	function playNext() {
		playNum();
	}

	function playNum() {
		if (numeros.length === 0) return;

		var num = numeros.shift();
		while ("0123456789*# ".indexOf(num) == -1) { num = numeros.shift(); if (numeros.length === 0) return; }

		if (num == '#') var son = 10;
		else if (num == '*') var son = 11;
		else if ("0123456789".indexOf(num) != -1) var son = num;
		else if (num == ' ') var son = 12;

		tableauSons[son].play();
		if (numeros.length !== 0) {
			tableauSons[son].addEventListener('ended', playNext, false);
		}
	}
	playNum();
}


function add(val) {
	document.getElementById('numero').value += val;
}
/* ]]> */
</script>


<!--
# adresse de la page : http://lehollandaisvolant.net/tout/tools/dtmf/
#      page créée le : 20 novembre 2013
#     mise à jour le : 21 novembre 2013
-->
</body>
</html>

