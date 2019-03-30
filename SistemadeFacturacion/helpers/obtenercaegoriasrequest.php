<?php
    session_start();
    // if($_GET) {
        
    // }
    if(($_SESSION["admin"]["admin"] == true))
    {

        include('../helpers\class.Conexion.php');

        $db = new Conexion();
        $db->charset();

        $obtenerInfo = $db->query("SELECT * FROM categoria order by id asc");
        if($db->rows($obtenerInfo) > 0) {

            $resCategoria = $db->fetchAll($obtenerInfo);

            $categoria = array(
                'data' => $resCategoria
            );
            
            echo json_encode($categoria);

        } else {
            echo 0;
        }        
    }
?>