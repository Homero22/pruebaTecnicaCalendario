<?php

$v1=$_GET['var1'];
    if($v1==1){
        include("../Vista/Clientes/main.php");
    }else if($v1==2){
        include("../Vista/Productos/main.php");
    }else if($v1==3){
        include("../Vista/main.php");
    }else if($v1==4){
        include("../Vista/Reportes.php");
    }else if($v1==5){
        include("../Vista/AcercaDe.html");
    }
?>