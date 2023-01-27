<?php
$ven=$_GET['ventas'];
    if($ven==1){
        include("../Vista/IngresarFactura.php");
    }else if($ven==2){
        include("../Vista/Generar_Compra.php");
    }else if($ven==3){
        include("../Vista/detalles.php");
    }else if($ven==4){
        include("../Vista/MostrarFactura.php");
    }else if($ven==5){
        include("../Vista/MostrarCompras.php");
    }else if($ven==6){
        include("../Vista/MostrarDetalles.php");
    }
?>