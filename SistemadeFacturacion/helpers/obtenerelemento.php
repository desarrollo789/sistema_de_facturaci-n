<?php
    session_start();   
    if($_POST) {
        if(!empty($_POST["id"]) and !empty($_POST["tabla"])){

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();

            $id = $_POST["id"];  
            $tabla =  $_POST["tabla"];
            $obtenerInfo = $db->query("SELECT * FROM $tabla WHERE id = '$id'");                  
            if($db->rows($obtenerInfo) > 0) {

                $resElemento = $db->fetchAll($obtenerInfo);
                $elemento = array(
                    'data' => $resElemento
                );                          
                echo json_encode($elemento);
            } else {
                echo 'No se pudo seleccionar';
            }        
        }else{
            echo "No se especifico id del elemento o no se especifico la tabla correspondiente";
        }
    }
?>