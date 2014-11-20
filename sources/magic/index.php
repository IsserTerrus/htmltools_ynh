<!DOCTYPE html>
<html lang="fr-fr" manifest="timo.carremagique.manifest">
<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Timo van Neerden" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="description" content="Générer un carré magique en javascript." />
	<title>Générer un carré magique - le hollandais volant</title>
	<link rel="stylesheet" href="../0common/common.css" type="text/css" />
	<style type="text/css">

#tableau {
	border: 1px solid silver;
	border-collapse: collapse;
	margin: 0 auto;
}

#tableau td {
	border: 1px solid silver;
	width: 40px;
	height: 40px;
}

label {
	margin: 0 auto 10px;
	padding-right: 75px;
	display: block;
	width: 250px;
	text-align: right;
}

label input {
	width: 40px;
	border: 1px solid silver;
	background: white;
	border-radius: 5px;
	padding: 5px;
	box-shadow: 0 0 3px silver inset;
	margin: 0 2px;
	
}

label input, label {
	vertical-align: middle;
}

	</style>
</head>
<body>


<header id="header">
	<h1 class="titre">Générer un carré magique</h1>
</header>

<label for="size">Dimension&thinsp;: <input name="size" type="number" value="3" size="5" step="1" min="1" id="size" onchange="generate()" /></label>

<label for="first">Premier chiffre&thinsp;: <input name="first" type="number" value="1" size="5" step="1" id="first" onchange="generate()" /></label>

<label for="increm">Incrémentation&thinsp;: <input name="increm" type="number" value="1" size="5" step="1" min="1" id="increm" onchange="generate()" /></label>

<table id="tableau"></table>

<p id="cstemagique"></p>

<div class="notes centrer">
	<p>Les carrés de dimension impaire utilisent la formule mathématique de <a href="https://en.wikipedia.org/wiki/Magic_square#Method_for_constructing_a_magic_square_of_odd_order">la méthode siamoise</a>.<br/>Les carrés de dimension pairement paire utilisent <a href="https://fr.wikipedia.org/wiki/Carr%C3%A9_magique_%28math%C3%A9matiques%29#M.C3.A9thode_des_permutations_autour_des_diagonales">la méthode d’inversion des diagonales</a>.<br/>Les carrés de dimension pairement impaire utilisent <a href="https://en.wikipedia.org/wiki/Strachey_method_for_magic_squares">la méthode de Strachey</a>.</p>
</div>


<div id="flattr">
	<a href="http://flattr.com/thing/1177565/Mes-petits-outils-en-ligne"><img src="../0common/flattr.png" width="93" height="20" alt="Flattr this" title="Flattr this" /></a>
</div>


<footer id="footer"><a href="/">Timo Van Neerden</a> - <a href="../">autres outils</a></footer>


<script type="text/javascript">
/* <![CDATA[ */

var tableau = document.getElementById('tableau');

