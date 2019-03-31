<?php 
class consultaCate{
    function DatosCategoria(){
        include("conexion.php");
        $datosCate = "SELECT * FROM categoria order by Nombre asc";
        $resCate = mysqli_query($conexion,$datosCate);
        
        while($datos = mysqli_fetch_array($resCate))
        {
            echo "<a href='#' class='categorias'>".$datos['Nombre']."</a>";
        }
        mysqli_close($conexion);
    }
            
}