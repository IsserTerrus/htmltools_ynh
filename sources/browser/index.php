<?php
if (extension_loaded('zlib')) {
	ob_end_clean();
	ob_start("ob_gzhandler");
}
else {
	ob_start("ob_gzhandler");
}

include('ti-mo-PHP-UA.php');

$icon_OS = 'icons/os/';
$icon_RE = 'icons/renderengine/';
$icon_BW = 'icons/browser/';

//print_r($GLOBALS['parsed_UA']);


// chemin vers icons OS
switch ($GLOBALS['parsed_UA']['platfrm_name']) {
	case 'Windows Phone': $OS = 'windows-8.png'; break;
	case 'Windows':
		switch ($GLOBALS['parsed_UA']['platfrm_vers']) {
			case '8':
			case '8.1': $OS = 'windows-8.png'; break;
			case '7': $OS = 'windows-7.png'; break;
			case 'Vista': $OS = 'windows-vista.png'; break;
			case 'XP': $OS = 'windows-xp.png'; break;
			default : $OS = 'windows-xp.png'; break;
		} break;
	case 'Linux':
		$OS = 'linux.png'; break;
	case 'Macintosh':
		$OS = 'apple.png'; break;
	case 'iPhone':
	case 'iPod':
	case 'iPad': $OS = 'apple-iphone.png'; break;
	case 'Android': $OS = 'android.png'; break;
	case 'Nintendo': $OS = 'nintendo-DS.png'; break;
	case 'BlackBerry': $OS = 'blackberry.png'; break;

	case 'PlayStation':
	case 'XBox, Windows':
	case 'Nintendo Wii': $OS = 'console.png'; break;

	default : $OS = 'default.png'; break;
}
$icon_OS = $icon_OS.$OS;

// chemin vers icones browser
switch (strtolower($GLOBALS['parsed_UA']['browser_name'])) {
	case 'internet explorer':
		switch ($GLOBALS['parsed_UA']['browser_vers']) {
			case '10':
			case '9': $BW = 'ie-9.png'; break;
			case '8': 
			case '7': $BW = 'ie-7.png'; break;
			default : $BW = 'ie-6.png'; break;
		} break;
	case 'firefox':
	case 'firefox mobile':
		$BW = 'firefox.png'; break;
	case 'opera':
	case 'opera mobile':
		$BW = 'opera.png'; break;
	case 'safari':
	case 'safari mobile':
		$BW = 'safari.png'; break;
	case 'chrome':
	case 'chrome mobile':
		$BW = 'chrome.png'; break;
	case 'yandex':
	case 'yabrowser':
		$BW = 'yandex.png'; break;
	case 'chromium':
		$BW = 'chromium.png'; break;
	case 'netscape':
		$BW = 'netscape.png'; break;
	case 'flock':
		$BW = 'flock.png'; break;
	case 'rockmelt':
		$BW = 'rockmelt.png'; break;
	case 'seamonkey':
	case 'sea monkey':
		$BW = 'seamonkey.png'; break;
	case 'iron':
		$BW = 'iron.png'; break;
	case 'maxthon':
	case 'maxthon mobile':
		$BW = 'maxthon.png'; break;
	default : $BW = 'default.png'; break;
}
$icon_BW = $icon_BW.$BW;

if (!empty($GLOBALS['parsed_UA']['browser_vers'])) $GLOBALS['parsed_UA']['browser_name'] .= ',';
if (!empty($GLOBALS['parsed_UA']['platfrm_vers'])) $GLOBALS['parsed_UA']['platfrm_name'] .= ',';

?>
<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />	<meta name="description" content="Afficher sur une seule page les informations relatives à votre navigateur : IP, Navigateur, version, système d'exploitation, cookies, javascript" />
	<title>Trouver les informations de votre navigateur - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css"/>
	<style type="text/css">

#results {
	min-width: 300px;
	width: 70%;
	max-width: 700px;
	margin: 0 auto 50px;
}

