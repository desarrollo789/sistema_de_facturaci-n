<?php
    include("conexion.php");
	
	$nit = $_POST["NitClient"];
	$nombre = $_POST["NombreClient"];
	$apellido = $_POST["ApellidoClient"];

	$agregarCli = "INSERT INTO cliente (Nit, Nombre, Apellidos) VALUES ('$nit', '$nombre', '$apellido')";
	$consultaCli = mysqli_query($conexion,$agregarCli);
	if(!$consultaCli){
		echo '<script>
				alert("Error al agregar Cliente");
				window.history.go(-1);
				</script>';
	}else{
		header("location:../AdminCliente.php");
		
	}
	mysqli_close($conexion);
?>
INSERT INTO `administrador` (`Id`, `Ci`, `Nombre`, `Apellidos`, `Usuario`, `Password`, `Admin`) VALUES (NULL, '13002558', 'Lucas Marco', 'Rodrigues Smit', 'Luma', 'Luma001', '1');