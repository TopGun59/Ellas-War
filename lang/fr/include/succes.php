<?php

if(empty($_GET['var1']) or !is_numeric($_GET['var1'])) {

	echo '<h1>Points de succès : <span class="rouge_goco">'.$total.'</span></h1>';

  echo '<br/>
  <div class="ligne">
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_1">
          <div class="progress-bar2 blue">
          </div>
        </div>
        <div class="progress-bar-txt">Général '.$me_cat[1].'/'.$hf_cat[1].'</div>
      </div>
    </div>
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_2">
          <div class="progress-bar2 rouge">
          </div>
        </div>
        <div class="progress-bar-txt">Bâtiments '.$me_cat[2].'/'.$hf_cat[2].'</div>
      </div>
    </div>
  </div>
  <div class="ligne">
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_3">
          <div class="progress-bar2 vert">
          </div>
        </div>
        <div class="progress-bar-txt">Alliance '.$me_cat[3].'/'.$hf_cat[3].'</div>
      </div>
    </div>
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_5">
          <div class="progress-bar2 jaune">
          </div>
        </div>
        <div class="progress-bar-txt">Attaques '.$me_cat[5].'/'.$hf_cat[5].'</div>
      </div>
    </div>
  </div>
  <div class="ligne">
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_6">
          <div class="progress-bar2 gris">
          </div>
        </div>
        <div class="progress-bar-txt">Mythologie '.$me_cat[6].'/'.$hf_cat[6].'</div>
      </div>
    </div>
    <div class="cadre_50">
      <div class="progress-bar">
        <div class="progress-bar3" id="bar_hf_8">
          <div class="progress-bar2 orange">
          </div>
        </div>
        <div class="progress-bar-txt">?</div>
      </div>
    </div>
  </div>
  ';
}

?>