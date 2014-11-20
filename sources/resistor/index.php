<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Page pour trouver les valeurs en ohm du code couleur des résistors" />

	<title>Code couleur des résistors - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#main-form {
	vertical-align: middle;
}

select {
	background: #fff;
	border: 1px solid #999;
	border-radius: 5px;
	box-shadow: 0 1px 4px #CCC inset;
	margin: 0px 0px 3px;
	padding: 5px;
	vertical-align: middle;
	height: 28px;
	width: 100px;
}

select option {
	padding: 3px;
}

#reponse {
	margin-top: 50px;
	font-size: 1.5em;
	display: inline-block;
	border: 1px dashed black;
	border-radius: 11px;
	padding: 10px 55px;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Code couleur des résistors</h1>
</header>


<svg xmlns="http://www.w3.org/2000/svg" width="520" height="230" version="1.1" id="svg-resistor">
	<title>Résistor</title>
	<defs>
		<linearGradient id="linearGradient4250" gradientUnits="userSpaceOnUse" x1="0" x2="0" y1="67" y2="87">
			<stop style="stop-color: #4d4d4d;" offset="0" />
			<stop style="stop-color: #ffffff;" offset="0.5" />
			<stop style="stop-color: #171717;" offset="1" />
		</linearGradient>
		<linearGradient id="linearGradient4252" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="0" y2="162">
		   <stop style="stop-color:#a48e77;" offset="0" />
			<stop style="stop-color:#a48e77;" offset="0.7" />
			<stop style="stop-color:#443a31;" offset="1" />
		</linearGradient>
	</defs>

	<!-- iron wire -->
	<rect style="fill:url(#linearGradient4250);" x="0" y="67" width="520" height="28" />

	<!-- resistor -->
	<path style="fill:url(#linearGradient4252);" d="
		m 104,0
		c -35,0 -50,25 -60,55 -5,5 -5,12 -18,12
		l 0,28
		c 9,0 16,5 18,12 12,36 30,63 82,53 23,-4 43,-17 66,-17 29,0 56,6 83,4 31,-3 61,-13 92,-2 48,17 90,16 111,-30 4,-9 7,-20 18,-20
		l 0,-28
		c -11,1 -14,-10 -19,-19 -22,-47 -63,-47 -111,-30 -31,11 -61,1 -92,-2 -27,-2 -54,4 -83,4 -23,0 -43,-13 -66,-17 -8,-1 -15,-2 -22,-3 z" />

	<!-- connector band 1 -->
	<path style="fill:#000000;" d="m 100,160 l 0,50 -50,0 0,20 3,0 0,-17 50,0 0,-57 z" />
	<!-- connector band 2 -->
	<path style="fill:#000000;" d="m 161,140 l 0,70 -10,0 0,20 3,0 0,-17 10,0 0,-77 z" />
	<!-- connector band 3 -->
	<path style="fill:#000000;" d="m 221,140 0,73 35,0 0,20 3,0 0,-23 -35,0 0,-70 z" />
	<!-- connector band 4 -->
	<path style="fill:#000000;" d="m 281,140 0,73 80,0 0,20 3,0 0,-23 -80,0 0,-70 z" />
	<!-- connector band 5 -->
	<path style="fill:#000000;" d="m 401,140 0,73 65,0 0,20 3,0 0,-23 -65,0 0,-70 z" />


	<!-- band #1 -->
	<path style="fill:#831119;" id="band1" d="
		m 90,2
		l 0,158
		c 7,2 10,3 23,2
		l 0,-160
		c -9,-2 -15,-2 -23,0 z" />

	<!-- band #2 -->
	<path style="fill:#831119;" id="band2" d="
		m 150,7
		l 0,146
		c 4,-2 9,-3 23,-7
		l 0,-128
		c -9,-3 -15,-5 -23,-8 z" />

	<!-- band #3 -->
	<path style="fill:#831119;" id="band3" d="
		m 210,18
		l 0,126
		c 4,0 20,1 23,2
		l 0,-129
		c -9,2 -15,2 -23,2 z" />
	<!-- band #4 -->
	<path style="fill:#831119;" id="band4" d="
		m 270,16
		l 0,131
		c 4,-0 8,-0 23,-2
		l 0,-127
		c -10,-1 -7,-1 -22,-2 z" />
	<!-- band #5 -->
	<path style="fill:#bda83f;" id="band5" d="
		m 390,11
		l 0,141
		c 8,2 16,3 23,3
		l 0,-147
		c -10,0 -10,1 -23,3 z" />
	<!-- white shadow -->
	<path style="fill:#ffffff; fill-opacity:0.2;" d="
		m 418,15
		c -33,-0 -45,10 -68,14 -36,4 -70,-10 -106,-6 -28,2 -58,8 -86,-3 -17,-6 -34,-13 -53,-12 -1,-0 -2,-0 -4,-0 -19,0 -36,17 -44,34 13,-16 23,-26 44,-26 1,-0 2,-0 2,-0 13,0 27,4 40,8 26,12 55,12 83,9 30,-6 61,0 91,4 23,4 46,-3 69,-9 19,-6 52,-4 69,8 -17,-16 -22,-19 -41,-21 z" />
