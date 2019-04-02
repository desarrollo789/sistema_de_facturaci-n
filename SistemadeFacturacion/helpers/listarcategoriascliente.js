$(document).ready(function () {    
    $.ajax({
        type: "GET",
        url: "helpers/SINADMINSECIONobtenercategoriasrequest.php",
        dataType: "JSON",    
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#CategoriasListarCliente').html(error);
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
                                
                                <a class="btn btn-success" href="ListaProductos.php" role="button" style="width: 100%;" onclick="setIdCatEliminar(${element.Id})">Ver Productos</a>
                            </td>
                        </tr>
                    `;
                });
                $('#CategoriasListarCliente').html(resp);
            }                        
        }
    });
});