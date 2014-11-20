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
<html lang="fr-fr" manifest="timo.calendar.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un calendrier simple du mois en cours, en javascript" />
	<title>Calendrier - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

.main-form {
	padding: 20px 70px;
}

#calendar-wrapper {
	width: 245px;
	border: 1px solid silver;
	margin: 10px auto;
	empty-cells: hide;
	padding: 10px;

	background: #ff7;
	background: linear-gradient(-45deg, #f77, #ff7, #aff);
	background: -o-linear-gradient(-45deg, #f77, #ff7, #aff);
	background: -ms-linear-gradient(-45deg, #f77, #ff7, #aff);
	background: -moz-linear-gradient(-45deg, #f77, #ff7, #aff);
	background: -webkit-linear-gradient(-45deg, #f77, #ff7, #aff);
}


#calendar {
	box-shadow: 2px 2px 5px black;
	background: rgba(255, 255, 255, .5);
	border: 1px solid silver;
	border-radius: 3px;
}

#days td {
	width: 30px;
	height: 30px;
	border: 1px solid silver;
	border-radius: 0 0 5px 0;
	background: rgba(255, 255, 255, 1);
}

.today {
	font-weight: bold;
}

	</style>
</head>
<body>
<header id="header">
	<h1 class="titre">Calendrier du mois</h1>
</header>
<section id="main-form" class="main-form">
<div id="calendar-wrapper">
	<table id="calendar">
		<thead>
			<tr>
				<td id="prev-month" colspan="1"><button onclick="changeDate('m')">«</button></td>
				<td id="month" colspan="5"></td>
				<td id="next-month" colspan="1"><button onclick="changeDate('p')">»</button></td>
			</tr>
			<tr><th>Lu</th><th>Ma</th><th>Me</th><th>Je</th><th>Ve</th><th>Sa</th><th>Di</th></tr>
		</thead>
		<tbody id="days"></tbody>
	</table>
</div>
</section>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */

var jours = new Array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
var mois = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

var idate = new Date(); // actual date

function changeDate(s) {
	var s = (s == 'm') ? -1 : +1;
	var fdate = new Date(idate.getFullYear(), idate.getMonth()+s);
	idate = fdate;
	generate(idate.getFullYear(), idate.getMonth(), idate.getDate());
}

function generate(y, m, d) {
	document.getElementById('days').innerHTML = '';

	var date = new Date(y, m, d); // actual date
	var dow = date.getDay(); // day of week 0-6
	var dom = date.getDate(); // day of month DD
	var year = date.getFullYear(); // year YYYY
	var moy = date.getMonth(); // month of year MM
	var ndm = new Date(year, moy+1, 0).getDate(); // n of day in month (ie : march = 31).
	var ndate = new Date(year, moy+1, 0); ndate.setDate(1); var fdom = ndate.getDay(); // first weekday of month (0=sunday)
	fdom = (fdom == 0) ? 7 : fdom;

	document.getElementById('month').innerHTML = mois[moy]+' '+year;

	for (var d = 1; d < ndm+fdom; d++) {

		if (d % 7 == 1) { // tous les 7 jours, refait une ligne du table
			var tr = document.getElementById('days').appendChild(document.createElement("tr"));
		}
		if (d < fdom) { // for ex : if 1st day is Tue, one empty cell is added for offeset.
			var td = tr.appendChild(document.createElement('td'));
		}
		else {
			var td = tr.appendChild(document.createElement('td'));
			td.innerHTML = d+1-fdom;
			td.id = 'd'+(d+1-fdom);
			if (d+1-fdom == dom) {
				td.className = 'today';
			}
		}
	}
}

generate(idate.getFullYear(), idate.getMonth(), idate.getDate());

/* ]]> */
</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/calendar/
#      page créée le : 29 mars 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>
