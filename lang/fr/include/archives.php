<h1>Archives</h1>
<br/>
<?php
	
echo'
<form action=\'#\' method=\'post\' name=\'classement\' class="ligne">
<div style="position:relative;float:left;margin-left:220px;margin-top:2px;margin-bottom:8px;">
	<select onChange="location = this.options [this.selectedIndex].value" class="form_retirer">
		<option value="Archives-'.$nb.'-0'.(!empty($recherche)?'-'.$recherche:'').'" '.((!empty($type))?'selected="selected"':'').'>Toutes les archives</option>
		<option value="Archives-'.$nb.'-1'.(!empty($recherche)?'-'.$recherche:'').'" '.((!empty($type) && ($type == 1))?'selected="selected"':'').' >Interventions divines</option>
		<option value="Archives-'.$nb.'-2'.(!empty($recherche)?'-'.$recherche:'').'"'.((!empty($type) && ($type == 2))?'selected="selected"':'').' >Espionnages</option>
		<option value="Archives-'.$nb.'-3'.(!empty($recherche)?'-'.$recherche:'').'"'.((!empty($type) && ($type == 3))?'selected="selected"':'').' >Dons</option>
		<option value="Archives-'.$nb.'-4'.(!empty($recherche)?'-'.$recherche:'').'"'.((!empty($type) && ($type == 4))?'selected="selected"':'').' >Alliances</option>
		<option value="Archives-'.$nb.'-5'.(!empty($recherche)?'-'.$recherche:'').'"'.((!empty($type) && ($type == 5))?'selected="selected"':'').' >Attaques</option>
		<option value="Archives-'.$nb.'-6'.(!empty($recherche)?'-'.$recherche:'').'"'.((!empty($type) && ($type == 6))?'selected="selected"':'').' >Batailles navales</option>
	</select>
	<input type=\'text\' name=\'recherche\' class="form_retirer" required="required" />
</div>
<div style="position:relative;float:left;margin-left:10px;">
	<div class="bouton_classique"><input class="bouton_classique2" type="submit" value="VALIDER" name=\'rechercher\' value=\'rechercher\' /></div>
</div>
</form><br/>';

if(empty($pages)) {
	echo '<br/><h2 class="centrer">Vos archives sont vides</h2>';
}
else{
	if($pages > 1) {
		echo '<div class="ligne cadre">
				<div class="ligne80 centrer">
				<b>Page</b> ';

		for($i=1;$i<=$pages;$i++) {
			if($nb == $i) {
				echo ' | <a href="Archives-'.$i.'-'.$type.(!empty($recherche)?'-'.$recherche:'').'" class="centre_armee2">'.$i.'</a> ';
			}
			else {
				echo ' | <a href="Archives-'.$i.'-'.$type.(!empty($recherche)?'-'.$recherche:'').'">'.$i.'</a> ';
			}
		}
		echo '</div></div>';
	}
	
	echo '<div class="ligne80 centrer_tableau">
<div id="tableau_historique">
	<div class="titre_tab ligne">
		<div class="gauche_historique centrer">&nbsp;Date&nbsp;</div>
		<div class="droite_historique gauche">&nbsp;Titre&nbsp;</div>
	</div>';
	
	foreach($archives as $val)	{
		if(!empty($val->histo_public)) {
			$image='<img src="images/mb_connecter.png" alt="Archive publique" title="Archive publique" class="img_temple" />';
		}
		else {
			$image='<img src="images/mb_deconnecter.png" alt="Archive privée" title="Archive privée" class="img_temple" />';
		}
		
		echo '<div class="ligne_historique">
			<div class="ligne">
				<div class="gauche_historique">'.date('d/m/Y \à H\hi',$val->timestamp).'</div>
				<div class="droite_historique" onclick="javascript:voir_historique('.$val->id.');">'.$val->titre.'</div>
			</div>
			<div class="cache_historique" id="historique_num'.$val->id.'">
		'.$val->texte.'
		<br/><br/>
		<span id="gestion_permalien_'.$val->id.'" onclick="javascript:gestion_permalien('.$val->id.');">'.$image.'</span> <input type="text" value="'.SITE_URL.'/permalien-'.$val->id.'" class="permalien" />
			</div>
		</div>';
	}
	echo '</div></div>';
}

?>