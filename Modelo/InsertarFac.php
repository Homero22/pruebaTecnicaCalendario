<?php
    $cedula=$_POST['cedula'];
    $fecha=$_POST['fecha'];

    include("../Config/conexion.php");
    $sql = "INSERT into factura(Cédula ,Fecha) values('$cedula','$fecha')";
    $sql2 =  mysqli_query($conexion,$sql);
    if($sql2){
        header("location:../Vista/Generar_Compra.php");
    }else{
        echo "Error al procesar datos";
    }
?>

