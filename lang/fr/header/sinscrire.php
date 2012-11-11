<?php

if(!empty($_SESSION['parrain'])) {
	echo '<title>Rejoindre '.$_SESSION['parrain']->login.' sur EllasWar.com et combattez dans l\'antiquité Grecque</title>
<meta name="description" content="Rejoignez '.$_SESSION['parrain']->login.' et des milliers d\'autres joueurs sur Ellàs War. EllasWar.Com est un jeu de stratégie en ligne gratuit au temps de l\'antiquité grecque. Construisez votre cité et votre armée pour devenir le maître de toute une civilisation." />';
}
else {
	echo '<title>S\'inscrire sur EllasWar.com Jeu de guerre multijoueurs et de stratégie en ligne gratuit sur le theme de l\'antiquité Grecque</title>
<meta name="description" content="Inscrivez-vous, rejoignez des milliers de joueurs et partez à l\'assault des autres peuples. EllasWar.Com est un jeu de stratégie en ligne gratuit au temps de l\'antiquité grecque. Construisez votre cité et votre armée pour devenir le maître de toute une civilisation." />';
}

?>