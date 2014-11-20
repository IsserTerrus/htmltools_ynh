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
<html lang="fr-fr" manifest="timo.dates.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="additionner, soustraire des heures et des dates" />
	<title>Effectuer des opérations sur des dates et des heures - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

.main-form {
	padding: 0 20px 20px;
}

.main-form h2 {
	margin-bottom: 40px;
	text-align: left;
	text-shadow: 2px 2px 3px silver;
}

.main-form .text {
	width: 40px;
	padding: 3px 5px;
	border: 1px solid silver;
	border-radius: 5px;
	text-align: center;
	margin-left: 2px;
	margin-right: 2px;
}

.main-form .longtext {
	width: 200px;
	text-align: right;
}
.main-form .fl {
	display: inline-block;
	width: 110px;
	text-align: left;
}

.main-form #i-y, .main-form #f-y {
	width: 60px;
}


.main-form .submit-centrer.blue {
	border: solid 1px #0098FF;
	background: #0098FF;
}

.main-form .submit-centrer.blue:active {
	color: #ddddff;
	background: #0098FF;
}

.main-form .submit-centrer.green {
	border: solid 1px #00B313;
	background: #44D230;
}

.main-form .submit-centrer.green:active {
	color: #ddddff;
	background: #00B313;
}

.result {
	font-size: 100%;
	font-weight: bold;
}

input:invalid {
  background-color: #ffdddd;
}

