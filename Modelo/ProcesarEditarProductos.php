<?php
include("../Config/conexion.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$categoria =$_POST['categoria'];
$cantidad= $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$actualizar="UPDATE  productos set Nombre ='$nombre', Cod_categoria ='$categoria', Cantidad='$cantidad', Descripción='$descripcion', Precio='$precio' where Código ='$codigo'";
$sqr =  mysqli_query($conexion,$actualizar);
if($sqr){
    //header("location:../index.html");
    header("location:../Vista/MostrarEliminar_Productos.php");
}else{
    echo "Error al guardar los cambios";
}
?>
