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
<html lang="fr-fr" manifest="timo.bases.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un convertisseur en javascript de nombres entre bases numériques" />
	<title>Convertir un nombre entier dans différentes bases - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#main-form .result-centrer {
	font-size: 200%;
	border: 1px solid silver;
	border-radius: 15px;
	line-height: 2em;
	vertical-align: middle;
	height: 2em;
	padding: 2px;
	max-width: 400px;
}

#source, #destination {
	width: 50px;
}

#nombre {
	width: 100px;
}
	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Convertir un nombre entier dans différentes bases</h1>
</header>

<div id="main-form" class="main-form">
	<label for="source">Convertir de la base </label> 
	<input type="number" step="1" min="2" max="36" id="source" value="10" name="source" placeholder="10" class="text" />
	<label for="destination"> à la base </label> 
	<input type="number" step="1" min="2" max="36" id="destination" value="2" name="destination" placeholder="2" class="text" />
	<label for="destination"> le nombre </label> 
	<input type="text" id="nombre" value="42" name="nombre" placeholder="2" class="text" />

	<button onclick="return convert();" id="convertir" class="centrer submit-centrer">convertir</button>

	<p id="resultat" class="centrer result-centrer"></p>

	<div class="notes centrer">
		<p>Les bases vont de 2 à 36.</p>
		<p>Le nombre entré peut aller de 0 à 2&nbsp;147&nbsp;483&nbsp;647 inclus.</p>
	</div>

</div>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

function convert() {
	var valeur = document.getElementById('nombre').value;
	var base_source = document.getElementById('source').value;
	var base_destin = document.getElementById('destination').value;
	var result = parseInt(valeur, base_source).toString(base_destin);
	if (String(result) == 'NaN') {
		result = 'la base '+base_source+' est impossible pour '+valeur; // par exemple "3" est impossible en binaire, où il n’y a que 0 et des 1.
	}
	document.getElementById('resultat').innerHTML = result;
	return false;
}

convert();

/* ]]> */
</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/bases/
#      page créée le : 25 février 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>
