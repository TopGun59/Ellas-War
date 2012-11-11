<br/><br/>
<table width="100%">
<tr>
	<td class="centrer"><a href="CarreMagique"><img src="images/jeux/carre_150.png" alt="Carré magique" title="Carré magique" /></a></td>

	<td class="centrer"><a href="Ticket"><img src="images/jeux/ticket_150.png" alt="Ticket à gratter" title="Ticket à gratter" /></a></td>
<?php
	if($paquet->getlvl() == 1) {
	  echo '</tr><tr>';
	}
	echo '
	<td class="centrer"><a href="#" onclick="window.open(\'form/parcour.php\',\'Chasse aux trésors\',\'toolbar=0, location=0, directories=0, status=0, scrollbars=1, resizable=0, copyhistory=0, menuBar=0, width=850, height=710\');" class="centre_armee"><img src="images/jeux/chasse_150.png" alt="Chasse au trésor" title="Chasse au trésor" /></a></td>';

	if($paquet->getlvl() != 1) {
    echo '</tr>';
  }
  else {
    echo '	<td class="centrer"><a href="Loto"><img src="images/jeux/loto_150.png" alt="Loto" title="Loto" /></a></td>
</tr>';
  }
  
	if($paquet->getlvl() > 1) {
		echo '<tr><td colspan="3">&nbsp;</td></tr>
<tr>
	<td class="centrer"><a href="Javelot"><img src="images/jeux/javelot_150.png" alt="Javelot" title="Javelot" /></a></td>
	
	<td class="centrer"><a href="Des"><img src="images/jeux/des_150.png" alt="Jeux de dés" title="Jeux de dés" /></a></td>
	
	<td class="centrer"><a href="Loto"><img src="images/jeux/loto_150.png" alt="Loto" title="Loto" /></a></td>
</tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr>
	<td class="centrer"><a href="BataillesNavales"><img src="images/jeux/btn_150.png" alt="Batailles navales" title="Batailles navales" /></a></td>
	
	<td class="centrer"><a href="Biges"><img src="images/jeux/biges_150.png" alt="Biges" title="Biges" /></a></td>

	<td class="centrer"><a href="Quadriges"><img src="images/jeux/quadriges_150.png" alt="Quadriges" title="Quadriges" /></a></td>
</tr>';
	}
echo '</table>';

?>