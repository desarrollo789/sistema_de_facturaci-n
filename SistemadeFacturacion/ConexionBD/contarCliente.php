<?php
	class consultaContarClie{
	function DatosContarClie(){
        include("conexion.php");
        $datosContarClie = "SELECT COUNT(*) AS cantidad FROM cliente";
        $resContarClie = mysqli_query($conexion,$datosContarClie);
		$datos = mysqli_fetch_array($resContarClie);
		echo $datos['cantidad'];
        mysqli_close($conexion);
    }
}