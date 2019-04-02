<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Control de Inventario</title>
        
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
        <script src="Resources\jQuery\jquery-1.12.4.min.js"></script>
        <!-- jQuery CDN - Full version (=with AJAX) -->
        <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- Popper.JS -->
        <script src="Resources\Popper JS\popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="Resources\Bootstrap JS\bootstrap.min.js"></script>
        
        
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
                        <div id="AJAXresponse"> aqui estoy </div>
                        <form action="IndexAdmin.php">
                            <input type="text" id="usuario" class="fadeIn second" name="login" placeholder="Usuario">
                            <input type="password" id="password" required class="fadeIn second" name="password" placeholder="password" style="margin-bottom: 30px;">                        
                            <input type="button" id="btnlogin" class="fadeIn fourth" value="Aceptar" style="width: 80%;">
                            <!-- <input type="submit" class="fadeIn fourth" value="Aceptar" style="width: 80%;"> -->
                            
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
                    <h3>Sistema de Inventario</h3>
                

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

        <div id="content" style="margin-top: 80px;">     
            <!-- Bootply snippet - factura_files -->
            <!-- <link href="./Bootply snippet - factura_files/bootstrap.min.css" rel="stylesheet">                           -->
            <!-- <center> -->
                <!-- container ini() -->
                <div id="FacturaStyle" class="container">
                    <div class="text-center">
                        <h1>Factura</h1>
                    </div>

                    <div class="row" style="border-bottom: solid">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <h3 class="panel-title">Cabecera</h3> -->
                                    <hr>
                                    <div class="row" style="background-color:green;">
                                        
                                        <div class="col-md-4" style="background-color:white;">
                                            <div class="form-group">
                                                <label for="cliente" class="col-sm-2 control-label">Cliente</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="cliente" placeholder="cliente" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 target" style="background-color:white;">
                                            <div class="form-group">
                                                <label for="nit" class="col-sm-3 control-label">Nit</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="nit" type="text" placeholder="nit">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 target" style="background-color:white;">
                                            <div class="form-group">
                                            
                                                <label for="fecha" class="col-sm-10 control-label">Fecha factura</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="fecha" placeholder="fecha factura" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 target" style="background-color:white;">
                                            <div class="form-group">
                                                <label for="id" class="col-sm-3 control-label">Id</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="id" type="text" placeholder="id">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div> <!-- row -->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <address>
                                            <strong class="">Bazar Nora</strong><br class="">
                                                Casa Matriz: Avenida San Martin n°362, ZONA/BARRIO CENTRAL<br class="">
                                                TELEFONOS: 4228266-68524253<br class="">
                                                "COCHABAMBA-BOLIVIA"<br class="">                          
                                            </address>
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- panel heading -->
                                <div class="panel-body">
                                    <h3 class="panel-title">Detalle</h3>
                                
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="">Id</th>
                                                <th class="">Nombre</th>
                                                <th class="">Descripción</th>
                                                <th class="">Cantidad</th>
                                                <th class="">Precio</th>                                                
                                                <th class="">Importe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="">001</td>
                                                <td class="">Doe moe</td>
                                                <td class="">12.00</td>
                                                <td class="">100.00</td>
                                                <td class="">Reducido 7%</td>
                                                <td class="">1200.00</td>
                                            </tr>
                                            <tr>
                                                <td class="">002</td>
                                                <td class="">Doe moe TURURU</td>
                                                <td class="">10.00</td>
                                                <td class="">1000.00</td>
                                                <td class="">Normal 18%</td>
                                                <td class="">10000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- panel body -->
                                <div class="panel-footer"><B>Sumary:</B>  
                                    <br>
                                    <table class="table table-condensed">
                                        <tr>
                                            <th class="" rowspan="2"><B>ImporteTotal:</B></th>
                                            <td class="">100.00</td>
                                            <th class=""><B>Importe Valido para Credito Fiscal:</B></th>
                                            <td class="">15.00</td>
                                            <th class=""><B>Impuesto:</B></th>
                                            <td class="">13%</td>
                                        </tr>
                                        
                                    </table>                                                                      
                                </div>
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- row -->                    
                    <div class="row text-center">
                        <table class="tablaCate">
                            <tr>
                                <td style="padding: 35px 80px;">
                                    <p class=""><B>Sistema de Facturacion Tareas:</B></p>                                    
                                </td>
                                <td style="padding: 35px 80px;">                                    
                                    <a class="btn btn-success" href="AdminProductos.php" role="button" style="width: 100%;">GuardarFactura</a>
                                </td>
                                <td style="padding: 35px 80px;">                                    
                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modificarCategoria" style="width: 100%;">Imprimir</button>
                                </td>
                            </tr>
                        </table>
                    </div>                                     
                </div>    
                <!-- container -->
            <!-- </center>               -->
        </div>
            <!--<div class="overlay"></div>-->
        <!-- jQuery CDN - Full version (=with AJAX) -->
        <script src="Resources\jQuery CDN - Full version (=with AJAX)\jquery3.3.1.js" ></script>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- Popper.JS -->
        <script src="Resources\Popper JS\popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="Resources\Bootstrap JS\bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="Resources\jQuery Custom Scroller CDN\jquery.mCustomScrollbar.concat.min.js"></script>
        <script src = "factura anim.js"></script>                
        <link href = "factura style.css">
        <!-- post logim request -->  
        <script src="helpers\POST.js"></script>
        <!-- <script>
            $("FacturaStyle").css({
                "background-color": "black",
                "color": "red",
                "padding": "5px" /* la última linia sin coma */
            });
        </script>       -->
        <!-- <script>
            $(document).ready(function () {
            $('#FacturaStyle').load('./Temp.php');
            });
        </script> -->

    </body>

</html>

