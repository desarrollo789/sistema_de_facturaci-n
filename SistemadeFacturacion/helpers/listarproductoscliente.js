$(document).ready(function () {  
    $.ajax({
        type: "GET",
        url: "helpers/SINADMINSECIONobtenerproductosrequest.php",
        dataType: "JSON",    
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#ProductosClientetr').html(error);
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
                    // var prodArray = [];
                    // prodArray = [(element.Id), (element.Nombre), (element.Descripcion), (element.Precio)];                                                                                                                                    
                    resp+= `                    
                        <td class="listCate1">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="${element.Imagen}" class="card-img">
                                    <div class="opciones" style="width: 100%;" align="center">                                
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%; margin-top: -33%" align="center"" onclick="setIdArrayProducto(${element.Id})">Comprar</button>                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">                                    
                                        <ul class="list-group list-group-flush">
                                            <li>Nombre: <label>.${element.Nombre}.</label></li>
                                            <li>Color: <label>.${element.Color}.</label></li>
                                            <li>Marca: <label>.${element.Marca}.</label></li>
                                            <li>Precio: <label>.${element.Precio}.</label> Bs</li>
                                            <li>Stock: <label>.${element.Stock}.</label></li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div> 
                        </td>
                    `;
                });
                $('#ProductosClientetr').html(resp);
            }                        
        }
    }); 
});

$(document).ready(function () {  
    $.ajax({
        type: "GET",
        url: "helpers/SINADMINSECIONobtenercategoriasrequest.php",
        dataType: "JSON",    
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#centercategorias').html(error);
            }
            else 
            {
                var productos = response.data;
                var resp ="";                
                productos.forEach(function(element) {                                                                              
                    resp+= `                                       
                        <a href="#" class="categorias" onclick="setIdCatFiltrar(${element.Id})">${element.Nombre}</a>
                    `;
                });
                $('#centercategorias').html(resp);
            }                        
        }
    }); 
});

var verObjeto;
var idCategoriaFiltrar;
function setIdCatFiltrar(id) { 
    idCategoriaFiltrar=id;
    var idsent = idCategoriaFiltrar;
    $.ajax({
        type: "POST",
        url: "helpers/SINADMINSECIONobtenerproductosrequest.php",
        data:{
            id: idsent
        },  
        dataType: "JSON",         
        success: function(response){
            if(response == 0)
            {   var error = "";
                error += `<label>no se pudo conectar</label>`;
                $('#ProductosClientetr').html(error);
            }
            else 
            {                
                var productos = response.data;
                verObjeto = productos;
                var resp ="";
                resp+=`
                    <tr style="border-bottom: solid;">
                        <td style="padding: 35px 80px;">
                            <label>PRODUCTOS</label>
                        </td>                         
                    </tr>
                `;
                productos.forEach(function(element) {                                                                               
                    resp+= `                    
                        <td class="listCate1">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="${element.Imagen}" class="card-img">
                                    <div class="opciones" style="width: 100%;" align="center">                                
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%; margin-top: -33%" align="center"" onclick="setIdArrayProducto(${element})">Comprar</button>                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">                                    
                                        <ul class="list-group list-group-flush">
                                            <li>Nombre: <label>.${element.Nombre}.</label></li>
                                            <li>Color: <label>.${element.Color}.</label></li>
                                            <li>Marca: <label>.${element.Marca}.</label></li>
                                            <li>Precio: <label>.${element.Precio}.</label> Bs</li>
                                            <li>Stock: <label>.${element.Stock}.</label></li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div> 
                        </td>
                    `;
                });
                $('#ProductosClientetr').html(resp);
            }                        
        }
    });
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
var CarroProductos = [];
function setIdArrayProducto(element)
{
    CarroProductos.push(element);    
}


$(document).on('click', '#IrFactura', function() {
    var ids = CarroProductos;
    var resp="";
    ids.forEach(function(objs) { 
        $.ajax({
            type: "POST",
            url: "helpers/getproductosfacturacion.php",
            data:{
                id: objs
            },                   
            success: function(response){  
                                
                if(response == 0)
                {
                    alert("factura error no add reliset");
                }
                else{
                    alert("factura add");
                    var productos = response.data;  
                    productos.forEach(function(element) {
                        resp+=`
                            <tr>
                                <td class="">${element.Id}</td>
                                <td class="">${element.Nombre}</td>
                                <td class="">${element.Descripcion}</td>
                                <td class="">1</td>
                                <td class="">${element.Precio}</td>
                                <td class="">13%</td>
                            </tr>
                        `;
                    });                    
                }
            }
        });
    });  
    $('#FacturacionProductos').html(resp);  
    window.location.href = "Facturacion.php";    
});
