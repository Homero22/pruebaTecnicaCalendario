<?php

$p1=$_GET['rep'];
if($p1==1){
    include("../Modelo/Reportes/Reporte1.php");
}else if($p1==2){
    include("../Modelo/Reporte2.php");
}else if($p1==3){
    include("../Modelo/Reportes/Reporte3.php");
}else if($p1==4){
    include("../Modelo/Reportes/Reporte4.php");
}else if($p1==5){
    include("../Modelo/Reportes/Reporte5.php");
}else if($p1==6){
    include("../Modelo/Reportes/Reporte6.php");
}else if($p1==7){
    include("../Modelo/Reportes/Reporte7.php");
}
?>