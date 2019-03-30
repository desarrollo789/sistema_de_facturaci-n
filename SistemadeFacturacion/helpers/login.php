
<?php
    session_start();   
    if($_POST) {

        if(!empty($_POST["usuario"]) and !empty($_POST["password"])) {

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();

            $usuario = $_POST["usuario"];
            $password = $_POST["password"];

                 
            
            
            $sqlVerificar = $db->query("SELECT * FROM administrador WHERE Usuario = '$usuario' AND Password = '$password'");               
            if($db->rows($sqlVerificar) > 0) {
                $resAdmin = $db->recorrer($sqlVerificar);
                $_SESSION["admin"] = array(
                    'id' => $resAdmin["Id"],
                    'ci' => $resAdmin["Ci"],  
                    'nombre' => $resAdmin["Nombre"],                                      
                    'apellidos' => $resAdmin["Apellidos"],
                    'usuario' => $resAdmin["Usuario"],
                    'password' => $resAdmin["Password"],
                    'admin' => $resAdmin["Admin"]               
                );               
                echo 1;

            } else {
                echo 'Credenciales incorrectos';
            }

        } else {
            echo "Campos de Nombre de Usuario y Password necesarios";
        }

    }

?>