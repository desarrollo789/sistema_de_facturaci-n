<?php
    session_start();   
    if($_POST) {
        if(!empty($_POST["id"]) and !empty($_POST["nombre"])){

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();

            $id = $_POST["id"];
            $nombre = $_POST["nombre"]; 
            $sqlVerificar = $db->query("UPDATE categoria SET Nombre = '$nombre' WHERE Id = '$id'");                  
            if($sqlVerificar) {
                echo 1;
            }  
            else {
                echo 'No se pudo modificar';
            }
        }else {
            echo "No se especifico id de la categoria";
        }
    }
?>