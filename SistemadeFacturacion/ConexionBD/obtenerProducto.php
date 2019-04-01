<?php     
// $idCategoria;
$idsproducto = array();
    class consultaProd{          
        function setIdProCarro($id){
            array_push($GLOBALS['idsproducto'],$id);
        }
        // function setIdCategoria($id){
        //     $GLOBALS['idCategoria'] = $id;
        //     DatosProductosPorCategoria();
        // }
                       
        function DatosCategoria(){
            
            include("conexion.php");
            $datosCate = "SELECT * FROM categoria order by Nombre asc";
            $resCate = mysqli_query($conexion,$datosCate);
            
            while($datos = mysqli_fetch_array($resCate))
            {

                echo "<a href='#' class='categorias' onclick='setIdCategoria(".$datos['Id'].")' >".$datos['Nombre']."</a>";
            }
            mysqli_close($conexion);
        }
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
            echo"              <img src='".$datos['Imagen']."' class='card-img'>";
            echo"              <div class='opciones' style='width: 100%;' align='center'>";

            echo"                <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modificarCategoria' style='width: 100%; margin-top: -33%;' onclick='setIdProCarro(".$datos['Id'].")'>Comprar</button>";

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
        }
        function DatosProductosPorCategoria(){
            include("conexion.php");
            $cat = $GLOBALS['idCategoria'];
            $datosProd = "SELECT * FROM producto WHERE Id='$cat' order by Nombre asc";
            $resProd = mysqli_query($conexion,$datosProd);

            while($datos = mysqli_fetch_array($resProd))
            {
                /*echo "$datos[Nombre]";
                echo "$datos[Color]";*/
            echo"    <td class='listCate1'> ";
            echo"        <div class='card mb-3' style='max-width: 540px;'>";
            echo"          <div class='row no-gutters'>";
            echo"            <div class='col-md-4'>";
            echo"              <img src='".$datos['Imagen']."' class='card-img'>";
            echo"              <div class='opciones' style='width: 100%;' align='center'>";

            echo"                <button type='button' class='btn btn-dark' data-toggle='modal' data-target='#modificarCategoria' style='width: 100%; margin-top: -33%;' onclick='setIdProCarro(".$datos['Id'].")'>Comprar</button>";

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
        }                                         
    }
    
?>

<script>
    // var idCategoria;
    function setIdCategoria(id){
            <?php $GLOBALS['idCategoria'] = $id;?>
            DatosProductosPorCategoria();
        } 
</script>