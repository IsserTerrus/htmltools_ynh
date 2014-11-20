<!DOCTYPE html>
<html lang="fr-fr" manifest="timo.vcard.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Générateur de vCard" />
	<link rel="stylesheet" href="../0common/common.css"/>

	<title>Générer une vCard - le hollandais volant</title>
	<style type="text/css">

#main-form {
	width: 530px;
}
#main-form p {
	text-align: left;
}
p.section {
	margin: 20px 7px 7px;
	font-size: 110%;
}

p > input:first-of-type, p > textarea { margin-left: 0; }

h2 {
	font-size: 100%;
	text-align: left;
}
input, textarea {
	border: 1px solid silver;
	background: white;
	border-radius: 5px;
	padding: 5px;
	box-shadow: 0 0 3px silver inset;
	margin: 0 2px;
}
input:focus, textarea:focus {
	border-color: gray;
	box-shadow: 0 0 3px silver inset, 0 0 2px silver;
}

/* NOM, PRÉNOM, TITRE, SOCIÉTÉ */
#p-nom input {
	font-size: 140%;
}
#titre { width: 60px; }
#prenom, #nom { width: 190px; }

#p-ssp, #p-nom {
	margin: 7px;
}

#p-ssp input {
	padding: 4px;
	font-size: 80%;
	width: 149px;
}

/* SURNOM + ANNIV */
#p-surnom, #p-anniv {
	margin: 7px;
}
#surnom { width: 474px; }
#jour, #mois { width: 30px; }
#annee { width: 60px; }

/* EMAIL, TÉLÉPHONE, EN LIGNE, ADRESSE */
.p-email, .p-tel, .p-online, .p-addr {
	margin: 7px;
}

.p-email input, .p-tel input, .p-online input, .p-addr input {
	width: 474px;
}

/* ADRESSE */
.zip-city input {
	width: 100px;
}
.zip-city input+input {
	width: 358px;
}

.state-land input {
	width: 204px; 
}
.state-land input+input {
	width: 254px;
}

/* PHOTO */
#p-data64 { display: none; }
#photo { width: 474px; padding: 0px 5px; min-height: 26px; }
#p-photo { margin: 7px; }

/* NOTES */
#p-notes {
	margin: 7px;
}
#notes {
	width: 474px;
	height: 90px;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Générer une vCard</h1>
</header>

