<?php

$paquet = new EwPaquet('valide_winapass', $_GET["RECALL"]);

$result = $paquet->getRetour();

if(!($result)) {
    redirect('FaveurErreur');
}

?>
    <table align='center' class="centrer_tableau" bgcolor='#e9bc7d' bordercolor='#000000'>
        <tr>
            <td>
            <div style="border:2px dotted black;padding:5px"><span style="font-size:18px;font-weight:bolder;">
        <center>Votre achat de <b>faveur</b> a bien été compté !<br><br>
        <?php
        
        if($paquet->get_statu() == 2)
        {
	        echo '<a href="/">Retour</a>';
        }
        else
        {
	        echo '<a href="Obtenir des faveurs">Retour</a>';
				}
				
				?>
        </center>
            </span></div>
            </td>
        </tr>
    </table>
