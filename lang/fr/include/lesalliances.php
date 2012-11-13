<?php

if(!empty($attente)) {
	echo '<div id="cadre_candidature" class="ligne erreur centrer">En attente dans l\'alliance <b>'.$attente.'</b> (<a href="javascript:annuler_candidature();" class="centre_armee" >Annuler</a>)<br/><br/></div>';
}

if(!empty($resultat)) {
	echo '<div class="centrer">';
	if($resultat == true) {
		echo 'La guerre est déclarée ! La bataille commencera dans <b>24</b> heures';
	}
	else {
		echo 'Erreur dans la déclaration de la guerre, vérifier la cible';
	}
	echo '</div>';
}

if(sizeof($liste_alliances)) {
	$j = 7;
	echo '<table class="tableau80 centrer_tableau">
	<tr class="tableau_header">
<td class="centrer">&nbsp;'.img('images/alliance/membrealli.png', 'membre').'&nbsp;</td>
<td class=\'centrer\'>&nbsp;Nom&nbsp;</td>
<td class="centrer">&nbsp;Chef&nbsp;</td>
<td class="centrer">&nbsp;V&nbsp;</td>
<td class="centrer">&nbsp;D&nbsp;</td>
<td class="centrer">&nbsp;Effectifs&nbsp;</td>
<td class="centrer">&nbsp;Profils&nbsp;</td>';

if($paquet->getalliance() == 0 && $paquet->getlvl() >= $lvlminirejoindre) {
	echo '<td class="centrer">&nbsp;Postuler&nbsp;</td>';
	$j++;
}
else {
	if($paquet->peut_pacte()) {
		echo'<td class="centrer">&nbsp;Pacte&nbsp;</td>';
		$j++;
	}
	if($paquet->peut_guerre()) {
		echo '<td class="centrer">&nbsp;<font color=\'red\'><b>Guerre</b></font>&nbsp;</td>';
		$j++;
	}
	if($paquet->peut_contrat()) {
		echo '<td class="centrer">&nbsp;<font color=\'red\'><b>Contrats</b></font>&nbsp;</td>';
		$j++;
	}
	if($paquet->getid() == $paquet->getidchef()) {
		echo '<td class="centrer">&nbsp;<font color=\'red\'><b>Blocus</b></font>&nbsp;</td>';
		$j++;
	}
}

echo '</tr>';

	foreach($liste_alliances as $all) {
		echo'<tr class="tableau_fond2"><td colspan="'.$j.'"></td></tr>';
		echo'<tr class="font_classement'.($i%2).'">';
		$i++;

		echo '<td class="centrer">&nbsp;'.$all->nbmembre.'&nbsp;</td>
					<td>&nbsp;'.ucfirst(stripslashes($all->nom)).'&nbsp;</td>
					<td>&nbsp;<a href="profilsjoueur-'.$all->idchef.'">'.ucfirst($all->login).'</a>&nbsp;</td>
					<td class="droite">&nbsp;'.$all->victoires.'&nbsp;</td>
					<td class="droite">&nbsp;'.$all->defaites.'&nbsp;</td>
	
		<td class="centrer">
		<a href=\'membrealliance-'.$all->id.'\'>'.img('images/alliance/membrealli.png','effectifs').'</a>
		</td>
		<td class="centrer">
		<a href=\'profilsalliance-'.$all->id.'\'>'.img('images/alliance/view_text.png','profils').'</a>
		</td>';
		
		if($paquet->getalliance() == 0 && $paquet->getlvl() >= $lvlminirejoindre) {
			echo '<td class="centrer">&nbsp;';
			
			if($all->peut_postuler) {
				echo '<a href=\'Postuler-'.$all->id.'\'>'.img('images/alliance/flag_blue.png','postuler').'</a>';
			}
			
			echo '&nbsp;</td>';
		}
		else {
			if($paquet->peut_pacte()) {
				echo '<td class="centrer">';
				if($all->peut_pacte) {
					echo '<img src="images/alliance/flag_green.png"
										 title="Pacte" 
										 name="Pacte" 
										 alt="Pacte" 
										 class="supr_messagerie" 
										 onclick="javascript:demande_pacte('.$all->id.');" />';
				}
				echo '</td>';
			}
			
			if($paquet->peut_guerre()) {
				echo '<td class="centrer">';
				if($all->peut_guerre) {
					echo '<img src="images/alliance/flag_red.png"
						 alt="Déclarer" title="Déclarer" 
						 class="supr_messagerie" 
						 onclick="javascript:declarer('.$all->id.');" />';
				}
				echo '</td>';
			}
			
			if($paquet->peut_contrat()) {
				echo '<td class="centrer">';
				if($all->peut_contrat) {
					echo '<img src="images/alliance/flag_pink.png"
						 alt="Proposer un contrat" title="Proposer un contrat" 
						 class="supr_messagerie" 
						 onclick="javascript:declarer_contrat('.$all->id.');" />';
				}
				echo '</td>';
			}
			
			if($all->peut_blocus) {
				echo '<td class="centrer"><img src="images/alliance/flag_orange.png"
						 alt="Poser un blocus" title="Poser un blocus" 
						 class="supr_messagerie" 
						 onclick="javascript:declarer_blocus('.$all->id.');" /></td>';
			}
		}
		echo '</tr>';
	}
	echo '</table>';
}

if($nombreDePages > 1)
{
	echo '<div class="ligne centrer"><br/>';
	$pageread = $page;

	$num = $pageread - 3;
	$numl = $pageread + 2;

	if ($num < 1)
	{
	$num = 1;
	}

	if ($numl > $nombreDePages)
	{
		$numl = $nombreDePages;
	}

	if ($num > 1)
	{
		echo '<a href="LesAlliances-1">1</a>  ... ';
	}

	for ($i = $num ; $i <= $numl ; $i++)
	{
		if ($pageread == $i)
		{
		echo '<b>'.$i.'</b> ';
		}
		else
		{
				echo '<a href="LesAlliances-' . $i . '">' . $i . '</a> ';
		}
	}

	if ($numl < $nombreDePages)
	{
	echo '... <a href="LesAlliances-'.$nombreDePages.'">'.$nombreDePages.'</a> ';
	}
	echo '</div>';
}


if($paquet->getalliance() == 0 && $paquet->getlvl() >= LVL_MINI_ALLIANCE) {
	echo '<div class="centrer erreur"><a href="CreerVotreAlliance" class="centre_armee" >Creer votre alliance</a></div>';
}


?>