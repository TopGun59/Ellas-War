<div class="ligne centrer">
	<br/>
	<img src="images/jeux/javelot_200.png" alt="Javelot" title="Javelot" />
	<br/>
</div>
<?php

if(!empty($erreur)) {
	$paquet -> display($erreur);
}

if($info->joueur == $paquet->getid()) {
	$paquet -> display(128);
}
else
{
	if(!empty($_POST['lancer'])) {
		$paquet = new EwPaquet('lancer_javelot');
		$info = $paquet->getRetour();
		$paquet->display();
	}

	echo '<div class="centrer ligne80"><br>
			<font color=red><b>Cagnotte : ',nbf($info->drachme),' '.imress('drachme').'</b></font>
			<br/>
			<font color=green><b>Dernier gagnant : ',$info->login,'</font></b><br>';
	echo '
	
	<br/>
	<b>Mettez 1\'000 '.imress('drachme').' dans la cagnotte,
	prenez un javelot et tentez d\'atteindre le centre de la cible,
	90% de la somme est remise en jeu, le gagnant remporte le tout.</b>
	<br/><br/>

	<form method="post" action="#">
	<input type="hidden" name="lancer" value="1" />
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" name="action_des" Value="Lancer le javelot" /></div>
	</form>
	</div>';
}
?>