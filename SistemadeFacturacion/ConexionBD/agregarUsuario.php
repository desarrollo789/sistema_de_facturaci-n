<?php
    include("conexion.php");
	
	$ci = $_POST["ciUser"];
	$nombre = $_POST["nombreUser"];
	$apellido = $_POST["apellidoUser"];
	$user = $_POST["usuarioUser"];
	$passsword = $_POST["passwordUser"];
	$permiso = $_POST["permisoUser"];
	

	$agregarUser = "INSERT INTO administrador (Ci, Nombre, Apellidos, Usuario, Password, Admin) VALUES ('$ci', '$nombre', '$apellido','$user','$passsword','$permiso')";
	$consultaUser = mysqli_query($conexion,$agregarUser);
	if(!$consultaUser){
		echo '<script>
				alert("Error al agregar Usuario");
				window.history.go(-1);
				</script>';
	}else{
		header("location:../AdminUsuario.php");
		
	}
	mysqli_close($conexion);
?>