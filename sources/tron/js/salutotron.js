function salutotron() {

	var a_titre = new Array(
		'Madame,',
		'Monsieur,',
		'Chef,',
		'Mein Führer,',
		'Votre Majestée,',
		'Votre sainteté,',
		'Monsieur le directeur,',
		'Monsieur le président,',
		'Monsieur le président directeur général,',
		'Ô maître,'
	);

	var a_debut = new Array(
		'je vous prie',
		'je vous offre',
		'je vous supplie',
		'je vous conjure',
		'je me mets à genoux pour vous demander',
		'je vous supplie',
		'je vous ordone',
		'je vous propose',
		'je vous implore'
	);

	var a_verbe = new Array(
		'd\'accepter',
		'de croire en',
		'd\'ouvrir votre coeur à',
		'de vous abaisser à croire en',
		'd\'avoir l\'infinie bonté de recevoir',
		'd\'entendre',
		'de comprendre',
		'de recevoir',
		'd\'agréer',
		'd\'accepter'
	);

	var a_adj = new Array(
	//		new Array('adjectif',	'pr.m','pr.f',	'pr.plur', 'marque.fem', 'marque.plur');
			new Array('sincère',		'mon', 'ma',	'mes',	'',	's'),
			new Array('immense',		'mon', 'mon',	'mes',	'',	's'),
			new Array('simple',		'mon', 'ma',	'mes',	'',	's'),
			new Array('honnête',		'mon', 'mon',	'mes',	'',	's'),
			new Array('faible',		'mon', 'ma',	'mes',	'',	's'),
			new Array('pitoyable',	'mon', 'ma',	'mes',	'',	's'),
			new Array('misérable',	'mon', 'ma',	'mes',	'',	's'),
			new Array('unique',		'mon', 'mon',	'mes',	'',	's'),
			new Array('sympathique','mon', 'ma',	'mes',	'',	's'),
			new Array('fraternel',	'mon', 'ma',	'mes',	'le',	's')
		);

	var a_nom = new Array(
	//		new Array('nom',				'genre',	'pluriel'),
			new Array('dévotion',		'f',	'0'),
			new Array('salutations',	'f',	'1'),
			new Array('respect',			'm',	'0'),
			new Array('admiration',		'f',	'0'),
			new Array('soumission',		'f',	'0'),
			new Array('abnégation',		'f',	'0')
		);


	choose = function(tableau) {
		var len = tableau.length;
		var i = Math.floor(Math.random()*len);
		return tableau[i];
	}

	var tit = choose(a_titre);
	var deb = choose(a_debut);
	var ver = choose(a_verbe);
	var adj = choose(a_adj);
	var nom = choose(a_nom);

	var t = tit;
	var d = deb;
	var v = ver;
	var p = (nom[2]=='1') ? adj[3] : (nom[1]=='f') ? adj[2] : adj[1];
	var a = adj[0] + ((nom[1]=='f') ? adj[4] : '') + ((nom[2]=='1') ? adj[5] : '');
	var n = nom[0];

	output.innerHTML = t+' '+d+' '+v+' '+p+' '+a+' '+n+'.';
}