.c_result {
	width: 160px;
	display: inline-block;
	text-align: right;
}
.label {
	display: inline-block;
	width: 100px;
	text-align: left;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Effectuer des opérations sur des dates et des heures</h1>
</header>

<form method="get" class="main-form">
	<h2>Calculer la différence entre deux dates&nbsp;:</h2>
	<label for="i-y">Date 1&nbsp;: </label> 
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="9999" id="i-y" value="<?php echo date('Y') ?>" name="i-y" placeholder="<?php echo date('Y') ?>" class="text" required /> /
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="01" max="12" id="i-m" value="<?php echo date('m') ?>" name="i-m" placeholder="<?php echo date('m') ?>" class="text" required /> /
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="01" max="31" id="i-d" value="<?php echo date('d') ?>" name="i-d" placeholder="<?php echo date('d') ?>" class="text" required /> à
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="23" id="i-h" value="<?php echo date('H') ?>" name="i-h" placeholder="<?php echo date('H') ?>" class="text" required />:
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="59" id="i-i" value="<?php echo date('i') ?>" name="i-i" placeholder="<?php echo date('i') ?>" class="text" required />:
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="59" id="i-s" value="<?php echo date('s') ?>" name="i-s" placeholder="<?php echo date('S') ?>" class="text" required />

<br/>

	<label for="f-y">Date 2&nbsp;: </label> 
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="9999" id="f-y" value="2000" name="f-y" placeholder="2000" class="text" required /> /
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="01" max="12" id="f-m" value="01" name="f-m" placeholder="01" class="text" required /> /
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="01" max="31" id="f-d" value="03" name="f-d" placeholder="03" class="text" required /> à
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="23" id="f-h" value="09" name="f-h" placeholder="09" class="text" required />:
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="59" id="f-i" value="46" name="f-i" placeholder="46" class="text" required />:
	<input type="number" onkeyup="return calc_dates('diff');" step="1" min="00" max="59" id="f-s" value="16" name="f-s" placeholder="16" class="text" required />

	<p class="centrer">
		<input type="submit" onclick="return calc_dates('diff');" value="Soustraire" name="difference" class="submit-centrer"/>
		<input type="submit" onclick="return calc_dates('summ');" value="Additionner" name="somme" class="submit-centrer blue"/>
	</p>

	<p id="diffdate">La différence entre ces deux dates est&nbsp;:<br/><span class="result" id="diffdate-res"></span></p>

	<p id="sommdate">La somme de ces deux dates correspond au&nbsp;:<br/><span class="result" id="sommdate-res"></span></p>

	<div class="notes centrer">
		<ul>
			<li>L’intervalle de date possible commence le 0100-01-01 à 00:00:00 et termine la 9999-12-31 à 23:59:59.</li>
			<li>Le calcul tient compte des années bissextilles.</li>
			<li>Une année «&nbsp;xx&nbsp;» sur deux chiffres correspond à l’année 19xx.</li>
			<li>Une valeur de 100 dans les secondes est calculée comme 1 minute et 40 secondes.</li>
		</ul>
	</div>

</form>




<form method="get" class="main-form">
	<h2>Convertir un nombre de secondes en minutes, heures, jours&nbsp;:</h2>

	<span style="visibility:hidden;">+</span><input type="number" step="1" id="n-d" value="0"   min="0" name="n-d" placeholder="0"   class="longtext text" /><label class="fl" for="n-d">jours</label><br/>
	+<input type="number" step="1" id="n-h" value="2"   min="0" name="n-h" placeholder="2"   class="longtext text" /><label class="fl" for="n-h">heures</label><br/>
	+<input type="number" step="1" id="n-i" value="30"  min="0" name="n-i" placeholder="30"  class="longtext text" /><label class="fl" for="n-i">minutes</label><br/>
	+<input type="number" step="1" id="n-s" value="1800" min="0" name="n-s" placeholder="1800" class="longtext text" /><label class="fl" for="n-s">secondes</label><br/>

	<br/>

	<input type="submit" onclick="return convert();" value="Convertir" name="convertir" class="centrer submit-centrer green"/>

	<p><span id="td" class="c_result"></span> <span class="label"> jours,</span></p>
	<p><span id="th" class="c_result"></span> <span class="label"> heures,</span></p>
	<p><span id="ti" class="c_result"></span> <span class="label"> minutes,</span></p>
	<p><span id="ts" class="c_result"></span> <span class="label"> secondes.</span></p>

	<div class="notes centrer">
		<ul>
			<li>Les mois et les années ne sont pas présents ici car tous les mois ne sont pas égaux.</li>
		</ul>
	</div>
</form>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

function getdate1() {
	var date = new Array();
	date['y'] = parseInt(document.getElementById('i-y').value);
	date['m'] = parseInt(document.getElementById('i-m').value);
	date['d'] = parseInt(document.getElementById('i-d').value);
	date['h'] = parseInt(document.getElementById('i-h').value);
	date['i'] = parseInt(document.getElementById('i-i').value);
	date['s'] = parseInt(document.getElementById('i-s').value);
	return date;
}

function getdate2() {
	var date = new Array();
	date['y'] = parseInt(document.getElementById('f-y').value);
	date['m'] = parseInt(document.getElementById('f-m').value);
	date['d'] = parseInt(document.getElementById('f-d').value);
	date['h'] = parseInt(document.getElementById('f-h').value);
	date['i'] = parseInt(document.getElementById('f-i').value);
	date['s'] = parseInt(document.getElementById('f-s').value);
	return date;
}

function parseDateFromVar(diff) {
	var date = new Array();
	date['y'] = diff.getFullYear();
	date['m'] = diff.getMonth();
	date['d'] = diff.getDate();
	date['h'] = diff.getHours();
	date['i'] = diff.getMinutes();
	date['s'] = diff.getSeconds();
	return date;

}

function d2(val) {
	if (val.toString().length == 1) {
		val = '0' + val.toString();
	}
	return val;
}

/* Main operating fonction */
function calc_dates(op) {
	// get dates
	var date1 = getdate1();
	var date2 = getdate2();

	var idate = new Date(date1['y'], date1['m'], date1['d'], date1['h'], date1['i'], date1['s']);
	var fdate = new Date(date2['y'], date2['m'], date2['d'], date2['h'], date2['i'], date2['s']);

	// difference between the two dates
	if (op == 'diff') {
		document.getElementById('diffdate').style.display = 'block';
		document.getElementById('sommdate').style.display = 'none';
		var diff = idate;
		diff.setFullYear(idate.getFullYear()-fdate.getFullYear());
		diff.setMonth(idate.getMonth()-fdate.getMonth());
		diff.setDate(idate.getDate()-fdate.getDate());
		diff.setHours(idate.getHours()-fdate.getHours());
		diff.setMinutes(idate.getMinutes()-fdate.getMinutes());
		diff.setSeconds(idate.getSeconds()-fdate.getSeconds());

		var dd = parseDateFromVar(diff);

		// print formated diff date on document.
		document.getElementById('diffdate-res').innerHTML = dd['y']+' années '+dd['m']+' mois '+dd['d']+' jours '+dd['h']+' heures '+dd['i']+' minutes '+dd['s']+' secondes';

	}
	else {
		var fdate = date2;
		document.getElementById('diffdate').style.display = 'none';
		document.getElementById('sommdate').style.display = 'block';

		var diff = idate;
		diff.setSeconds(diff.getSeconds()+fdate['s']);
		diff.setMinutes(diff.getMinutes()+fdate['i']);
		diff.setHours(diff.getHours()+fdate['h']);
		diff.setDate(diff.getDate()+fdate['d']);
		diff.setMonth(diff.getMonth()+fdate['m']);
		diff.setFullYear(diff.getFullYear()+fdate['y']);

		var dd = parseDateFromVar(diff);

		// print formated diff date on document.
		document.getElementById('sommdate-res').innerHTML = d2(dd['y'])+'/'+d2(dd['m'])+'/'+d2(dd['d'])+' à '+d2(dd['h'])+':'+d2(dd['i'])+':'+d2(dd['s']);
	}
	return false;
}

calc_dates('diff');

function convert() {
	var date = new Array();
	date['d'] = parseInt(document.getElementById('n-d').value); date['d'] = (String(date['d']) == 'NaN') ? 0 : date['d'];
	date['h'] = parseInt(document.getElementById('n-h').value); date['h'] = (String(date['h']) == 'NaN') ? 0 : date['h'];
	date['i'] = parseInt(document.getElementById('n-i').value); date['i'] = (String(date['i']) == 'NaN') ? 0 : date['i'];
	date['s'] = parseInt(document.getElementById('n-s').value); date['s'] = (String(date['s']) == 'NaN') ? 0 : date['s'];
	var nsec = date['d']*24*60*60 + date['h']*60*60 + date['i']*60 + date['s'];
	document.getElementById('ts').innerHTML = nsec;
	document.getElementById('ti').innerHTML = String(parseFloat((nsec/60).toFixed(12))).replace(/\./g, ',');
	document.getElementById('th').innerHTML = String(parseFloat((nsec/60/60).toFixed(12))).replace(/\./g, ',');
	document.getElementById('td').innerHTML = String(parseFloat((nsec/60/60/24).toFixed(12))).replace(/\./g, ',');
	return false;
}

convert();

/* ]]> */
</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/dates/
#      page créée le : 5 mars 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>
