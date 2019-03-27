//Evento de inicio de sesion que envia a AJAX
$(document).on('click', '.btnlogin', function() {
    var usuario = $('#usuario').val();
    var password = $('#password').val();
    
    // alert('Logeado, user: ' + usuario + ' password: ' + password);
    
    $.ajax({
        type: "POST",
        url: "login.php",
        data: {
            usuario: usuario,
            password: password
        },
        success: function(response){
            if(response == 1) {
                $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Inicio de Sesion con exito</div>');
                location.href = 'inicio_admin.php';
            } else {
                $('#AJAXresponse').html('<div class="alert alert-danger" role="alert">Error: '+response+'</div>');
            }
        }
    });

});