<form method="get" id="main-form" class="main-form">

	<div class="names">
		<p id="p-nom">
			<input placeholder="Titre" autocomplete="off" id="titre" type="text"><input placeholder="Prénom" autocomplete="off" id="prenom" type="text"><input placeholder="Nom" autocomplete="off" id="nom" type="text">
		</p>
		<p id="p-ssp">
			<input placeholder="Société" autocomplete="off" id="societe" type="text"><input placeholder="Service" autocomplete="off" id="service" type="text"><input placeholder="Fonction" autocomplete="off" id="position" type="text">
		</p>
	</div>

	<div class="personnel">
		<p class="section">Personnel</p>
		<p id="p-surnom"><input placeholder="Surnom" autocomplete="off" id="surnom" type="text"></p>
		<p id="p-anniv">
			<label for="jour">Anniversaire</label>&nbsp;: <input placeholder="JJ" autocomplete="off" id="jour" type="text"><input placeholder="MM" autocomplete="off" id="mois" type="text"><input placeholder="AAAA" autocomplete="off" id="annee" type="text">
		</p>
	</div>

	<div class="email">
		<p class="section">Email</p>
		<p class="p-email">
			<input placeholder="Email personnel" autocomplete="off" id="email1" type="text">
		</p>
		<p class="p-email">
			<input placeholder="Email professionnel" autocomplete="off" id="email2" type="text">
		</p>
		<p class="p-email">
			<input placeholder="Email (autre)" autocomplete="off" id="email3" type="text">
		</p>
	</div>

	<div class="tel">
		<p class="section">Téléphone</p>
		<p class="p-tel">
			<input placeholder="Téléphone portable" autocomplete="off" id="phone1" type="text">
		</p>
		<p class="p-tel">
			<input placeholder="Téléphone professionnel" autocomplete="off" id="phone2" type="text">
		</p>
		<p class="p-tel">
			<input placeholder="Téléphone domicile" autocomplete="off" id="phone3" type="text">
		</p>
		<p class="p-tel">
			<input placeholder="Téléphone (autre)" autocomplete="off" id="phone4" type="text">
		</p>
	</div>

	<div class="enligne">
		<p class="section">En ligne</p>
		<p class="p-online">
			<input placeholder="Site web (http://www.example.com)" autocomplete="off" id="ol1" type="text">
		</p>
		<p class="p-online">
			<input placeholder="Twitter (nom d’utilisateur)" autocomplete="off" id="ol2" type="text">
		</p>
		<p class="p-online">
			<input placeholder="Skype (nom d’utilisateur)" autocomplete="off" id="ol3" type="text">
		</p>
	</div>

	<div class="adresse">
		<p class="section">Adresse personelle</p>
		<p class="p-addr rue">
			<input placeholder="Rue" autocomplete="off" id="addr1-rue" type="text">
		</p>
		<p class="p-addr zip-city">
			<input placeholder="Code postal" autocomplete="off" id="addr1-zip" type="text"><input placeholder="Ville" autocomplete="off" id="addr1-city" type="text">
		</p>
		<p class="p-addr state-land">
			<input placeholder="État" autocomplete="off" id="addr1-state" type="text"><input placeholder="Pays" autocomplete="off" id="addr1-land" type="text">
		</p>
	</div>

	<div class="adresse">
		<p class="section">Adresse travail</p>
		<p class="p-addr rue">
			<input placeholder="Rue" autocomplete="off" id="addr2-rue" type="text">
		</p>
		<p class="p-addr zip-city">
			<input placeholder="Code postal" autocomplete="off" id="addr2-zip" type="text"><input placeholder="Ville" autocomplete="off" id="addr2-city" type="text">
		</p>
		<p class="p-addr state-land">
			<input placeholder="État" autocomplete="off" id="addr2-state" type="text"><input placeholder="Pays" autocomplete="off" id="addr2-land" type="text">
		</p>
	</div>

	<div class="photo">
		<p class="section">Photo</p>
		<p id="p-photo"><input id="photo" type="file" accept="image/*" onchange="loadimage(this.files)" /></p>
		<p id="p-data64"><textarea id="base64" cols="50" rows="20"></textarea></p>
	</div>

	<div class="note">
		<p class="section">Notes</p>
		<p id="p-notes"><textarea id="notes" placeholder="Notes" cols="60" rows="20"/></textarea></p>
	</div>

	<button onclick="return go();" id="gen" type="submit" class="centrer submit-centrer">Générer</button>
</form>

<div class="notes centrer">
	<p>Tous les champs ne sont pas obligatoires.<br/>Seuls le nom et le prénom le sont.</p>
</div>

<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>

