<?php 
class consultaUser{
    function DatosUsuario(){
        include("conexion.php");
        $datosUser = "SELECT * FROM administrador";
        $resUser = mysqli_query($conexion,$datosUser);
        $cont = 0;
        while($datos = mysqli_fetch_array($resUser))
        {
            $cont = $cont + 1;
            echo"	<div class='mdl-list__item mdl-list__item--five-line'>";
			echo"		<span class='mdl-list__item-primary-content'>";
			echo"			<i class='zmdi zmdi-account mdl-list__item-avatar'></i>";
			echo"			<span style='padding-left: 2%;'><label>".$cont."</label><label>.&nbsp</label><label id='nombreCli'>".$datos['Nombre']."</label>&nbsp<label id='apellidoCli' style='padding-left: 20px;'>".$datos['Apellidos']."</label></span>";
			echo"			<span style='padding-left: 2%;'><strong><label id='nombreCli' style='border-bottom: solid 1px;'>Nombre Usuario</label></strong>&nbsp<label id='apellidoCli'>".$datos['Usuario']."</label></span>";
			echo"			<span style='padding-left: 2%;'><strong><label id='nombreCli' style='border-bottom: solid 1px;'>Password</label></strong>&nbsp<label id='apellidoCli'>".$datos['Password']."</label></span>";
			echo"			<span style='padding-left: 2%; padding-right: 5%;'><strong><label id='nombreCli' style='border-bottom: solid 1px;'>CI</label></strong>&nbsp<label id='apellidoCli'>".$datos['Ci']."</label></span>";
			echo"		</span>";
			echo"		<td>";
			echo"		   <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmarEliminacion' style='width: 15%;'>Eliminar</button>";
			echo"		   <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modificarCategoria' style='width: 15%;'>Modificar</button>";
			echo"		</td>";
			echo"	</div>";
			echo"	<li class='full-width divider-menu-h'></li>";
        }
        mysqli_close($conexion);
        $cont = 0;
    }       
}

