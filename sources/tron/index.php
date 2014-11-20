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
<html lang="fr-fr" manifest="timo.tron.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un générateur de blabla en javascript" />
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<title>Générateur *tron - le hollandais volant</title>
	<style type="text/css">

#tron {
	margin: 0 auto 20px;
}

#output {
	border: 1px dashed silver;
	border-radius: 20px;
	padding: 10px;
	background: #f0f0f0;
	max-width: 500px;
	margin: 20px auto;
}

#output span {
	display: block;
	text-align: left;
	font-style: italic;
}

#output span:nth-of-type(even) {
	color: #40f;
}

#output span:nth-of-type(odd) {
	color: #f33;
}

#output span:last-of-type {
	color: black;
}

#output span:nth-of-type(even):before {
	content: 'James : ';
}

#output span:nth-of-type(odd):before {
	content: 'Jessie : ';
}

#output span:last-of-type:before {
	content: 'Miaouss : ';
}

#output span:before {
	color: black;
	font-style: normal;
}

#output p {
	text-align: left;
}
	</style>
</head>
<body>

<header id="header">
	<h1 class="titre">*tron</h1>
	<h2 class="sous-titre">(générateur de charabia)</h2>
</header>
<section id="main-form" class="main-form">
	<select id="tron" onchange="gen();">
		<option value="salutotron" selected="selected">Salut-o-tron</option>
		<option value="insultotron">Insult-o-tron</option>
		<option value="millesabordotron">Capitain Haddock-o-tron</option>
		<option value="rocketotron">Team Rocket-o-tron</option>
		<option value="excusotron">Excusotron pour étudiants</option>
		<option value="lsv">Le saviez-vous-o-tron ?</option>
		<option value="sageotron">Le sage-o-tron a parlé.</option>
	</select>
	<button onclick="gen();" id="capture" class="centrer submit-centrer">Générer</button>

	<p id="output">&nbsp;</p>

	<div class="notes">Les textes sont pour certains repris de <a href="http://www.charabia.net/gen/full-list.php">Charabia.net</a></div>
</section>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript" src="js/salutotron.js"></script>
<script type="text/javascript" src="js/millesabordotron.js"></script>
<script type="text/javascript" src="js/insultotron.js"></script>
<script type="text/javascript" src="js/rocketotron.js"></script>
<script type="text/javascript" src="js/excusotron.js"></script>
<script type="text/javascript" src="js/lsv.js"></script>
<script type="text/javascript" src="js/sageotron.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
var output = document.getElementById('output');

function gen() {
	otron = document.getElementById('tron').value;

	switch (otron) {
		case 'salutotron':
			salutotron();
			break;

		case 'millesabordotron':
			millesabordotron();
			break;

		case 'insultotron':
			insultotron();
			break;

		case 'rocketotron':
			rocketotron();
			break;

		case 'excusotron':
			excusotron();
			break;

		case 'lsv':
			lsv();
			break;

		case 'sageotron':
			sageotron();
			break;

		default:
			salutotron();
			break;
	}
}

gen();

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/tron/
#      page créée le : 1 avril 2013
#     mise à jour le : 2 avril 2013

-->
</body>
</html>

