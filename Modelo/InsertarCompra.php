<?php
    $factura=$_POST['factura'];
    $codigo=$_POST['juguete'];
    $cantidad=$_POST['cantidad'];
    include("../Config/conexion.php");
   
    echo nl2br("\n");

    $sql2 = "SELECT * FROM productos WHERE Código = '$codigo'";
    $cantidadBd =0;
    $precioProd = 0;
    $totalPago = 0;
    $totalFactura = 0;
    $resultado = mysqli_query($conexion,$sql2 );

    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <?php $cantidadBd = $mostrar['Cantidad']?>
        <?php $precioProd  = $mostrar['Precio']?>
        <?php
    }

   
    
    
    if($cantidadBd  >= $cantidad){
        $totalPago = $precioProd * $cantidad;
        $totalCantidad = $cantidadBd - $cantidad;   //descontar en la cantidad
        $actualizar = "UPDATE productos SET  Cantidad = '$totalCantidad' WHERE Código='$codigo'";
        $sqr = mysqli_query($conexion,$actualizar);
        if($sqr){
            
            header("location:../Vista/detalles.php");
        }else{
            echo "Error al guardar los cambios";
        }

    $sql = "INSERT into comprar(Cod_factura ,Cod_juguete, Cantidad, Total) values('$factura','$codigo','$cantidad', '$totalPago')";
    echo mysqli_query($conexion,$sql);

    }else{
       
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <center><img src="../publica/img/Error.svg.png" alt="" height="100" weigth="100"> </center>
            <center><h1>OCURRIÓ UN ERROR</h1></center>
            <center><h2>Stock insuficiente</h2></center>
            <center><a href="../Vista/Generar_Compra.php">Aceptar</a></center>
    
        </body>
        </html>
        <?php
    }


?>