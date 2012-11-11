<?php
echo '<h2 class="centrer">Attaques disponibles</h2>
<table class=\'tableau80 centrer_tableau\'>
	<tr class=\'tableau_header\'>
    <td class="titre_tab">&nbsp;&nbsp;</td>
    <td class="titre_tab">&nbsp;Effectuées&nbsp;</td>
    <td class="titre_tab">&nbsp;Disponibles&nbsp;</td>
    <td class="titre_tab">&nbsp;Retour&nbsp;</td>
	</tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
  <tr class="tableau_fond1">
      <td class="gauche">&nbsp;<b>Hors guerre</b>&nbsp;</td>
      <td class="centrer">&nbsp;'.affiche_etoile($mes_attaques_faites_normale, 'rouge', 'Attaque faite').'&nbsp;</td>
      <td class="centrer">&nbsp;'.affiche_etoile($faite_restante_n, 'rouge', 'Attaque disponible').affiche_etoile($faite_restante_n2, 'rouge2', 'Attaque non disponible').'&nbsp;</td>
      <td class="centrer">&nbsp;'.print_date($temps_attaque_faite_n).'&nbsp;</td>
  </tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
  <tr class="tableau_fond0">
    <td class="gauche">&nbsp;<b>En guerre</b>&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($mes_attaques_faites_guerre, 'orange', 'Attaque faite en guerre').'&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($faite_restante_g, 'orange', 'Attaque disponible en guerre').affiche_etoile($faite_restante_g2, 'orange2', 'Attaque non disponible en guerre').'&nbsp;</td>
    <td class="centrer">&nbsp;'.print_date($temps_attaque_faite_g).'&nbsp;</td>
  </tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
  <tr class="tableau_fond1">
    <td class="gauche">&nbsp;<b>Bonus</b>&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($mes_attaques_faites_bonus, 'violet', 'Attaque bonus faite').'&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($faite_restante_b, 'violet', 'Attaque bonus disponible').affiche_etoile($faite_restante_b2, 'violet2', 'Attaque bonus non disponible').'&nbsp;</td>
    <td class="centrer">&nbsp;'.print_date($temps_attaque_faite_b).'&nbsp;</td>
  </tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
</table>
<br/>
<h2 class="centrer">Attaques reçues</h2>
<table class=\'tableau80 centrer_tableau\'>
	<tr class=\'tableau_header\'>
    <td class="titre_tab">&nbsp;&nbsp;</td>
    <td class="titre_tab">&nbsp;Reçues&nbsp;</td>
    <td class="titre_tab">&nbsp;Disponibles&nbsp;</td>
    <td class="titre_tab">&nbsp;Retour&nbsp;</td>
	</tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
  <tr class="tableau_fond0">
    <td class="gauche">&nbsp;<b>Hors guerre</b>&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($mes_attaques_recus_normale, 'bleu', 'Attaque reçue" ').'&nbsp;</td>
    <td class="centrer">&nbsp;'.affiche_etoile($recue_restante_n, 'bleu', 'Attaque pouvant être reçue" ').affiche_etoile($recue_restante_n2, 'bleu2', 'Attaque ne pouvant pas être reçue" ').'&nbsp;</td>
    <td class="centrer">&nbsp;'.print_date($temps_attaque_recu_n).'&nbsp;</td>
  </tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
  <tr class="tableau_fond1">
      <td class="gauche">&nbsp;<b>En guerre</b>&nbsp;</td>
      <td class="centrer">&nbsp;'.affiche_etoile($mes_attaques_recus_guerre, 'vert', 'Attaque reçue en guerre').'&nbsp;</td>
      <td class="centrer">&nbsp;'.affiche_etoile($recue_restante_g, 'vert', 'Attaque pouvant être reçue en guerre').affiche_etoile($recue_restante_g2, 'vert2', 'Attaque ne pouvant pas être reçue en guerre').'&nbsp;</td>
      <td class="centrer">&nbsp;'.print_date($temps_attaque_recu_g).'&nbsp;</td>
  </tr>
  <tr class="tableau_fond2"><td colspan="4"></td></tr>
</table>
<br/><br/>
<div class="ligne centrer">
<b>Vous avez actuellement '.$attaques_bonus_dispo.' attaques bonus disponibles.<br/>
	Une attaque bonus vous permet d\'attaquer hors guerre même si vous n\'avez plus d\'attaques disponibles dans la limite de 5 par jour.</b>
<br/><br/><br/>

<a href="faveurs"><font color="green">Besoin de <b>15</b> attaques en plus ?</font></a><br/><br/><br/>
'.
     affiche_etoile(1, 'rouge', 'Attaque disponible').' '.
     affiche_etoile(1, 'rouge2', 'Attaque disponible').' '.
     affiche_etoile(1, 'orange', 'Attaque disponible en guerre').' '.
     affiche_etoile(1, 'orange2', 'Attaque disponible en guerre').' '.
     affiche_etoile(1, 'violet', 'Attaque bonus disponible').' '.
     affiche_etoile(1, 'violet2', 'Attaque bonus disponible').' '.
     affiche_etoile(1, 'bleu', 'Attaque pouvant être reçue" ').' '.
     affiche_etoile(1, 'bleu2', 'Attaque pouvant être reçue" ').' '.
     affiche_etoile(1, 'vert', 'Attaque pouvant être reçue en guerre').' '.
     affiche_etoile(1, 'vert2', 'Attaque pouvant être reçue en guerre').'
</div>';
?>