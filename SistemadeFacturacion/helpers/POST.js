//src="../SistemadeFacturacion/Resources/jQuery CDN - Slim version/jquery-3.3.1.slim.min.js";
//Evento de inicio de sesion que envia a AJAX
$(document).on('click', '#btnlogin', function() {
    var usuario = $('#usuario').val();
    var password = $('#password').val();
    // alert('Logeado, user: ' + usuario + ' password: ' + password);
    // $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Inicio de Sesion con exito</div>');
 
    $.ajax({
        type: "POST",
        url: "helpers/login.php",
        data: {
            usuario: usuario,
            password: password            
        },
        success: function(response){                                              
            if(response == 1) {
                $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Inicio de Sesion con exito</div>');
                // location.reload();
            } else {
                $('#AJAXresponse').html('<div class="alert alert-danger" role="alert">Error: '+response+'</div>');
            }
        }
    }).done(function(){
        window.setTimeout( function(){
            window.location.href = "IndexAdmin.php";
        }, 3000); 
    });
});
$(document).on('click', '#btnlogout', function() {
    window.location.href = "helpers\loguot.php";
});