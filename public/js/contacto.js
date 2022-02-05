function Modal_mensajes(mensaje)
{
    $('#mensaje_advertencia').fadeIn(1000).html(mensaje);
    $('#mdMensajes').modal('show');
}

function ejemplo()
{
    Modal_mensajes("Se ha enviado tu mensaje");
}

$(document).ready(function(){

    $('#form_contacto').on('submit',function(e){
        e.preventDefault();
        $.ajax({
          type:'post',
          url:'send',
          data:new FormData(this),
          contentType: false,
          cache: false,
          processData:false,			
          success:function(response)
          {
              if(response.message == 'ok')
              {
                    Modal_mensajes("Se ha enviado tu mensaje");
                    window.location.href = 'contacto';

              }
              else{
                Modal_mensajes(response.message);
              }
          }
        });
    });


});