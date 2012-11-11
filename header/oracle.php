<?php

if(!empty($_POST['candidat']) && is_numeric($_POST['candidat'])) {
	$paquet = new EwPaquet('voter_oracle', array($_POST['candidat']));
}
elseif(!empty($_POST['programme'])) {
	$paquet = new EwPaquet('candidater', array($_POST['programme']));
}
else {
	$paquet = new EwPaquet('info_oracle');
}

?>