</svg>


<section id="main-form">

<select onchange="changeColor(this);changeColorSvg(this, 'band1');getR();" id="color1">
	<option value="#000" style="background: #000; color: #fff;">Noir</option>
	<option value="#730" style="background: #730; color: #fff;">Marron</option>
	<option value="#f00" style="background: #f00; color: #000;">Rouge</option>
	<option value="#fa0" style="background: #fa0; color: #000;">Orange</option>
	<option value="#ff0" style="background: #ff0; color: #000;">Jaune</option>
	<option value="#2f5" style="background: #2f5; color: #000;">Vert</option>
	<option value="#56f" style="background: #56f; color: #fff;">Bleu</option>
	<option value="#70f" style="background: #70f; color: #fff;">Violet</option>
	<option value="#888" style="background: #888; color: #000;">Gris</option>
	<option value="#fff" style="background: #fff; color: #000;">Blanc</option>
</select>
<select onchange="changeColor(this);changeColorSvg(this, 'band2');getR();" id="color2">
	<option value="#000" style="background: #000; color: #fff;">Noir</option>
	<option value="#730" style="background: #730; color: #fff;">Marron</option>
	<option value="#f00" style="background: #f00; color: #000;">Rouge</option>
	<option value="#fa0" style="background: #fa0; color: #000;">Orange</option>
	<option value="#ff0" style="background: #ff0; color: #000;">Jaune</option>
	<option value="#2f5" style="background: #2f5; color: #000;">Vert</option>
	<option value="#56f" style="background: #56f; color: #fff;">Bleu</option>
	<option value="#70f" style="background: #70f; color: #fff;">Violet</option>
	<option value="#888" style="background: #888; color: #000;">Gris</option>
	<option value="#fff" style="background: #fff; color: #000;">Blanc</option>
</select>
<select onchange="changeColor(this);changeColorSvg(this, 'band3');getR();" id="color3">
	<option value="#000" style="background: #000; color: #fff;">Noir</option>
	<option value="#730" style="background: #730; color: #fff;">Marron</option>
	<option value="#f00" style="background: #f00; color: #000;">Rouge</option>
	<option value="#fa0" style="background: #fa0; color: #000;">Orange</option>
	<option value="#ff0" style="background: #ff0; color: #000;">Jaune</option>
	<option value="#2f5" style="background: #2f5; color: #000;">Vert</option>
	<option value="#56f" style="background: #56f; color: #fff;">Bleu</option>
	<option value="#70f" style="background: #70f; color: #fff;">Violet</option>
	<option value="#888" style="background: #888; color: #000;">Gris</option>
	<option value="#fff" style="background: #fff; color: #000;">Blanc</option>
	<option value="#ccc" style="background: #ccc; color: #000;">Argent</option>
	<option value="#fc0" style="background: #fc0; color: #000;">Or</option>
</select>
<select onchange="changeColor(this);changeColorSvg(this, 'band4');getR();" id="color4">
	<option value="transparent" style="background: #fff;" selected="selected">− aucun −</option>
	<option value="#000" style="background: #000; color: #fff;">Noir</option>
	<option value="#730" style="background: #730; color: #fff;">Marron</option>
	<option value="#f00" style="background: #f00; color: #000;">Rouge</option>
	<option value="#fa0" style="background: #fa0; color: #000;">Orange</option>
	<option value="#ff0" style="background: #ff0; color: #000;">Jaune</option>
	<option value="#2f5" style="background: #2f5; color: #000;">Vert</option>
	<option value="#56f" style="background: #56f; color: #fff;">Bleu</option>
	<option value="#70f" style="background: #70f; color: #fff;">Violet</option>
	<option value="#888" style="background: #888; color: #000;">Gris</option>
	<option value="#fff" style="background: #fff; color: #000;">Blanc</option>
	<option value="#ccc" style="background: #ccc; color: #000;">Argent</option>
	<option value="#fc0" style="background: #fc0; color: #000;">Or</option>
