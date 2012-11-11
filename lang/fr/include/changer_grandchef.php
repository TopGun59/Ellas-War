<?php

echo '﻿<h1>Changer le Grand chef</h1><br/>';

if(sizeof($liste_joueurs) > 0) {
		echo '<center><form action=\'#\' method=\'post\' >
				<select name=\'chef\' class="form_retirer">';
		
		foreach($liste_joueurs as $id => $login)
			echo '<option value=\''.$id.'\'>'.$login.'</option>';
		
		echo '</select><br/><br/>
		<div class="bouton_classique"><input class="bouton_classique2" type="submit" name=\'Modifier\' value=\'Modifier\' /></div></form></center>';
}

?>