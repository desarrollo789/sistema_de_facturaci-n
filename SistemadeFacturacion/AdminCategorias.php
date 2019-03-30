<?php
  session_start();
?>
<!DOCTYPE html >
<html id = AdminCategorias.php>
<var id = AdminCategorias.php></var>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Administrar Categorias</title>

     <!-- favicon.icon -->
     <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="Resources\Bootstrap CSS CDN\bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">    

    <!-- Font Awesome JS -->
    <script defer src="Resources\Awesome JS\solid.js" ></script>
    <script defer src="Resources\Awesome JS\fontawesome.js"></script>

    <!-- Our Custom JS -->
    <script defer src="anim.js"></script>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="Resources\Scrollbar Custom CSS\jquery.mCustomScrollbar.min.css">
    

    <link rel="stylesheet" type="text/css" href="Estilos/estilo2.css">
    <script defer src="jquery/AgregarHtml.js"></script>

    <style type="text/css">
        .categorias{
            display: inline-block;
            border: solid 1px;
            border-color: #1B9CBB;
            padding: 15px 15px; 
            border-radius: 10px;
            color: #1B9CBB;
        }
        .categorias:hover{
            background-color: #1B9CBB;
            color: white;

        }
    </style>
    <style type="text/css">
        #infoCant{
            width: 420px;
        }
        #infoCant #infoLabel{
            text-align: center; 
            color: #BDBDBD;
            transition: 0.2s;
            font-family: "Century Gothic";
            font-weight: bold;
            font-size: 170%;
        }
        #infoCant #infoImg{
             width: 120px;
             transition: 0.2s;
             opacity: 0.5;
        }
        #infoCant:hover #infoImg{
            width: 150px;
            transition: 0.2s;
            opacity: 1;
        }
        #infoCant:hover #infoLabel{
            color: #1B9CBB;
            transition: 0.2s;
            font-size: 175%;
        }
    </style>

</head>

<body>
    
     <!-- jQuery -->
     <script src="Resources\jQuery\jquery-1.12.4.min.js"></script>
     <!-- jQuery CDN - Full version (=with AJAX) -->
     <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <script src="Resources\Popper JS\popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="Resources\Bootstrap JS\bootstrap.min.js"></script>
    
       
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Cerrar Cesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Desea salir del modo Administrador?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a type="button" class="btn btn-primary" href="Index.php">Aceptar</a>
              </div>
            </div>
          </div>
        <!-- Modal end -->
    </div>

    <div class="modal fade" id="miPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            
        </div>
        <!-- Modal ini -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="modal-header">            
                <h3>Perfil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Icon -->
            <div class="fadeIn first" id = "logo" style="margin-top: 30px;margin-bottom: 30px;">            
                <div class="btn-group">
                    <center>
                        <img src="img\sidebar_usuario-corporativo.png" id="icon" alt="User Icon" />
                    </center>   
                </div>                                                                       
            </div>
            <!-- Login Form -->
            <form action="Perfil.php">
                <input type="text" id="Ci" class="fadeIn second" name="login" placeholder="Ci">
                <input type="text" id="Nombre" class="fadeIn second" name="login" placeholder="Nombre">
                <input type="text" id="apellP" class="fadeIn second" name="login" placeholder="Apellido Paterno">
                <input type="text" id="apellM" class="fadeIn second" name="login" placeholder="Apellido Materno" style="margin-bottom: 30px;">
                <center>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
                </center>
            </form>
        </div>
    </div>
        <!-- Modal end -->
</div>  
<div class="modal fade" id="LoginAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            
    </div>
        <!-- Modal ini -->
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="modal-header">            
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Icon -->
                <div class="fadeIn first" id = "logo" style="margin-top: 30px;margin-bottom: 30px;">                
                    <div class="btn-group">
                        <center>
                            <img src="img\sidebar_usuario-corporativo.png" id="icon"alt="User Icon" />
                        </center>   
                    </div>                                                                       
                </div>
                <!-- Login Form -->
                <form action="IndexAdmin.php">
                    <input type="text" id="text" class="fadeIn second" name="login" placeholder="Usuario">
                    <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" style="margin-bottom: 30px;">
                        
                    <input type="submit" class="fadeIn fourth" value="Aceptar" style="width: 80%;">
                </form>
            </div>
        </div>
        <!-- Modal end -->
