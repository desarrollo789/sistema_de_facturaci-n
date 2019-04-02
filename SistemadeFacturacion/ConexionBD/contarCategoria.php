<?php 
class consultaContarCat{
    function DatosContarCat(){
        include("conexion.php");
        $datosContarCat = "SELECT COUNT(*) AS cantidad FROM categoria";
        $resContarCat = mysqli_query($conexion,$datosContarCat);
		$datos = mysqli_fetch_array($resContarCat);
		echo $datos['cantidad'];
        mysqli_close($conexion);
    }
	
}