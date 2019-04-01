<?php 
class consultaCli{
    function DatosClientes(){
        include("conexion.php");
        $datosCli = "SELECT * FROM cliente order by Nombre asc";
        $resCli = mysqli_query($conexion,$datosCli);
        $cont = 0;
        while($datos = mysqli_fetch_array($resCli))
        {
            $cont = $cont + 1;
            echo"    <div class='mdl-list__item mdl-list__item--two-line'>";
		    echo"    <span class='mdl-list__item-primary-content'>";
            echo"        <i class='zmdi zmdi-account mdl-list__item-avatar'></i>";
			echo"        <span style='padding-left: 2%;'><label>".$cont."</label><label>.&nbsp</label><label id='nombreCli'>".$datos['Apellidos']."</label>&nbsp<label id='apellidoCli'>".$datos['Nombre']."</label></span>";
            echo"          <span class='mdl-list__item-sub-title'><label style='padding-left: 10%;'>NIT:&nbsp</label>".$datos['Nit']."</span>";
		    echo"       \</span>";
	        echo"       </div>";
	        echo"       <li class='full-width divider-menu-h'></li>";
        }
        mysqli_close($conexion);
        $cont = 0;
    }
    
    
    
            
}