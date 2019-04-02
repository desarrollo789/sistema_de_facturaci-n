<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>AdminUsuario</title>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<!--<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>-->
	<script src="js/main.js" ></script>

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
                <li>
                    <a href="index2.php" data-toggle="modal" data-target="#LoginAdmin">
                        <i class="fas fa-briefcase"></i>
                        Contactanos
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
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewClient" class="mdl-tabs__tab is-active">Registrar Usuario</a>
				<a href="#tabListClient" class="mdl-tabs__tab">Lista De Usuarios</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop mdl-cell--2-offset-desktop" style="padding-left: 15%;">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Usuario
							</div>
							<div class="full-width panel-content">
								<form method="post" action="ConexionBD/agregarUsuario.php">
									<h5 class="text-condensedLight">Datos del Usuario </h5>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="nombreUser" name="nombreUser">
										<label class="mdl-textfield__label" for="NameClient">NOMBRE</label>
										<span class="mdl-textfield__error">Nombre Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="apellidoUser" name="apellidoUser">
										<label class="mdl-textfield__label" for="NameClient">APELLIDO</label>
										<span class="mdl-textfield__error">Apellido Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="ciUser" name="ciUser">
										<label class="mdl-textfield__label" for="NameClient">CI</label>
										<span class="mdl-textfield__error">CI Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="usuarioUser" name="usuarioUser">
										<label class="mdl-textfield__label" for="NameClient">NOMBRE USUARIO</label>
										<span class="mdl-textfield__error">Usuario Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="passwordUser" name="passwordUser">
										<label class="mdl-textfield__label" for="NameClient">PASSWORD</label>
										<span class="mdl-textfield__error">Password Invalido</span>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="number" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="permisoUser" name="permisoUser" max="1" min="0">
										<label class="mdl-textfield__label" for="NameClient">PERMISOS DE ADMINISTRADOR</label>
										<span class="mdl-textfield__error">Permiso Invalido</span>
									</div>
									<div class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addClient">Agregar Usuario</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel" id="tabListClient">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista De Usuarios
							</div>
							<div class="full-width panel-content">
								<div class="mdl-list">
									<?php
                                        include("ConexionBD/obtenerUsuario.php");
                                        $conexion = new consultaUser();
                                        $conexion->DatosUsuario();
                                    ?>
									<!--<div class="mdl-list__item mdl-list__item--five-line">
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
											<span style="padding-left: 2%;"><label>1</label><label>.&nbsp</label><label id="nombreCli">esteban leopoldo</label>&nbsp<label id="apellidoCli" style="padding-left: 20px;">Trivelo Mercado</label></span>
											<span style="padding-left: 2%;"><strong><label id="nombreCli" style="border-bottom: solid 1px;">Nombre Usuario</label></strong>&nbsp<label id="apellidoCli">Marco</label></span>
											<span style="padding-left: 2%;"><strong><label id="nombreCli" style="border-bottom: solid 1px;">Password</label></strong>&nbsp<label id="apellidoCli">Trimer001</label></span>
											<span style="padding-left: 2%; padding-right: 5%;"><strong><label id="nombreCli" style="border-bottom: solid 1px;">CI</label></strong>&nbsp<label id="apellidoCli">13002525</label></span>
										</span>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmarEliminacion" style="width: 15%;">Eliminar</button>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modificarCategoria" style="width: 15%;">Modificar</button>
                                        </td>
                                 	</div>
									<li class="full-width divider-menu-h"></li>-->
							</div>
						</div>
						
					</div>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Modificar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre a modificar" style="text-align: left; width: 100%;">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese apellido a modificar" style="text-align: left; width: 100%;">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nuevo nombre de usuario" style="text-align: left; width: 100%;">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nuevo password" style="text-align: left; width: 100%;">
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nuevo Carnet" style="text-align: left; width: 47.3%;" min="0">
                        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nuevo permiso" style="text-align: left; width: 47.3%;" min="0" max="1">
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Esta seguro que desea eliminar este Usuario?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="overlay"></div>-->

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