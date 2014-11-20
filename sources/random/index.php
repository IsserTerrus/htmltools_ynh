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
<html lang="fr-fr" manifest="timo.random.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="générer un nombre aléatoire." />
	<title>Générer un nombre aléatoire - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#main-form {
	padding-top: 0;
}

#main-form .submit-centrer {
	margin: 30px auto;
	height: 120px;
	width: 120px;
	font-size: 5em;
	line-height: 100px;
	vertical-align: middle;
	text-shadow: 1px 2px 0px rgba(200, 200, 200, .7);
	box-shadow: 1px 2px 3px gray, 0px -2px 0px #333 inset;
	border: 10px solid #222;
	border-radius: 50%;
	color: #fff;
	background: #000;
	background: -webkit-linear-gradient(top, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -moz-linear-gradient(top, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -ms-linear-gradient(top, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -o-linear-gradient(top, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: linear-gradient(top, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;

	animation: lbutton 5s infinite ease-in-out alternate;
	-o-animation: lbutton 5s infinite ease-in-out alternate;
	-ms-animation: lbutton 5s infinite ease-in-out alternate;
	-moz-animation: lbutton 5s infinite ease-in-out alternate;
	-webkit-animation: lbutton 5s infinite ease-in-out alternate;

	cursor: pointer;
}

#secondary-project .to-page {
	color: #000;
	font-weight: bold;
	text-decoration: none;
	position: absolute;
	bottom: 2px; right: 5px;
	text-shadow: 1px 1px 2px red;
}


@keyframes lbutton {
	  0% { box-shadow: 0px 0px 10px #00f; color: #77f; }
	 40% { box-shadow: 0px 0px 10px #ff0; color: #ff7; }
	 60% { box-shadow: 0px 0px 10px #f00; color: #f77; }
	100% { box-shadow: 0px 0px 10px #0f5; color: #7fb; }
}

@-o-keyframes lbutton {
	  0% { box-shadow: 0px 0px 10px #00f; color: #77f; }
	 40% { box-shadow: 0px 0px 10px #ff0; color: #ff7; }
	 60% { box-shadow: 0px 0px 10px #f00; color: #f77; }
	100% { box-shadow: 0px 0px 10px #0f5; color: #7fb; }
}

@-ms-keyframes lbutton {
	  0% { box-shadow: 0px 0px 10px #00f; color: #77f; }
	 40% { box-shadow: 0px 0px 10px #ff0; color: #ff7; }
	 60% { box-shadow: 0px 0px 10px #f00; color: #f77; }
	100% { box-shadow: 0px 0px 10px #0f5; color: #7fb; }
}

@-moz-keyframes lbutton {
	  0% { box-shadow: 0px 0px 10px #00f; color: #77f; }
	 40% { box-shadow: 0px 0px 10px #ff0; color: #ff7; }
	 60% { box-shadow: 0px 0px 10px #f00; color: #f77; }
	100% { box-shadow: 0px 0px 10px #0f5; color: #7fb; }
}

@-webkit-keyframes lbutton {
	  0% { box-shadow: 0px 0px 10px #00f; color: #77f; }
	 40% { box-shadow: 0px 0px 10px #ff0; color: #ff7; }
	 60% { box-shadow: 0px 0px 10px #f00; color: #f77; }
	100% { box-shadow: 0px 0px 10px #0f5; color: #7fb; }
}

#main-form .submit-centrer:active {
	text-shadow: 0px -1px 0px rgba(0, 0, 0, .5);
	box-shadow: 1px 2px 3px gray, 0px 2px 0px #467 inset;
	background: #0098FF;
	background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -moz-linear-gradient(bottom, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -ms-linear-gradient(bottom, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: -o-linear-gradient(bottom, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
	background: linear-gradient(bottom, rgba(255, 255, 255, .6), rgba(255, 255, 255, 0)), #000;
}

#result {
	margin: 20px;
	padding: 10px;
	border: 1px solid silver;
	background: #eee;
	border-radius: 15px;
}

#select-rang {
	margin: 0 auto 40px;
	position: relative;
	padding: 10px;
	width: 210px;
}

#select-rang label {
	width: 100px;
	text-align: center;
	display: inline-block;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Générer un nombre aléatoire</h1>
</header>

<section id="main-form" class="main-form">
		<div id="select-rang">
			<label for="min">borne 1&nbsp;: </label>
				<input type="number" id="min" name="min" min="0" step="1" value="1" /><br/>
			<label for="min">borne 2&nbsp;: </label>
				<input type="number" id="max" name="max" min="0" step="1" value="10" />
		</div>

		<button onclick="randomize()" class="centrer submit-centrer">?</button>
		<div id="result">Cliquez pour générer un nombre !</div>

		<!--<div id="graphique">
			<p id="nblancer" style="float:right;"></p>
			<div id="graph" style="height: 150px;"></div>
		</div>-->
</section>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

var nbLancer = 0;

function randomize() {
	var min = document.getElementById('min').value;
	var max = document.getElementById('max').value;
	var rand = Math.floor(Math.min(min, max) + Math.random()*Math.abs(min-max));
	document.getElementById('result').innerHTML = rand;
	document.getElementById('result').style.fontSize = '2em';
	nbLancer++;
//	raffraichitGraphique(rand, min, max);
}

/*
function raffraichitGraphique(rand, min, max) {
	var gBox = document.getElementById('graphique');
	gBox.style.display = 'block';
	document.getElementById('nblancer').innerHTML = 'Essais&nbsp;: '+nbLancer;

	for (i=min ; i<=max ; i++) {
		if (inp = document.getElementById('i_'+i)) {
			if (inp
			inp.value++;
		}

}

*/

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/random/
#      page créée le : 30 mars 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>