</div>  


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" style="background-color: #1B9CBB;">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <a href="Perfil.php"><img src="img/inventario.png" width="210px" style="padding-left: 30px; padding-top: 30px;"></a>

            <br>
            <div class="sidebar-header" style="background-color: #1B9CBB;">
                <h3>Sistema de Inevtario</h3>
            </div>
            <div class="sidebar-header" style="background-color: #1B9CBB;">

                <label id="nombre">Brandon Kevin</label> <br>
                <label id="apellidoPat">Triveño</label>
                <label id="apellidoMat">Mercado</label><br>
                <button type="button" class="btn botonP" data-toggle="modal" data-target="#miPerfil">Editar Perfil</button>

            </div>
            

            <ul class="list-unstyled components" style="background-color: #1B9CBB;">
                <li>
                    <a href="IndexAdmin.php">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
            </ul>
        </nav>
    </div>
        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#miModal">
                        <i class="sign-outt"></i>
                        <span>Salir</span>
                    </button>
                </div>
            </nav>
        </div>

        

        <div id="content" style="margin-top: 120px;">
            
            <div style="margin-bottom: 70px;">
            <center>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#nuevaCategoria">Agregar Categoria</button>
                <!-- <table style="text-align: center;" id="Titulo">
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
                </table> -->
                <table style="text-align: center;" id="tablaCate">                    
                    <!-- <tr style="border-bottom: solid;">
                        <td style="padding: 35px 80px;">
                            <label>Material Escolar</label>
                        </td>                    
                        <td style="padding: 35px 80px;">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 28%;">Eliminar</button>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 28%;">Modificar</button>
                            <a class="btn btn-success" href="AdminProductos.php" role="button" style="width: 40%;">Ver Productos</a>
                        </td>
                    </tr>             -->
                    
                </table>
            </center>
            </div>
        </div>

        
        <!--<div class="overlay"></div>-->

<!--------------------------Modal para modo administrador-------------------->
<!----------------------------------------------------------------------->
   <div class="modal fade" id="LoginAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!-- Modal ini -->
        <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first" id = "logo" style="margin-top: 30px;margin-bottom: 30px;">            
                <div class="btn-group">
                    <center>
                        <img src="img\sidebar_usuario-corporativo.png" id="icon" alt="User Icon" />
                    </center>   
                </div>                                                                       
            </div>
            <!-- Login Form -->
            <form action="AdminCategorias.php">
                <input type="text" id="text" class="fadeIn second" name="login" placeholder="Usuario">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" style="margin-bottom: 30px;">
                    
                <input type="submit" class="fadeIn fourth" value="Aceptar" style="width: 80%;">
            </form>
        </div>
    </div>
        <!-- Modal end -->
    </div>


   <!---------Modal para nueva categoria--------------->
   <!-------------------------------------------------->
        <div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese un Nombre" style="text-align: left; width: 100%;">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnAgregarCate">Guardar</button>
              </div>
            </div>
          </div>
        </div>
    <!---------Modal para modificar categoria--------------->
   <!-------------------------------------------------->
        <div class="modal fade" id="modificarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modificar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div id="AJAXresponse"> aqui estoy </div>                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="NuevoNombreCategoria" placeholder="Ingrese otro Nombre" style="text-align: left; width: 100%;">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="ModificarCategoriaConfirm">Guardar</button>
              </div>
            </div>
          </div>
        </div>

    <!---------Modal para confirmar eliminacion--------------->
   <!-------------------------------------------------->
    <div class="modal fade" id="confirmarEliminacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="AJAXresponse"> aqui estoy </div>
              <div class="modal-body">
                <p>Esta seguro que desea eliminar esta categoria?. Tambien se borraran todos los productos que este contenga.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="EliminarCategoria">Aceptar</button>
              </div>
            </div>
          </div>
        </div>



    <!-- jQuery CDN - Full version (=with AJAX) -->
    <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
     <!-- jQuery Custom Scroller CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>        
     <!-- post logim request -->  
     <script src="helpers\POST.js"></script>     

</body>
<script>
// $(document).ready(function () {
//     $.ajax({
//         type: "GET",
//         url: "helpers\obtenercaegoriasrequest.php",
//         dataType: "JSON",
//         success: function (response) {
//             console.log(response);
//             {
                
//             }
//         }
//     });
    
// });

// var categoria={
//     Categorias:[
//         {
//             id:1,
//             nombre:'asd'
//         },
//         {
//             id:2,
//             nombre:'addf'
//         }
//     ]
// }

</script>
</html>

