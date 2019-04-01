<?php
    session_start();   
    if($_POST) {         
        if(!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["marka"]) and !empty($_POST["id_categoria"]) and !empty($_POST["color"]) and !empty($_POST["stock"]) 
        and !empty($_POST["longitud"]) and !empty($_POST["precio"]) and !empty($_POST["imagen"]) ){

            include("../helpers\class.Conexion.php");
            $db = new Conexion;
            $db->charset();
            
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $marka = $_POST["marka"];
            $color = $_POST["color"];
            $stock = $_POST["stock"];
            $longitud = $_POST["longitud"];
            $precio = $_POST["precio"];
            // $imagen = $_POST["imagen"];
            $imagen = "img/".$_POST["imagen"];
            // $imagen = $_FILES["imagen"];
            $id_categoria = $_POST["id_categoria"];

            $sqlVerificar = $db->query("UPDATE producto SET Nombre = '$nombre', Color = '$color', Marca = '$marka', Longitud = '$longitud', Precio = '$precio', 
            Stock = '$stock', Imagen = '$imagen', Id_categoria = '$id_categoria' WHERE Id = '$id'");                  
            if($sqlVerificar) {
                echo 1;
            }  
            else {
                echo 'No se pudo modificar';
            }
        }else {
            echo $imagen;
        }
    }
?>