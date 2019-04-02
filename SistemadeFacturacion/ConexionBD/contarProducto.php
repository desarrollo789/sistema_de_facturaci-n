<?php
	class consultaContarProd{
	function DatosContarProd(){
        include("conexion.php");
        $datosContarProd = "SELECT COUNT(*) AS cantidad FROM producto";
        $resContarProd = mysqli_query($conexion,$datosContarProd);
		$datos = mysqli_fetch_array($resContarProd);
		echo $datos['cantidad'];
        mysqli_close($conexion);
    }
}