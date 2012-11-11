$(function(){
  $(".bloc_armurerie").hide();

  $(".minititre_armurerie").click( function() {
    $(".bloc_armurerie").hide("slow");
  });
  
  $("#h_infanterie_cac").click( function() {
    $("#bloc_amurerie_1").show("slow");
  });
  
  $("#h_cavalerie_cac").click( function() {
    $("#bloc_amurerie_2").show("slow");
  });
  
  $("#h_infanterie_dis").click( function() {
    $("#bloc_amurerie_3").show("slow");
  });
  
  $("#h_cavalerie_dis").click( function() {
    $("#bloc_amurerie_4").show("slow");
  });
  
  $("#m_infanterie_cac").click( function() {
    $("#bloc_amurerie_5").show("slow");
  });
  
  $("#m_cavalerie_cac").click( function() {
    $("#bloc_amurerie_6").show("slow");
  });
  
  $("#m_infanterie_dis").click( function() {
    $("#bloc_amurerie_7").show("slow");
  });
  
  $("#m_cavalerie_dis").click( function() {
    $("#bloc_amurerie_8").show("slow");
  });
});
