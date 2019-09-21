var calendar;
document.addEventListener('DOMContentLoaded', function () {
    var calendario = document.getElementById('calendar');

        calendar = new FullCalendar.Calendar(calendario, {
        locale: 'pt-br',
        plugins: ['interaction', 'dayGrid'],
        editable: true,
        eventLimit: true,
        events: '../view/viewAjaxCardapio.php',
        extraParams: function () {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function (info) {
            info.jsEvent.preventDefault(); 
            dia = String(info.event.start.getDate()).padStart(2, '0');
            mes = String(info.event.start.getMonth() + 1).padStart(2, '0');
            ano = info.event.start.getFullYear();

            $("#tituloE").text("Visualizar cardápio do dia " + dia + "/" + mes + "/" + ano);

            id = info.event.id;
            $("#idE").val(id);

            principal = info.event.extendedProps.principal;
            $("#principalE").val(principal);

            guarnicao = info.event.extendedProps.guarnicao;
            $("#guarnicaoE").val(guarnicao);

            acompanhamento = info.event.extendedProps.acompanhamento;
            $("#acompanhamentoE").val(acompanhamento);

            salada = info.event.extendedProps.salada;
            $("#saladaE").val(salada);

            bebida = info.event.extendedProps.bebida;
            $("#bebidaE").val(bebida);

            sobremesa = info.event.extendedProps.sobremesa;
            $("#sobremesaE").val(sobremesa);

            $('#visualizar').modal('show');
        },
        selectable: true,
        select: function (info) {
            //EVENTO AO CLICAR EM UM DIA (CADASTRAR CARDAPIO)
            $('#cadastrar').modal('show');
            dataAux = info.startStr;
            // $('.modal .modal-dialog .modal-content .modal-body #principal').val(dataAux);
            $("#datax").val(dataAux);
            data2 = dataAux.split("-");
            ano = data2[0];
            mes = data2[1];
            dia = data2[2];
            $("#titulo").text("Adicionar cardápio do dia " + dia + "/" + mes + "/" + ano);

        }
    });

    calendar.render();
});

$(document).ready(function(){
    $('#btnCadCardapio').click(function(){
      var dados = $('#formCadCardapio').serializeArray();
      $body = $("body");
      $body.addClass("loading");
      $.ajax({
        type:"POST",
        url:"../Controller/CardapioController.php",
        data:dados,
        success: function(result){
            if(result == 1){
                $body.removeClass("loading");
                calendar.refetchEvents();
                alerta("glyphicon glyphicon-warning-sign", "Cardápio cadastrado com sucesso!", "success");
                $('#cadastrar').modal('hide'); 
                $("#formCadCardapio")[0].reset();  
            }
            else{
                $body.removeClass("loading");
                calendar.refetchEvents();
                alerta("glyphicon glyphicon-warning-sign", "Erro ao cadastrar cardápio!", "danger");
                $('#cadastrar').modal('hide');
                $("#formCadCardapio")[0].reset();
            }
        }
      });
      return false;
    });
  });





  $(document).ready(function(){
    $('#btnEditCardapio').click(function(){
      var dados = $('#formEditCardapio').serializeArray();
      $body = $("body");
      $body.addClass("loading");
      $.ajax({
        type:"POST",
        url:"../Controller/CardapioController.php",
        data:dados,
        success: function(result){
          if(result == 1){
            $body.removeClass("loading");
            calendar.refetchEvents();
            alerta("glyphicon glyphicon-warning-sign", "Cardápio atualizado com sucesso!", "success");
            $('#visualizar').modal('hide'); 
            $("#formEditCardapio")[0].reset();  
            
          }else{
            $body.removeClass("loading");
            calendar.refetchEvents();
            alerta("glyphicon glyphicon-warning-sign", "Erro ao atualizar cardápio!", "danger");
            $('#visualizar').modal('hide');
            $("#formEditCardapio")[0].reset();
          }
        }
      });
      return false;
    });
  });


  $(document).ready(function() {
    $('#btnDeleteCardapio').click(function(e) {
      e.preventDefault();
        idx = ($('#idE').val());
        Swal.fire({
          title: 'Tem certeza?',
          text: "Você não conseguirá reaver este cardápio depois!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonText: 'Cancelar',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, deletar!',
          allowOutsideClick: false
            })
            .then((deletex) => {
                if (deletex.value) {
                  $body = $("body");
                  $body.addClass("loading");
                    $.ajax({
                        type: "POST",
                        url: "../Controller/CardapioController.php",
                        data: {
                            acao: "excluir",
                            id: idx
                        },
                        success: function(result) {
                            if (result == 1) {
                                $body.removeClass("loading");
                                calendar.refetchEvents();
                                alerta("glyphicon glyphicon-warning-sign", "Cardápio excluído com sucesso!", "success");
                                $('#visualizar').modal('hide'); 
                            } else {
                              $body.removeClass("loading");
                              calendar.refetchEvents();
                              alerta("glyphicon glyphicon-warning-sign", "Erro ao excluir o cardápio!", "danger");
                              $('#visualizar').modal('hide');

                            }
                        }
                    });
                }
                
            });
    });
});
  




  function alerta(icon, message, type){
    $.notify({
        // options
        icon: icon,
        message: message,

    },{
        // settings
        element: 'body',
        position: null,
        type: type,
        allow_dismiss: true,
        newest_on_top: true,
        showProgressbar: false,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 3000,
        timer: 1000,
        url_target: '_blank',
        mouse_over: null,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        },
        onShow: null,
        onShown: null,
        onClose: null,
        onClosed: null,
        icon_type: 'class',
        
    });
  }