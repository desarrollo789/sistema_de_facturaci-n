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
                    setIdCatEliminar(element.Id_categoria);  
                    setnombreCategoria();                               
                    resp+= `                    
                        <td class="listCate1">
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                <img src="${element.Imagen}" class="card-img">
                                <div class="opciones" style="width: 100%;" align="center">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 48%;">X</button>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%;">Modificar</button>
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
var idCategoriaEliminar;
function setIdCatEliminar(id) { 
    idCategoriaEliminar=id;
 }

var NombreCategoria;
function setnombreCategoria() { 
    var id = idCategoriaEliminar;
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