function generate() {
	tableau.innerHTML = '';
	document.getElementById('cstemagique').textContent = '';
	var cstMag = 0;
	var n = parseInt(document.getElementById('size').value);
	var a = parseInt(document.getElementById('increm').value);  // × offet
	var b = parseInt(document.getElementById('first').value) -a; // + offset


	/* la dimension 2 est impossible, ainsi que les dimensions négatives. */
	if (n == 2 || n <=0 || n===NaN) {
		tableau.innerHTML = '<tr><td style="width: 500px; ">Les dimension négatives, 0 et 2 sont impossibles.</td></tr>';
		return;
	}


	/* CARRÉS MAGIQUE DE DIMENSION IMPAIRE
		il y a une formule pour ça.
		qui dépend de N, et en fonction de la position (i,j) dans le tableau

		La formule donne directement le carré magique qu’on aurait eu avec la méthode Siamoise.
	*/
	if (n%2 == 1) {

		var carre = [n];
		for (var j = 0 ; j < n ; j++) {
			carre[j] = [n];
		}

		for (var j = 1 ; j <= n ; j++) {
			for (var i = 1 ; i <= n ; i++) {
				carre[j-1][i-1] = ( n*((i+j-1+Math.floor(n/2))%n) + ((i+2*j-2)%n)+1);
			}
		}

	}

	// CARRÉS MAGIQUE DE DIMENSION PAIREMENT PAIRES
	/* plusieurs méthodes possibles. Ici, méthode des diagonales.

		On crée un carré de taille N×N, qu’on rempli de façon naturelle
		ligne par ligne de 1 à N^2
		ce carré est coupé en carrés de taille 4×4 (eux-mêmes pairs) :
		les diagonales de ces carrés 4×4 sont laissées tels quels
		les autres cases sont remplacées par le complément à N^2 : de x on passe à (N^2 − x + 1) */

	else if ( (n/2) %2 == 0) {
		var counter = 1;
		var carre = [n];
		// remplissage de la matrice principale de 1 à n^2
		for (var j = 0 ; j < n ; j++) {
			carre[j] = [n];
			for (var i = 0 ; i < n ; i++) {
				carre[j][i] = counter++;
			}
		}

		/* Les cases à changer sont donc toujours les mêmes dans les sous carrés
			– sur les rangées 1 et 4, ce sont les cases 2 et 3
			– sur les rangées 2 et 3, ce sont les cases 1 et 4
		*/

		for (var j = 1 ; j <= n ; j++) {
			for (var i = 1 ; i <= n ; i++) {
				if (j%4 == 1 || j%4 == 0)
					if (i%4 == 2 || i%4 == 3)
						carre[j-1][i-1] = n*n - carre[j-1][i-1] + 1;

				if (j%4 == 2 || j%4 == 3)
					if (i%4 == 1 || i%4 == 0)
						carre[j-1][i-1] = n*n - carre[j-1][i-1] + 1;
			}
		}
	}

	// CARRÉS D’ORDRE PAIREMENT IMPAIRS
	/*	on utilise la méthode de Strachey :
		– on coupe le carré entier de taille N en 4 carrés A, B, C, D de taille N/2.
		– chaque carré N/2 est remplie avec la méthode Siamoise (dans l’ordre A, D, C, B)
		– on applique avec quelques modifications après.
	*/

	else if ( (n/2) %2 == 1) {

		var halfSize = n/2;
		var tabA = [halfSize],
			tabB = [halfSize],
			tabC = [halfSize],
			tabD = [halfSize];

		for (var j=0 ; j<halfSize ; j++) {
			tabA[j] = [halfSize];
			tabB[j] = [halfSize];
			tabC[j] = [halfSize];
			tabD[j] = [halfSize];
		}

		// on met 0 dans chaque case 
		for (var j=0 ; j<halfSize ; j++) {
			for (var i=0 ; i<halfSize ; i++) {
				tabA[j][i] = 0;
			}
		}

		// la fonction siamoise pour remplir un carré magique de taille impaire
		// on place 1 dans le milieu de la première ligne.
		// la valeur suivante (2 donc) est placé dans la case en diagonale, au dessus à droite.
		// si on atteint un bord, on continue sur le bord opposé.
		// si la case cible est déjà occupée, on place le chiffre sous la case source.

		// la première case à remplir est la case du milieu de la première ligne
		var i = Math.floor(halfSize/2);
		var j = 0;

		for (var k=1 ; k<halfSize*halfSize+1 ; k++) {
			// case vide : on la remplit
			if (tabA[j][i] == 0) {
				tabA[j][i] = k;
			}
			// case déjà occupée
			else {
				j = (j+2)%halfSize; // on passe à la ligne du dessous
				i = ((i-1)<0) ? halfSize-1 : i-1; // on remonte d’une ligne
				tabA[j][i] = k;
			}
			j = ((j-1)<0) ?  halfSize-1 : j-1; // on remonte d’une ligne
			i = (i+1)%halfSize; // on avance d’une colonne
		}
		// /fin de la fonction Siamoise


		// on construit aussi tabB, tabC et tabD
		for (var j=0 ; j<halfSize ; j++) {
			for (var i=0 ; i<halfSize ; i++) {
				tabD[j][i] = tabA[j][i] + (n*n/4);
				tabC[j][i] = tabD[j][i] + (n*n/4);
				tabB[j][i] = tabC[j][i] + (n*n/4);
			}
		}

		// fusionne les tableau (les recolle en fait)
		var carre = [n];
		for (var j = 0 ; j < n ; j++) {
			carre[j] = [n];
			for (var i = 0 ; i < n ; i++) {
				// case de A
				if ((i < halfSize && j < halfSize)) carre[j][i] = tabA[j][i];
				// case de B
				if ((i < halfSize && j >= halfSize)) carre[j][i] = tabB[j-halfSize][i];
				// case de C
				if ((i >= halfSize && j < halfSize)) carre[j][i] = tabC[j][i-halfSize];
				// case de D
				if ((i >= halfSize && j >= halfSize)) carre[j][i] = tabD[j-halfSize][i-halfSize];
			}
		}

		// inverse les m = (n-2)/4 premières lignes
		var m = (n-2)/4;
		for (var i=0 ; i<m ; i++) {
			for (var j=0 ; j<halfSize ; j++) {
				var temp = carre[j][i];
				carre[j][i] = carre[j+halfSize][i];
				carre[j+halfSize][i] = temp;
			}
		}

		// inverse la m = (n-2)/4 -1 dernières lignes
		var m = (n-2)/4 -1;
		for (var i=n-m ; i<n ; i++) {
			for (var j=0 ; j<halfSize ; j++) {
				var temp = carre[j][i];
				carre[j][i] = carre[j+halfSize][i];
				carre[j+halfSize][i] = temp;
			}
		}

		// inverse la case du milieu de la première colonne du premier sous carré
		// avec la même case dans le sous-carré en dessous
		var quatrSz = Math.floor(halfSize/2);

		var temp = carre[quatrSz][0];
		carre[quatrSz][0] =  carre[quatrSz + halfSize][0];
		carre[quatrSz + halfSize][0] = temp;

		// même chose avec les cases centrales les deux sous-carrés de gauche
		var temp = carre[quatrSz][quatrSz];
		carre[quatrSz][quatrSz] =  carre[quatrSz + halfSize][quatrSz];
		carre[quatrSz + halfSize][quatrSz] = temp;
	}

	// AFFICHAGE
	for (var j = 1 ; j <= n ; j++) {
		var tr = document.createElement('tr');
		cstMag = 0;
		for (var i = 1 ; i <= n ; i++) {
			td = document.createElement('td');
			td.textContent = carre[j-1][i-1] * a + b;
			cstMag += parseInt(td.textContent);
			tr.appendChild(td);
		}
		tableau.appendChild(tr);
	}

	// affichage de la constante magique
	document.getElementById('cstemagique').textContent = 'La constante magique du carré est : '+cstMag;
}

generate();

/* ]]> */
</script>


<!--

# adresse de la page : http://lehollandaisvolant.net/tout/tools/magic/
#      page créée le : 13 novembre 2013
#     mise à jour le : 15 novembre 2013

-->
</body>
</html>

