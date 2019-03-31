<?php
    session_start();
    // if($_GET) {
        
    // }
    if(($_SESSION["admin"]["admin"] == true))
    {

        include('../helpers\class.Conexion.php');

        $db = new Conexion();
        $db->charset();

        $obtenerInfo = $db->query("SELECT p.*, c.Nombre as NombreCategoria FROM producto p, categoria c order by id asc");
        if($db->rows($obtenerInfo) > 0) {

            $resProducto = $db->fetchAll($obtenerInfo);

            $producto = array(
                'data' => $resProducto
            );
            
            echo json_encode($producto);

        } else {
            echo 0;
        }        
    }
?>