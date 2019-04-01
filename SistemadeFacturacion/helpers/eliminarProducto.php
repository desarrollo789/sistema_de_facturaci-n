<?php
    session_start();   
    if($_POST) {
        if(!empty($_POST["id"])){

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();

            $id = $_POST["id"];   
            $sqlVerificar = $db->query("DELETE FROM producto WHERE id = '$id'");                  
            if($sqlVerificar) {
                echo 1;
            }  
            else {
                echo 'No se pudo eliminar';
            }
        }else {
            echo "No se especifico id del producto";
        }
    }
?>