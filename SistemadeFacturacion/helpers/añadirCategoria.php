<?php
    session_start();   
    if($_POST) {
        if(!empty($_POST["nombre"])){

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();
            
            $nombre = $_POST["nombre"]; 
            $sqlVerificar = $db->query("INSERT INTO categoria (Nombre) VALUES ('$nombre')");                  
            if($sqlVerificar) {
                echo 1;
            }  
            else {
                echo 'No se pudo añadir';
            }
        }else {
            echo "No se especifico nombre de la categoria";
        }
    }
?>