.info-block {
	display: inline-block;
	width: 300px;
	height: 110px;
	overflow: hidden;
	margin: 5px;
	background-color: #f7f7f7;
	background-image: -webkit-linear-gradient(top, #f7f7f7, #e7e7e7); 
	background-image: -moz-linear-gradient(top, #f7f7f7, #e7e7e7); 
	background-image: -ms-linear-gradient(top, #f7f7f7, #e7e7e7); 
	background-image: -o-linear-gradient(top, #f7f7f7, #e7e7e7); 
	background-image: linear-gradient(top, #f7f7f7, #e7e7e7); 
	border-radius: 10px;
	position: relative;
	text-shadow: 0px 1px 0 white;
	box-shadow: 0px 3px 8px #aaa, inset 0px 2px 3px #fff;
}
.info-block h2 {
	font-size: 105%;
	margin-top: 28px;
	text-align: left;
	margin-left: 72px;
	color: #222;
}

.info-block .icon {
	border-right: 1px solid white;
	float: left;
	height: 110px;
	line-height: 110px;
	width: 65px;
	margin:0;
	box-shadow: 1px 0 0px #ccc;
}

.info-block .icon img {
	vertical-align: middle;
	max-height: 48px;
	max-width: 48px;
}

.info-block .text {
	margin-top: 0px;
	text-align: left;
	margin-left: 75px;
	color: #444;
	position: absolute;
	right: 0;
	width: 225px;
}

.small {
	font-size: 70%;
	line-height: 1em;
	overflow: hidden;
	width: 235px;
}

.notes {
	padding-top: 30px;
	font-size: 70%;
}

.share-this {
	margin-top: 30px;
	font-size: 80%;
}

.share-this input {
	border: 1px solid silver;
	padding: 3px;
	background: white;
	color: black;
	border-radius: 4px;
	box-shadow: 1px 1px 3px silver inset;
	width: 250px;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Trouver les informations de votre navigateur</h1>
</header>

<section id="results">


<div id="system" class="info-block">
	<p class="icon"><img src="<?php echo $icon_OS; ?>" alt="mon os"/></p>
	<h2>Système d’exploitation</h2>
	<p class="text"><?php echo htmlspecialchars($GLOBALS['parsed_UA']['platfrm_name'].' '.$GLOBALS['parsed_UA']['platfrm_vers']); ?></p>

</div>

<div id="browser" class="info-block">
	<p class="icon"><img src="icons/internet.png" alt="mon navigateur"/></p>
	<h2>Adresse IP</h2>
	<p class="text"><?php echo htmlspecialchars($GLOBALS['parsed_UA']['ip_adress']); echo '<br/>('.htmlspecialchars(gethostbyaddr($GLOBALS['parsed_UA']['ip_adress'])).')'; ?></p>

</div>


<div id="IP" class="info-block">
	<p class="icon"><img src="<?php echo $icon_BW; ?>" alt="mon ip"/></p>
	<h2>Navigateur</h2>
	<p class="text"><?php echo htmlspecialchars($GLOBALS['parsed_UA']['browser_name'].' '.$GLOBALS['parsed_UA']['browser_vers']); ?></p>

</div>

<div id="UA" class="info-block">
	<p class="icon"><img src="<?php echo $icon_BW; ?>" alt="mon ua"/></p>
	<h2>Agent utilisateur</h2>
	<p class="small text"><?php echo htmlspecialchars($GLOBALS['parsed_UA']['full-UA']); ?></p>

</div>

<div id="screen" class="info-block">
	<p class="icon"><img src="icons/screen.png" alt="la taille de mon écran"/></p>
	<h2>Taille de l’écran</h2>
	<p class="text" id="screen-sizes"><?php echo (isset($_GET['sc'])) ? htmlspecialchars($_GET['sc']) : '<noscript>Impossible de déterminer sans JavaScript</noscript>'; ?></p>
</div>

<div id="arch" class="info-block">
	<p class="icon"><img src="icons/arch.png" alt="l'architecture du processeur"/></p>
	<h2>Architecture</h2>
	<p class="text" id="screen-sizes"><?php echo htmlspecialchars($GLOBALS['parsed_UA']['archtcr_name']); ?></p>
</div>

<div id="javascript" class="info-block">
	<p class="icon"><img src="icons/javascript.png" alt="mon javascript"/></p>
	<h2>Javascript</h2>
	<p class="text" id="JS-activate"><?php echo (isset($_GET['js'])) ? htmlspecialchars($_GET['js']) : '<noscript>Javascript est désactivé</noscript>'; ?></p>
</div>

<div id="cookies" class="info-block">
	<p class="icon"><img src="icons/cookies.png" alt="mes cookies"/></p>
	<h2>Cookies</h2>
	<p class="text" id="cookie-activate"><?php echo (isset($_GET['co'])) ? htmlspecialchars($_GET['co']) : '<noscript>Impossible de déterminer sans JavaScript</noscript>'; ?></p>
</div>


<div id="flash" class="info-block">
	<p class="icon"><img src="icons/flash.png" alt="ma version de flash"/></p>
	<h2>Plugin Flash</h2>
	<p class="text" id="flash-activate"><?php echo (isset($_GET['fl'])) ? htmlspecialchars($_GET['fl']) : '<noscript>Impossible de déterminer sans JavaScript</noscript>'; ?></p>
</div>


<div id="java" class="info-block">
	<p class="icon"><img src="icons/java.png" alt="ma version de java"/></p>
	<h2>Plugin Java</h2>
	<p class="text" id="java-activate"><?php echo (isset($_GET['ja'])) ? htmlspecialchars($_GET['ja']) : '<noscript>Impossible de déterminer sans JavaScript</noscript>'; ?></p>
</div>

<?php 
	if (!isset($_GET['ua'])) { ?>
<p class="centrer share-this"><label>Partager ces informations&nbsp;: <input id="share-me" type="url" value="<?php echo 'http'.(isset($_SERVER['HTTPS'])? 's' : '').'://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?ua='.$GLOBALS['parsed_UA']['full-UA-Base64'].'&ip='.$GLOBALS['parsed_UA']['ip_adress']; ?>" size="35"></label></p>

<?php } ?>

<p class="notes">Icones de <a href="http://code.google.com/p/faenza-icon-theme">Thiteum</a>, <a href="http://www.iKingyo.com">Kingyo</a>, <a href="http://linux.softpedia.com/developer/Oliver-Scholtz-93.html">Oliver Sholtz</a>, <a href="http://www.iconshock.com">IconShock</a>, <a href="http://deleket.deviantart.com/">Deleket</a>, <a href="http://vsx47.deviantart.com">vsx47</a>, <a href="http://www.iconarchive.com/artist/draseart.html">draseart</a>.</p>

</section>



<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="http://lehollandaisvolant.net/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
var uab64 = '<?php echo 'http'.(isset($_SERVER['HTTPS'])? 's' : '').'://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?ua='.$GLOBALS['parsed_UA']['full-UA-Base64'].'&ip='.$GLOBALS['parsed_UA']['ip_adress']; ?>';
var fromURL = <?php echo (isset($_GET['ua']) ? 'true' : 'false' ); ?>;


// check cookies
function checkCookie(){
	var cookieEnabled = (navigator.cookieEnabled);
	if (cookieEnabled == true) {
		return 'Les cookies sont activés';
	} else {
		return 'Les cookies sont désactivés';
	}
}

// check flash.
function getFlashVersion(){
	// ie
	try {
		return new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/\D+/g, '.').match(/^\.?(.+)\.?$/)[1];
	// other browsers
	} catch(e) {
		try {
			if(navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
				return (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]).description.replace(/\D+/g, ".").match(/^\.?(.+)\.?$/)[1];
			}
		} catch(e) {}
	}
	return 'Flash non détecté';
}

// JavaVersion
function JavaVersion() {
	var result = null;
	// Walk through the full list of mime types.
	for (var i=0, size=navigator.mimeTypes.length; i < size; i++ ) {
		// The jpi-version is the plug-in version.  This is the best
		// version to use.
		if ( (result = navigator.mimeTypes[i].type.match(/^application\/x-java-applet;jpi-version=(.*)$/)) !== null ) {
			return result[1];
		}
	}
	return 'Java non détecté';
}

// Screen Size
function ScreenSize() {
	var result = null;
	var siz = '';
	var w = screen.width;
	var h = screen.height;
	var d = screen.colorDepth;
	siz = w+'x'+h+'<br>'+Math.pow(2, parseInt(d)) +' couleurs ('+d+'Bit)';
	return siz;
}


if (fromURL === false) {
	var js = 'Javascript est activé';
	var co = checkCookie();
	var fl = getFlashVersion();
	var ja = JavaVersion();
	var sc = ScreenSize();

	document.getElementById('JS-activate').innerHTML = js;
	document.getElementById('cookie-activate').innerHTML = co;
	document.getElementById('flash-activate').innerHTML = fl;
	document.getElementById('java-activate').innerHTML = ja;
	document.getElementById('screen-sizes').innerHTML = sc;

	uab64 = uab64+'&js='+encodeURIComponent(js)+'&co='+encodeURIComponent(co)+'&fl='+encodeURIComponent(fl)+'&ja='+encodeURIComponent(ja)+'&sc='+encodeURIComponent(sc);
	document.getElementById('share-me').value = uab64
}

</script>

<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/browser/
#      page créée le : 5 mars 2013
#     mise à jour le : 27 avril 2014

-->
</body>
</html>
