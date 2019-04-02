<?php
if($_POST) {

    if(!empty($_POST["id"])) {

        include("../helpers\class.Conexion.php");
        $db = new Conexion;
        $db->charset();

        $ids = $_POST["ids"];        
                
        $obtenerInfo = $db->query("SELECT * FROM producto WHERE Id = '$element'");               
        if($db->rows($obtenerInfo) > 0) {

            $resProducto = $db->fetchAll($obtenerInfo);
            
            $producto = array(
                'data' => $resProducto
            );                                

            echo json_encode($producto);

        } else {
            echo 0;
        }                            
    } else {
        echo "Campos de Nombre de Usuario y Password necesarios";
    }
}
?>