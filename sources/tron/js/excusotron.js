function excusotron() {


	var a_1 = new Array(
		'Madame,',
		'Monsieur,',
		'Professeur,'
	);

	var a_2 = new Array(
		"je ne peux pas vous rendre le devoir de",
		"je ne peux pas faire l'exposé aujourd'hui",
		"j'ai pas mes affaires de",
		"je n'ai pas fait l'exercice de",
		"je suis en retard en",
		"je n'ai pas pu venir en cours de"
	);

	var a_3 = new Array(
		"français",
		"mathématique",
		"géographie",
		"physique"
	);

	var a_4 = new Array(
		"parce que",
		"pour la raison que"
	);

	var a_5 = new Array(
		"mon réveil est tombé en panne",
		"ma maison a été innodée et mon cahier a été emporté",
		"mon chien a bouffé ma trousse",
		"Superman a irradié ma chambre",
		"Pikachu a joué avec moi",
		"ma sœur a jeté mon devoir maison dans les toilettes",
		"ma chatte a pissé dans mon cartable",
		"le facteur n’est pas passé",
		"ma soeur a oublié de me réveiller",
		"ya eu une coupure de courant à la maison",
		"ma grand-mère a été hospitalisée",
		"j'avais un rendez-vous chez le gynéco",
		"j'avais un rendez-vous chez le dentiste",
		"j'avais un rendez-vous chez le médecin",
		"j'avais un rendez-vous chez le vétérinaire",
		"mon scooter est tombé en panne sur l'autoroute et la borne d'arrêt d'urgence avait été vandalisée par la caillera",
		"mon père m'a confisqué mon styloplume parce que je voulais pas passer la tondeuse à gazon",
		"j'ai dû aider ma mère à ranger ma chambre parce que ma soeur avait tout dérangé",
		"ya eu un incendie et ma chambre a brûlé entièrement",
		"ya eu une inondation et tout mon travail est à l'eau",
		"les souris ont rongé mon classeur et je n'ai pas retrouvé mon travail",
		"la nuit dernière on a été évacués à cause d'une invasion de grenouilles géantes venues de l'espace",
		"on a été attaqués par des scarabées et on a dû se réfugier chez mes cousins",
		"mon père a voulu m'emmener à la chasse et il m'a tiré dessus en me prenant pour un sanglier, regardez j'ai encore les marques de chevrotines",
		"j'ai été témoin d'un accident alors les flics m'ont mis en garde à vue et ils me prenaient pour un islamiste",
		"je me suis ouvert le pouce en enlevant le capuchon de mon styloplume"
	);

	var a_6 = new Array(
		"et"
	);

	var a_7 = new Array(
		"je me suis niqué l'index en jouant au badminton avec le prof de gym",
		"yavait une manif d'agriculteurs",
		"la serrure de la salle de bains était bloquée",
		"il a fallu appeler les pompiers",
		"j’ai eu la varicelle"
	);


	var a_8 = new Array(
		"Ne vous faites pas de soucis pour moi, maintenant tout va bien, je m'en suis bien tiré.",
		"Je sais que c'est vraiment incroyable et pourtant c'est vrai, c'est dingue, non, vous croyez pas ?",
		"Vous n'êtes pas obligé de me croire, alors j'ai un mot signé de mes parents.",
		"Finalement j'ai eu de la chance parce que j'aurais pu être foudroyé pendant l'orage.",
		"À quelque chose malheur est bon, puisque me voilà devant vous sain et sauf !",
		"On dirait que c'est fait exprès, ces trucs-là ça n'arrive qu'à moi, c'est dingue, non ?",
		"Finalement comme je suis un gars sérieux je suis venu vous expliquer tout ça au lieu d'inventer n'importe quoi",
		"Je suis sûr que vous me comprenez, ça pourrait vous arriver comme à tout le monde, n'est-ce pas ?"
	);


	choose = function(tableau) {
		var len = tableau.length;
		var i = Math.floor(Math.random()*len);
		return tableau[i];
	}

	output.innerHTML = '<p>'+choose(a_1)+' '+choose(a_2)+' '+choose(a_3)+' '+choose(a_4)+' '+choose(a_5)+' '+choose(a_6)+' '+choose(a_7)+'.'+' '+choose(a_8)+'</p>';
}
