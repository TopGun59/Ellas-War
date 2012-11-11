<!--<img src="lang/fr/images/menu/titre_stats.png"
		 alt="Statistiques" 
		 title="Statistiques" />-->

<?php

$nom_alliance = $paquet->getnomalliance();

echo '
<a href="VosObjectifs" class="gras" style="text-decoration:none;">'.$paquet->getlogin()
.' ('.$paquet->getlvl().')</a><br/>
<a href="VosObjectifs">Vos objectifs</a><br/>
'.(!empty($nom_alliance)?$nom_alliance.
'<br/>':'').'
Terrain : <b>'.nbf($paquet->getterrain()).'</b><br/>
'.(($paquet->getvictoires()>1)?'Victoires':'Victoire').
' : <b>'.nbf($paquet->getvictoires()).'</b><br/>
'.(($paquet->getdefaites()>1)?'Défaites':'Défaite').' : <b>'.
nbf($paquet->getdefaites()).'</b><br/>';

if($paquet->getlvl() >= 6) {
	echo 'XP : <b>'.nbf($paquet->getpoints()).'</b><br/>';
}

if($paquet->getlvl() >= 1) {
	echo '<a href="Honneur">Honneur</a> : <a href="Honneur" style="text-decoration:none;"><b>'.
					 nbf($paquet->gethonneur()).'</b></a>';
}

?>