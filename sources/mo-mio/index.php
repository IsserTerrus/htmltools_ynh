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
<html lang="fr-fr" manifest="timo.mo-mio.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un convertisseur de kilooctet, megaoctet dans tous les sens en javascript" />
	<title>Convertisseur de quantité de données informatique - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#source {
	width: 150px;
}

#unite_i {
}

#all_units {
	width: 100%;
	min-width: 650px;
	max-width: 700px;
	margin: 0 auto;
	text-align: left;
}

#all_units .bloc {
	height: 40px;
}

	</style>
</head>
<body>

<header id="header">
	<h1 class="titre">Convertisseur de quantité de données informatique</h1>
</header>

<section id="main-form" class="main-form">
	<label for="source">Quantité&nbsp;: </label> 
	<input type="number" onkeyup="convert();" step="1" min="2" max="10000000000" id="source" value="1024" name="source" placeholder="1024" class="text" />
	<select name="unite_i" id="unite_i" onchange="convert();">
		<option value="o">o (octet)</option>
		<option value="k" selected>ko (kilooctet)</option>
		<option value="ki">kio (kibioctet)</option>
		<option value="m">Mo (mégaoctet)</option>
		<option value="mi">Mio (mébioctet)</option>
		<option value="g">Go (gigaoctet)</option>
		<option value="gi">Gio (gibioctet)</option>
		<option value="t">To (téraoctet)</option>
		<option value="ti">Tio (tebioctet)</option>
	</select>

	<button onclick="convert();" id="convertir" class="centrer submit-centrer">Convertir</button>

	<table id="all_units">
		<tr>
			<td class="bloc">
				<input readonly type="text" id="o" class="text" />
				<label for="o">o (octet)</label> 
			</td>
			<td></td>
		</tr>
		<tr>
			<td class="bloc">
				<input readonly type="text" id="k" class="text" />
				<label for="k">ko (kilooctet)</label> 
			</td>
			<td class="bloc">
				<input readonly type="text" id="ki" class="text" />
				<label for="ki">kio (kibioctet)</label> 
			</td>
		</tr>
		<tr>
			<td class="bloc">
				<input readonly type="text" id="m" class="text" />
				<label for="m">Mo (mégaoctet)</label> 
			</td>
			<td class="bloc">
				<input readonly type="text" id="mi" class="text" />
				<label for="mi">Mio (mébioctet)</label> 
			</td>
		</tr>
		<tr>
			<td class="bloc">
				<input readonly type="text" id="g" class="text" />
				<label for="g">Go (gigaoctet)</label> 
			</td>
			<td class="bloc">
				<input readonly type="text" id="gi" class="text" />
				<label for="gi">Gio (gibioctet)</label> 
			</td>
		</tr>
		<tr>
			<td class="bloc">
				<input readonly type="text" id="t" class="text" />
				<label for="t">To (téraoctet)</label> 
			</td>
			<td class="bloc">
				<input readonly type="text" id="ti" class="text" />
				<label for="ti">Tio (tébioctet)</label> 
			</td>
		</tr>
	</table>

	<div class="notes centrer">
		<p>1&nbsp;To = 1&thinsp;000&nbsp;Go = 1&thinsp;000&thinsp;000&nbsp;Mo = 1&thinsp;000&thinsp;000&thinsp;000&nbsp;ko = 1&thinsp;000&thinsp;000&thinsp;000&thinsp;000&nbsp;o<br/>
1&nbsp;Tio = 1&thinsp;024&nbsp;Gio = 1&thinsp;048&thinsp;576&nbsp;Mio = 1&thinsp;073&thinsp;741&thinsp;824&nbsp;kio = 1&thinsp;099&thinsp;511&thinsp;627&thinsp;776&nbsp;o</p>
	</div>

</section>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

function convert() {
	var nombre_i = document.getElementById('source').value;
	var unite_i = document.getElementById('unite_i').value;
	var nombre_f_o = 0;

	// switch en octets pour commencer.
	switch(unite_i) {
		case 'o':  nombre_f_o = nombre_i;break;
		case 'k':  nombre_f_o = nombre_i*1000; break;
		case 'm':  nombre_f_o = nombre_i*1000*1000; break;
		case 'g':  nombre_f_o = nombre_i*1000*1000*1000; break;
		case 't':  nombre_f_o = nombre_i*1000*1000*1000*1000; break;
		case 'ki': nombre_f_o = nombre_i*1024; break;
		case 'mi': nombre_f_o = nombre_i*1024*1024; break;
		case 'gi': nombre_f_o = nombre_i*1024*1024*1024; break;
		case 'ti': nombre_f_o = nombre_i*1024*1024*1024*1024; break;
	}

	document.getElementById('o').value = nombre_f_o;
	document.getElementById('k').value = String(parseFloat((nombre_f_o/1000).toFixed(12))).replace(/\./g, ',');
	document.getElementById('m').value = String(parseFloat((nombre_f_o/1000/1000).toFixed(12))).replace(/\./g, ',');
	document.getElementById('g').value = String(parseFloat((nombre_f_o/1000/1000/1000).toFixed(12))).replace(/\./g, ',');
	document.getElementById('t').value = String(parseFloat((nombre_f_o/1000/1000/1000/1000).toFixed(12))).replace(/\./g, ',');
	document.getElementById('ki').value = String(parseFloat((nombre_f_o/1024).toFixed(12))).replace(/\./g, ',');
	document.getElementById('mi').value = String(parseFloat((nombre_f_o/1024/1024).toFixed(12))).replace(/\./g, ',');
	document.getElementById('gi').value = String(parseFloat((nombre_f_o/1024/1024/1024).toFixed(12))).replace(/\./g, ',');
	document.getElementById('ti').value = String(parseFloat((nombre_f_o/1024/1024/1024/1024).toFixed(12))).replace(/\./g, ',');

	return false;
}

convert();

/* ]]> */
</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/mo-mio/
#      page créée le : 3 mars 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>
