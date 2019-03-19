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
                <h3>Administrador de Inventario</h3>
            </div>
    
            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active">
                    <a href="Index.php">Inicio</a>
                </li>
                <li>
                    <a href="ListaCategorias.php">Categorias</a>
                </li>
                <li>
                    <a href="#">Portafolio</a>
                </li>
                <li>
                    <a href="#">Contactos</a>
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
        <div class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 100px; position: static;">
        	<table class="tablaCate">
        		<tr >
        			<td class="listCate1">
			        	<div class="card" style="width: 18rem;">
							<img src="img/escolar.png" class="card-img-top" width="350px"; height="200px">
							<ul class="list-group list-group-flush">
							  	<center>
							  	<li class="list-group-item"><a href="ListaProductos.php" class="btn btn-primary">Escolares</a></li>
							  	</center>
							</ul>
						</div>  
        			</td>

        			<td class="listCate1">
			        	<div class="card" style="width: 18rem;">
							 <img src="img/cocina.jpg" class="card-img-top" width="350px"; height="200px">
							 <ul class="list-group list-group-flush">
							 	<center>
							 	<li class="list-group-item"><a href="#" class="btn btn-primary">Utiles de Cocina</a></li>
							 	</center>
							 </ul>
						</div>
        			</td>
        			<td class="listCate1">
			        	<div class="card" style="width: 18rem;">
							 <img src="img/cocina.jpg" class="card-img-top" width="350px"; height="200px">
							 <ul class="list-group list-group-flush">
							 	<center>
							 	<li class="list-group-item"><a href="#" class="btn btn-primary">Utiles de Cocina</a></li>
							 	</center>
							 </ul>
						</div>
        			</td>
        			<td class="listCate1">
			        	<div class="card" style="width: 18rem;">
							 <img src="img/cocina.jpg" class="card-img-top" width="350px"; height="200px">
							 <ul class="list-group list-group-flush">
							 	<center>
							 	<li class="list-group-item"><a href="#" class="btn btn-primary">Utiles de Cocina</a></li>
							 	</center>
							 </ul>
						</div>
        			</td>
        			<td class="listCate1">
			        	<div class="card" style="width: 18rem;">
							 <img src="img/cocina.jpg" class="card-img-top" width="350px"; height="200px">
							 <ul class="list-group list-group-flush">
							 	<center>
							 	<li class="list-group-item"><a href="#" class="btn btn-primary">Utiles de Cocina</a></li>
							 	</center>
							 </ul>
						</div>
        			</td>
        		</tr>
        	</table>
        </div>
        </center>
        <!--<div class="overlay"></div>-->
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