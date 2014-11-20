<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Page pour convertir des unités" />

	<title>Convertisseurs d’unités - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

.main-form {
	vertical-align: middle;
}

.oneline {
	display: block;
	text-align: right;
	margin: 10px auto;
	width: 300px;
}

#type,
#in-value,
#out-value {
	height: 2em;
	font-size: 100%;

	border: 1px solid silver;
	background: white;
	border-radius: 5px;
	padding: 5px;
	box-shadow: 0 0 3px silver inset;

	box-sizing: border-box;
	-moz-box-sizing: border-box;
}

#type {
	background: #eee;
}

#in-params,
#out-params {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
}


#in-params select,
#out-params select{
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid silver;
	background: #eee;
	border-radius: 5px;
	padding: 5px;
	box-shadow: 0 0 3px silver inset;
	width: 42%;
	margin: 5px 0 5px 1%;
}

#in-params label,
#out-params label {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 10%;
	margin: 0;
	text-align: left;
	display: inline-block;
}

#out-value {
	color: red;
	font-weight: bold;
	text-align: right;
}

#p-outvalue {
	position: relative;
}

#p-outvalue::before {
	content: "=";
	position: absolute;
	top: -.15em;
	font-size: 2em;
	left: .15em;
	color: silver
	
}

p.oneline input {
	width: 100%;
}

#p-convert button {
	width: 100%;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Convertisseur d’unités</h1>
</header>


<section class="main-form">

	<select class="oneline" id="type" onchange="genform();calc();">
		<option value="distance" selected="selected">Distance</option>
		<option value="energie">Énergie</option>
		<option value="masse">Masse</option>
		<option value="pression">Pression</option>
		<option value="temps">Temps</option>
		<option value="vitesse">Vitesse</option>
		<option value="volume">Volume</option>
	</select>

	<input class="oneline" type="text" id="in-value" value="1" onchange="calc();" />

	<p class="oneline" id="in-params">
		<label for="in-prefix">De :</label>
		<select id="in-prefix" onchange="calc();">
			<option value="-12">pico</option>
			<option value="-9">nano</option>
			<option value="-6">micro</option>
			<option value="-3">milli</option>
			<option value="-2">centi</option>
			<option value="-1">déci</option>
			<option value="0" selected="selected">Ø</option>
			<option value="1">déca</option>
			<option value="2">hecto</option>
			<option value="3">kilo</option>
			<option value="6">méga</option>
			<option value="9">giga</option>
			<option value="12">tera</option>
		</select>
		<select id="in-unite" onchange="calc();"></select>
	</p>
	<p class="oneline" id="out-params">
		<label for="out-prefix">À :</label>
		<select id="out-prefix" onchange="calc();">
			<option value="-12">pico</option>
			<option value="-9">nano</option>
			<option value="-6">micro</option>
			<option value="-3">milli</option>
			<option value="-2">centi</option>
			<option value="-1">déci</option>
			<option value="0" selected="selected">Ø</option>
			<option value="1">déca</option>
			<option value="2">hecto</option>
			<option value="3">kilo</option>
			<option value="6">méga</option>
			<option value="9">giga</option>
			<option value="12">tera</option>
		</select>
		<select id="out-unite" onchange="calc();"></select>
	</p>

	<p class="oneline" id="p-convert"><button type="button" class="submit-centrer" onclick="calc();">Convertir</button></p>

	<p class="oneline" id="p-outvalue"><input type="text" id="out-value" readonly /></p>
</section>




<div class="notes centrer">
	<p>Notes</p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */
"use strict";

var distArr = new Array(['metre', 1], ['pied', 0.3048], ['pouce', 0.0254], ['angström', 10e-10], ['mille', 1609], ['mille nautique', 1853], ['yard', 0.9144], ['lieue', 4828.032], ['unité astronomique', 149597870700], ['année-lumière', 9460730472580800], ['parsec', 30856775814672e3]);
var timeArr = new Array(['seconde', 1], ['minute', 60], ['heure', 3600]);
var enerArr = new Array(['joule', 1], ['calorie', 4.1855], ['electron-volt', 1.60217e-19], ['watt-heure', 3600]);
var massArr = new Array(['kilogramme', 1], ['tonne', 1000], ['livre', 0.45359], ['once', 0.028349]);
var presArr = new Array(['pascal', 1], ['bar', 100000], ['kg/cm²', 98066.5], ['P.S.I.', 1.45038e-4], ['atmosphère', 101325], ['mmHg', 133.3]);
var voluArr = new Array(['mètre cube', 1], ['litre', 0.001], ['tasse', 0.00023658], ['once liquide US', 0.0000295735295625],  ['gallon US', 0.003785411784]);
var viteArr = new Array(['m/s', 1], ['km/h', 1/3.6], ['mach', 340], ['nœuds', 0.514],  ['milles/h', 1609/3600], ['c', 299792458]);


// À partir du type d’unité choisi (longueurs, temps, masse…)
// Remplie les listes déroulantes avec les unités

// le traitement HTML de genForm
function fillSelect(arr) {
	var inUnit = document.getElementById('in-unite');
	var outUnit = document.getElementById('out-unite');
	inUnit.innerHTML = '';
	outUnit.innerHTML = '';
	for (var i=0, len = arr.length ; i < len ; i++) {
		var option = document.createElement('option');
		option.innerHTML = arr[i][0];
		option.value = arr[i][1];
		inUnit.appendChild(option);
		outUnit.appendChild(option.cloneNode(true));
	}

}

function genform() {
	// selon le type, change les unités
	switch (document.getElementById('type').value) {
		case 'distance':
			fillSelect(distArr); break;
		case 'temps':
			fillSelect(timeArr); break;
		case 'energie':
			fillSelect(enerArr); break;
		case 'masse':
			fillSelect(massArr); break;
		case 'pression':
			fillSelect(presArr); break;
		case 'volume':
			fillSelect(voluArr); break;
		case 'vitesse':
			fillSelect(viteArr); break;
		default:
			break;
	}
}

function calc() {
	// tester choix préfixe
	// tester empty valeur (is numéric)
	// tester unité

	var inValue = document.getElementById('in-value').value.replace(/,/g, '.');
	if (isNaN(parseFloat(inValue))) {
		var output = 'Erreur';
	}
	else {
		var inFactor = document.getElementById('in-unite').value;
		var inPrefixFactor = document.getElementById('in-prefix').value;
		var outFactor = document.getElementById('out-unite').value;
		var outPrefixFactor = document.getElementById('out-prefix').value;
		var output = inValue * inFactor * Math.pow(10, inPrefixFactor) / outFactor / Math.pow(10, outPrefixFactor);
	}


	if (String(output).match(/\./g)) {
		output = output.toPrecision(5);
		output = parseFloat(output).toExponential(5);
	}

	output = parseFloat(output);

	
	document.getElementById('out-value').value = String(output).replace(/\./g, ',');

}





(function(){
	genform();
})();

/* ]]> */
</script>

<!--
# adresse de la page : http://lehollandaisvolant.net/tout/tools/unites/
#      page créée le : 23 août 2014
#     mise à jour le : 24 août 2014
-->

</body>
</html>
