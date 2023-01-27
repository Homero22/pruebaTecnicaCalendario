<?php
$v1=$_GET['var1'];
    if($v1==1){
        include("../Vista/IngresoProductos.php");
    }else if($v1==2){
        include("../Vista/BuscarProductos.php");
    }else if($v1==3){
        include("../Vista/MostrarEliminar_Productos.php");
    }else if($v1==4){
        include("../Vista/MostrarProductos.php");
    }
?>