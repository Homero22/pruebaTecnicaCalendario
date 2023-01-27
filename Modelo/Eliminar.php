
<?php 
include("../Config/conexion.php");
$idUsuario=$_REQUEST['Cédula'];

$sqlComprobar="SELECT * from factura where Cédula='$idUsuario'";
$resultado= mysqli_query($conexion,$sqlComprobar);
$mostrar1=mysqli_fetch_array($resultado);
if($mostrar1['Cédula']==""){
    $sql="DELETE from clientes where Cédula='$idUsuario'";
    $sqr=mysqli_query($conexion,$sql);
    if($sql){
        header("location:../Vista/Mostrar_Eliminar.php");
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
        <center><h2>No puede eliminar al cliente</h2></center>
        <center><a href="../Vista/Mostrar_Eliminar.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}
?>