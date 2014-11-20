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
<html lang="fr-fr" manifest="timo.color.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Un sélecteur de couleur en JavaScript." />
	<title>Sélecteur de couleurs - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

td.top {
  vertical-align: middle; 
}

#main-table {
	text-align: left;
	margin: 0 auto;
}

#main-table ul {
	list-style-type: none;
	padding-left: 0;
	margin:0;
}

#main-table label {
	display: inline-block;
	width: 1.2em;
}

#main-table li input, #main-table li label {
	vertical-align: middle;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Sélecteur de couleurs</h1>
</header>


<section id="main-form" class="main-form">
	<table id="main-table">
		<tr>
			<td class="top" rowspan="2"><div id="cp1_ColorMap"></div></td>
			<td class="top" rowspan="2"><div id="cp1_ColorBar"></div></td>
			<td><div id="cp1_Preview" style="height:60px;padding:0;margin:0;border:solid 1px #000;"></div></td>
		</tr>
		<tr>
			<td>
				<ul>
					<li>
						<input type="radio" id="cp1_HueRadio" name="cp1_Mode" value="0" />
						<label for="cp1_HueRadio">H:</label>
						<input type="text" id="cp1_Hue" value="0" style="width: 30px;" /> &deg;
					</li>
					<li>
						<input type="radio" id="cp1_SaturationRadio" name="cp1_Mode" value="1" />
						<label for="cp1_SaturationRadio">S:</label>
						<input type="text" id="cp1_Saturation" value="100" style="width: 30px;" /> %
					</li>
					<li>
						<input type="radio" id="cp1_BrightnessRadio" name="cp1_Mode" value="2" />
						<label for="cp1_BrightnessRadio">B:</label>
						<input type="text" id="cp1_Brightness" value="100" style="width: 30px;" /> %
					</li>
				</ul>
				<br/>
				<ul>
					<li>
						<input type="radio" id="cp1_RedRadio" name="cp1_Mode" value="r" />
						<label for="cp1_RedRadio">R:</label>
						<input type="text" id="cp1_Red" value="255" style="width: 30px;" />
					</li>
					<li>
						<input type="radio" id="cp1_GreenRadio" name="cp1_Mode" value="g" />
						<label for="cp1_GreenRadio">G:</label>
						<input type="text" id="cp1_Green" value="0" style="width: 30px;" />
					</li>
					<li>
						<input type="radio" id="cp1_BlueRadio" name="cp1_Mode" value="b" />
						<label for="cp1_BlueRadio">B:</label>
						<input type="text" id="cp1_Blue" value="0" style="width: 30px;" />
					</li>
				</ul>
				<br/>
				<ul>
					<li>
						<label for="cp1_Hex" style="width:2.3em;">Hex:</label>
						<input type="text" id="cp1_Hex" value="FF0000" style="width:50px;font-family:monospace" />
					</li>
				</ul>
			</td>
		</tr>
	</table>

	<div style="display:none;">
		<img src="refresh_web/colorpicker/images/rangearrows.gif" />
		<img src="refresh_web/colorpicker/images/mappoint.gif" />
		<img src="refresh_web/colorpicker/images/bar-saturation.png" />
		<img src="refresh_web/colorpicker/images/bar-brightness.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-br.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-red-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-br.png" />	
		<img src="refresh_web/colorpicker/images/bar-green-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-green-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-br.png" />
		<img src="refresh_web/colorpicker/images/map-red-max.png" />
		<img src="refresh_web/colorpicker/images/map-red-min.png" />
		<img src="refresh_web/colorpicker/images/map-green-max.png" />
		<img src="refresh_web/colorpicker/images/map-green-min.png" />
		<img src="refresh_web/colorpicker/images/map-blue-max.png" />
		<img src="refresh_web/colorpicker/images/map-blue-min.png" />
		<img src="refresh_web/colorpicker/images/map-saturation.png" />
		<img src="refresh_web/colorpicker/images/map-saturation-overlay.png" />
		<img src="refresh_web/colorpicker/images/map-brightness.png" />
		<img src="refresh_web/colorpicker/images/map-hue.png" />
	</div>

	<div class="notes centrer">
		<p><a href="http://johndyer.name">Color Picker by John Dyer</a></p>
	</div>

</section>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript" src="refresh_web/prototype.js" ></script>
<script type="text/javascript" src="refresh_web/colorpicker/colormethods.js" ></script>
<script type="text/javascript" src="refresh_web/colorpicker/colorvaluepicker.js" ></script>
<script type="text/javascript" src="refresh_web/colorpicker/slider.js" ></script>
<script type="text/javascript" src="refresh_web/colorpicker/colorpicker.js" ></script>

<script type="text/javascript">
/* <![CDATA[ */

Event.observe(window,'load',function() {
	cp1 = new Refresh.Web.ColorPicker('cp1', {startHex: 'ffcc00', startMode:'s'});
});


/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/color/
#      page créée le : 31 mars 2013
#     mise à jour le : 4 avril 2013

-->
</body>
</html>

