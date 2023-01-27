<?php

include("../Config/conexion.php");
$cedula=$_POST['Cédula'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$direccion=$_POST['Dirección'];
$telefono=$_POST['Teléfono'];
$edad=$_POST['Edad'];
$correo=$_POST['Correo'];

$actualizar="UPDATE clientes set Cédula='$cedula', Nombre='$nombre',Apellido='$apellido', Dirección='$direccion', Teléfono='$telefono', Edad='$edad', Correo='$correo' where Cédula='$cedula'";
$sqr=mysqli_query($conexion,$actualizar);
if($sqr){
    /*header("location:../index.html");*/
    header("location:../Vista/Mostrar_Eliminar.php");
}else{
    echo "Error al guardar los cambios";
}
?>