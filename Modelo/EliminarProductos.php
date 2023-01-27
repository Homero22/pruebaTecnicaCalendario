
<?php 
include("../Config/conexion.php");
$codigoProd=$_REQUEST['codigo'];


$sqlComprobar="SELECT * from comprar where Cod_juguete ='$codigoProd'";
$resultado= mysqli_query($conexion,$sqlComprobar);
$mostrar1=mysqli_fetch_array($resultado);
if($mostrar1['Cod_juguete']==""){
    $sql="DELETE from productos where Código ='$codigoProd'";
    $sqr=mysqli_query($conexion,$sql);
    
    
    if($sql){
        header("location:../Vista/MostrarEliminar_Productos.php");
    }else{
        echo "Error al eliminar";
    }
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
        <center><h2>No puede eliminar al producto</h2></center>
        <center><a href="../Vista/MostrarEliminar_Productos.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}



?>