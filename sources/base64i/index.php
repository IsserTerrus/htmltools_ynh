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
<html lang="fr-fr" manifest="timo.base64.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un encodeur base64 d’images" />
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<title>Encoder un fichier en base64 - le hollandais volant</title>
	<style type="text/css">
#data, #output {
	padding: 10px;
	border: 1px solid silver;
	border-radius: 5px;
	min-width: 300px;
	text-align: left;
	width: 80%;
	max-width: 900px;
}

label[for="data"] {
	display: inline-block;
	margin: 30px auto 15px;
}

#main-form {
	padding-top: 30px;
	padding-bottom: 30px;
}

#file{
	border: 1px solid silver;
	padding: 4px 10px;
	margin-top: 10px;
	margin-bottom: 10px;
	border-radius: 5px;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Encoder un fichier en base64</h1>
</header>

<section id="main-form" class="main-form">
	<div id="form-bloc">
		<label for="file">Sélectionnez votre fichier</label><br/>
		<input id="file" type="file" onchange="loadimage(this.files)" />
	</div>

	<textarea id="output" rows="20" cols="50" placeholder="Le résultat sera ici" class="centrer" style="display:none;" onfocus="this.select()" onblur="this.selectionEnd = this.selectionStart;"></textarea>
</section>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
function imageHandler(d) { 
	document.getElementById('output').value = d.target.result;
	document.getElementById('output').style.display = 'block';
}

function loadimage(files) {
	var filename = files[0];
	var fr = new FileReader();
	fr.onload = imageHandler;
	fr.readAsDataURL(filename);
}

</script>
</body>
</html>
