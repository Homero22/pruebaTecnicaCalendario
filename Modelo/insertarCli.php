<?php

include("../Config/conexion.php");

$Cédula=$_POST['Cédula'];
$Nombre=$_POST['Nombre'];
$Apellido =$_POST['Apellido'];
$Dirección = $_POST['Dirección'];
$Teléfono = $_POST['Teléfono'];
$Edad = $_POST['Edad'];
$Correo = $_POST['Correo'];

$sql4 = "SELECT * FROM clientes WHERE Cédula = '$Cédula'";
$resultado= mysqli_query($conexion,$sql4);
$mostrar=mysqli_fetch_array($resultado);

if($mostrar['Cédula'] == $Cédula){
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
        <center><h2>Cliente ya existente</h2></center>
        <center><a href="../Vista/ingresoCli.php">Aceptar</a></center>

    </body>
    </html>
    <?php
}else{
    $sql="INSERT into clientes(Cédula, Nombre, Apellido, Dirección, Teléfono, Edad, Correo) values('$Cédula','$Nombre','$Apellido','$Dirección','$Teléfono','$Edad','$Correo')";
    $sqr=mysqli_query($conexion,$sql);
    
    if($sqr){
        header("location:../Vista/ingresoCli.php");
    }else{
        echo "Error al ingresar";
    }   
}
?>


