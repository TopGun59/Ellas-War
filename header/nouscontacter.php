<?php
if(!empty($_POST['Contact'])) {
	$paquet = new EwPaquet('nouscontacter',
												 array($_POST['login'],$_POST['mail'],
												 			 $_POST['titre'], $_POST['message']));
}
?>