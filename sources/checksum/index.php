<!DOCTYPE html>
<html lang="fr-fr" manifest="timo.checksum.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Génère des sommes de contrôle d’un fichier" />

	<title>Calculer la somme de contrôle d’un fichier ou d’un texte - le hollandais volant</title>

	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#data {
	padding: 10px;
	border: 1px solid silver;
	border-radius: 5px;
	min-width: 200px;
	text-align: left;
	width: 60%;
	max-width: 600px;
}

#givefile {
	margin: 20px auto;
}

#file{
	border: 1px solid silver;
	padding: 4px 10px;
	margin-top: 10px;
	margin-bottom: 10px;
	border-radius: 5px;
}

label[for="data"] {
	display: inline-block;
	margin: 30px auto 15px;
}

#output {
	text-align: left;
	border: 1px dashed silver;
	border-radius: 5px;
	padding: 10px;
	background: #f0f0f0;
	max-width: 700px;
	margin: 20px auto;
	display: none;
	font-size: 90%;
	word-wrap:break-word;

}

#output span {
	background-color: white;
	border: silver 1px solid;
	border-radius: 3px;
	padding: 3px 10px;
	font-family: monospace;
	word-wrap:break-word;
	display: block;
}

#output span {
}
	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Calculer une somme de contrôle</h1>
</header>


<form method="get" id="main-form" class="main-form">

	<label for="data">Entrez votre texte :</label> 
	<textarea name="data" id="data" rows="7" cols="40" placeholder="Placez votre texte ici" class="centrer"></textarea>

	<p style="font-weight: bold;">— OU —</p>
	<div id="givefile">
		<label for="file">Sélectionnez votre fichier :</label><br/>
		<input id="file" type="file" onchange="loadfile(this.files);" />
	</div>


	<input type="submit" onclick="return checksum();" id="calculer" value="Calculer" name="Calculer" class="centrer submit-centrer"/>
	<p id="output">&nbsp;</p>

</form>

<div class="notes centrer">
	<p>Notez que MD5 et SHA1 ne sont plus cryptographiquement sûres.</p>
	<p>Cette page utilise <a href="https://code.google.com/p/crypto-js/">Crypto-JS</a>.</p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>

<script src="crypto-js/rollups/md5.js"></script>
<script src="crypto-js/rollups/sha1.js"></script>
<script src="crypto-js/rollups/sha256.js"></script>
<script src="crypto-js/rollups/sha3.js"></script>
<script src="crypto-js/rollups/sha512.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
data = "";

function arrayBufferToWordArray(arrayBuffer) {
	var fullWords = Math.floor(arrayBuffer.byteLength / 4);
	var bytesLeft = arrayBuffer.byteLength % 4;

	var u32 = new Uint32Array(arrayBuffer, 0, fullWords);
	var u8 = new Uint8Array(arrayBuffer);

	var cp = [];
	for (var i = 0; i < fullWords; ++i) {
		cp.push((((u32[i] & 0xFF) << 24) | ((u32[i] & 0xFF00) << 8) | ((u32[i] >> 8) & 0xFF00) | ((u32[i] >> 24) & 0xFF)) >>> 0);
	}
	if (bytesLeft) {
		var pad = 0;
		for (var i = bytesLeft; i > 0; --i) {
			pad = pad << 8;
			pad += u8[u8.byteLength - i];
		}
		for (var i = 0; i < 4 - bytesLeft; ++i) {
			pad = pad << 8;
		}
		cp.push(pad);
	}
	return CryptoJS.lib.WordArray.create(cp, arrayBuffer.byteLength);
}


function getData() {
	if (document.getElementById('data').value != "") {
		data = document.getElementById('data').value;
	}
	return data;
}

function checksum() {
	var output = document.getElementById('output');
	var odata = getData();

	var html = '';
	html += '<p>MD5 : <span>'+CryptoJS.MD5(odata)+'</span></p>';
	html += '<p>SHA1 : <span>'+CryptoJS.SHA1(odata)+'</span></p>';
	html += '<p>SHA256 : <span>'+CryptoJS.SHA256(odata)+'</span></p>';
	html += '<p>SHA512 : <span>'+CryptoJS.SHA512(odata)+'</span></p>';
	html += '<p>SHA3 : <span>'+CryptoJS.SHA3(odata)+'</span></p>';

	output.style.display = 'block';
	output.innerHTML = html;

	return false;
}

function loadfile(files) {
	if (files.length == 0) return;
	var filename = files[0];
	var fr = new FileReader();
	fr.onload = function(e) { data = arrayBufferToWordArray(e.target.result); return data;};
	fr.readAsArrayBuffer(filename);
	return false;
}

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/checksum/
#      page créée le : 14 septembre 2013
#     mise à jour le : 16 septembre 2013

-->
</body>
</html>