<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script type="text/javascript">
/* <![CDATA[ */
function go() {
	var titre = document.getElementById('titre').value;
	var nom = document.getElementById('nom').value;
	var prenom = document.getElementById('prenom').value;
	if (nom == '' || prenom == '') {
		alert('Vous devez renseigner au moins un nom et un prénom.');
		return false;
	}

	var societe = document.getElementById('societe').value;
	var service = document.getElementById('service').value;
	var position = document.getElementById('position').value;

	var surnom = document.getElementById('surnom').value;
	var jour = document.getElementById('jour').value;
	var mois = document.getElementById('mois').value;
	var annee = document.getElementById('annee').value;

	var email1 = document.getElementById('email1').value;
	var email2 = document.getElementById('email2').value;
	var email3 = document.getElementById('email3').value;

	var photo1 = document.getElementById('base64').value;

	var phone1 = document.getElementById('phone1').value;
	var phone2 = document.getElementById('phone2').value;
	var phone3 = document.getElementById('phone3').value;
	var phone4 = document.getElementById('phone4').value;

	var ol1 = document.getElementById('ol1').value;
	var ol2 = document.getElementById('ol2').value;
	var ol3 = document.getElementById('ol3').value;

	var addr1_rue = document.getElementById('addr1-rue').value;
	var addr1_zip = document.getElementById('addr1-zip').value;
	var addr1_city = document.getElementById('addr1-city').value;
	var addr1_state = document.getElementById('addr1-state').value;
	var addr1_land = document.getElementById('addr1-land').value;

	var addr2_rue = document.getElementById('addr2-rue').value;
	var addr2_zip = document.getElementById('addr2-zip').value;
	var addr2_city = document.getElementById('addr2-city').value;
	var addr2_state = document.getElementById('addr2-state').value;
	var addr2_land = document.getElementById('addr2-land').value;

	var notes = document.getElementById('notes').value;

	var VCODE = "";
	VCODE =  "BEGIN:VCARD\n";
	VCODE += "VERSION:4.0\n";
	VCODE += "FN:"+prenom+" "+nom+"\n";
	VCODE += "N:"+nom+";"+prenom+";;"+titre+"\n";
	if (surnom != "") VCODE += "NICKNAME:"+surnom+"\n";
	if (societe != "") VCODE += "ORG:"+societe+";"+service+"\n";
	if (position != "") VCODE += "ROLE:"+position+"\n" + "TITLE:"+position+"\n";
	if (jour != "" && mois != "" && annee != "") VCODE += "BDAY:"+annee+"-"+mois+"-"+jour+"\n";

	if (photo1 != "") VCODE += "PHOTO:"+photo1+"\n";

	if (email1 != "") VCODE += "EMAIL;TYPE=INTERNET;TYPE=PREF:"+email1+"\n";
	if (email2 != "") VCODE += "EMAIL;TYPE=WORK;TYPE=PREF:"+email2+"\n";
	if (email3 != "") VCODE += "EMAIL;TYPE=OTHER;TYPE=PREF:"+email3+"\n";

	if (phone1 != "") VCODE += "TEL;TYPE=CELL;TYPE=PREF:"+phone1+"\n";
	if (phone2 != "") VCODE += "TEL;TYPE=WORK;TYPE=PREF:"+phone2+"\n";
	if (phone3 != "") VCODE += "TEL;TYPE=HOME;TYPE=PREF:"+phone3+"\n";
	if (phone4 != "") VCODE += "TEL;TYPE=OTHER;TYPE=PREF:"+phone4+"\n";

	if (addr1_rue+addr1_zip+addr1_city+addr1_state+addr1_land != "") 
		VCODE += "ADR;TYPE=HOME:;;"+addr1_rue+";"+addr1_city+";"+addr1_state+";"+addr1_zip+";"+addr1_land+"\n";
	if (addr2_rue+addr2_zip+addr2_city+addr2_state+addr2_land != "") 
		VCODE += "ADR;TYPE=WORK:;;"+addr2_rue+";"+addr2_city+";"+addr2_state+";"+addr2_zip+";"+addr2_land+"\n";

	if (ol1 != "") VCODE += "URL:"+ol1+"\n";
	if (ol2 != "") VCODE += "X-TWITTER:"+ol2+"\n";
	if (ol3 != "") VCODE += "X-SKYPE:"+ol3+"\n";

	if (notes != "") VCODE += "NOTE:"+(notes.replace(/\n/g, "\\n"))+"\n";

	VCODE += "END:VCARD"+"\n";

	// creates a link, with download attribute and with content the Vcard Data (blob)
	// then clics on the link
	window.URL = window.webkitURL || window.URL;
	file = new Blob([VCODE], {"type" : "text\/vcard" });
	var a = document.createElement("a");
	a.style.display = 'none';
	a.href = window.URL.createObjectURL(file);
	a.download = 'contact.vcf';

	var evt = document.createEvent("MouseEvents");
	evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
	a.dispatchEvent(evt);
	evt.preventDefault();

	return false;
}


function imageHandler(d) { 
	document.getElementById('base64').value = ((d.target.result).match(/(.{1,76})/g)).join("\n");
}

function loadimage(files) {
	var filename = files[0];
	var fr = new FileReader();
	fr.onload = imageHandler;
	fr.readAsDataURL(filename);
}

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools//
#      page créée le : 13 septembre 2013
#     mise à jour le : 13 septembre 2013

-->
</body>
</html>

