<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>administrador</title>

     <!-- favicon.icon -->
     <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Our Custom JS -->
    <script defer src="anim.js"></script>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    

    <link rel="stylesheet" type="text/css" href="Estilos/estilo2.css">

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
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <!-- jQuery CDN - Full version (=with AJAX) -->
     <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
    <!-- jQuery CDN - Slim version (=without AJAX)
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
       
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
                <a type="button" id= "btnlogout" class="btn btn-primary" href="Index.php">Aceptar</a>
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
                    <input type="password" id="password" class="fadeIn second" name="password" placeholder="password" style="margin-bottom: 30px;">
                        
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

            <a href="IndexAdmin.php"><img src="img/inventario.png" width="210px" style="padding-left: 30px; padding-top: 30px;"></a>

            <br>
            <div class="sidebar-header" style="background-color: #1B9CBB;">
                <h3>Sistema de Inventario</h3>
            </div>
            <div class="sidebar-header" style="background-color: #1B9CBB;">
                <?php
                  // if(!isset($_SESSION["usuario"])) {
                  //   echo '<li><a href="#nombre" class="login logearsePOP" title="Iniciar Sesión">Iniciar Sesión</a></li>';
                  //   echo '<label id="nombre">$_SESSION["usuario"]</label> <br>';

                  // }
                ?>
                <?php 	if(isset($_SESSION["admin"])): ?>
                  <label id="nombre"><?=$_SESSION["admin"]["nombre"]?></label> <br>
                  <label id="apellidoPat"><?=$_SESSION["admin"]["apellidos"]?></label><br>                 
                  <button type="button" class="btn botonP" data-toggle="modal" data-target="#miPerfil">Editar Perfil</button>                
                <?php 	else: ?>
                  <label id="nombre">Brandon Kevin</label> <br>
                  <label id="apellidoPat">Triveño</label>
                  <label id="apellidoMat">Mercado</label><br>
                  <button type="button" class="btn botonP" data-toggle="modal" data-target="#miPerfil">Editar Perfil</button>
                <?php 	endif; ?>

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

        <div id="content" style="margin-top: 80px; padding-left: 20%;">
            <h1 style="margin-top: 20px;margin-bottom: 40px; font-family: Century Gothic">Panel de Administracion</h1>
        <nav>
            <table class="tablaCate">
                <tr >
                    <td class="listCate1">
                        <a href="AdminCategorias.php">
                        <div class="card mb-10" id="infoCant">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="img/etiqueta.png" class="card-img" id="infoImg">
                            </div>
                            <div class="col-md-7" style="padding-top: 40px;">
                              <div class="card-body">
                                <h5 class="card-title" id="infoLabel">Administrar<label>Categorias</label></h5>
                                <h5 class="card-title" id="infoLabel">Total: <label><?php
                                    										     include("ConexionBD/contarCategoria.php");
                                    										     $conexion = new consultaContarCat();
                                    										     $conexion->DatosContarCat();
                                    										 ?></label></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                        </a> 
                    </td>

                    <td class="listCate1">
                        <a href="AdminProductos.php">
                        <div class="card mb-10" id="infoCant">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="img/productos.png" class="card-img" id="infoImg">
                            </div>
                            <div class="col-md-7" style="padding-top: 40px;">
                              <div class="card-body">
                                <h5 class="card-title" id="infoLabel">Administrar<label>Productos</label></h5>
                                <h5 class="card-title" id="infoLabel">Total: <label><?php
                                    										     include("ConexionBD/contarProducto.php");
                                    										     $conexion = new consultaContarProd();
                                    										     $conexion->DatosContarProd();
                                    										 ?></label></h5>
                              </div>
                            </div>
                          </div>
                        </div> 
                        </a>
                    </td>

                    <td class="listCate1">
                    <a href="AdminCliente.php">
                        <div class="card mb-10" id="infoCant">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="img/clientes.png" class="card-img" id="infoImg">
                            </div>
                            <div class="col-md-7" style="padding-top: 40px;">
                              <div class="card-body">
                                <h5 class="card-title" id="infoLabel">Administrar<label>Clientes</label></h5>
                                <h5 class="card-title" id="infoLabel">Total: <label><?php
                                    										     include("ConexionBD/contarCliente.php");
                                    										     $conexion = new consultaContarClie();
                                    										     $conexion->DatosContarClie();
                                    										 ?></label></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                    </a> 
                    </td>

                    <td class="listCate1">
                        <div class="card mb-10" id="infoCant">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="img/ventas.png" class="card-img" id="infoImg">
                            </div>
                            <div class="col-md-7" style="padding-top: 40px;">
                              <div class="card-body">
                                <h5 class="card-title" id="infoLabel">Administrar<label>Ventas</label></h5>
                                <h5 class="card-title" id="infoLabel">Total: <label></label></h5>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </td>

                    <td class="listCate1">
                       <a href="AdminUsuario.php">
                        <div class="card mb-10" id="infoCant">
                          <div class="row no-gutters">
                            <div class="col-md-5">
                              <img src="img/admin.png" class="card-img" id="infoImg">
                            </div>
                            <div class="col-md-7" style="padding-top: 40px;">
                              <div class="card-body">
                                <h5 class="card-title" id="infoLabel">Administrar<label>Usuarios</label></h5>
                                <h5 class="card-title" id="infoLabel">Total: <label><?php
                                    										     include("ConexionBD/contarUsuario.php");
                                    										     $conexion = new consultaContarUser();
                                    										     $conexion->DatosContarUser();
                                    										 ?></label></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                       </a>
                    </td>
                </tr>
            </table>
        </nav>
        </div>
        <!--<div class="overlay"></div>-->
     <!-- jQuery CDN - Full version (=with AJAX) -->
     <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
     <!-- jQuery CDN - Slim version (=without AJAX)
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
     <!-- jQuery Custom Scroller CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> 
     <!-- post logim request -->  
     <script src="helpers\POST.js"></script>         

</body>

</html>
