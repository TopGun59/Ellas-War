<?php

include('../header.php');

setcookie('token', '', 0, '/', $_SERVER['HTTP_HOST']);
setcookie('temps', '', 0, '/', $_SERVER['HTTP_HOST']);
$paquet = new EwPaquet('deco');
  
?>