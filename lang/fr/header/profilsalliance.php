<?php

if(!is_numeric($all)) {
	echo '<title>'.$all->nom.' dirigée par '.$all->chef.' EllasWar.com Jeu de guerre multijoueurs et de stratégie en ligne gratuit sur le theme de l\'antiquité grecque</title>
	<meta name="description" content="Présentation de l\'alliance .'.$all->nom.' d\'Ellàs War dirigée par '.$all->chef.'. Elle a été créée le '.date('d/m/y', $all->date).' par '.$all->createur.' et elle comporte '.$all->nbmembre.' membres. Bienvenue sur Ellás War. Inscrivez-vous et partez à l\'assault des autres peuples. EllasWar.Com est un jeu de stratégie en ligne gratuit au temps de l\'antiquité grecque. Construisez votre cité et votre armée pour devenir le maître de toute une civilisation." />';
}
else {
		echo '<title>Cette alliance n\'existe pas. EllasWar.com Jeu de guerre multijoueurs et de stratégie en ligne gratuit sur le theme de l\'antiquité grecque</title>
	<meta name="description" content="Cette alliance n\'existe pas. Revenez à la liste des alliances et reessayez de consulter le profil de l\'alliance que vous cherchiez. Inscrivez-vous et partez à l\'assault des autres peuples. EllasWar.Com est un jeu de stratégie en ligne gratuit au temps de l\'antiquité grecque. Construisez votre cité et votre armée pour devenir le maître de toute une civilisation." />';
}

?>
