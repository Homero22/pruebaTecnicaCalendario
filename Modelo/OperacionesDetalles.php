<?php
    $codigo=$_POST['codigoCompra'];
    include("../Config/conexion.php");
   
    //Consulta para extraer la cantidad de la tabla comprar
    $sql2 = "SELECT * FROM comprar WHERE Cod_factura = '$codigo'";
    $totalFactura =0;
    $resultado = mysqli_query($conexion,$sql2 );

    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
        <?php $total = $mostrar['Total']?>
        <?php $totalFactura = $totalFactura + $total ?>
        <?php
    }

    echo "Total Factura: ", $totalFactura;

 

     $sql3 = "UPDATE factura SET Total = '$totalFactura' WHERE Cod_factura = ' $codigo'";
     $sql4 = mysqli_query($conexion,$sql3);

    if($sql4){
        header("location:../Vista/MostrarFactura.php");
    }else{
        echo "Error al procesar datos";
    }

?>