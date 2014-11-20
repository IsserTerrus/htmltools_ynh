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
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un validateur d’Email en ligne, qui tient compte des RFC correspondants" />
	<title>Vérifier la validité d’une adresse email - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#main-form .text {
	padding: 3px 4px;
	border: 1px solid silver;
	border-radius: 5px;
	text-align: left;
	margin-left: 5px;
	margin-right: 5px;
}

b.green {
	color: green;
}
b.red {
	color: red;
}

#response {
	font-size: 110%;
}
	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Vérifier la validité d’une adresse email</h1>
</header>

<section id="main-form" class="main-form" onsubmit="test();">
	<label for="mail">Email à tester&nbsp;:</label> 
	<input type="text" id="mail" value="mail@example.com" name="mail" placeholder="mail@example.com" class="text" />
	<button onclick="test();" id="d" class="centrer submit-centrer">Vérifier</button>
	<p id="response">Veuillez entrer une adresse email.</p>
	<div class="notes">
		<ul>
			<li>La validation est faite avec la bibliothèque <a href="http://code.google.com/p/isemail/">Isemail</a>, sous license BSD.</li>
			<li>Isemail respecte les normes décrites dans les RFC <a href="http://tools.ietf.org/html/rfc5321">5321</a>, <a href="http://tools.ietf.org/html/rfc3696">3696</a>, <a href="http://tools.ietf.org/html/rfc2822">2822</a>.</li>
			<li>La résolution du nom de domaine n’est pas testée, seul le format de l’adresse l’est.</li>
		</ul>
	</div>
</section>

<div id="download">
	<p><a href="index.7z"><img src="download.png" alt="download" title="Télécharger"/></a></p>
</div>

<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

// create and send form
function test() {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'rex.php');
	xhr.onload = function() {
		if (this.responseText == 'TRUE') {
			document.getElementById('response').innerHTML = 'L’adresse email est <b class="green">valide</b>.';
		} else {
			document.getElementById('response').innerHTML = 'L’adresse email est <b class="red">invalide</b>.';
		}
	};
	// prepare and send FormData
	var formData = new FormData();  
	formData.append( 'm', document.getElementById('mail').value );
	xhr.send(formData);

	return false;
}
/* ]]> */
</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/rfc-valid/
#      page créée le : 25 février 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>

