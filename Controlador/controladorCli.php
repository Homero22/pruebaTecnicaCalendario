<?php
$v1=$_GET['var1'];
    if($v1==1){
        include("../Vista/ingresoCli.php");
    }else if($v1==2){
        include("../Vista/Buscar.php");
    }else if($v1==3){
        include("../Vista/Mostrar.php");
    }else if($v1==4){
        include("../Vista/Mostrar_Eliminar.php");
    }else if($v1==5){
        include("../Modelo/Reporte1.php");
    }else if($v1==7){
        include("../Vista/MenuLateral.php");
    }
?>