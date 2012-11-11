<?php

$paquet = new EwPaquet('get_mesattaques');
$retour = $paquet->getRetour();
$mes_attaques_faites_normale=$retour[0];
$faite_restante_n=$retour[1];
$faite_restante_n2=$retour[2];
$temps_attaque_faite_n=$retour[3];
$mes_attaques_faites_guerre=$retour[4];
$faite_restante_g=$retour[5];
$faite_restante_g2=$retour[6];
$temps_attaque_faite_g=$retour[7];
$mes_attaques_faites_bonus=$retour[8];
$faite_restante_b=$retour[9];
$faite_restante_b2=$retour[10];
$temps_attaque_faite_b=$retour[11];
$mes_attaques_recus_normale=$retour[12];
$recue_restante_n=$retour[13];
$recue_restante_n2=$retour[14];
$temps_attaque_recu_n=$retour[15];
$mes_attaques_recus_guerre=$retour[16];
$recue_restante_g=$retour[17];
$recue_restante_g2=$retour[18];
$temps_attaque_recu_g=$retour[19];
$attaques_bonus_dispo=$retour[20];

include('lang/'.LANG.'/include/mesattaques.php');

?>