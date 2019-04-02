<?php
	class consultaContarUser{
	function DatosContarUser(){
        include("conexion.php");
        $datosContarUser = "SELECT COUNT(*) AS cantidad FROM administrador";
        $resContarUser = mysqli_query($conexion,$datosContarUser);
		$datos = mysqli_fetch_array($resContarUser);
		echo $datos['cantidad'];
        mysqli_close($conexion);
    }
}