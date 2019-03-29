$(document).ready(function(){
  $("#btnAgregarCate").click(function(){
    $("#tablaCate").append("<tr style='border-bottom: solid;'><td style='padding: 35px 80px;'><label>Material Escolar</label></td><td style='padding: 35px 80px;'><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#confirmarEliminacion' style='width: 28%;'>Eliminar</button><button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modificarCategoria' style='width: 28%;'>Modificar</button><a class='btn btn-success' href='AdminProductos.php' role='button' style='width: 40%;'>Ver Productos</a></td></tr>");
  });
});


/*<tr style='border-bottom: solid;'><td style='padding: 35px 80px;'><label>Material Escolar</label></td><td style='padding: 35px 80px;'><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#confirmarEliminacion' style='width: 28%;'>Eliminar</button><button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modificarCategoria' style='width: 28%;'>Modificar</button><a class='btn btn-success' href='AdminProductos.php' role='button' style='width: 40%;'>Ver Productos</a></td></tr>
*/