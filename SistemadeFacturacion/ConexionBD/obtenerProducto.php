<?php 
class consultaProd{
    function DatosProductos(){
        include("conexion.php");
        $datosProd = "SELECT * FROM producto order by Nombre asc";
        $resProd = mysqli_query($conexion,$datosProd);

        while($datos = mysqli_fetch_array($resProd))
        {
            /*echo "$datos[Nombre]";
            echo "$datos[Color]";*/
        echo"    <td class='listCate1'> ";
        echo"        <div class='card mb-3' style='max-width: 540px;'>";
        echo"          <div class='row no-gutters'>";
        echo"            <div class='col-md-4'>";
        echo"              <img src='img/lapiceros.jpg' class='card-img'>";
        echo"              <div class='opciones' style='width: 100%;' align='center'>";

        echo"                <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modificarCategoria' style='width: 100%; margin-top: -33%;'>Agragar a Carrito</button>";

        echo"              </div>";
        echo"            </div>";
        echo"           <div class='col-md-8'>";
        echo"              <div class='card-body'>";/*
        echo"                <h5 class='card-title'>Lapiceros</h5>";*/
        echo"                <ul class='list-group list-group-flush'>";
        echo"                    <li>Nombre: <label>".$datos['Nombre']."</label></li>";
        echo"                    <li>Color: <label>".$datos['Color']."</label></li>";
        echo"                    <li>Marca: <label>".$datos['Marca']."</label></li>";
        echo"                    <li>Precio: <label>".$datos['Precio']."</label> Bs</li>";
        echo"                    <li>Stock: <label>".$datos['Stock']."</label></li>";
        echo"                </ul>";
        echo"              </div>";
        echo"            </div>";
        echo"          </div>";
        echo"        </div> ";
        echo"    </td>";
        }
        mysqli_close($conexion);
    }
    
    
    
            
}