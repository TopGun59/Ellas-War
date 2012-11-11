<?php

if(!empty($_GET['var1'])) {
	$cook = 0;
  if(!empty($_COOKIE['moi'])) {
  	$cook = 1;
  }
  setcookie('moi', 42, (time() + 3600*24), 
						'/', $_SERVER['HTTP_HOST']);
	$paquet = new EwPaquet('soutien', array($_GET['var1']));
	$j = $paquet -> getRetour();
}

if(empty($j)) {
	redirect();
}

?>