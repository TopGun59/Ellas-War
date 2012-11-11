<?php

$jour_lune = floor(time()/(24*3600))%28+1;

//Lune noire
if($jour_lune <= 2) {
	echo '<div id="lune"><img src="images/lune/Lune.png" alt="lune" width="100px" /></div>';
}
elseif($jour_lune <= 6) {
	echo '<div id="lune"><img src="images/lune/101218114414535116.png" alt="lune" width="100px" /></div>';
}
elseif($jour_lune <= 10) {
	echo '<div id="lune"><img src="images/lune/101218114435130493.png" alt="lune" width="100px" /></div>';
}
elseif($jour_lune <= 14) {
	echo '<div id="lune"><img src="images/lune/101218114455298130.png" alt="lune" width="100px" /></div>';
}
elseif($jour_lune <= 18) {
	echo '<div id="lune"><img src="images/lune/101218114515815038.png" alt="lune" width="100px" /></div>';		
}
elseif($jour_lune <= 20) {
	echo '<div id="lune"><img src="images/lune/101218114536527221.png" alt="lune" width="100px" /></div>';
}
elseif($jour_lune <= 24) {
	echo '<div id="lune"><img src="images/lune/101218114552659855.png" alt="lune" width="100px" /></div>';
}
else {
	echo '<div id="lune"><img src="images/lune/10121811460959811.png" alt="lune" width="100px" /></div>';
}
?>