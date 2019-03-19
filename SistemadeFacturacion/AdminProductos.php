<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Control de Inventario</title>

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
        <div class="modal-dialog" role="document">
            
        </div>
        <!-- Modal ini -->
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <div class="modal-header">            
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Icon -->
                <div class="fadeIn first" id = logo>            
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">
                                <img src="../SistemadeFacturacion/img/sidebar_usuario-corporativo.png" id="icon" alt="User Icon" />
                            </button>     
                        </div>                                                                       
                </div>
                <!-- Login Form -->
                <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>
        <!-- Modal end -->
    </div>
</div>    


    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="Index.php">
                        <i class="fas fa-home"></i>
                        Perfil
                    </a>
                </li>
                <li>
                    <a href="ListaCategorias.php">
                        <i class="fas fa-briefcase"></i>
                        Categorias
                    </a>
                    <a href="#pageSubmenu">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>
    
        <!-- Page Content -->
        <div id="content">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
                        Abrir modal
                    </button>
                </div>
            </nav>
        </div>

        <center>
        <div class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 100px">
            <table class="tablaCate">
                <tr>
                    <td colspan="4">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#nuevaCategoria">Agregar producto</button>
                    </td>
                </tr>
                <tr >
                    <td class="listCate2">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/cintas.jpg" class="card-img">
                              <div class="opciones2">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion">X</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria">Modificar</button>
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

                    <td class="listCate2">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/lapiceros.jpg" class="card-img">
                              <div class="opciones2">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion">X</button>
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria">Modificar</button>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Lapiz</label></li>
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

                    <td class="listCate2">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/lapiceros.jpg" class="card-img">
                              <div class="opciones2">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion">X</button>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria">Modificar</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Lapiz</label></li>
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

                    <td class="listCate2">
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="img/lapiceros.jpg" class="card-img">
                              <div class="opciones2">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion">X</button>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria">Modificar</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">Lapiceros</h5>
                                <ul class="list-group list-group-flush">
                                    <li>Nombre: <label>Lapiz</label></li>
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
        </div>
        </center>
        <!--<div class="overlay"></div>-->
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
                <button type="button" class="btn btn-primary">Aceptar</button>
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
