(function() {
  var alertBox = document.querySelector('.done');

  $("#reservaform").on('submit', function(event) {
      event.preventDefault();

      var quantidade_passageiro = $('#quantidade_passageiros').val()

      var destino = $('#destino').val()

      var pacote = $("#pacote").val();
      var nome = $("#nome").val();
      var email = $("#email").val();
      var doc = $("#doc").val();
      var nasc = $('#data_nasc').val();

      var pacote2 = $("#pacote2").val();
      var nome2 = $("#nome2").val();
      var email2 = $("#email2").val();
      var doc2 = $("#doc2").val();
      var nasc2 = $('#data_nasc2').val();

      var pacote3 = $("#pacote3").val();
      var nome3 = $("#nome3").val();
      var email3 = $("#email3").val();
      var doc3 = $("#doc3").val();
      var nasc3 = $('#data_nasc3').val();

      var pacote4 = $("#pacote4").val();
      var nome4 = $("#nome4").val();
      var email4 = $("#email4").val();
      var doc4 = $("#doc4").val();
      var nasc4 = $('#data_nasc4').val();

      var pacote5 = $("#pacote5").val();
      var nome5 = $("#nome5").val();
      var email5 = $("#email5").val();
      var doc5 = $("#doc5").val();
      var nasc5 = $('#data_nasc5').val();

      var urlData = {};

      if(quantidade_passageiro == 2)
      {
        var urlData = {
          quantidade: quantidade_passageiro,
          destino: destino,

          // passageiro 1
          pacote: pacote,
          name: nome,
          email: email,
          doc: doc,
          // tel: tel,
          nasc: nasc,

          // passageiro 2
          pacote2: pacote2,
          name2: nome2,
          email2: email2,
          doc2: doc2,
          nasc2: nasc2
        }
      }
      else if(quantidade_passageiro == 3)
      {
        var urlData = {
          quantidade: quantidade_passageiro,
          destino: destino,

          // passageiro 1
          pacote: pacote,
          name: nome,
          email: email,
          doc: doc,
          // tel: tel,
          nasc: nasc,

          // passageiro 2
          pacote2: pacote2,
          name2: nome2,
          email2: email2,
          doc2: doc2,
          nasc2: nasc2,

          // passageiro 3
          pacote3: pacote3,
          name3: nome3,
          email3: email3,
          doc3: doc3,
          nasc3: nasc3
        }
      }
      else if(quantidade_passageiro == 4)
      {
        var urlData = {
          quantidade: quantidade_passageiro,
          destino: destino,

          // passageiro 1
          pacote: pacote,
          name: nome,
          email: email,
          doc: doc,
          // tel: tel,
          nasc: nasc,

          // passageiro 2
          pacote2: pacote2,
          name2: nome2,
          email2: email2,
          doc2: doc2,
          nasc2: nasc2,

          // passageiro 3
          pacote3: pacote3,
          name3: nome3,
          email3: email3,
          doc3: doc3,
          nasc3: nasc3,

          // passageiro 4
          pacote4: pacote4,
          name4: nome4,
          email4: email4,
          doc4: doc4,
          nasc4: nasc4
        }
      }
      else if(quantidade_passageiro == 5)
      {
        var urlData = {
          quantidade: quantidade_passageiro,
          destino: destino,

          // passageiro 1
          pacote: pacote,
          name: nome,
          email: email,
          doc: doc,
          // tel: tel,
          nasc: nasc,

          // passageiro 2
          pacote2: pacote2,
          name2: nome2,
          email2: email2,
          doc2: doc2,
          nasc2: nasc2,

          // passageiro 3
          pacote3: pacote3,
          name3: nome3,
          email3: email3,
          doc3: doc3,
          nasc3: nasc3,

          // passageiro 4
          pacote4: pacote4,
          name4: nome4,
          email4: email4,
          doc4: doc4,
          nasc4: nasc4,

          // passageiro 5
          pacote5: pacote5,
          name5: nome5,
          email5: email5,
          doc5: doc5,
          nasc5: nasc5

        }
      }
      else {
        urlData = {
          quantidade: quantidade_passageiro,
          destino: destino,

          // passageiro 1
          pacote: pacote,
          name: nome,
          email: email,
          doc: doc,
          nasc: nasc
        }
      }

      console.log('chamando pré-reserva.php');
      $.ajax({
             type: "POST",
             url: "../php/pre_reserva.php", /* endereço do script PHP */
             async: true,
             data: urlData, /* informa Url */
             beforeSend: function() { /* antes de enviar */
               $('.loading').fadeIn('slow');
             },
             success: function(data) { /* sucesso */
                $(".sucesso").removeClass("done");
             },
             error: function(data) {
                $(".erro").removeClass("done");
             },
             complete: function(){ /* completo */
               $('.loading').fadeOut('slow');
             }
         });
    });


  $("#contactform").on('submit', function(event) {
      event.preventDefault();

      var nome = $("#name").val();
      var email = $("#email").val();
      var mensagem = $("#comment").val().replace(/\n/g,"<br>");

      var urlData = {
        name: nome,
        email: email,
        comment: mensagem
      }

      console.log('chamando contato.php');

      $.ajax({
             type: "POST",
             url: "../php/contact.php", /* endereço do script PHP */
             async: true,
             data: urlData, /* informa Url */
             beforeSend: function() { /* antes de enviar */
               $('.loading').fadeIn('slow');
             },
             success: function(data) { /* sucesso */
               console.log(data);
               $(".sucesso").removeClass("done");
             },
             error: function(data) { /* falha */
               console.log(data);
               $(".erro").removeClass("done");
             },
             complete: function(){ /* completo */
               $('.loading').fadeOut('slow');
             }
         });
  });
})();
