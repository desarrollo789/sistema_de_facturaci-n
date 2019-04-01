$(document).ready(function () {    
    $.ajax({
        type: "GET",
        url: "helpers/obtenerproductosrequest.php",
        dataType: "JSON",    
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#productocontenidolist').html(error);
            }
            else 
            {
                var productos = response.data;
                var resp ="";
                resp+=`
                    <tr style="border-bottom: solid;">
                        <td style="padding: 35px 80px;">
                            <label>PRODUCTOS</label>
                        </td>                         
                    </tr>
                `;
                productos.forEach(function(element) {      
                    setIdCatNombre(element.Id_categoria);  
                    setnombreCategoria();                               
                    resp+= `                    
                        <td class="listCate1">
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="${element.Imagen}" class="card-img">
                                <div class="opciones" style="width: 100%;" align="center">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 48%;" onclick="setIdCatEliminar(${element.Id})">X</button>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%;" onclick="setIdCatEliminar(${element.Id})">Modificar</button>
                                </div>
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${element.NombreCategoria}</h5>
                                    <ul class="list-group list-group-flush">
                                        <li>Nombre: <label>${element.Nombre}</label></li>
                                        <li>Color: <label>${element.Color}</label></li>
                                        <li>Marca: <label>${element.Marca}</label></li>
                                        <li>Precio: <label>${element.Precio}</label> Bs</li>
                                        <li>Stock: <label>${element.Stock}</label></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div> 
                        </td>
                    `;
                });
                $('#productocontenidolist').html(resp);
            }                        
        }
    });
});
$(document).on('click', '#ModificarProductoConfirm', function() {
    var id = idCategoriaEliminar;
    var nombre = $('#NuevoNombreProducto').val();
    var marka = $('#NuevoMarkaProducto').val();
    var id_categoria = $('#NuevoCategoriaProducto').val();
    var color = $('#NuevoColorProducto').val();
    var stock = $('#NuevoStockProducto').val();
    var longitud = $('#NuevoLongitudProducto').val();
    var precio = $('#NuevoPrecioProducto').val();
    // var imagen = "hola";
    // var imagen = document.getElementById("#NuevoImagenProducto");
    var imagen = $('#NuevoImagenProducto')[0].files[0].name;
    // var imagen = $_FILES[document.getElementById("#NuevoImagenProducto")];
    $.ajax({
        type: "POST",
        url: "helpers/modificarProducto.php",
        data: {            
            id: id,
            nombre: nombre,
            marka: marka,
            id_categoria: id_categoria,
            color: color,
            stock: stock,
            longitud: longitud,
            precio: precio,
            imagen: imagen                      
        },
        success: function(response){                                      
            if(response == 1) {
                $('#AJAXresponse').html('<div class="alert alert-success" role="alert">Modificado con exito</div>');
                window.setTimeout( function(){
                    location.reload();
                }, 3000);                         
            } else {
                $('#AJAXresponse').html('<div class="alert alert-danger" role="alert">Error: '+response+'</div>');
            } 
        }
     
    });
});

$(document).on('click', '#EliminarProductoConfirm', function() {
    var id = idCategoriaEliminar;
    $.ajax({
        type: "POST",
        url: "helpers/eliminarProducto.php",
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




var idCategoriaEliminar;
function setIdCatEliminar(id) { 
    idCategoriaEliminar=id;
 }

 var idCategoriaNombre;
function setIdCatNombre(id) { 
    idCategoriaNombre=id;
 }
var NombreCategoria;
function setnombreCategoria() { 
    var id = idCategoriaNombre;
    var tabla = 'categoria';
    $.ajax({
        type: "POST",
        url: "helpers/obtenerelemento.php",
        data: {
            id: id,
            tabla: tabla                 
        },
        dataType: "JSON",
        success: function(response){
            var categoria = response.data;
            categoria.forEach(function(element) { 
                NombreCategoria = element.Nombre;
            });
        }                                               
    });
}
