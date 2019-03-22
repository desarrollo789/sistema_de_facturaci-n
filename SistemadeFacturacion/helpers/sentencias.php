<?php
    class sentencias{
        public function ultimaId() {
            return $this->insert_id;
        }
    }
?>
<?php
    session_start();
    if($_POST) {

        if(!empty($_POST["usuario"]) and !empty($_POST["password"])) {

            $usuario = $_POST["usuario"];
            $password = $_POST["password"];

            include('../helpers/class.Conexion.php);

            $db = new Conexion();
            
            $sqlVerificar = $db->query("SELECT * FROM [dbo].[Administrador] WHERE usuario = '$usuario' AND password = '$password'");
            if($db->rows($sqlVerificar) > 0) {
                $resAdmin = $db->recorrer($sqlVerificar);
                $_SESSION["admin"] = array(
                    'id' => $resAdmin["id_administrador"],
                    'ci' => $resAdmin["ci"],                    
                    'usuario' => $resAdmin["usuario"],
                    'nombre' => $resAdmin["nombre"],
                    'apellidos' => $resAdmin["apellidos"],                    
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