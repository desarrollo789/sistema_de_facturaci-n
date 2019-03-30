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
    window.location.href = "helpers/loguot.php";
});

$(document).ready(function () {    
    $.ajax({
        type: "GET",
        url: "helpers/obtenercaegoriasrequest.php",
        dataType: "JSON",    
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#tablaCate').html(error);
            }
            else 
            {
                var categorias = response.data;
                var resp ="";
                resp+=`
                    <tr style="border-bottom: solid;">
                        <td style="padding: 35px 80px;">
                            <label>ID</label>
                        </td> 
                        <td style="padding: 35px 80px;">
                            <label>CATEGORIA</label>
                        </td>                    
                        <td style="padding: 35px 80px;">
                            <label>ACCION</label>
                        </td>
                    </tr>
                `;
                categorias.forEach(function(element) {
                    resp+= `                    
                        <tr style="border-bottom: solid; id="Categoria${element.Id}">
                            <td style="padding: 35px 80px;">
                                <label>"${element.Id}"</label>
                            </td> 
                            <td style="padding: 35px 80px;">
                                <label>"${element.Nombre}"</label>
                            </td>                    
                            <td style="padding: 35px 80px;">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 28%;"  onclick="setIdCatEliminar(${element.Id})" >Eliminar</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 28%;"  onclick="setIdCatEliminar(${element.Id})" >Modificar</button>
                                <a class="btn btn-success" href="AdminProductos.php" role="button" style="width: 40%;">Ver Productos</a>
                            </td>
                        </tr>
                    `;
                });
                $('#tablaCate').html(resp);
            }                        
        }
    });
});
$(document).on('click', '#EliminarCategoria', function() {
    var id = idCategoriaEliminar;
    $.ajax({
        type: "POST",
        url: "helpers/eliminarCategoria.php",
        data: {
            id: id                        
        },
        success: function(response){                                      
            if(response == 1) {
                $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Eliminado con exito</div>');                
            } else {
                $('#AJAXresponse').html('<div class="alert alert-danger" role="alert">Error: '+response+'</div>');
            } 
        }
    }).done(function(){
        window.setTimeout( function(){
            location.reload();
        }, 3000); 
    });
});


$(document).on('click', '#ModificarCategoriaConfirm', function() {
    var id = idCategoriaEliminar;
    var nombre = $('#NuevoNombreCategoria').val();
    $.ajax({
        type: "POST",
        url: "helpers/modificarCategoria.php",
        data: {
            id: id,
            nombre: nombre                      
        },
        success: function(response){                                      
            if(response == 1) {
                $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Modificado con exito</div>');                
            } else {
                $('#AJAXresponse').html('<div class="alert alert-danger" role="alert">Error: '+response+'</div>');
            } 
        }
    }).done(function(){
        window.setTimeout( function(){
            location.reload();
        }, 3000); 
    });
});


var idCategoriaEliminar;
function setIdCatEliminar(id) { 
    idCategoriaEliminar=id;
 }