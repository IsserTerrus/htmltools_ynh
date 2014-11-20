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
	<meta name="description" content="Un encodeur/décodeur de texte en base64" />
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<title>Encoder et décoder du texte en base64 - le hollandais volant</title>
	<style type="text/css">
#data, #output {
	padding: 10px;
	border: 1px solid silver;
	border-radius: 5px;
	min-width: 280px;
	text-align: left;
	width: 80%;
	max-width: 900px;
}

label[for="data"] {
	display: inline-block;
	margin: 30px auto 15px;
}

.main-form .submit-centrer.blue {
	border: solid 1px #0098FF;
	background: #0098FF;
}

.main-form .submit-centrer.blue:active {
	color: #ddddff;
	background: #0098FF;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Encoder et décoder du texte en base64</h1>
</header>

<section id="main-form" class="main-form"	>
	<label for="data">Données source : </label> 
	<textarea id="data" rows="12" cols="50" placeholder="Placez votre texte ici" class="centrer"></textarea>
	<p class="centrer">
		<button onclick="go('encode');" class="submit-centrer blue"> &lt; Encoder &gt; </button>
		<button onclick="go('decode');" class="submit-centrer"> &gt; Décoder &lt; </button>
	</p>
	<textarea id="output" rows="8" cols="50" placeholder="Le résultat sera ici" readonly class="centrer" style="display:none;"></textarea>
</section>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript" src="base64.js"></script>

<script type="text/javascript">
function go(encdec) {
	var datain = document.getElementById('data').value;
	var dataout = '';
	try {
		if (encdec == 'decode') {
			dataout = base64.decode(datain);
		}
		else {
			dataout = base64.encode(datain);
		}
	}
	catch (e) {
		dataout = e;
	}

	document.getElementById('output').value = dataout;
	document.getElementById('output').style.display = 'block';
	return false;
}

</script>
</body>
</html>
