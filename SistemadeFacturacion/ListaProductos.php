<?php
    // include("ConexionBD/obtenerProducto.php");
    // $conexion = new consultaProd();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Lista de Productos</title>
    <!-- favicon.icon -->
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="Resources\Bootstrap CSS CDN\bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">    

    <!-- Font Awesome JS -->
    <script defer src="Resources\Awesome JS\solid.js"></script>
    <script defer src="Resources\Awesome JS\fontawesome.js"></script>

    <!-- Our Custom JS -->
    <script defer src="anim.js"></script>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="Resources\Scrollbar Custom CSS\jquery.mCustomScrollbar.min.css">
    

    <link rel="stylesheet" type="text/css" href="Estilos/estilo2.css">
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
    <script src="Resources\jQuery CDN - Slim version (=without AJAX)\jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="Resources\Popper JS\popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="Resources\Bootstrap JS\bootstrap.min.js"></script>
    
       
<div class="container">
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
                    <a href="Index.php">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="AdminCategorias.php" data-toggle="modal" data-target="#LoginAdmin">
                        <i class="fas fa-briefcase"></i>
                        Administrar
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
                </div>
            </nav>
        </div>

        <div id="content" style="margin-top: 120px;margin-bottom: 70px;">
            <div style="">
            <center id="centercategorias" >
               <?php                    
                    // $conexion->DatosCategoria();                    
                ?>
                <!--<a href="#" class="categorias">Todos</a>
                <a href="#" class="categorias">Utiles de Cocina</a>
                <a href="#" class="categorias">Utiles de Cocina</a>-->
            </center>
            </div>
        </div>

        <div id="content" style="margin-top: 230px; padding-left: 10%;">
        <nav>
            <table class="tablaCate">
                <tr id="ProductosClientetr">
                   <?php
                        // include("ConexionBD/obtenerProducto.php");
                        // $conexion = new consultaProd();
                        // $conexion->DatosProductos();
                    ?>
                    
                </tr>
            </table>
        </nav>
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
            <!-- <form action="AdminCategorias.php">
                <input type="text" id="text" class="fadeIn second" name="login" placeholder="Usuario">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" style="margin-bottom: 30px;">
                    
                <input type="submit" class="fadeIn fourth" value="Aceptar" style="width: 80%;">
            </form> -->
        </div>
    </div>
        <!-- Modal end -->
    </div>

    <!-- jQuery CDN - Full version (=with AJAX) -->
    <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <!-- <script src="Resources\jQuery CDN - Slim version (=without AJAX)\jquery-3.3.1.slim.min.js"></script> -->
     <!-- Popper.JS -->
     <script src="Resources\Popper JS\popper.min.js"></script>
     <!-- Bootstrap JS -->
     <script src="Resources\Bootstrap JS\bootstrap.min.js"></script>
     <!-- jQuery Custom Scroller CDN -->
     <script src="Resources\jQuery Custom Scroller CDN\jquery.mCustomScrollbar.concat.min.js"></script>
     <!-- post ProductosRescate request -->  
     <script src="helpers\listarproductoscliente.js"></script>        

</body>

</html>
