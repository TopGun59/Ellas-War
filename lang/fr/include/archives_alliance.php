<?php

echo '<h1>Archives</h1>
<div class="centrer"><br/>
<form name="form">
<select onChange="location = this.options [this.selectedIndex].value" class="form_retirer">
<option value="Archives_alliance">Toutes les archives</option>
<option value="Archives_alliance-1" '.(($rub==1)?'selected="selected"':'').'>Diplomatie</option>
<option value="Archives_alliance-2" '.(($rub==2)?'selected="selected"':'').'>Départs et recrutement</option>
<option value="Archives_alliance-3" '.(($rub==3)?'selected="selected"':'').'>Informations internes</option>
<option value="Archives_alliance-4" '.(($rub==4)?'selected="selected"':'').'>Demandes de ressources</option>
</select><br/>';

if($nb_archives > 0) {

  if($nb_pages > 1) {
    echo '<b>Page</b> ';

    for($i=1;$i<=$nb_pages;$i++) {
      if($page == $i) {
        echo ' | <a href="Archives_alliance-'.$rub.'-'.$i.'" class="centre_armee2">'.$i.'</a> ';
      }
      else {
        echo ' | <a href="Archives_alliance-'.$rub.'-'.$i.'">'.$i.'</a> ';
      }
    }
  }

  echo '
  </form></div>
  <div id="tableau_historique" class="centrer">
    <div class="titre_tab ligne">
      <div class="gauche_historique">&nbsp;Date&nbsp;</div>
      <div class="droite_historique">&nbsp;Titre&nbsp;</div>
    </div>';
  
  foreach($archives as $val)	{
    echo '<div class="ligne_historique">
      <div class="ligne">
        <div class="gauche_historique">'.date('d/m/Y \à H\hi',$val->timestamp).'</div>
        <div class="droite_historique" onclick="javascript:voir_archive('.$val->id.');">'.stripslashes($val->titre).'</div>
      </div>
      <div class="cache_historique" id="historique_num'.$val->id.'">
    '.stripslashes($val->texte).'
      </div>
    </div>';
  }
}
else {
  echo '<br/><br/>Les archives de votre alliance sont vides';
}

echo '</div>';

?>