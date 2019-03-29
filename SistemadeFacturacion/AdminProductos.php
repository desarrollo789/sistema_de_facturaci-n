<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Administrar Productos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">    

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Our Custom JS -->
    <script defer src="anim.js"></script>
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    

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
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
       
<div class="container">
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
                <button type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#confirmarElimProduc">Aceptar</button>
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
                        <img src="../SistemadeFacturacion/img/sidebar_usuario-corporativo.png" id="icon" alt="User Icon" />
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
                            <img src="../SistemadeFacturacion/img/sidebar_usuario-corporativo.png" id="icon"alt="User Icon" />
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
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#nuevaCategoria">Agregar producto</button>
            </center>
            <a class="btn btn-info" href="AdminCategorias.php" role="button">Volver a Categorias</a>
            </div>
        </div>

        <div  id="content" style="margin-top: 230px; padding-left: 10%;">
        <nav>
            <table class="tablaCate" align="center">
                <tr>
                    <td colspan="4">
                        
                    </td>
                </tr>
                <tr >
                    <td class="listCate1">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/cintas.jpg" class="card-img">
                              <div class="opciones" style="width: 100%;" align="center">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 48%;">X</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%;">Modificar</button>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Marcador de agua</label></li>
                                    <li>Color: <label>Negro</label></li>
                                    <li>Marca: <label>Faber Castell</label></li>
                                    <li>Precio: <label>5</label> Bs</li>
                                    <li>Stock: <label>50</label></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </td>

                    <td class="listCate1">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/cintas.jpg" class="card-img">
                              <div class="opciones" style="width: 100%;" align="center">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 48%;">X</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%;">Modificar</button>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Marcador de agua</label></li>
                                    <li>Color: <label>Negro</label></li>
                                    <li>Marca: <label>Faber Castell</label></li>
                                    <li>Precio: <label>5</label> Bs</li>
                                    <li>Stock: <label>50</label></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </td>

                    <td class="listCate1">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/cintas.jpg" class="card-img">
                              <div class="opciones" style="width: 100%;" align="center">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 48%;">X</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 48%;">Modificar</button>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Marcador de agua</label></li>
                                    <li>Color: <label>Negro</label></li>
                                    <li>Marca: <label>Faber Castell</label></li>
                                    <li>Precio: <label>5</label> Bs</li>
                                    <li>Stock: <label>50</label></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div> 
                    </td>
                    

                    
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
                        <img src="../SistemadeFacturacion/img/sidebar_usuario-corporativo.png" id="icon" alt="User Icon" />
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

<!---------Modal para nuevo producto--------------->
   <!-------------------------------------------------->
        <div class="modal fade" id="nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione una iamgen</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre del Producto" style="text-align: left; width: 100%;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Marca" style="text-align: left; width: 100%;">
                    </div>
                    <div class="row">
                        <div class="col">
                         <input type="text" class="form-control" placeholder="Color" style="text-align: left; width: 100%;">
                        </div>
                        <div class="col">
                         <label for="exampleInputStock">Stock</label>
                         <input type="number" class="form-control" placeholder="Stock" style="text-align: left; width: 100%;" min="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                         <label for="exampleInputPrecio">Precio</label>
                         <input type="number" class="form-control" placeholder="Precio" style="text-align: left; width: 100%;" min="0">
                        </div>
                        <div class="col">
                         <label for="exampleInputLongitud">Longitud</label>
                         <input type="number" class="form-control" placeholder="Logitud" style="text-align: left; width: 100%;" min="0">
                        </div>
                    </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
        </div>

    <!---------Modal para modificar producto--------------->
   <!-------------------------------------------------->
        <div class="modal fade" id="modificarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modificar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione una iamgen</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre del Producto" style="text-align: left; width: 100%;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Marca" style="text-align: left; width: 100%;">
                    </div>
                    <div class="row">
                        <div class="col">
                         <input type="text" class="form-control" placeholder="Color" style="text-align: left; width: 100%;">
                        </div>
                        <div class="col">
                         <label for="exampleInputStock">Stock</label>
                         <input type="number" class="form-control" placeholder="Stock" style="text-align: left; width: 100%;" min="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                         <label for="exampleInputPrecio">Precio</label>
                         <input type="number" class="form-control" placeholder="Precio" style="text-align: left; width: 100%;" min="0">
                        </div>
                        <div class="col">
                         <label for="exampleInputLongitud">Longitud</label>
                         <input type="number" class="form-control" placeholder="Logitud" style="text-align: left; width: 100%;" min="0">
                        </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Esta seguro que desea eliminar este Producto?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary"data-dismiss="modal" data-toggle="modal" data-target="#confirmarElimProduc">Aceptar</button>
              </div>
            </div>
          </div>
        </div>

 <!---------Modal para confirmar eliminacion del producto--------------->
   <!-------------------------------------------------->
    <div class="modal fade" id="confirmarElimProduc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Producto Eliminado</p>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
              </div>
            </div>
          </div>
        </div>




     <!-- jQuery CDN - Slim version (=without AJAX) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <!-- Popper.JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <!-- Bootstrap JS -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
     <!-- jQuery Custom Scroller CDN -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>        

</body>

</html>
