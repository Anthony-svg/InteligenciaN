<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productos.css">
    <title>InkaPelis</title>
</head>
<body>
    <main>

    <div class="contenedor" >
    <?php
        include("models/conexion.php");
        $query = "SELECT * FROM foto ";
        $resul = $conexion->query($query);
        while( $row = $resul->fetch_assoc() ){
    ?>
        <div class="contenido" > 
            <div>
                <p class="p"><?php echo $row['nombre'] ?></p>
                <img class="img" src="data:image/jpeg;base64,<?php echo base64_encode($row['foto']) ?>" alt="">
            </div>
            <div class="botones" >
                <div class="btnComprar">
                    <label for="">Cantidad:</label>
                    <input type="number" name="cantidad" placeholder="5">  
                </div>
                <div class="btnAgregar">
                    <a id="agregar" href="" type="submit" ><i>Agregar</i></a>
                </div>
                    
            </div>
        </div>
    <?php
        }    
    ?>
    </div>

    </main>
</body>
<script src="js/index.js"></script>
</html>