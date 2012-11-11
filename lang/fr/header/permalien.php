<?php

if(is_numeric($res_permalien) && $res_permalien == 0){
	echo '<title>Cette archive est privée</title>
	<meta name="description" content="Cette archive est privée. Partagez vos exploits avec vos amis et invitez les à jouer sur Ellàs War." />';
}
elseif(is_numeric($res_permalien) && $res_permalien == 1) {
	echo '<title>Cette archive n\'existe pas</title>
	<meta name="description" content="Cette archive n\'existe pas. Partagez vos exploits avec vos amis et invitez les à jouer sur Ellàs War." />';
}
else {
	echo '<title>'.strip_tags($res_permalien->titre).'</title>
	<meta name="description" content="'.$res_permalien->titre.'. Partagez vos exploits avec vos amis et invitez les à jouer sur Ellàs War." />';
}

?>
