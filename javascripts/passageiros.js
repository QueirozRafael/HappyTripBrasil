(function() {
  $("#passageiro2").hide();
  $("#passageiro3").hide();
  $("#passageiro4").hide();
  $("#passageiro5").hide();

  $("#quantidade_passageiros").change(function() {
      $("#passageiro2").hide();
      $("#passageiro3").hide();
      $("#passageiro4").hide();
      $("#passageiro5").hide();

      $(".nome").attr('required', false);
      $(".email").attr('required', false);
      $(".doc").attr('required', false);
      $(".data_nasc").attr('required', false);

      var quantidade = $('#quantidade_passageiros').val();

      if(quantidade > 1) {
        $("#passageiro2").show();
        $("#nome2").attr('required', true);
        $("#email2").attr('required', true);
        $("#doc2").attr('required', true);
        $("#data_nasc2").attr('required', true);
      }
      if(quantidade > 2) {
        $("#passageiro3").show();
        $("#nome3").attr('required', true);
        $("#email3").attr('required', true);
        $("#doc3").attr('required', true);
        $("#data_nasc3").attr('required', true);
      }
      if(quantidade > 3) {
        $("#passageiro4").show();
        $("#nome4").attr('required', true);
        $("#email4").attr('required', true);
        $("#doc4").attr('required', true);
        $("#data_nasc4").attr('required', true);
      }
      if(quantidade > 4) {
        $("#passageiro5").show();
        $("#nome5").attr('required', true);
        $("#email5").attr('required', true);
        $("#doc5").attr('required', true);
        $("#data_nasc5").attr('required', true);
      }
  })
})();
