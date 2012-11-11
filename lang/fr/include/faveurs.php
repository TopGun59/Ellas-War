<?php

echo '<div class="centrer">
	<h1>Tout pour prendre de l\'avance !</h1>
	<br/><b>Faveur'.(($paquet -> getfaveur() > 1)?'s':'').' :</b> <font color="red">'.$paquet -> getfaveur().'</font>';

$paquet -> display();

echo '
</div>
<div class="ligne">';
if($paquet->getlvl() >= LVL_MINI_XP) {
  echo '
  <div class="cadre_renta centrer">
    <a href="Faveurs-zeus"><b>Appui de Zeus</b></a><br/>
    <br/><a href="Faveurs-zeus">Appui de Déimos</a>
    <br/><a href="Faveurs-zeus">Appui d\'Éros</a>
    <br/><a href="Faveurs-zeus">Appui d\'Hébé</a>
    <br/>
    <br/>Prix : 2 faveurs
  </div>';
}
echo '
  <div class="cadre_renta centrer">
    <a href="Faveurs-hermes"><b>Appui d\'Hermès</b></a><br/>
    <br/><a href="Faveurs-hermes">+50% de lots sur le commerce</a>
    <br/><a href="Faveurs-hermes">-50% sur la taxe lors des rachats</a>
    <br/><a href="Faveurs-hermes">Licence de grand commerçant</a>
    <br/><a href="Faveurs-hermes">Ventes/Achats anonymes sans frais</a>
    <br/>
    <br/>Prix : 2 faveurs pour une semaine
  </div>';
if($paquet->getlvl() >= LVL_MINI_XP) {
  echo '
</div>
<div class="ligne">';
}
echo '
  <div class="cadre_renta centrer">
    <a href="Faveurs-deimos"><b>Appui de Déimos</b></a><br/>
    <br/><a href="Faveurs-deimos">Remportez de nombreuses victoires !</a>
    <br/><a href="Faveurs-deimos">15 attaques bonus vous sont ajoutées. Vous pouvez en faire un maximum de 5 par jour.</a>
    <br/>
    <br/>Prix : 1 faveur
  </div>';
if($paquet->getlvl() >= LVL_MINI_XP) {
  echo '<div class="cadre_renta centrer">
    <a href="Faveurs-eros"><b>Appui d\'Éros</b></a><br/><br/>
    <a href="Faveurs-eros">Augmentez votre XP pendant une semaine !</a>
    <br/><a href="Faveurs-eros">- 20% de perte d\'XP lors d\'une défaite</a>
    <br/><a href="Faveurs-eros">+ 20% d\'XP en cas de victoire</a>
    <br/>
    <br/>Prix : 1 faveur
  </div>';
}
echo '
</div>
<div class="ligne">
  <div class="cadre_renta centrer">
    <a href="Faveurs-midas"><b>Appui de Midas</b></a><br/><br/>
    <a href="Faveurs-midas">Augmentez vos richesses !</a>
   <br/><a href="Faveurs-midas">+ 800\'000 Drachmes</a>
   <br/>
   <br/>Prix : 1 faveur
  </div>

  <div class="cadre_renta centrer">
    <a href="Faveurs-ploutos"><b>Appui de Ploutos</b></a><br/><br/>
    <a href="Faveurs-ploutos">Ayez des ressources en abondance !</a>
    <br/><a href="Faveurs-ploutos">+ 2\'000\'000 Bois, Fer, Nourriture, Eau et 1\'000\'000 d\'Argent</a>
    <br/>
    <br/>Prix : 1 faveur
  </div>
</div>
<div class="ligne">
  <div class="cadre_renta centrer">
    <a href="Faveurs-hebe"><b>Appui d\'Hébé</b></a><br/><br/>
    <a href="Faveurs-hebe">Vous ne payerez pas de taxes lors de vos retraits dans votre trésor durant 7 jours</a>
    <br/>
    <br/>Prix : 1 faveur
  </div>

  <div class="cadre_renta centrer">
  <a href="Faveurs-leonnidas"><b>Appui de Léonidas</b></a><br/>
  <br/><a href="Faveurs-leonnidas">+ 40 Spartiates</a>
  <br/><a href="Faveurs-leonnidas">+ 200 espions</a>
  <br/>
  <br/>Prix : 1 faveur
  </div>
</div>

<div class="ligne centrer cadre">
<br/><br/>
<a class="erreur centrer" href="Obtenir des faveurs">Obtenir des faveurs</a>
<br/><br/>
</div>

<div class="ligne centrer">';


	if(sizeof($liste) > 0) {
		echo '<br/><b>Dernières actions</b><br/>';
		foreach($liste as $do) {
			echo '<br/><b>Faveur : ';
			switch($do->type) {
				case 'drachme':
				case 'drachmes': echo 'drachmes';
				break;
				
				case 'attaques': echo 'attaques';
				break;
				
				case 'spartiate': echo 'spartiates';
				break;
				
				case 'espion': echo 'espions';
				break;
				
				case 'bois': echo 'bois';
				break;
				
				case 'fer': echo 'fer';
				break;
				
				case 'eau': echo 'eau';
				break;
				
				case 'argent': echo 'argent';
				break;
				
				case 'nourriture': echo 'nourriture';
				break;
				
				case 'banque':
				case 'tresor': echo 'aucune taxe sur le trésor';
				break;
				
        case 'zeus': echo 'Appuis de Zeus';break;
        case 'hermes': echo 'Appui d\'Hermès';break;
        case 'deimos': echo 'Appui de Déimos';break;
        case 'eros': echo 'Appui d\'Éros';break;
        case 'midas': echo 'Appui de Midas';break;
        case 'ploutos': echo 'Appui de Ploutos';break;
        case 'hebe': echo 'Appui d\'Hébé';break;
        case 'leonnidas': echo 'Appui de Léonnidas';break;
        
				default:
				break;
			}
			echo '</b>, le '.date('d/m/Y \à H\hi', $do->timestamp);
		}
	}
?>

</div>