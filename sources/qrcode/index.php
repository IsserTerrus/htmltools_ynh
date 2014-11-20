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
<html lang="fr-fr" manifest="timo.qrcode.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un générateur QR Code en Javascript et HTML." />
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<title>Générer un QRcode™ - le hollandais volant</title>
	<style type="text/css">


#data {
	padding: 10px;
	border: 1px solid silver;
	border-radius: 5px;
	min-width: 200px;
	text-align: left;
	width: 60%;
	max-width: 600px;
}

label[for="data"] {
	display: inline-block;
	margin: 30px auto 15px;
}

#outputimg {
	border: none;
	box-shadow: 5px 5px 15px silver;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Générer un QR Code™</h1>
</header>

<section id="main-form" class="main-form"	>

	<div id="output"><a id="outputlink" href="#" download="image.png" onclick="downloadImage();"><img src="#" id="outputimg" alt="qrcode généré ici"></a></div>

	<label for="data">Entrez votre texte / URL / numéro de téléphone ici : </label> 
	<textarea name="data" id="data" rows="7" cols="40" placeholder="Placez votre texte ici" class="centrer"></textarea>
<!-- onkeyup="go()" -->

		<label for="ecclevel">Niveau de redondance des données :</label> 
		<select name="ecclevel" id="ecclevel" onchange="return go();">
			<option value="L">L (faible ~7%)</option>
			<option value="M" selected="selected">M (moyen ~15%)</option>
			<option value="Q">Q (quart ~25%)</option>
			<option value="H">H (haut ~30%)</option>
		</select>

	<button onclick="go();" id="gen" class="centrer submit-centrer">Générer</button>

	<div id="debug"></div>

	<div class="notes centrer">
		<a href="http://www.denso-wave.com/qrcode/faqpatent-e.html">QR Code™</a> - <a href="http://hg.mearie.org/qrjs/">Généré avec QR-JS</a>
	</div>

</section>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript" src="qrcode.js"></script>

<script type="text/javascript">
function go() {
	var data = document.getElementById('data').value;
	var options = {ecclevel: document.getElementById('ecclevel').value};
	var url = QRCode.generatePNG(data, options);
	document.getElementById('outputimg').src = url;
	return false;
}
go();

function downloadImage() {
	data = document.getElementById('outputimg').src;
	document.getElementById('outputlink').href = data;
}
</script>
</body>
</html>
