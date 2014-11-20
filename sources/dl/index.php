<!DOCTYPE html>
<html lang="fr-fr" manifest="timo.dl.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Outil pour télécharger un document au lieu de l’afficher" />

	<title>Télécharger un document - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">
		#main-form {
			margin: 100px auto;
		}

		#main-form p+p {
			margin-top: 30px;
		}

		input, textarea {
			border: 1px solid silver;
			background: white;
			border-radius: 5px;
			padding: 5px;
			box-shadow: 0 0 3px silver inset;
			margin: 0 2px;
		}

		input:focus, textarea:focus {
			border-color: gray;
			box-shadow: 0 0 3px silver inset, 0 0 2px silver;
		}

		#download {
			box-shadow: 0 0 3px silver;
			background: #FFEC85;
			padding: 10px;
			border-radius: 7px;
		}
	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Télécharger un document</h1>
</header>

<section id="main-form">
	<p>
		<input placeholder="http://www.example.com/my-document" value="" id="url" type="text" size="40" onchange="updateUrl();" />
	</p>
	<p>
		<a id="download" class="centrer submit-centrer" href="#" download>Télécharger</a>
	</p>
</section>

<div class="notes centrer">
	<p>Cette page ne fonctionne correctement que dans Chrome &amp; Opera 15+.</p>
</div>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
	'use strict';

	function updateUrl() {
		var url = document.getElementById('url').value;
		document.getElementById('download').href = 'dl.php?q='+url;
	}
	updateUrl();
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/dl/
#      page créée le : 26 novembre 2013
#     mise à jour le : 26 novembre 2013

-->
</body>
</html>
