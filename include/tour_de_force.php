<?php

echo '<h1>'.$j->login.'</h1><div class="centrer">';

if(is_file('avatarjoueur/'.$j->id.'.jpg')) {
	echo '<img src=\'avatarjoueur/'.$j->id.'.jpg\' alt="Avatar du joueur '.$j->id.'" height="200px"/>';
}
elseif(is_file('avatarjoueur/'.$j->id.'.png')) {
	echo '<img src=\'avatarjoueur/'.$j->id.'.png\' alt="Avatar du joueur '.$j->id.'" height="200px"/>';
}
else {
	echo '<img src="images/joueurs/avatar.png" alt="Avatar par défaut" />';
}

echo '</div><div style="margin-left:150px;">';

foreach($j->tourforce as $tdf) {
  echo '<div class="font_hf" >
  <div class="titre_hf">'.$tdf->nom.'</div>
  <div class="txt_hf">'.$tdf->description.'</div>
  <div class="pt_hf"></div>
  </div>';
}

echo '</div>';

?>