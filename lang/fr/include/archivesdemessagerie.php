<div id="recherche_mp" style="position:absolute;margin-top:25px;margin-left:619px;background-color:#E8E5D4;padding:2px;display:none;border:1px dotted black;">
	<form method="post" action="#">
		<input type="text" name="recherche" class="form"/><br/>
		<input type="image" name="Rechercher" src="fr/images/boutons/rechercher.png" class="form_co6" style="margin-top:4px;"/>
	</form>
</div>
<?php

if(empty($_POST['recherche']) && ($nombre_pages == 0)) {
	echo '<br/>
			<div class="centrer ligne"><b>Vous n\'avez pas de message privé</b></div>
			<br/><br/>';
}
else {
	if(!empty($_GET['var1']))	{
		if(($_GET['var1']	>= 1) && ($_GET['var1'] <= $nombre_pages)) {
			$npage = round($_GET['var1']);
		}
		else {
			$npage = 1;
		}
	}
	else {
		$npage = 1;
	}

	$num_mess=0;

	echo '<form action="#" method="post" enctype="multipart/form-data">
				<div class="droite ligne80">
				<a class="centre_armee2" href="#" onclick="affiche_cache(\'recherche_mp\');"><img src=\'images/joueurs/search.png\' alt="Rechercher"/></a></div>';

if(empty($_POST['recherche'])) {
	if($nombre_pages > 1) {
		echo '<div class="centrer">Page | ';

		for($i=1;$i<=$nombre_pages;$i++) {
			if($npage == $i)
				echo '<a href="messagerie-'.$i.'" class="gras">'.$i.'</a> | ';
			else
				echo '<a href="messagerie-'.$i.'">'.$i.'</a> | ';
		}
		echo '</div>';
	}
}
echo '<table class="tableau80 centrer_tableau">
	<tr class="tableau_header">
	<th class="titre_mess"> </th>
	<th class="titre_mess">Titre</th>
	<th class="titre_mess">Expéditeur</th>
	<th class="titre_mess">Date</th>
	<th class="titre_mess"></th></tr>';

foreach($messages as $mps) {
	$num_mess++;
	if(!empty($mps->timestamp_lecture))
		$image = '<img src="images/joueurs/mp.png" alt="Ancien Message" title="Ancien Message" />';
	else
		$image = '<img src="images/joueurs/n_mp.png" alt="Nouveau Message" title="Nouveau Message" />';

	if(date('l', $mps->timestamp) == date('l', time()) AND $mps->timestamp + (24 * 3600) > time())
		$date = 'Aujourd\'hui ';
	else
		$date = ''.date('\L\e d/m/Y', $mps->timestamp).'';

echo'<tr class="tableau_fond'.($num_mess%2).'">
	<td>'.$image.'</td>
	<td class="gauche"><a href="lire-'.$mps->id.'">'.stripslashes(stripslashes($mps->titre)).'</a></td>
	<td><a href="profilsjoueur-'.$mps->exp.'" class="non_souligne">'.$mps->expediteur.'</a></td>
	<td>'.$date.' '.date('\à H\hi', $mps->timestamp).'</td>
	<td><img src="images/joueurs/suppr.png" alt="supprimer le message privé" class="supr_messagerie" onclick="javascript:suppr_mp('.$mps->id.');"/></td>
	</tr>';
}
echo '</table><br/>';
}

?>
</form>