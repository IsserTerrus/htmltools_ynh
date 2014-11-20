function sageotron() {

	var a_1 = new Array(
		'Si un jour',
		'Toutes les fois que',
		'Lorsque',
		'Quand le frigo est vide et que',
		'Chaque fois que'
	);

	var a_2 = new Array(
		new Array( "tu as froid,",				1),
		new Array( "tu as faim,",				1),
		new Array( "tu regardes la TV,",		1),
		new Array( "tu manges,",				1),
		new Array( "tu vas aux toilettes,",	1),
		new Array( "tu lis un livre,",		1),
		new Array( "tu tweet,",					1),
		new Array( "tu rêves de moi,",		1),
		new Array( "tu as chaud,",				1),
		new Array( "tu as soif,",				1),
		new Array( "tu es fatigué,",			1),
		new Array( "tu veux faire pipi,",	1),
		new Array( "tu est rassasié,",		1),
		new Array( "ta mère",					0, 'f'),
		new Array( "le chat",					0, 'm'),
		new Array( "l'éléphant",				0, 'm'),
		new Array( "le poulpe",					0, 'm'),
		new Array( "le bigorneau",				0, 'm'),
		new Array( "l'aigle royal",			0, 'm'),
		new Array( "le requin marteau",		0, 'm'),
		new Array( "le cafard",					0, 'm'),
		new Array( "l’hirondelle",				0, 'f'),
		new Array( "une vache",					0, 'f'),
		new Array( "le facteur",				0, 'm'),
		new Array( "une étoile filante",		0, 'f'),
		new Array( "Chuck Norris",				0, 'm'),
		new Array( "tu",							0, 'm'),
		new Array( "PPDA",						0, 'm'),
		new Array( "Sacha aidé d’Ondine",	0, 'm'),
		new Array( "toi et moi",				0, 'm'),
		new Array( "Franklin la tortue",		0, 'm'),
		new Array( "un nuage dans le ciel",	0, 'm'),
		new Array( "un phoque",					0, 'm')
	);

	var a_3 = new Array(
		"fond sur sa proie,",
		"grimpe dans les arbres,",
		"survole les plaines,",
		"plonge dans les profondeurs,",
		"boit du lait,",
		"mange une souris,",
		"saute de toit en toit,",
		"mange une aspèrge,",
		"nourrit un léopard,",
		"joue aux jeux vidéos,",
		"chante Justin Bieber,",
		"cours après un caribou,",
		"cherche Pikachu,",
		"goute un bonbon,",
		"range te chambre,"
	);

	var a_4 = new Array(
		"ne se précipite jamais.",
		"le fait avec élégance.",
		"se fie à son instinct.",
		"regarde d'abord le soleil.",
		"se regarde le nombril.",
		"se torture les méninges.",
		"a mal au ventre.",
		"se sert de sa sagesse.",
		"le fait avec allégresse.",
		"écoute la parole divine.",
		"demande à Chuck Norris.",
		"cherche sur Google.",
		"pousse la chansonette.",
		"allume une bougie.",
		"pense à Céline Dion."
	);

	var a_5 = new Array(
		"demande toi ce que ferait Dieu à ta place.",
		"réfléchis aux conséquences.",
		"n'hésite pas !",
		"sois prudent !",
		"dis-lui bonjour.",
		"fais une prière.",
		"prosterne-toi.",
		"cours !",
		"danse une valse.",
		"déshabille-toi.",
		"donnes 1€ à un pauvre.",
		"tais-toi !",
		"parles-en à tes amis.",
		"envoies cette lettre à 15 contacts si tu ne peux pas mourrir.",
		"franchis la porte.",
		"roule-toi par terre.",
		"mange un bonbon."
	);


	choose = function(tableau) {
		var len = tableau.length;
		var i = Math.floor(Math.random()*len);
		return tableau[i];
	}


	var si = choose(a_1);
	var quoi = choose(a_2);
	var action = choose(a_3);
	var comment = choose(a_4);
	var fait = choose(a_5);

	var fin = (quoi[1]==0) ? ( action +' '+ ((quoi[2]=='f')?'elle':'il') +' '+ comment ) : fait;



	output.innerHTML = si+' '+quoi[0]+' '+fin ;
}