</select>
<select onchange="changeColor(this);changeColorSvg(this, 'band5');getR();" id="color5">
	<option value="transparent" style="background: #fff;" selected="selected">− aucun −</option>
	<!--<option value="#000" style="background: #000; color: #fff;">Noir</option>-->
	<option value="#730" style="background: #730; color: #fff;">Marron</option>
	<option value="#f00" style="background: #f00; color: #000;">Rouge</option>
	<!--<option value="#fa0" style="background: #fa0; color: #000;">Orange</option>
	<option value="#ff0" style="background: #ff0; color: #000;">Jaune</option>-->
	<option value="#2f5" style="background: #2f5; color: #000;">Vert</option>
	<option value="#56f" style="background: #56f; color: #fff;">Bleu</option>
	<option value="#70f" style="background: #70f; color: #fff;">Violet</option>
	<option value="#888" style="background: #888; color: #000;">Gris</option>
	<!--<option value="#fff" style="background: #fff; color: #000;">Blanc</option>-->
	<option value="#ccc" style="background: #ccc; color: #000;">Argent</option>
	<option value="#fc0" style="background: #fc0; color: #000;">Or</option>
</select>

</section>

<div id="reponse"></div>


<div class="notes centrer">
	<p>Le code couleur des résistors est défini par la norme <a href="http://fr.wikipedia.org/wiki/CEI_60757">CEI 60757</a></p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */
"use strict";

/* changes color of background of select */
function changeColor(select) {
	var s = select.value;
	select.style.backgroundColor = select.value;
	if (s == '#000' || s == '#730' || s == '#56f' || s == '#70f') select.style.color = '#fff';
	else select.style.color = '#000';
}

function changeColorSvg(select, band) {
	document.getElementById(band).style.fill = select.value;
}

function color2value(what, color) {
	switch (color) {
		case 'transparent': return (what == 'R') ? '0' : ((what == 'M') ? '1' : '± 20 %'); break;
		case '#000': return (what == 'R') ? '0' : ((what == 'M') ? '1' : ''); break;
		case '#730': return (what == 'R') ? '1' : ((what == 'M') ? '10' : '± 1 %'); break;
		case '#f00': return (what == 'R') ? '2' : ((what == 'M') ? '100' : '± 2 %'); break;
		case '#fa0': return (what == 'R') ? '3' : ((what == 'M') ? '1000' : ''); break;
		case '#ff0': return (what == 'R') ? '4' : ((what == 'M') ? '10000' : ''); break;
		case '#2f5': return (what == 'R') ? '5' : ((what == 'M') ? '100000' : '± 0,5 %'); break;
		case '#56f': return (what == 'R') ? '6' : ((what == 'M') ? '1000000' : '± 0,25 %'); break;
		case '#70f': return (what == 'R') ? '7' : ((what == 'M') ? '10000000' : '± 0,10 %'); break;
		case '#888': return (what == 'R') ? '8' : ((what == 'M') ? '100000000' : '± 0,05%'); break;
		case '#fff': return (what == 'R') ? '9' : ((what == 'M') ? '1000000000' : ''); break;
		case '#ccc': return (what == 'M') ? '0.1' : '± 10 %'; break;
		case '#fc0': return (what == 'M') ? '0.01' : '± 5 %'; break;

	}
}

function getR() {
	var c1 = document.getElementById('color1').value;
	var c2 = document.getElementById('color2').value;
	var c3 = document.getElementById('color3').value;
	var c4 = document.getElementById('color4').value;
	var c5 = document.getElementById('color5').value;

	var first = c1;
	var secnd = c2;
	var third = c3;
	var laast = c4;
	var toler = c5;
	if (c4 == 'transparent') {
		third = null;
		laast = c3;
	}

	first = color2value('R', first);
	secnd = color2value('R', secnd);
	if (third) third = color2value('R', third); else third = '';
	laast = color2value ('M', laast);
	toler = color2value ('T', toler);

	var rValue = parseFloat((parseInt(String(first)+String(secnd)+String(third)) * Number(laast)).toFixed(2));
	document.getElementById('reponse').innerHTML = rValue+' &ohm; '+toler;

}



(function(){
	for (var i=1 ; i<=5 ; i++) {
		var form = document.getElementById('color'+i);
		changeColor(form);
		changeColorSvg(form, 'band'+i);
	}
	getR();
})();

/* ]]> */
</script>

<!--
# adresse de la page : http://lehollandaisvolant.net/tout/tools/resistor/
#      page créée le : 22 novmebre 2013
#     mise à jour le : 23 novembre 2013
-->

</body>
</html>
