<?php    
    session_start();
    if(!empty($_POST["id"])) {      
        include('../helpers\class.Conexion.php');
        $db = new Conexion();
        $db->charset();
        $id = $_POST["id"];

        $obtenerInfo = $db->query("SELECT * FROM producto WhERE Id_categoria='$id' order by Nombre asc ");
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
    else{
        // echo 0;
        include('../helpers\class.Conexion.php');
    
        $db = new Conexion();
        $db->charset();
    
        $obtenerInfo = $db->query("SELECT * FROM producto order by Nombre asc ");
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