<!DOCTYPE html>
<html lang="fr-fr">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Page regroupant tous les mes outils : convertisseurs entre bases, kilooctects, générateur de qrcode, convertisseur de dates et autres." />

	<title>Quelques outils en ligne - Via YunoHost</title>

	<style type="text/css">

body {
	background-color: white;
	color: #222;
	text-align: center;
	font-size: 16px;
	font-family: 'trebuchet ms', arial, sans-serif;
	max-width: 100%:
}

#header {
	margin: 30px auto 80px;
}

#header .titre {
	font-size: 220%;
	text-shadow: 3px 3px 5px silver;
}

#main-form {
	//box-shadow: 0px 0px 3px gray;
	border-radius: 20px;
//	width: 70%;
	max-width: 500px;
	margin: 60px auto;
	padding: 20px;
}

.notes {
	color:gray;
	font-size: 80%;
}

#footer {
	font-size: 90%;
	color: black;
}

#footer a, .bloc a, .notes a {
	color: inherit;
	text-decoration: none;
}

#footer a:hover, .notes a:hover {
	text-decoration: underline;
}

.bloc {
	display: inline-block;
	width: 100px;
	height: 100px;
	font-size: 80%;	
	margin: 5px;
	box-shadow: 1px 1px 3px #eee inset;
	border-radius: 30px;
	border: 1px solid #eee;
	line-height: 100px;
	text-shadow: 1px 1px 2px silver;
}

.bloc:hover {
	box-shadow: 1px 1px 3px #eee;
}

.bloc a {
	display: inline-block;
	border: 1px dashed transparent;
	height: 80px;
	width: 100px;
	vertical-align: middle;
	line-height: 1.1em;
}

.bloc a img {
	border: none;
	display: block;
	margin: 0 auto;
	width: 48px;
	height: 48px;
}

a img {
	border: none;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Mes petits outils en ligne</h1>
</header>

<section id="main-form">

	<div class="bloc">
		<a href="qrcode/">
			<img src="qrcode/icon.png" alt="icon"/>
			Créer un<br/>QR-Code
		</a>
	</div>

	<div class="bloc">
		<a href="rqrcode/">
			<img src="rqrcode/icon.png" alt="icon"/>
			Décoder un<br/>QR-Code
		</a>
	</div>

	<div class="bloc">
		<a href="bases/">
			<img src="bases/icon.png" alt="icon"/>
			Conversions entre bases
		</a>
	</div>

	<div class="bloc">
		<a href="dates/">
			<img src="dates/icon.png" alt="icon"/>
			Additionner<br/>des dates
		</a>
	</div>

	<div class="bloc">
		<a href="calendar/">
			<img src="calendar/icon.png" alt="icon"/>
			Calendrier<br/>du mois
		</a>
	</div>

	<div class="bloc">
		<a href="rfc-valid/">
			<img src="rfc-valid/icon.png" alt="icon"/>
			Valider un email
		</a>
	</div>

	<div class="bloc">
		<a href="webcam/">
			<img src="webcam/icon.png" alt="icon"/>
			Prendre une photo
		</a>
	</div>

	<div class="bloc">
		<a href="mo-mio/">
			<img src="mo-mio/icon.png" alt="icon"/>
			Unités numériques
		</a>
	</div>

	<div class="bloc">
		<a href="browser/">
			<img src="browser/icon.png" alt="icon"/>
			Votre navigateur
		</a>
	</div>

	<div class="bloc">
		<a href="random/">
			<img src="random/icon.png" alt="icon"/>
			Générer un<br/>nombre&nbsp;aléatoire
		</a>
	</div>

	<div class="bloc">
		<a href="color/">
			<img src="color/icon.png" alt="icon"/>
			Sélecteur<br/>de couleur
		</a>
	</div>

	<div class="bloc">
		<a href="tron/">
			<img src="tron/icon.png" alt="icon"/>
			Générateur<br/>de blabla
		</a>
	</div>

	<div class="bloc">
		<a href="base64/">
			<img src="base64/icon.png" alt="icon"/>
			Conversion<br/>base64
		</a>
	</div>

	<div class="bloc">
		<a href="base64i/">
			<img src="base64i/icon.png" alt="icon"/>
			Conversion<br/>base64 images
		</a>
	</div>

	<div class="bloc">
		<a href="vcard/">
			<img src="vcard/icon.png" alt="icon"/>
			Générer<br/>une&nbsp;vCard
		</a>
	</div>

	<div class="bloc">
		<a href="checksum/">
			<img src="checksum/icon.png" alt="icon"/>
			Calculer une<br/>checksum
		</a>
	</div>

	<div class="bloc">
		<a href="ipsum/">
			<img src="ipsum/icon.png" alt="icon"/>
			Ressource de<br/>faux-texte
		</a>
	</div>

	<div class="bloc">
		<a href="magic/">
			<img src="magic/icon.png" alt="icon"/>
			Générer un<br/>carré-magique
		</a>
	</div>

	<div class="bloc">
		<a href="dtmf/">
			<img src="dtmf/icon.png" alt="icon"/>
			Générateur de<br/>tonalités
		</a>
	</div>

	<div class="bloc">
		<a href="resistor/">
			<img src="resistor/icon.png" alt="icon"/>
			Couleurs des<br/>résistors
		</a>
	</div>

<!--	<div class="bloc">
		<a href="dl/">
			<img src="dl/icon.png" alt="icon"/>
			Télécharger<br/>une page
		</a>
	</div>-->

	<div class="bloc">
		<a href="unites/">
			<img src="unites/icon.png" alt="icon"/>
			Convertisseur<br/>d’unités
		</a>
	</div>

	<div class="bloc">
		<a href="timer/">
			<img src="timer/icon.png" alt="icon"/>
			Minuteur<br/>avec alarme
		</a>
	</div>

</section>

<p>
	<a href="tools.7z"><img src="0common/download.png" alt="download" title="Télécharger"/></a>
</p>

<p>
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</p>

<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="cgu.php">à propos</a></footer>

<footer class="notes centrer">
<p>Crédit icônes&nbsp;: <a href="http://tiheum.deviantart.com/">Tiheum</a>.</p>
</footer>

</body>
</html>
